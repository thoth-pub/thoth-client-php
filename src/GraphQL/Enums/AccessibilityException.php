<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class AccessibilityException
{
    public const MICRO_ENTERPRISES = 'MICRO_ENTERPRISES';
    public const DISPROPORTIONATE_BURDEN = 'DISPROPORTIONATE_BURDEN';
    public const FUNDAMENTAL_ALTERATION = 'FUNDAMENTAL_ALTERATION';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('AccessibilityException', [
            'MICRO_ENTERPRISES',
            'DISPROPORTIONATE_BURDEN',
            'FUNDAMENTAL_ALTERATION',
        ]);
    }
}
