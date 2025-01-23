<?php

namespace ThothApi\GraphQL;

class Account
{
    private Request $request;

    public const THOTH_ACCOUNT_ENDPOINT = 'account';

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function login(string $email, string $password): string
    {
        $response = $this->request->execute('POST', self::THOTH_ACCOUNT_ENDPOINT . '/login', ['json' => [
            'email' => $email, 'password' => $password
        ]]);

        return json_decode($response->getBody())->token;
    }

    public function details(string $token): array
    {
        $response = $this->request->execute('GET', self::THOTH_ACCOUNT_ENDPOINT, ['headers' => [
            'Authorization' => 'Bearer ' . $token
        ]]);

        return json_decode($response->getBody(), true);
    }
}
