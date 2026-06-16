<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class PublicationType
{
    public const PAPERBACK = 'PAPERBACK';
    public const HARDBACK = 'HARDBACK';
    public const PDF = 'PDF';
    public const HTML = 'HTML';
    public const XML = 'XML';
    public const EPUB = 'EPUB';
    public const MOBI = 'MOBI';
    public const AZW3 = 'AZW3';
    public const DOCX = 'DOCX';
    public const FICTION_BOOK = 'FICTION_BOOK';
    public const MP3 = 'MP3';
    public const WAV = 'WAV';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('PublicationType', [
            'PAPERBACK',
            'HARDBACK',
            'PDF',
            'HTML',
            'XML',
            'EPUB',
            'MOBI',
            'AZW3',
            'DOCX',
            'FICTION_BOOK',
            'MP3',
            'WAV',
        ]);
    }
}
