<?php

namespace ThothApi\Tests\GraphQL;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Client;
use ThothApi\GraphQL\Enums\Direction;
use ThothApi\GraphQL\Enums\WorkField;
use ThothApi\GraphQL\Queries\WorksQuery;

final class ClientTest extends TestCase
{
    public function testExecuteSendsOperationArgumentsAsVariables(): void
    {
        $mockHandler = new MockHandler();
        $container = [];
        $handler = HandlerStack::create($mockHandler);
        $handler->push(Middleware::history($container));
        $client = new Client(['handler' => $handler]);

        $mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'works' => [],
            ],
        ])));

        $client->execute(WorksQuery::operation([
            'limit' => 1,
            'order' => [
                'field' => WorkField::PUBLICATION_DATE,
                'direction' => Direction::ASC,
            ],
        ], ['workId']));

        $body = json_decode((string) $container[0]['request']->getBody(), true);

        $this->assertSame(
            'query ($limit: Int, $order: WorkOrderBy) {' . "\n"
                . '    works(limit: $limit, order: $order) {' . "\n"
                . '        workId' . "\n"
                . '    }' . "\n"
                . '}',
            $body['query']
        );
        $this->assertSame([
            'limit' => 1,
            'order' => [
                'field' => 'PUBLICATION_DATE',
                'direction' => 'ASC',
            ],
        ], $body['variables']);
    }
}
