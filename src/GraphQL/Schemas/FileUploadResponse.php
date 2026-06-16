<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class FileUploadResponse extends ObjectData
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

    /**
     * @return string
     */
    public function getUploadUrl()
    {
        return $this->get('uploadUrl');
    }

    /**
     * @param string $value
     */
    public function setUploadUrl($value): self
    {
        $this->set('uploadUrl', $value);
        return $this;
    }

    public function hasUploadUrl(): bool
    {
        return $this->has('uploadUrl');
    }

    public function unsetUploadUrl(): self
    {
        $this->remove('uploadUrl');
        return $this;
    }

    /**
     * @return UploadRequestHeader[]
     */
    public function getUploadHeaders()
    {
        return $this->get('uploadHeaders');
    }

    /**
     * @param UploadRequestHeader[] $value
     */
    public function setUploadHeaders($value): self
    {
        $this->set('uploadHeaders', $value);
        return $this;
    }

    public function hasUploadHeaders(): bool
    {
        return $this->has('uploadHeaders');
    }

    public function unsetUploadHeaders(): self
    {
        $this->remove('uploadHeaders');
        return $this;
    }

    /**
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->get('expiresAt');
    }

    /**
     * @param string $value
     */
    public function setExpiresAt($value): self
    {
        $this->set('expiresAt', $value);
        return $this;
    }

    public function hasExpiresAt(): bool
    {
        return $this->has('expiresAt');
    }

    public function unsetExpiresAt(): self
    {
        $this->remove('expiresAt');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('FileUploadResponse', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'fileUploadId',
                'description' => 'ID of the upload session.',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Uuid',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'uploadUrl',
                'description' => 'Presigned S3 PUT URL for uploading the file.',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'uploadHeaders',
                'description' => 'Headers that must be sent with the HTTP PUT request to uploadUrl.',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'UploadRequestHeader',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'expiresAt',
                'description' => 'Time when the upload URL expires.',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Timestamp',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
