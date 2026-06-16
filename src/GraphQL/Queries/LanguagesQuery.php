<?php

namespace ThothApi\GraphQL\Queries;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\OperationRequest;

final class LanguagesQuery
{
    public static function field(): FieldDefinition
    {
        return \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
            'name' => 'languages',
            'description' => 'Query the full list of languages',
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
                        'name' => 'LanguageOrderBy',
                        'ofType' => null,
                    ],
                    'defaultValue' => '{field: "LANGUAGE_CODE", direction: "ASC"}',
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
                [
                    'name' => 'languageCodes',
                    'description' => 'Specific languages to filter by',
                    'type' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'ENUM',
                                'name' => 'LanguageCode',
                                'ofType' => null,
                            ],
                        ],
                    ],
                    'defaultValue' => '[]',
                ],
                [
                    'name' => 'languageRelation',
                    'description' => '(deprecated) A specific relation to filter by',
                    'type' => [
                        'kind' => 'ENUM',
                        'name' => 'LanguageRelation',
                        'ofType' => null,
                    ],
                    'defaultValue' => null,
                ],
                [
                    'name' => 'languageRelations',
                    'description' => 'Specific relations to filter by',
                    'type' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'ENUM',
                                'name' => 'LanguageRelation',
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
                            'name' => 'Language',
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
