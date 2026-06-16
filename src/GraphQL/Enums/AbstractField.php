<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class AbstractField
{
    public const ABSTRACT_ID = 'ABSTRACT_ID';
    public const WORK_ID = 'WORK_ID';
    public const CONTENT = 'CONTENT';
    public const LOCALE_CODE = 'LOCALE_CODE';
    public const ABSTRACT_TYPE = 'ABSTRACT_TYPE';
    public const CANONICAL = 'CANONICAL';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('AbstractField', [
            'ABSTRACT_ID',
            'WORK_ID',
            'CONTENT',
            'LOCALE_CODE',
            'ABSTRACT_TYPE',
            'CANONICAL',
        ]);
    }
}
