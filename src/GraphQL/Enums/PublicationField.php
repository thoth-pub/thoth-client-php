<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class PublicationField
{
    public const PUBLICATION_ID = 'PUBLICATION_ID';
    public const PUBLICATION_TYPE = 'PUBLICATION_TYPE';
    public const WORK_ID = 'WORK_ID';
    public const ISBN = 'ISBN';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';
    public const WIDTH_MM = 'WIDTH_MM';
    public const WIDTH_IN = 'WIDTH_IN';
    public const HEIGHT_MM = 'HEIGHT_MM';
    public const HEIGHT_IN = 'HEIGHT_IN';
    public const DEPTH_MM = 'DEPTH_MM';
    public const DEPTH_IN = 'DEPTH_IN';
    public const WEIGHT_G = 'WEIGHT_G';
    public const WEIGHT_OZ = 'WEIGHT_OZ';
    public const ACCESSIBILITY_STANDARD = 'ACCESSIBILITY_STANDARD';
    public const ACCESSIBILITY_ADDITIONAL_STANDARD = 'ACCESSIBILITY_ADDITIONAL_STANDARD';
    public const ACCESSIBILITY_EXCEPTION = 'ACCESSIBILITY_EXCEPTION';
    public const ACCESSIBILITY_REPORT_URL = 'ACCESSIBILITY_REPORT_URL';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('PublicationField', [
            'PUBLICATION_ID',
            'PUBLICATION_TYPE',
            'WORK_ID',
            'ISBN',
            'CREATED_AT',
            'UPDATED_AT',
            'WIDTH_MM',
            'WIDTH_IN',
            'HEIGHT_MM',
            'HEIGHT_IN',
            'DEPTH_MM',
            'DEPTH_IN',
            'WEIGHT_G',
            'WEIGHT_OZ',
            'ACCESSIBILITY_STANDARD',
            'ACCESSIBILITY_ADDITIONAL_STANDARD',
            'ACCESSIBILITY_EXCEPTION',
            'ACCESSIBILITY_REPORT_URL',
        ]);
    }
}
