<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class MarkupFormat
{
    public const HTML = 'HTML';
    public const MARKDOWN = 'MARKDOWN';
    public const PLAIN_TEXT = 'PLAIN_TEXT';
    public const JATS_XML = 'JATS_XML';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('MarkupFormat', [
            'HTML',
            'MARKDOWN',
            'PLAIN_TEXT',
            'JATS_XML',
        ]);
    }
}
