<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class AwardField
{
    public const AWARD_ID = 'AWARD_ID';
    public const WORK_ID = 'WORK_ID';
    public const AWARD_ORDINAL = 'AWARD_ORDINAL';
    public const TITLE = 'TITLE';
    public const CATEGORY = 'CATEGORY';
    public const YEAR = 'YEAR';
    public const JURY = 'JURY';
    public const COUNTRY = 'COUNTRY';
    public const ROLE = 'ROLE';
    public const URL = 'URL';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('AwardField', [
            'AWARD_ID',
            'WORK_ID',
            'AWARD_ORDINAL',
            'TITLE',
            'CATEGORY',
            'YEAR',
            'JURY',
            'COUNTRY',
            'ROLE',
            'URL',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
