<?php

namespace ThothClient\Tests\GraphQL;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use ThothClient\Exception\QueryException;
use ThothClient\GraphQL\Request;

final class RequestTest extends TestCase
{
    private $mockHandler;

    private $request;

    protected function setUp(): void
    {
        $this->mockHandler = new MockHandler();
        $handler = HandlerStack::create($this->mockHandler);
        $this->request = new Request('', ['handler' => $handler]);
    }

    public function testExecuteQuery(): void
    {
        $query = <<<QUERY
            query {
                objects {
                    id
                }
            }
        QUERY;

        $body = [
            'data' => [
                'objects' => [
                    [
                        'id' => '8f256755-3546-49ad-8199-6e98d1a66792',
                    ]
                ]
            ]
        ];

        $this->mockHandler->append(new Response(200, [], json_encode($body)));

        $response = $this->request->execute($query);
        $this->assertEquals($body['data'], $response->getData());
    }

    public function testInvalidQueryWithResponse200(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
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
        ])));

        $this->expectException(QueryException::class);
        $this->request->execute('');
    }

    public function testInvalidQueryResponseWith400(): void
    {
        $this->mockHandler->append(new ClientException(
            '',
            new GuzzleRequest('post', ''),
            new Response(400, [], json_encode([
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
            ]))
        ));

        $this->expectException(QueryException::class);
        $this->request->execute('');
    }
}
