<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class ResourceType
{
    public const AUDIO = 'AUDIO';
    public const VIDEO = 'VIDEO';
    public const IMAGE = 'IMAGE';
    public const BLOG = 'BLOG';
    public const WEBSITE = 'WEBSITE';
    public const DOCUMENT = 'DOCUMENT';
    public const BOOK = 'BOOK';
    public const ARTICLE = 'ARTICLE';
    public const MAP = 'MAP';
    public const SOURCE = 'SOURCE';
    public const DATASET = 'DATASET';
    public const SPREADSHEET = 'SPREADSHEET';
    public const OTHER = 'OTHER';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('ResourceType', [
            'AUDIO',
            'VIDEO',
            'IMAGE',
            'BLOG',
            'WEBSITE',
            'DOCUMENT',
            'BOOK',
            'ARTICLE',
            'MAP',
            'SOURCE',
            'DATASET',
            'SPREADSHEET',
            'OTHER',
        ]);
    }
}
