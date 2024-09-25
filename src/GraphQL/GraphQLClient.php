<?php

namespace ThothClient\GraphQL;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class GraphQLClient
{
    private $endpoint;

    private $httpClient;

    public function __construct(string $endpoint, $httpConfig = [])
    {
        $this->endpoint = $endpoint;
        $this->httpClient = new Client($httpConfig);
    }

    public function runQuery(string $query, ?array $variables = null): Response
    {
        $body = ['query' => $query];

        if ($variables) {
            $body['variables'] = $variables;
        }

        $options = [
            'body' => json_encode($body, JSON_UNESCAPED_SLASHES),
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ];

        try {
            $httpResponse = $this->httpClient->request('POST', $this->endpoint, $options);
        } catch (ClientException $exception) {
            $httpResponse = $exception->getResponse();
        }

        return new Response($httpResponse);
    }
}
