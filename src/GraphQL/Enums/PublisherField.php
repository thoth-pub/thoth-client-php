<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class PublisherField
{
    public const PUBLISHER_ID = 'PUBLISHER_ID';
    public const PUBLISHER_NAME = 'PUBLISHER_NAME';
    public const PUBLISHER_SHORTNAME = 'PUBLISHER_SHORTNAME';
    public const PUBLISHER_URL = 'PUBLISHER_URL';
    public const ZITADEL_ID = 'ZITADEL_ID';
    public const ACCESSIBILITY_STATEMENT = 'ACCESSIBILITY_STATEMENT';
    public const ACCESSIBILITY_REPORT_URL = 'ACCESSIBILITY_REPORT_URL';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('PublisherField', [
            'PUBLISHER_ID',
            'PUBLISHER_NAME',
            'PUBLISHER_SHORTNAME',
            'PUBLISHER_URL',
            'ZITADEL_ID',
            'ACCESSIBILITY_STATEMENT',
            'ACCESSIBILITY_REPORT_URL',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
