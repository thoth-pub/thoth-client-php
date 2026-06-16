<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class SeriesType
{
    public const JOURNAL = 'JOURNAL';
    public const BOOK_SERIES = 'BOOK_SERIES';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('SeriesType', [
            'JOURNAL',
            'BOOK_SERIES',
        ]);
    }
}
