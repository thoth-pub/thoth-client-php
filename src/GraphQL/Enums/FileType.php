<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class FileType
{
    public const PUBLICATION = 'PUBLICATION';
    public const FRONTCOVER = 'FRONTCOVER';
    public const ADDITIONAL_RESOURCE = 'ADDITIONAL_RESOURCE';
    public const WORK_FEATURED_VIDEO = 'WORK_FEATURED_VIDEO';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('FileType', [
            'PUBLICATION',
            'FRONTCOVER',
            'ADDITIONAL_RESOURCE',
            'WORK_FEATURED_VIDEO',
        ]);
    }
}
