<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchLocation extends InputObject
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

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchLocation', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'locationId',
                'description' => null,
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
                'name' => 'publicationId',
                'description' => null,
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
                'name' => 'landingPage',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'fullTextUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'locationPlatform',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'LocationPlatform',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'canonical',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Boolean',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'checksum',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'checksumAlgorithm',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'ChecksumAlgorithm',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
