<?php

namespace ThothClient\Tests\GraphQL;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use ThothClient\Exception\QueryException;
use ThothClient\GraphQL\Account;
use ThothClient\GraphQL\Request;

final class AccountTest extends TestCase
{
    private MockHandler $mockHandler;

    private Account $account;

    protected function setUp(): void
    {
        $this->mockHandler = new MockHandler();
        $handler = HandlerStack::create($this->mockHandler);
        $request = new Request('', ['handler' => $handler]);
        $this->account = new Account($request);
    }

    public function testLogin(): void
    {
        $this->mockHandler->append(new Response(200, [], $this->getAccountResponse()));

        $token = $this->account->login('johndoe@mailinator.com', 'secret123');
        $this->assertSame('someVeryLongJWT', $token);
    }

    public function testLoginWithInvalidCredentials(): void
    {
        $this->mockHandler->append(new ClientException(
            '',
            new GuzzleRequest('post', ''),
            new Response(400, [], json_encode(['Invalid credentials.']))
        ));

        $this->expectException(QueryException::class);
        $this->expectExceptionMessage('Invalid credentials.');
        $token = $this->account->login('johndoe@mailinator.com', 'secret123');
    }

    public function testGetAccountDetails(): void
    {
        $expectedDetails = $this->getAccountResponse();
        $this->mockHandler->append(new Response(200, [], $expectedDetails));

        $details = $this->account->details('bot@mailinator.com', 'invalidpassword');
        $this->assertSame(json_decode($expectedDetails, true), $details);
    }

    private function getAccountResponse(): string
    {
        return '{
            "accountId":"60828981-63c3-40c1-83e5-42d19565cde5",
            "name":"John",
            "surname":"Doe",
            "email":"johndoe@mailinator.com",
            "token":"someVeryLongJWT",
            "createdAt":"2020-01-01T21:56:58.271962Z",
            "updatedAt":"2020-01-07T23:42:08.317293Z",
            "resourceAccess": {
                    "isSuperuser":true,
                    "isBot":false,
                    "linkedPublishers":[
                        {
                            "publisherId":"ffea0d2d-6ead-4cf6-95f2-6d675836e948",
                            "isAdmin":true
                        }
                    ]
            }
        }';
    }
}
