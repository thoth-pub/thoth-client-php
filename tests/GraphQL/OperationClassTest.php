<?php

namespace ThothApi\Tests\GraphQL;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Mutations\CreatePublisherMutation;
use ThothApi\GraphQL\OperationRequest;
use ThothApi\GraphQL\Queries\BooksQuery;

final class OperationClassTest extends TestCase
{
    public function testQueryClassCreatesOperationRequest(): void
    {
        $operation = BooksQuery::operation(['limit' => 1], ['workId']);

        $this->assertInstanceOf(OperationRequest::class, $operation);
        $this->assertSame('books', BooksQuery::field()->getName());
        $this->assertStringContainsString('books(limit: $limit)', $operation->toGraphQL());
        $this->assertSame(['limit' => 1], $operation->getVariables());
    }

    public function testMutationClassCreatesOperationRequest(): void
    {
        $operation = CreatePublisherMutation::operation([
            'data' => [
                'publisherName' => 'ACME Press',
            ],
        ], ['publisherId']);

        $this->assertInstanceOf(OperationRequest::class, $operation);
        $this->assertSame('createPublisher', CreatePublisherMutation::field()->getName());
        $this->assertStringContainsString('createPublisher(data: $data)', $operation->toGraphQL());
        $this->assertSame([
            'data' => [
                'publisherName' => 'ACME Press',
            ],
        ], $operation->getVariables());
    }
}
