<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class IssueField
{
    public const ISSUE_ID = 'ISSUE_ID';
    public const SERIES_ID = 'SERIES_ID';
    public const WORK_ID = 'WORK_ID';
    public const ISSUE_ORDINAL = 'ISSUE_ORDINAL';
    public const ISSUE_NUMBER = 'ISSUE_NUMBER';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('IssueField', [
            'ISSUE_ID',
            'SERIES_ID',
            'WORK_ID',
            'ISSUE_ORDINAL',
            'ISSUE_NUMBER',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
