<?php

namespace ThothApi\GraphQL\Queries;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\OperationRequest;

final class LanguageCountQuery
{
    public static function field(): FieldDefinition
    {
        return \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
            'name' => 'languageCount',
            'description' => 'Get the total number of languages associated to works',
            'args' => [
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
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
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
