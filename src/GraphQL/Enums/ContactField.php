<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class ContactField
{
    public const CONTACT_ID = 'CONTACT_ID';
    public const PUBLISHER_ID = 'PUBLISHER_ID';
    public const CONTACT_TYPE = 'CONTACT_TYPE';
    public const EMAIL = 'EMAIL';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('ContactField', [
            'CONTACT_ID',
            'PUBLISHER_ID',
            'CONTACT_TYPE',
            'EMAIL',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
