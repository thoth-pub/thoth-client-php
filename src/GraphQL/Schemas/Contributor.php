<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Contributor extends ObjectData
{
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
     * @return Contribution[]
     */
    public function getContributions()
    {
        return $this->get('contributions');
    }

    /**
     * @param Contribution[] $value
     */
    public function setContributions($value): self
    {
        $this->set('contributions', $value);
        return $this;
    }

    public function hasContributions(): bool
    {
        return $this->has('contributions');
    }

    public function unsetContributions(): self
    {
        $this->remove('contributions');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Contributor', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'contributorId',
                'description' => 'Thoth ID of the contributor',
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
                'name' => 'firstName',
                'description' => 'Given or first name(s) of the contributor',
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
                'description' => 'Family or surname of the contributor',
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
                'name' => 'fullName',
                'description' => 'Full, serialized name of the contributor. Serialization is often culturally determined.',
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
                'name' => 'orcid',
                'description' => 'ORCID (Open Researcher and Contributor ID) of the contributor as full URL, using the HTTPS scheme and the orcid.org domain (e.g. https://orcid.org/0000-0002-1825-0097)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Orcid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'website',
                'description' => 'URL of the contributor\'s website',
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
                'name' => 'createdAt',
                'description' => 'Date and time at which the contributor record was created',
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
                'description' => 'Date and time at which the contributor record was last updated',
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
                'name' => 'contributions',
                'description' => 'Get contributions linked to this contributor',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'ContributionOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "CONTRIBUTION_TYPE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'contributionTypes',
                        'description' => 'Specific types to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'ContributionType',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                ],
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
                                'name' => 'Contribution',
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
