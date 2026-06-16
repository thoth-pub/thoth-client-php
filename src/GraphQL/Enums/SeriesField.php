<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class SeriesField
{
    public const SERIES_ID = 'SERIES_ID';
    public const SERIES_TYPE = 'SERIES_TYPE';
    public const SERIES_NAME = 'SERIES_NAME';
    public const ISSN_PRINT = 'ISSN_PRINT';
    public const ISSN_DIGITAL = 'ISSN_DIGITAL';
    public const SERIES_URL = 'SERIES_URL';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';
    public const SERIES_DESCRIPTION = 'SERIES_DESCRIPTION';
    public const SERIES_CFP_URL = 'SERIES_CFP_URL';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('SeriesField', [
            'SERIES_ID',
            'SERIES_TYPE',
            'SERIES_NAME',
            'ISSN_PRINT',
            'ISSN_DIGITAL',
            'SERIES_URL',
            'CREATED_AT',
            'UPDATED_AT',
            'SERIES_DESCRIPTION',
            'SERIES_CFP_URL',
        ]);
    }
}
