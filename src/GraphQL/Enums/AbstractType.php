<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class AbstractType
{
    public const SHORT = 'SHORT';
    public const LONG = 'LONG';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('AbstractType', [
            'SHORT',
            'LONG',
        ]);
    }
}
