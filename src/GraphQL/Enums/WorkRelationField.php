<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class WorkRelationField
{
    public const WORK_RELATION_ID = 'WORK_RELATION_ID';
    public const RELATOR_WORK_ID = 'RELATOR_WORK_ID';
    public const RELATED_WORK_ID = 'RELATED_WORK_ID';
    public const RELATION_TYPE = 'RELATION_TYPE';
    public const RELATION_ORDINAL = 'RELATION_ORDINAL';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('WorkRelationField', [
            'WORK_RELATION_ID',
            'RELATOR_WORK_ID',
            'RELATED_WORK_ID',
            'RELATION_TYPE',
            'RELATION_ORDINAL',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
