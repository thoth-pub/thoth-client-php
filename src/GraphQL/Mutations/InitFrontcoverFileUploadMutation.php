<?php

namespace ThothApi\GraphQL\Mutations;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\OperationRequest;

final class InitFrontcoverFileUploadMutation
{
    public static function field(): FieldDefinition
    {
        return \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
            'name' => 'initFrontcoverFileUpload',
            'description' => 'Start uploading a front cover image for a given work. Returns an upload session ID, a presigned S3 PUT URL, and required PUT headers.',
            'args' => [
                [
                    'name' => 'data',
                    'description' => 'Input for starting a front cover upload',
                    'type' => [
                        'kind' => 'NON_NULL',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'NewFrontcoverFileUpload',
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
                    'name' => 'FileUploadResponse',
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
