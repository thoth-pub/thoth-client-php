<?php

namespace ThothClient\GraphQL;

use Psr\Http\Message\ResponseInterface;
use ThothClient\Exception\QueryException;

class Response
{
    private string $body;

    public function __construct(ResponseInterface $httpResponse)
    {
        $this->body = $httpResponse->getBody()->getContents();

        if ($error = $this->getErrors()) {
            throw new QueryException($error);
        }
    }

    public function getErrors(): ?array
    {
        $decodedBody = json_decode($this->body, true);
        return array_key_exists('errors', $decodedBody) ? array_shift($decodedBody['errors']) : null;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getData(): array
    {
        $decodedBody = json_decode($this->body, true);
        return $decodedBody['data'];
    }
}
