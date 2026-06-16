<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewContributor extends InputObject
{
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
     * @return string
     */
    public function getLastName()
    {
        return $this->get('lastName');
    }

    /**
     * @param string $value
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
     * @return string
     */
    public function getFullName()
    {
        return $this->get('fullName');
    }

    /**
     * @param string $value
     */
    public function setFullName($value): self
    {
        $this->set('fullName', $value);
        return $this;
    }

    public function hasFullName(): bool
    {
        return $this->has('fullName');
    }

    public function unsetFullName(): self
    {
        $this->remove('fullName');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrcid()
    {
        return $this->get('orcid');
    }

    /**
     * @param string|null $value
     */
    public function setOrcid($value): self
    {
        $this->set('orcid', $value);
        return $this;
    }

    public function hasOrcid(): bool
    {
        return $this->has('orcid');
    }

    public function unsetOrcid(): self
    {
        $this->remove('orcid');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->get('website');
    }

    /**
     * @param string|null $value
     */
    public function setWebsite($value): self
    {
        $this->set('website', $value);
        return $this;
    }

    public function hasWebsite(): bool
    {
        return $this->has('website');
    }

    public function unsetWebsite(): self
    {
        $this->remove('website');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewContributor', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'firstName',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'lastName',
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
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'fullName',
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
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'orcid',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Orcid',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'website',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
