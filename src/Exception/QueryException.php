<?php

namespace ThothApi\Exception;

class QueryException extends \RuntimeException
{
    private array $details;

    public function __construct(array $error)
    {
        $this->details = $error;
        parent::__construct($error['message']);
    }

    public function getDetails(): array
    {
        return $this->details;
    }
}
