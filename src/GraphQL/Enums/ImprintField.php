<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class ImprintField
{
    public const IMPRINT_ID = 'IMPRINT_ID';
    public const IMPRINT_NAME = 'IMPRINT_NAME';
    public const IMPRINT_URL = 'IMPRINT_URL';
    public const CROSSMARK_DOI = 'CROSSMARK_DOI';
    public const DEFAULT_CURRENCY = 'DEFAULT_CURRENCY';
    public const DEFAULT_PLACE = 'DEFAULT_PLACE';
    public const DEFAULT_LOCALE = 'DEFAULT_LOCALE';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('ImprintField', [
            'IMPRINT_ID',
            'IMPRINT_NAME',
            'IMPRINT_URL',
            'CROSSMARK_DOI',
            'DEFAULT_CURRENCY',
            'DEFAULT_PLACE',
            'DEFAULT_LOCALE',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
