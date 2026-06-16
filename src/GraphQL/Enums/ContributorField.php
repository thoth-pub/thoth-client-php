<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class ContributorField
{
    public const CONTRIBUTOR_ID = 'CONTRIBUTOR_ID';
    public const FIRST_NAME = 'FIRST_NAME';
    public const LAST_NAME = 'LAST_NAME';
    public const FULL_NAME = 'FULL_NAME';
    public const ORCID = 'ORCID';
    public const WEBSITE = 'WEBSITE';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('ContributorField', [
            'CONTRIBUTOR_ID',
            'FIRST_NAME',
            'LAST_NAME',
            'FULL_NAME',
            'ORCID',
            'WEBSITE',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
