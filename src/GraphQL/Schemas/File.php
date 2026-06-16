<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class File extends ObjectData
{
    /**
     * @return string
     */
    public function getFileId()
    {
        return $this->get('fileId');
    }

    /**
     * @param string $value
     */
    public function setFileId($value): self
    {
        $this->set('fileId', $value);
        return $this;
    }

    public function hasFileId(): bool
    {
        return $this->has('fileId');
    }

    public function unsetFileId(): self
    {
        $this->remove('fileId');
        return $this;
    }

    /**
     * @return string
     */
    public function getFileType()
    {
        return $this->get('fileType');
    }

    /**
     * @param string $value
     */
    public function setFileType($value): self
    {
        $this->set('fileType', $value);
        return $this;
    }

    public function hasFileType(): bool
    {
        return $this->has('fileType');
    }

    public function unsetFileType(): self
    {
        $this->remove('fileType');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWorkId()
    {
        return $this->get('workId');
    }

    /**
     * @param string|null $value
     */
    public function setWorkId($value): self
    {
        $this->set('workId', $value);
        return $this;
    }

    public function hasWorkId(): bool
    {
        return $this->has('workId');
    }

    public function unsetWorkId(): self
    {
        $this->remove('workId');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPublicationId()
    {
        return $this->get('publicationId');
    }

    /**
     * @param string|null $value
     */
    public function setPublicationId($value): self
    {
        $this->set('publicationId', $value);
        return $this;
    }

    public function hasPublicationId(): bool
    {
        return $this->has('publicationId');
    }

    public function unsetPublicationId(): self
    {
        $this->remove('publicationId');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdditionalResourceId()
    {
        return $this->get('additionalResourceId');
    }

    /**
     * @param string|null $value
     */
    public function setAdditionalResourceId($value): self
    {
        $this->set('additionalResourceId', $value);
        return $this;
    }

    public function hasAdditionalResourceId(): bool
    {
        return $this->has('additionalResourceId');
    }

    public function unsetAdditionalResourceId(): self
    {
        $this->remove('additionalResourceId');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWorkFeaturedVideoId()
    {
        return $this->get('workFeaturedVideoId');
    }

    /**
     * @param string|null $value
     */
    public function setWorkFeaturedVideoId($value): self
    {
        $this->set('workFeaturedVideoId', $value);
        return $this;
    }

    public function hasWorkFeaturedVideoId(): bool
    {
        return $this->has('workFeaturedVideoId');
    }

    public function unsetWorkFeaturedVideoId(): self
    {
        $this->remove('workFeaturedVideoId');
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectKey()
    {
        return $this->get('objectKey');
    }

    /**
     * @param string $value
     */
    public function setObjectKey($value): self
    {
        $this->set('objectKey', $value);
        return $this;
    }

    public function hasObjectKey(): bool
    {
        return $this->has('objectKey');
    }

    public function unsetObjectKey(): self
    {
        $this->remove('objectKey');
        return $this;
    }

    /**
     * @return string
     */
    public function getCdnUrl()
    {
        return $this->get('cdnUrl');
    }

    /**
     * @param string $value
     */
    public function setCdnUrl($value): self
    {
        $this->set('cdnUrl', $value);
        return $this;
    }

    public function hasCdnUrl(): bool
    {
        return $this->has('cdnUrl');
    }

    public function unsetCdnUrl(): self
    {
        $this->remove('cdnUrl');
        return $this;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->get('mimeType');
    }

    /**
     * @param string $value
     */
    public function setMimeType($value): self
    {
        $this->set('mimeType', $value);
        return $this;
    }

    public function hasMimeType(): bool
    {
        return $this->has('mimeType');
    }

    public function unsetMimeType(): self
    {
        $this->remove('mimeType');
        return $this;
    }

    /**
     * @return int
     */
    public function getBytes()
    {
        return $this->get('bytes');
    }

    /**
     * @param int $value
     */
    public function setBytes($value): self
    {
        $this->set('bytes', $value);
        return $this;
    }

    public function hasBytes(): bool
    {
        return $this->has('bytes');
    }

    public function unsetBytes(): self
    {
        $this->remove('bytes');
        return $this;
    }

    /**
     * @return string
     */
    public function getSha256()
    {
        return $this->get('sha256');
    }

    /**
     * @param string $value
     */
    public function setSha256($value): self
    {
        $this->set('sha256', $value);
        return $this;
    }

    public function hasSha256(): bool
    {
        return $this->has('sha256');
    }

    public function unsetSha256(): self
    {
        $this->remove('sha256');
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->get('createdAt');
    }

    /**
     * @param string $value
     */
    public function setCreatedAt($value): self
    {
        $this->set('createdAt', $value);
        return $this;
    }

    public function hasCreatedAt(): bool
    {
        return $this->has('createdAt');
    }

    public function unsetCreatedAt(): self
    {
        $this->remove('createdAt');
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string $value
     */
    public function setUpdatedAt($value): self
    {
        $this->set('updatedAt', $value);
        return $this;
    }

    public function hasUpdatedAt(): bool
    {
        return $this->has('updatedAt');
    }

    public function unsetUpdatedAt(): self
    {
        $this->remove('updatedAt');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('File', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'fileId',
                'description' => 'Thoth ID of the file',
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
                'name' => 'fileType',
                'description' => 'Type of file (publication, frontcover, additional_resource, or work_featured_video)',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'FileType',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workId',
                'description' => 'Thoth ID of the work (for frontcovers)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Uuid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'publicationId',
                'description' => 'Thoth ID of the publication (for publication files)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Uuid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'additionalResourceId',
                'description' => 'Thoth ID of the additional resource (for additional resource files)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Uuid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workFeaturedVideoId',
                'description' => 'Thoth ID of the featured video (for featured video files)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Uuid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'objectKey',
                'description' => 'S3 object key (canonical DOI-based path)',
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
                'name' => 'cdnUrl',
                'description' => 'Public CDN URL',
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
                'name' => 'mimeType',
                'description' => 'MIME type used when serving the file',
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
                'name' => 'bytes',
                'description' => 'Size of the file in bytes',
                'args' => [],
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
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'sha256',
                'description' => 'SHA-256 checksum of the stored file',
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
                'name' => 'createdAt',
                'description' => 'Date and time at which the file record was created',
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
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updatedAt',
                'description' => 'Date and time at which the file record was last updated',
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
