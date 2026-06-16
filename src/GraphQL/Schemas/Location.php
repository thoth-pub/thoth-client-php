<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Location extends ObjectData
{
    /**
     * @return string
     */
    public function getLocationId()
    {
        return $this->get('locationId');
    }

    /**
     * @param string $value
     */
    public function setLocationId($value): self
    {
        $this->set('locationId', $value);
        return $this;
    }

    public function hasLocationId(): bool
    {
        return $this->has('locationId');
    }

    public function unsetLocationId(): self
    {
        $this->remove('locationId');
        return $this;
    }

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
     * @return string|null
     */
    public function getLandingPage()
    {
        return $this->get('landingPage');
    }

    /**
     * @param string|null $value
     */
    public function setLandingPage($value): self
    {
        $this->set('landingPage', $value);
        return $this;
    }

    public function hasLandingPage(): bool
    {
        return $this->has('landingPage');
    }

    public function unsetLandingPage(): self
    {
        $this->remove('landingPage');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFullTextUrl()
    {
        return $this->get('fullTextUrl');
    }

    /**
     * @param string|null $value
     */
    public function setFullTextUrl($value): self
    {
        $this->set('fullTextUrl', $value);
        return $this;
    }

    public function hasFullTextUrl(): bool
    {
        return $this->has('fullTextUrl');
    }

    public function unsetFullTextUrl(): self
    {
        $this->remove('fullTextUrl');
        return $this;
    }

    /**
     * @return string
     */
    public function getLocationPlatform()
    {
        return $this->get('locationPlatform');
    }

    /**
     * @param string $value
     */
    public function setLocationPlatform($value): self
    {
        $this->set('locationPlatform', $value);
        return $this;
    }

    public function hasLocationPlatform(): bool
    {
        return $this->has('locationPlatform');
    }

    public function unsetLocationPlatform(): self
    {
        $this->remove('locationPlatform');
        return $this;
    }

    /**
     * @return bool
     */
    public function getCanonical()
    {
        return $this->get('canonical');
    }

    /**
     * @param bool $value
     */
    public function setCanonical($value): self
    {
        $this->set('canonical', $value);
        return $this;
    }

    public function hasCanonical(): bool
    {
        return $this->has('canonical');
    }

    public function unsetCanonical(): self
    {
        $this->remove('canonical');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getChecksum()
    {
        return $this->get('checksum');
    }

    /**
     * @param string|null $value
     */
    public function setChecksum($value): self
    {
        $this->set('checksum', $value);
        return $this;
    }

    public function hasChecksum(): bool
    {
        return $this->has('checksum');
    }

    public function unsetChecksum(): self
    {
        $this->remove('checksum');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getChecksumAlgorithm()
    {
        return $this->get('checksumAlgorithm');
    }

    /**
     * @param string|null $value
     */
    public function setChecksumAlgorithm($value): self
    {
        $this->set('checksumAlgorithm', $value);
        return $this;
    }

    public function hasChecksumAlgorithm(): bool
    {
        return $this->has('checksumAlgorithm');
    }

    public function unsetChecksumAlgorithm(): self
    {
        $this->remove('checksumAlgorithm');
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

    /**
     * @return Publication
     */
    public function getPublication()
    {
        return $this->get('publication');
    }

    /**
     * @param Publication $value
     */
    public function setPublication($value): self
    {
        $this->set('publication', $value);
        return $this;
    }

    public function hasPublication(): bool
    {
        return $this->has('publication');
    }

    public function unsetPublication(): self
    {
        $this->remove('publication');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Location', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'locationId',
                'description' => 'Thoth ID of the location',
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
                'name' => 'publicationId',
                'description' => 'Thoth ID of the publication linked to this location',
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
                'name' => 'landingPage',
                'description' => 'Public-facing URL via which the publication can be accessed',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'fullTextUrl',
                'description' => 'Direct link to the full text file',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'locationPlatform',
                'description' => 'Platform where the publication is hosted or can be acquired',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'LocationPlatform',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'canonical',
                'description' => 'Whether this is the canonical location for this specific publication (e.g. the main platform on which the print version is sold, or the official version of record hosted on the publisher\'s own web server)',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Boolean',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'checksum',
                'description' => 'Checksum of the full text file as returned by the platform',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'checksumAlgorithm',
                'description' => 'Algorithm used to generate the checksum (MD5, SHA-256 or SHA-1)',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'ChecksumAlgorithm',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the location record was created',
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
                'description' => 'Date and time at which the location record was last updated',
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
                'name' => 'publication',
                'description' => 'Get the publication linked to this location',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publication',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
