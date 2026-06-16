<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class PublisherContext extends ObjectData
{
    /**
     * @return Publisher
     */
    public function getPublisher()
    {
        return $this->get('publisher');
    }

    /**
     * @param Publisher $value
     */
    public function setPublisher($value): self
    {
        $this->set('publisher', $value);
        return $this;
    }

    public function hasPublisher(): bool
    {
        return $this->has('publisher');
    }

    public function unsetPublisher(): self
    {
        $this->remove('publisher');
        return $this;
    }

    /**
     * @return PublisherPermissions
     */
    public function getPermissions()
    {
        return $this->get('permissions');
    }

    /**
     * @param PublisherPermissions $value
     */
    public function setPermissions($value): self
    {
        $this->set('permissions', $value);
        return $this;
    }

    public function hasPermissions(): bool
    {
        return $this->has('permissions');
    }

    public function unsetPermissions(): self
    {
        $this->remove('permissions');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('PublisherContext', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'publisher',
                'description' => null,
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publisher',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'permissions',
                'description' => null,
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'PublisherPermissions',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
