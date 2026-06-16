<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class WorkType
{
    public const BOOK_CHAPTER = 'BOOK_CHAPTER';
    public const MONOGRAPH = 'MONOGRAPH';
    public const EDITED_BOOK = 'EDITED_BOOK';
    public const TEXTBOOK = 'TEXTBOOK';
    public const JOURNAL_ISSUE = 'JOURNAL_ISSUE';
    public const BOOK_SET = 'BOOK_SET';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('WorkType', [
            'BOOK_CHAPTER',
            'MONOGRAPH',
            'EDITED_BOOK',
            'TEXTBOOK',
            'JOURNAL_ISSUE',
            'BOOK_SET',
        ]);
    }
}
