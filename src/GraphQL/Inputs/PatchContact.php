<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchContact extends InputObject
{
    /**
     * @return string
     */
    public function getContactId()
    {
        return $this->get('contactId');
    }

    /**
     * @param string $value
     */
    public function setContactId($value): self
    {
        $this->set('contactId', $value);
        return $this;
    }

    public function hasContactId(): bool
    {
        return $this->has('contactId');
    }

    public function unsetContactId(): self
    {
        $this->remove('contactId');
        return $this;
    }

    /**
     * @return string
     */
    public function getPublisherId()
    {
        return $this->get('publisherId');
    }

    /**
     * @param string $value
     */
    public function setPublisherId($value): self
    {
        $this->set('publisherId', $value);
        return $this;
    }

    public function hasPublisherId(): bool
    {
        return $this->has('publisherId');
    }

    public function unsetPublisherId(): self
    {
        $this->remove('publisherId');
        return $this;
    }

    /**
     * @return string
     */
    public function getContactType()
    {
        return $this->get('contactType');
    }

    /**
     * @param string $value
     */
    public function setContactType($value): self
    {
        $this->set('contactType', $value);
        return $this;
    }

    public function hasContactType(): bool
    {
        return $this->has('contactType');
    }

    public function unsetContactType(): self
    {
        $this->remove('contactType');
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->get('email');
    }

    /**
     * @param string $value
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

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchContact', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'contactId',
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
                'name' => 'publisherId',
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
                'name' => 'contactType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'ContactType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'email',
                'description' => null,
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
