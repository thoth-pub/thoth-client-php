<?php

namespace ThothApi\Tests\GraphQL;

use GuzzleHttp\Psr7\Response as HttpResponse;
use PHPUnit\Framework\TestCase;
use ThothApi\Exception\QueryException;
use ThothApi\GraphQL\Response;

class ResponseTest extends TestCase
{
    public function testGetResponseBody(): void
    {
        $body = json_encode([
            'data' => [
                'someField' => [
                    [
                        'data' => 'value',
                    ]
                ]
            ]
        ]);

        $httpResponse = new HttpResponse(200, [], $body);
        $response = new Response($httpResponse);

        $this->assertSame($body, $response->getBody());
    }

    public function testGetResponseData(): void
    {
        $body = [
            'data' => [
                'someField' => [
                    [
                        'data' => 'value',
                    ]
                ]
            ]
        ];

        $httpResponse = new HttpResponse(200, [], json_encode($body));
        $response = new Response($httpResponse);

        $this->assertSame($body['data'], $response->getData());
    }

    public function testThrowQueryException()
    {
        $body = json_encode([
            'errors' => [
                [
                    'message' => 'some syntax error',
                    'location' => [
                        [
                            'line' => 1,
                            'column' => 3,
                        ]
                    ],
                ]
            ]
        ]);

        $httpResponse = new HttpResponse(200, [], $body);

        $this->expectException(QueryException::class);
        new Response($httpResponse);
    }

    public function testThrowQueryExceptionWithAllErrorsAndStatusCode(): void
    {
        $errors = [
            ['message' => 'first syntax error'],
            ['message' => 'second syntax error'],
        ];
        $httpResponse = new HttpResponse(400, [], json_encode(['errors' => $errors]));

        try {
            new Response($httpResponse);
            $this->fail('Expected query exception.');
        } catch (QueryException $exception) {
            $this->assertSame('first syntax error', $exception->getMessage());
            $this->assertSame($errors[0], $exception->getDetails());
            $this->assertSame($errors, $exception->getErrors());
            $this->assertSame(400, $exception->getStatusCode());
        }
    }

    public function testThrowQueryExceptionForInvalidJsonResponse(): void
    {
        $httpResponse = new HttpResponse(200, [], '{invalid');

        $this->expectException(QueryException::class);
        $this->expectExceptionMessage('Invalid JSON response from GraphQL API.');

        new Response($httpResponse);
    }

    public function testThrowQueryExceptionWhenResponseHasNoData(): void
    {
        $httpResponse = new HttpResponse(200, [], json_encode(['status' => 'ok']));

        $this->expectException(QueryException::class);
        $this->expectExceptionMessage('GraphQL response does not contain data.');

        new Response($httpResponse);
    }
}
