<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class CompleteFileUpload extends InputObject
{
    /**
     * @return string
     */
    public function getFileUploadId()
    {
        return $this->get('fileUploadId');
    }

    /**
     * @param string $value
     */
    public function setFileUploadId($value): self
    {
        $this->set('fileUploadId', $value);
        return $this;
    }

    public function hasFileUploadId(): bool
    {
        return $this->has('fileUploadId');
    }

    public function unsetFileUploadId(): self
    {
        $this->remove('fileUploadId');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('CompleteFileUpload', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'fileUploadId',
                'description' => 'ID of the upload session to complete.',
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
            ])
        ]);
    }
}
