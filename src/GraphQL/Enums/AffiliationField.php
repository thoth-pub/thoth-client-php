<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class AffiliationField
{
    public const AFFILIATION_ID = 'AFFILIATION_ID';
    public const CONTRIBUTION_ID = 'CONTRIBUTION_ID';
    public const INSTITUTION_ID = 'INSTITUTION_ID';
    public const AFFILIATION_ORDINAL = 'AFFILIATION_ORDINAL';
    public const POSITION = 'POSITION';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('AffiliationField', [
            'AFFILIATION_ID',
            'CONTRIBUTION_ID',
            'INSTITUTION_ID',
            'AFFILIATION_ORDINAL',
            'POSITION',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
