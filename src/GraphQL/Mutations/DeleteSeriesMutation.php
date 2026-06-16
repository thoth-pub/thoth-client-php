<?php

namespace ThothApi\GraphQL\Mutations;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\OperationRequest;

final class DeleteSeriesMutation
{
    public static function field(): FieldDefinition
    {
        return \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
            'name' => 'deleteSeries',
            'description' => 'Delete a single series using its ID',
            'args' => [
                [
                    'name' => 'seriesId',
                    'description' => 'Thoth ID of series to be deleted',
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
                    'name' => 'Series',
                    'ofType' => null,
                ],
            ],
            'isDeprecated' => false,
            'deprecationReason' => null,
        ]);
    }

    public static function operation(array $arguments = [], array $selection = []): OperationRequest
    {
        return new OperationRequest('mutation', self::field(), $arguments, $selection);
    }
}
