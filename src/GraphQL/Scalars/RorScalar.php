<?php

namespace ThothApi\GraphQL\Scalars;

use ThothApi\GraphQL\Definition\ScalarTypeDefinition;

final class RorScalar
{
    public static function definition(): ScalarTypeDefinition
    {
        return new ScalarTypeDefinition('Ror', 'ROR (Research Organization Registry) identifier. Expressed as `^https:\\/\\/ror\\.org\\/0[a-hjkmnp-z0-9]{6}\\d{2}$`');
    }
}
