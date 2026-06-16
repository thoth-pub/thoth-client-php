<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class ContactType
{
    public const ACCESSIBILITY = 'ACCESSIBILITY';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('ContactType', [
            'ACCESSIBILITY',
        ]);
    }
}
