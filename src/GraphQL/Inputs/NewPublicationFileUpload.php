<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewPublicationFileUpload extends InputObject
{
    /**
     * @return string
     */
    public function getPublicationId()
    {
        return $this->get('publicationId');
    }

    /**
     * @param string $value
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
     * @return string
     */
    public function getDeclaredMimeType()
    {
        return $this->get('declaredMimeType');
    }

    /**
     * @param string $value
     */
    public function setDeclaredMimeType($value): self
    {
        $this->set('declaredMimeType', $value);
        return $this;
    }

    public function hasDeclaredMimeType(): bool
    {
        return $this->has('declaredMimeType');
    }

    public function unsetDeclaredMimeType(): self
    {
        $this->remove('declaredMimeType');
        return $this;
    }

    /**
     * @return string
     */
    public function getDeclaredExtension()
    {
        return $this->get('declaredExtension');
    }

    /**
     * @param string $value
     */
    public function setDeclaredExtension($value): self
    {
        $this->set('declaredExtension', $value);
        return $this;
    }

    public function hasDeclaredExtension(): bool
    {
        return $this->has('declaredExtension');
    }

    public function unsetDeclaredExtension(): self
    {
        $this->remove('declaredExtension');
        return $this;
    }

    /**
     * @return string
     */
    public function getDeclaredSha256()
    {
        return $this->get('declaredSha256');
    }

    /**
     * @param string $value
     */
    public function setDeclaredSha256($value): self
    {
        $this->set('declaredSha256', $value);
        return $this;
    }

    public function hasDeclaredSha256(): bool
    {
        return $this->has('declaredSha256');
    }

    public function unsetDeclaredSha256(): self
    {
        $this->remove('declaredSha256');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewPublicationFileUpload', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'publicationId',
                'description' => 'Thoth ID of the publication linked to this file.',
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
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'declaredMimeType',
                'description' => 'MIME type declared by the client (used for validation and in the presigned URL).',
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'declaredExtension',
                'description' => 'File extension to use in the final canonical key, e.g. \'pdf\', \'epub\', \'xml\'.',
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'declaredSha256',
                'description' => 'SHA-256 checksum of the file, hex-encoded.',
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
