<?php

namespace ThothApi\GraphQL\Scalars;

use ThothApi\GraphQL\Definition\ScalarTypeDefinition;

final class StringScalar
{
    public static function definition(): ScalarTypeDefinition
    {
        return new ScalarTypeDefinition('String', null);
    }
}
