<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewContribution extends InputObject
{
    /**
     * @return string
     */
    public function getWorkId()
    {
        return $this->get('workId');
    }

    /**
     * @param string $value
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
     * @return string
     */
    public function getContributorId()
    {
        return $this->get('contributorId');
    }

    /**
     * @param string $value
     */
    public function setContributorId($value): self
    {
        $this->set('contributorId', $value);
        return $this;
    }

    public function hasContributorId(): bool
    {
        return $this->has('contributorId');
    }

    public function unsetContributorId(): self
    {
        $this->remove('contributorId');
        return $this;
    }

    /**
     * @return string
     */
    public function getContributionType()
    {
        return $this->get('contributionType');
    }

    /**
     * @param string $value
     */
    public function setContributionType($value): self
    {
        $this->set('contributionType', $value);
        return $this;
    }

    public function hasContributionType(): bool
    {
        return $this->has('contributionType');
    }

    public function unsetContributionType(): self
    {
        $this->remove('contributionType');
        return $this;
    }

    /**
     * @return bool
     */
    public function getMainContribution()
    {
        return $this->get('mainContribution');
    }

    /**
     * @param bool $value
     */
    public function setMainContribution($value): self
    {
        $this->set('mainContribution', $value);
        return $this;
    }

    public function hasMainContribution(): bool
    {
        return $this->has('mainContribution');
    }

    public function unsetMainContribution(): self
    {
        $this->remove('mainContribution');
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
     * @return int
     */
    public function getContributionOrdinal()
    {
        return $this->get('contributionOrdinal');
    }

    /**
     * @param int $value
     */
    public function setContributionOrdinal($value): self
    {
        $this->set('contributionOrdinal', $value);
        return $this;
    }

    public function hasContributionOrdinal(): bool
    {
        return $this->has('contributionOrdinal');
    }

    public function unsetContributionOrdinal(): self
    {
        $this->remove('contributionOrdinal');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewContribution', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'workId',
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
                'name' => 'contributorId',
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
                'name' => 'contributionType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'ContributionType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'mainContribution',
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
                'name' => 'contributionOrdinal',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
