<?php

namespace ThothClient\Tests\GraphQL;

use GuzzleHttp\Psr7\Response as HttpResponse;
use PHPUnit\Framework\TestCase;
use ThothClient\Exception\QueryException;
use ThothClient\GraphQL\Response;

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
}
