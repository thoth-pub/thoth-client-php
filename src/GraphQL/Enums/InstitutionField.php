<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class InstitutionField
{
    public const INSTITUTION_ID = 'INSTITUTION_ID';
    public const INSTITUTION_NAME = 'INSTITUTION_NAME';
    public const INSTITUTION_DOI = 'INSTITUTION_DOI';
    public const ROR = 'ROR';
    public const COUNTRY_CODE = 'COUNTRY_CODE';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('InstitutionField', [
            'INSTITUTION_ID',
            'INSTITUTION_NAME',
            'INSTITUTION_DOI',
            'ROR',
            'COUNTRY_CODE',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
