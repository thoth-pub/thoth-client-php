<?php

namespace ThothApi\GraphQL\Mutations;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\OperationRequest;

final class UpdateEndorsementMutation
{
    public static function field(): FieldDefinition
    {
        return \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
            'name' => 'updateEndorsement',
            'description' => 'Update an existing endorsement with the specified values',
            'args' => [
                [
                    'name' => 'markupFormat',
                    'description' => 'The markup format of the endorsement rich-text fields',
                    'type' => [
                        'kind' => 'ENUM',
                        'name' => 'MarkupFormat',
                        'ofType' => null,
                    ],
                    'defaultValue' => null,
                ],
                [
                    'name' => 'data',
                    'description' => 'Values to apply to existing endorsement',
                    'type' => [
                        'kind' => 'NON_NULL',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'PatchEndorsement',
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
                    'name' => 'Endorsement',
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
