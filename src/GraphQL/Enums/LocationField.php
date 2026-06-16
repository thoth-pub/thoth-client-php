<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class LocationField
{
    public const LOCATION_ID = 'LOCATION_ID';
    public const PUBLICATION_ID = 'PUBLICATION_ID';
    public const LANDING_PAGE = 'LANDING_PAGE';
    public const FULL_TEXT_URL = 'FULL_TEXT_URL';
    public const LOCATION_PLATFORM = 'LOCATION_PLATFORM';
    public const CANONICAL = 'CANONICAL';
    public const CHECKSUM = 'CHECKSUM';
    public const CHECKSUM_ALGORITHM = 'CHECKSUM_ALGORITHM';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('LocationField', [
            'LOCATION_ID',
            'PUBLICATION_ID',
            'LANDING_PAGE',
            'FULL_TEXT_URL',
            'LOCATION_PLATFORM',
            'CANONICAL',
            'CHECKSUM',
            'CHECKSUM_ALGORITHM',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
