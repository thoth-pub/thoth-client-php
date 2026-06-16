<?php

namespace ThothApi\GraphQL\Scalars;

use ThothApi\GraphQL\Definition\ScalarTypeDefinition;

final class TimestampScalar
{
    public static function definition(): ScalarTypeDefinition
    {
        return new ScalarTypeDefinition('Timestamp', 'RFC 3339 combined date and time in UTC time zone (e.g. "1999-12-31T23:59:00Z")');
    }
}
