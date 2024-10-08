<?php

namespace ThothClient\GraphQL;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Request
{
    private $httpClient;

    public function __construct(string $baseUri, $httpConfig = [])
    {
        $httpConfig = array_merge($httpConfig, ['base_uri' => $baseUri]);
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

        return $this->execute('POST', 'graphql', $options);
    }

    public function execute(string $method, string $endpoint, array $options = []): Response
    {
        try {
            $httpResponse = $this->httpClient->request($method, $endpoint, $options);
        } catch (ClientException $exception) {
            $httpResponse = $exception->getResponse();
        }

        return new Response($httpResponse);
    }
}
