<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class LanguageRelation
{
    public const ORIGINAL = 'ORIGINAL';
    public const TRANSLATED_FROM = 'TRANSLATED_FROM';
    public const TRANSLATED_INTO = 'TRANSLATED_INTO';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('LanguageRelation', [
            'ORIGINAL',
            'TRANSLATED_FROM',
            'TRANSLATED_INTO',
        ]);
    }
}
