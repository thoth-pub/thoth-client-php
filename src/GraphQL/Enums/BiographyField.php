<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class BiographyField
{
    public const BIOGRAPHY_ID = 'BIOGRAPHY_ID';
    public const CONTRIBUTION_ID = 'CONTRIBUTION_ID';
    public const CONTENT = 'CONTENT';
    public const CANONICAL = 'CANONICAL';
    public const LOCALE_CODE = 'LOCALE_CODE';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('BiographyField', [
            'BIOGRAPHY_ID',
            'CONTRIBUTION_ID',
            'CONTENT',
            'CANONICAL',
            'LOCALE_CODE',
        ]);
    }
}
