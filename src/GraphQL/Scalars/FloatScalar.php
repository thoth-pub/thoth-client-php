<?php

namespace ThothApi\GraphQL\Scalars;

use ThothApi\GraphQL\Definition\ScalarTypeDefinition;

final class FloatScalar
{
    public static function definition(): ScalarTypeDefinition
    {
        return new ScalarTypeDefinition('Float', null);
    }
}
