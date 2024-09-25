<?php

namespace ThothClient\Tests\Exception;

use PHPUnit\Framework\TestCase;
use ThothClient\Exception\QueryException;

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
}
