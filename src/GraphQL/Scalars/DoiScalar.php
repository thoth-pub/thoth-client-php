<?php

namespace ThothApi\GraphQL\Scalars;

use ThothApi\GraphQL\Definition\ScalarTypeDefinition;

final class DoiScalar
{
    public static function definition(): ScalarTypeDefinition
    {
        return new ScalarTypeDefinition('Doi', 'Digital Object Identifier. Expressed as `^https:\\/\\/doi\\.org\\/10\\.\\d{4,9}\\/[-._;()\\/:a-zA-Z0-9<>+\\[\\]]+$`');
    }
}
