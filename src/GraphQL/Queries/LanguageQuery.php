<?php

namespace ThothApi\GraphQL\Queries;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\OperationRequest;

final class LanguageQuery
{
    public static function field(): FieldDefinition
    {
        return \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
            'name' => 'language',
            'description' => 'Query a single language using its ID',
            'args' => [
                [
                    'name' => 'languageId',
                    'description' => 'Thoth language ID to search on',
                    'type' => [
                        'kind' => 'NON_NULL',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'SCALAR',
                            'name' => 'Uuid',
                            'ofType' => null,
                        ],
                    ],
                    'defaultValue' => null,
                ],
            ],
            'type' => [
                'kind' => 'NON_NULL',
                'name' => null,
                'ofType' => [
                    'kind' => 'OBJECT',
                    'name' => 'Language',
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
