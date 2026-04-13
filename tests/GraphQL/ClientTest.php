<?php

namespace ThothApi\Tests\GraphQL;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Client;
use ThothApi\Tests\GraphQL\Concerns\HasClientMutationTests;
use ThothApi\Tests\GraphQL\Concerns\HasClientQueryTests;
use ThothApi\Tests\GraphQL\Concerns\HasClientSchemaSyncTests;

final class ClientTest extends TestCase
{
    use HasClientMutationTests;
    use HasClientQueryTests;
    use HasClientSchemaSyncTests;

    private MockHandler $mockHandler;

    private Client $client;

    protected function setUp(): void
    {
        $this->mockHandler = new MockHandler();
        $handler = HandlerStack::create($this->mockHandler);
        $this->client = new Client(['handler' => $handler]);
    }

    public function testRunRawQuery(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'books' => [
                    'fullTitle' => 'My book title',
                    'doi' => 'https://doi.org/10.123435/12345678',
                    'publications' => [],
                    'contributions' => []
                ]
            ]
        ])));

        $query = <<<GQL
        books(order: {field: PUBLICATION_DATE, direction: ASC}) {
            fullTitle
            doi
            publications {
                    publicationType
                    isbn
            }
            contributions {
                    contributionType
                    fullName
            }
        }
        GQL;

        $args = [];

        $result = $this->client->rawQuery($query, $args);

        $this->assertSame([
            'books' => [
                'fullTitle' => 'My book title',
                'doi' => 'https://doi.org/10.123435/12345678',
                'publications' => [],
                'contributions' => []
            ]
        ], $result);
    }
}
