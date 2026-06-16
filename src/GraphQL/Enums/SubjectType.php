<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class SubjectType
{
    public const BIC = 'BIC';
    public const BISAC = 'BISAC';
    public const THEMA = 'THEMA';
    public const LCC = 'LCC';
    public const CUSTOM = 'CUSTOM';
    public const KEYWORD = 'KEYWORD';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('SubjectType', [
            'BIC',
            'BISAC',
            'THEMA',
            'LCC',
            'CUSTOM',
            'KEYWORD',
        ]);
    }
}
