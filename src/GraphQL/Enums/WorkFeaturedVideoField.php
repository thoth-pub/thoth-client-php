<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class WorkFeaturedVideoField
{
    public const WORK_FEATURED_VIDEO_ID = 'WORK_FEATURED_VIDEO_ID';
    public const WORK_ID = 'WORK_ID';
    public const TITLE = 'TITLE';
    public const URL = 'URL';
    public const WIDTH = 'WIDTH';
    public const HEIGHT = 'HEIGHT';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('WorkFeaturedVideoField', [
            'WORK_FEATURED_VIDEO_ID',
            'WORK_ID',
            'TITLE',
            'URL',
            'WIDTH',
            'HEIGHT',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
