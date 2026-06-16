<?php

namespace ThothApi\GraphQL\Mutations;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\OperationRequest;

final class CreateAbstractMutation
{
    public static function field(): FieldDefinition
    {
        return \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
            'name' => 'createAbstract',
            'description' => 'Create a new abstract with the specified values',
            'args' => [
                [
                    'name' => 'markupFormat',
                    'description' => 'The markup format of the abstract',
                    'type' => [
                        'kind' => 'ENUM',
                        'name' => 'MarkupFormat',
                        'ofType' => null,
                    ],
                    'defaultValue' => null,
                ],
                [
                    'name' => 'data',
                    'description' => 'Values for abstract to be created',
                    'type' => [
                        'kind' => 'NON_NULL',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'NewAbstract',
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
                    'name' => 'Abstract',
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
