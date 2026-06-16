<?php

namespace ThothApi\Exception;

class QueryException extends \RuntimeException
{
    private array $details;

    private array $errors;

    private ?int $statusCode;

    private ?string $query;

    private ?array $variables;

    public function __construct(
        array $error,
        ?string $query = null,
        ?array $variables = null,
        ?array $errors = null,
        ?int $statusCode = null
    ) {
        $this->details = $error;
        $this->errors = $errors ?? [$error];
        $this->statusCode = $statusCode;
        $this->query = $query;
        $this->variables = $variables;
        parent::__construct($error['message']);
    }

    public function getDetails(): array
    {
        return $this->details;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function getVariables(): ?array
    {
        return $this->variables;
    }
}
