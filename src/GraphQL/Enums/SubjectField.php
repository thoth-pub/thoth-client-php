<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class SubjectField
{
    public const SUBJECT_ID = 'SUBJECT_ID';
    public const WORK_ID = 'WORK_ID';
    public const SUBJECT_TYPE = 'SUBJECT_TYPE';
    public const SUBJECT_CODE = 'SUBJECT_CODE';
    public const SUBJECT_ORDINAL = 'SUBJECT_ORDINAL';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('SubjectField', [
            'SUBJECT_ID',
            'WORK_ID',
            'SUBJECT_TYPE',
            'SUBJECT_CODE',
            'SUBJECT_ORDINAL',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
