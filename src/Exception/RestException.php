<?php

namespace ThothApi\Exception;

class RestException extends \RuntimeException
{
    public function __construct(string $error)
    {
        parent::__construct($error);
    }
}
