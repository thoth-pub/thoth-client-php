<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class PriceField
{
    public const PRICE_ID = 'PRICE_ID';
    public const PUBLICATION_ID = 'PUBLICATION_ID';
    public const CURRENCY_CODE = 'CURRENCY_CODE';
    public const UNIT_PRICE = 'UNIT_PRICE';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('PriceField', [
            'PRICE_ID',
            'PUBLICATION_ID',
            'CURRENCY_CODE',
            'UNIT_PRICE',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
