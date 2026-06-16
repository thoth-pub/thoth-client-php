<?php

namespace ThothApi\GraphQL\Queries;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\OperationRequest;

final class ContributionQuery
{
    public static function field(): FieldDefinition
    {
        return \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
            'name' => 'contribution',
            'description' => 'Query a single contribution using its ID',
            'args' => [
                [
                    'name' => 'contributionId',
                    'description' => 'Thoth contribution ID to search on',
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
                    'name' => 'Contribution',
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
