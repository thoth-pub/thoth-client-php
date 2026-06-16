<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class LengthUnit
{
    public const MM = 'MM';
    public const CM = 'CM';
    public const IN = 'IN';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('LengthUnit', [
            'MM',
            'CM',
            'IN',
        ]);
    }
}
