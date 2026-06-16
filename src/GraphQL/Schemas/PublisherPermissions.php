<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class PublisherPermissions extends ObjectData
{
    /**
     * @return bool
     */
    public function getPublisherAdmin()
    {
        return $this->get('publisherAdmin');
    }

    /**
     * @param bool $value
     */
    public function setPublisherAdmin($value): self
    {
        $this->set('publisherAdmin', $value);
        return $this;
    }

    public function hasPublisherAdmin(): bool
    {
        return $this->has('publisherAdmin');
    }

    public function unsetPublisherAdmin(): self
    {
        $this->remove('publisherAdmin');
        return $this;
    }

    /**
     * @return bool
     */
    public function getWorkLifecycle()
    {
        return $this->get('workLifecycle');
    }

    /**
     * @param bool $value
     */
    public function setWorkLifecycle($value): self
    {
        $this->set('workLifecycle', $value);
        return $this;
    }

    public function hasWorkLifecycle(): bool
    {
        return $this->has('workLifecycle');
    }

    public function unsetWorkLifecycle(): self
    {
        $this->remove('workLifecycle');
        return $this;
    }

    /**
     * @return bool
     */
    public function getCdnWrite()
    {
        return $this->get('cdnWrite');
    }

    /**
     * @param bool $value
     */
    public function setCdnWrite($value): self
    {
        $this->set('cdnWrite', $value);
        return $this;
    }

    public function hasCdnWrite(): bool
    {
        return $this->has('cdnWrite');
    }

    public function unsetCdnWrite(): self
    {
        $this->remove('cdnWrite');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('PublisherPermissions', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'publisherAdmin',
                'description' => null,
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
                'name' => 'workLifecycle',
                'description' => null,
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
                'name' => 'cdnWrite',
                'description' => null,
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
            ])
        ]);
    }
}
