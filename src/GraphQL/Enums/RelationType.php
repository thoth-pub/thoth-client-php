<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class RelationType
{
    public const REPLACES = 'REPLACES';
    public const HAS_TRANSLATION = 'HAS_TRANSLATION';
    public const HAS_PART = 'HAS_PART';
    public const HAS_CHILD = 'HAS_CHILD';
    public const IS_REPLACED_BY = 'IS_REPLACED_BY';
    public const IS_TRANSLATION_OF = 'IS_TRANSLATION_OF';
    public const IS_PART_OF = 'IS_PART_OF';
    public const IS_CHILD_OF = 'IS_CHILD_OF';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('RelationType', [
            'REPLACES',
            'HAS_TRANSLATION',
            'HAS_PART',
            'HAS_CHILD',
            'IS_REPLACED_BY',
            'IS_TRANSLATION_OF',
            'IS_PART_OF',
            'IS_CHILD_OF',
        ]);
    }
}
