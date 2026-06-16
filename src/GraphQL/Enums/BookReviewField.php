<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class BookReviewField
{
    public const BOOK_REVIEW_ID = 'BOOK_REVIEW_ID';
    public const WORK_ID = 'WORK_ID';
    public const REVIEW_ORDINAL = 'REVIEW_ORDINAL';
    public const TITLE = 'TITLE';
    public const AUTHOR_NAME = 'AUTHOR_NAME';
    public const JOURNAL_NAME = 'JOURNAL_NAME';
    public const REVIEW_DATE = 'REVIEW_DATE';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('BookReviewField', [
            'BOOK_REVIEW_ID',
            'WORK_ID',
            'REVIEW_ORDINAL',
            'TITLE',
            'AUTHOR_NAME',
            'JOURNAL_NAME',
            'REVIEW_DATE',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
