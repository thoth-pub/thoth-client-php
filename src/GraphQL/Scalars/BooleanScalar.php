<?php

namespace ThothApi\GraphQL\Scalars;

use ThothApi\GraphQL\Definition\ScalarTypeDefinition;

final class BooleanScalar
{
    public static function definition(): ScalarTypeDefinition
    {
        return new ScalarTypeDefinition('Boolean', null);
    }
}
