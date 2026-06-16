<?php

namespace ThothApi\GraphQL;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\TransferException;
use ThothApi\Exception\QueryException;

class Request
{
    private $httpClient;

    public function __construct(array $httpConfig)
    {
        $this->httpClient = new Client($httpConfig);
    }

    public function runQuery(string $query, ?array $variables = null, ?string $token = null): Response
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

        if ($token) {
            $options['headers']['Authorization'] = 'Bearer ' . $token;
        }

        return $this->execute('POST', 'graphql', $options, $query, $variables);
    }

    public function execute(
        string $method,
        string $endpoint,
        array $options = [],
        ?string $query = null,
        ?array $variables = null
    ): Response {
        try {
            $httpResponse = $this->httpClient->request($method, $endpoint, $options);
        } catch (RequestException $exception) {
            $httpResponse = $exception->getResponse();

            if ($httpResponse === null) {
                throw new QueryException(['message' => $exception->getMessage()], $query, $variables);
            }
        } catch (TransferException $exception) {
            throw new QueryException(['message' => $exception->getMessage()], $query, $variables);
        }

        return new Response($httpResponse, $query, $variables);
    }
}
