<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class EndorsementField
{
    public const ENDORSEMENT_ID = 'ENDORSEMENT_ID';
    public const WORK_ID = 'WORK_ID';
    public const ENDORSEMENT_ORDINAL = 'ENDORSEMENT_ORDINAL';
    public const AUTHOR_NAME = 'AUTHOR_NAME';
    public const AUTHOR_ROLE = 'AUTHOR_ROLE';
    public const URL = 'URL';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('EndorsementField', [
            'ENDORSEMENT_ID',
            'WORK_ID',
            'ENDORSEMENT_ORDINAL',
            'AUTHOR_NAME',
            'AUTHOR_ROLE',
            'URL',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
