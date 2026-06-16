<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class AdditionalResourceField
{
    public const ADDITIONAL_RESOURCE_ID = 'ADDITIONAL_RESOURCE_ID';
    public const WORK_ID = 'WORK_ID';
    public const RESOURCE_ORDINAL = 'RESOURCE_ORDINAL';
    public const TITLE = 'TITLE';
    public const ATTRIBUTION = 'ATTRIBUTION';
    public const RESOURCE_TYPE = 'RESOURCE_TYPE';
    public const DOI = 'DOI';
    public const HANDLE = 'HANDLE';
    public const URL = 'URL';
    public const DATE = 'DATE';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('AdditionalResourceField', [
            'ADDITIONAL_RESOURCE_ID',
            'WORK_ID',
            'RESOURCE_ORDINAL',
            'TITLE',
            'ATTRIBUTION',
            'RESOURCE_TYPE',
            'DOI',
            'HANDLE',
            'URL',
            'DATE',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
