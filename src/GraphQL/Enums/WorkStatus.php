<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class WorkStatus
{
    public const FORTHCOMING = 'FORTHCOMING';
    public const ACTIVE = 'ACTIVE';
    public const WITHDRAWN = 'WITHDRAWN';
    public const SUPERSEDED = 'SUPERSEDED';
    public const POSTPONED_INDEFINITELY = 'POSTPONED_INDEFINITELY';
    public const CANCELLED = 'CANCELLED';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('WorkStatus', [
            'FORTHCOMING',
            'ACTIVE',
            'WITHDRAWN',
            'SUPERSEDED',
            'POSTPONED_INDEFINITELY',
            'CANCELLED',
        ]);
    }
}
