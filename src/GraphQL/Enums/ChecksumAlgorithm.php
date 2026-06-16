<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class ChecksumAlgorithm
{
    public const MD5 = 'MD5';
    public const SHA256 = 'SHA256';
    public const SHA1 = 'SHA1';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('ChecksumAlgorithm', [
            'MD5',
            'SHA256',
            'SHA1',
        ]);
    }
}
