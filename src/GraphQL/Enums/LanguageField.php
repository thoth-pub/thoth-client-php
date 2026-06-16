<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class LanguageField
{
    public const LANGUAGE_ID = 'LANGUAGE_ID';
    public const WORK_ID = 'WORK_ID';
    public const LANGUAGE_CODE = 'LANGUAGE_CODE';
    public const LANGUAGE_RELATION = 'LANGUAGE_RELATION';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('LanguageField', [
            'LANGUAGE_ID',
            'WORK_ID',
            'LANGUAGE_CODE',
            'LANGUAGE_RELATION',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
