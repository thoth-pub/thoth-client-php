<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Me extends ObjectData
{
    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->get('userId');
    }

    /**
     * @param string $value
     */
    public function setUserId($value): self
    {
        $this->set('userId', $value);
        return $this;
    }

    public function hasUserId(): bool
    {
        return $this->has('userId');
    }

    public function unsetUserId(): self
    {
        $this->remove('userId');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->get('email');
    }

    /**
     * @param string|null $value
     */
    public function setEmail($value): self
    {
        $this->set('email', $value);
        return $this;
    }

    public function hasEmail(): bool
    {
        return $this->has('email');
    }

    public function unsetEmail(): self
    {
        $this->remove('email');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->get('firstName');
    }

    /**
     * @param string|null $value
     */
    public function setFirstName($value): self
    {
        $this->set('firstName', $value);
        return $this;
    }

    public function hasFirstName(): bool
    {
        return $this->has('firstName');
    }

    public function unsetFirstName(): self
    {
        $this->remove('firstName');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName()
    {
        return $this->get('lastName');
    }

    /**
     * @param string|null $value
     */
    public function setLastName($value): self
    {
        $this->set('lastName', $value);
        return $this;
    }

    public function hasLastName(): bool
    {
        return $this->has('lastName');
    }

    public function unsetLastName(): self
    {
        $this->remove('lastName');
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSuperuser()
    {
        return $this->get('isSuperuser');
    }

    /**
     * @param bool $value
     */
    public function setIsSuperuser($value): self
    {
        $this->set('isSuperuser', $value);
        return $this;
    }

    public function hasIsSuperuser(): bool
    {
        return $this->has('isSuperuser');
    }

    public function unsetIsSuperuser(): self
    {
        $this->remove('isSuperuser');
        return $this;
    }

    /**
     * @return PublisherContext[]
     */
    public function getPublisherContexts()
    {
        return $this->get('publisherContexts');
    }

    /**
     * @param PublisherContext[] $value
     */
    public function setPublisherContexts($value): self
    {
        $this->set('publisherContexts', $value);
        return $this;
    }

    public function hasPublisherContexts(): bool
    {
        return $this->has('publisherContexts');
    }

    public function unsetPublisherContexts(): self
    {
        $this->remove('publisherContexts');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Me', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'userId',
                'description' => null,
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
                'name' => 'email',
                'description' => null,
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
                'name' => 'firstName',
                'description' => null,
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
                'name' => 'lastName',
                'description' => null,
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
                'name' => 'isSuperuser',
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
                'name' => 'publisherContexts',
                'description' => null,
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
                                'name' => 'PublisherContext',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
