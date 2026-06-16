<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class Expression
{
    public const GREATER_THAN = 'GREATER_THAN';
    public const LESS_THAN = 'LESS_THAN';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('Expression', [
            'GREATER_THAN',
            'LESS_THAN',
        ]);
    }
}
