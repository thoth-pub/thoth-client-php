<?php

namespace ThothApi\Tests\Exception;

use PHPUnit\Framework\TestCase;
use ThothApi\Exception\QueryException;

class QueryExceptionTest extends TestCase
{
    public function testGetExceptionError(): void
    {
        $error = [
            'message' => 'some syntax error',
            'location' => [
                [
                    'line' => 1,
                    'column' => 3,
                ]
            ],
        ];

        $queryException = new QueryException($error);
        $this->assertSame($error, $queryException->getDetails());
        $this->assertSame($error['message'], $queryException->getMessage());
    }

    public function testGetQueryAndVariables(): void
    {
        $error = ['message' => 'some syntax error'];
        $query = 'query { books { workId } }';
        $variables = ['limit' => 1];

        $queryException = new QueryException($error, $query, $variables);

        $this->assertSame($query, $queryException->getQuery());
        $this->assertSame($variables, $queryException->getVariables());
    }

    public function testGetErrorsAndStatusCode(): void
    {
        $errors = [
            ['message' => 'first error'],
            ['message' => 'second error'],
        ];

        $queryException = new QueryException($errors[0], null, null, $errors, 400);

        $this->assertSame($errors, $queryException->getErrors());
        $this->assertSame(400, $queryException->getStatusCode());
    }
}
