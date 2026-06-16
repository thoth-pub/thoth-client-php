<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class ContributionField
{
    public const CONTRIBUTION_ID = 'CONTRIBUTION_ID';
    public const WORK_ID = 'WORK_ID';
    public const CONTRIBUTOR_ID = 'CONTRIBUTOR_ID';
    public const CONTRIBUTION_TYPE = 'CONTRIBUTION_TYPE';
    public const MAIN_CONTRIBUTION = 'MAIN_CONTRIBUTION';
    public const BIOGRAPHY = 'BIOGRAPHY';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';
    public const FIRST_NAME = 'FIRST_NAME';
    public const LAST_NAME = 'LAST_NAME';
    public const FULL_NAME = 'FULL_NAME';
    public const CONTRIBUTION_ORDINAL = 'CONTRIBUTION_ORDINAL';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('ContributionField', [
            'CONTRIBUTION_ID',
            'WORK_ID',
            'CONTRIBUTOR_ID',
            'CONTRIBUTION_TYPE',
            'MAIN_CONTRIBUTION',
            'BIOGRAPHY',
            'CREATED_AT',
            'UPDATED_AT',
            'FIRST_NAME',
            'LAST_NAME',
            'FULL_NAME',
            'CONTRIBUTION_ORDINAL',
        ]);
    }
}
