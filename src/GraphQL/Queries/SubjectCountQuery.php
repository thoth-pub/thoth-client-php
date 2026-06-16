<?php

namespace ThothApi\GraphQL\Queries;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\OperationRequest;

final class SubjectCountQuery
{
    public static function field(): FieldDefinition
    {
        return \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
            'name' => 'subjectCount',
            'description' => 'Get the total number of subjects associated to works',
            'args' => [
                [
                    'name' => 'filter',
                    'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on subject_code',
                    'type' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                    'defaultValue' => '""',
                ],
                [
                    'name' => 'subjectTypes',
                    'description' => 'Specific types to filter by',
                    'type' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'ENUM',
                                'name' => 'SubjectType',
                                'ofType' => null,
                            ],
                        ],
                    ],
                    'defaultValue' => '[]',
                ],
                [
                    'name' => 'workStatuses',
                    'description' => 'Specific statuses to filter by',
                    'type' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'ENUM',
                                'name' => 'WorkStatus',
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
