<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class FundingField
{
    public const INSTITUTION_ID = 'INSTITUTION_ID';
    public const WORK_ID = 'WORK_ID';
    public const FUNDING_ID = 'FUNDING_ID';
    public const PROGRAM = 'PROGRAM';
    public const PROJECT_NAME = 'PROJECT_NAME';
    public const PROJECT_SHORTNAME = 'PROJECT_SHORTNAME';
    public const GRANT_NUMBER = 'GRANT_NUMBER';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('FundingField', [
            'INSTITUTION_ID',
            'WORK_ID',
            'FUNDING_ID',
            'PROGRAM',
            'PROJECT_NAME',
            'PROJECT_SHORTNAME',
            'GRANT_NUMBER',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
