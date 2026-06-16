<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class TitleField
{
    public const TITLE_ID = 'TITLE_ID';
    public const WORK_ID = 'WORK_ID';
    public const FULL_TITLE = 'FULL_TITLE';
    public const TITLE = 'TITLE';
    public const SUBTITLE = 'SUBTITLE';
    public const CANONICAL = 'CANONICAL';
    public const LOCALE_CODE = 'LOCALE_CODE';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('TitleField', [
            'TITLE_ID',
            'WORK_ID',
            'FULL_TITLE',
            'TITLE',
            'SUBTITLE',
            'CANONICAL',
            'LOCALE_CODE',
        ]);
    }
}
