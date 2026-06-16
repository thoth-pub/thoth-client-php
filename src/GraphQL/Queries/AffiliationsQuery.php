<?php

namespace ThothApi\GraphQL\Queries;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\OperationRequest;

final class AffiliationsQuery
{
    public static function field(): FieldDefinition
    {
        return \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
            'name' => 'affiliations',
            'description' => 'Query the full list of affiliations',
            'args' => [
                [
                    'name' => 'limit',
                    'description' => 'The number of items to return',
                    'type' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                    'defaultValue' => '100',
                ],
                [
                    'name' => 'offset',
                    'description' => 'The number of items to skip',
                    'type' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                    'defaultValue' => '0',
                ],
                [
                    'name' => 'order',
                    'description' => 'The order in which to sort the results',
                    'type' => [
                        'kind' => 'INPUT_OBJECT',
                        'name' => 'AffiliationOrderBy',
                        'ofType' => null,
                    ],
                    'defaultValue' => '{field: "AFFILIATION_ORDINAL", direction: "ASC"}',
                ],
                [
                    'name' => 'publishers',
                    'description' => 'If set, only shows results connected to publishers with these IDs',
                    'type' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'SCALAR',
                                'name' => 'Uuid',
                                'ofType' => null,
                            ],
                        ],
                    ],
                    'defaultValue' => '[]',
                ],
            ],
            'type' => [
                'kind' => 'NON_NULL',
                'name' => null,
                'ofType' => [
                    'kind' => 'LIST',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'NON_NULL',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'OBJECT',
                            'name' => 'Affiliation',
                            'ofType' => null,
                        ],
                    ],
                ],
            ],
            'isDeprecated' => false,
            'deprecationReason' => null,
        ]);
    }

    public static function operation(array $arguments = [], array $selection = []): OperationRequest
    {
        return new OperationRequest('query', self::field(), $arguments, $selection);
    }
}
