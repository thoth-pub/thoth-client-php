<?php

namespace ThothApi\GraphQL;

use Psr\Http\Message\ResponseInterface;
use ThothApi\Exception\QueryException;

class Response
{
    private string $body;

    private ResponseInterface $previousResponse;

    private array $decodedBody;

    private ?string $query;

    private ?array $variables;

    public function __construct(ResponseInterface $guzzleResponse, ?string $query = null, ?array $variables = null)
    {
        $this->previousResponse = $guzzleResponse;
        $this->body = $guzzleResponse->getBody()->getContents();
        $this->query = $query;
        $this->variables = $variables;
        $this->decodedBody = $this->decodeBody();

        if ($error = $this->getErrors()) {
            throw new QueryException(
                $error,
                $this->query,
                $this->variables,
                $this->decodedBody['errors'],
                $this->previousResponse->getStatusCode()
            );
        }

        if (!array_key_exists('data', $this->decodedBody) || !is_array($this->decodedBody['data'])) {
            throw new QueryException(
                ['message' => 'GraphQL response does not contain data.'],
                $this->query,
                $this->variables,
                null,
                $this->previousResponse->getStatusCode()
            );
        }
    }

    public function getErrors(): ?array
    {
        if (
            isset($this->decodedBody['errors'])
            && is_array($this->decodedBody['errors'])
            && isset($this->decodedBody['errors'][0])
        ) {
            return $this->decodedBody['errors'][0];
        }

        return null;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getData(): array
    {
        return $this->decodedBody['data'];
    }

    private function decodeBody(): array
    {
        $decodedBody = json_decode($this->body, true);

        if (json_last_error() !== JSON_ERROR_NONE || !is_array($decodedBody)) {
            throw new QueryException(
                ['message' => 'Invalid JSON response from GraphQL API.'],
                $this->query,
                $this->variables,
                null,
                $this->previousResponse->getStatusCode()
            );
        }

        if (!isset($decodedBody['errors']) && !array_key_exists('data', $decodedBody)) {
            if ($this->previousResponse->getStatusCode() !== 200) {
                throw new QueryException(
                    ['message' => $this->body],
                    $this->query,
                    $this->variables,
                    null,
                    $this->previousResponse->getStatusCode()
                );
            }
        }

        return $decodedBody;
    }
}
