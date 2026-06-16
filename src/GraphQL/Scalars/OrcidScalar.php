<?php

namespace ThothApi\GraphQL\Scalars;

use ThothApi\GraphQL\Definition\ScalarTypeDefinition;

final class OrcidScalar
{
    public static function definition(): ScalarTypeDefinition
    {
        return new ScalarTypeDefinition('Orcid', 'ORCID (Open Researcher and Contributor ID) identifier. Expressed as `^https:\\/\\/orcid\\.org\\/\\d{4}-\\d{4}-\\d{4}-\\d{3}[\\dX]$`');
    }
}
