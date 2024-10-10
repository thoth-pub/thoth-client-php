<?php

namespace ThothApi\GraphQL;

use GuzzleHttp\Psr7\Response as GuzzleResponse;
use Psr\Http\Message\ResponseInterface;
use ThothApi\Exception\QueryException;

class Response
{
    private string $body;

    private GuzzleResponse $previousResponse;

    public function __construct(ResponseInterface $guzzleResponse)
    {
        $this->previousResponse = $guzzleResponse;
        $this->body = $guzzleResponse->getBody()->getContents();

        if ($error = $this->getErrors()) {
            throw new QueryException($error);
        }
    }

    public function getErrors(): ?array
    {
        $decodedBody = json_decode($this->body, true);

        if (isset($decodedBody['errors'])) {
            return array_shift($decodedBody['errors']);
        }

        if (!isset($decodedBody['data']) && $this->previousResponse->getStatusCode() != 200) {
            return ['message' => $this->body];
        }

        return null;
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
