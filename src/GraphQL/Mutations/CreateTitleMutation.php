<?php

namespace ThothApi\GraphQL\Mutations;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\OperationRequest;

final class CreateTitleMutation
{
    public static function field(): FieldDefinition
    {
        return \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
            'name' => 'createTitle',
            'description' => 'Create a new title with the specified values',
            'args' => [
                [
                    'name' => 'markupFormat',
                    'description' => 'The markup format of the title',
                    'type' => [
                        'kind' => 'ENUM',
                        'name' => 'MarkupFormat',
                        'ofType' => null,
                    ],
                    'defaultValue' => null,
                ],
                [
                    'name' => 'data',
                    'description' => 'Values for title to be created',
                    'type' => [
                        'kind' => 'NON_NULL',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'NewTitle',
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
                    'name' => 'Title',
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
