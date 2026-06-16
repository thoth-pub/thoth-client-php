<?php

namespace ThothApi\GraphQL\Queries;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\OperationRequest;

final class PublishersQuery
{
    public static function field(): FieldDefinition
    {
        return \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
            'name' => 'publishers',
            'description' => 'Query the full list of publishers',
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
                    'name' => 'filter',
                    'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on publisher_name and publisher_shortname',
                    'type' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                    'defaultValue' => '""',
                ],
                [
                    'name' => 'order',
                    'description' => 'The order in which to sort the results',
                    'type' => [
                        'kind' => 'INPUT_OBJECT',
                        'name' => 'PublisherOrderBy',
                        'ofType' => null,
                    ],
                    'defaultValue' => '{field: "PUBLISHER_NAME", direction: "ASC"}',
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
                            'name' => 'Publisher',
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
