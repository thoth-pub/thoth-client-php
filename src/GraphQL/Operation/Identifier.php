<?php

namespace ThothApi\GraphQL\Operation;

final class Identifier
{
    public static function assert(string $value): void
    {
        if (!preg_match('/^[_A-Za-z][_0-9A-Za-z]*$/', $value)) {
            throw new \InvalidArgumentException("Invalid GraphQL identifier '{$value}'.");
        }
    }
}
