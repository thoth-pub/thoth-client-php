<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Institution extends ObjectData
{
    /**
     * @return string
     */
    public function getInstitutionId()
    {
        return $this->get('institutionId');
    }

    /**
     * @param string $value
     */
    public function setInstitutionId($value): self
    {
        $this->set('institutionId', $value);
        return $this;
    }

    public function hasInstitutionId(): bool
    {
        return $this->has('institutionId');
    }

    public function unsetInstitutionId(): self
    {
        $this->remove('institutionId');
        return $this;
    }

    /**
     * @return string
     */
    public function getInstitutionName()
    {
        return $this->get('institutionName');
    }

    /**
     * @param string $value
     */
    public function setInstitutionName($value): self
    {
        $this->set('institutionName', $value);
        return $this;
    }

    public function hasInstitutionName(): bool
    {
        return $this->has('institutionName');
    }

    public function unsetInstitutionName(): self
    {
        $this->remove('institutionName');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInstitutionDoi()
    {
        return $this->get('institutionDoi');
    }

    /**
     * @param string|null $value
     */
    public function setInstitutionDoi($value): self
    {
        $this->set('institutionDoi', $value);
        return $this;
    }

    public function hasInstitutionDoi(): bool
    {
        return $this->has('institutionDoi');
    }

    public function unsetInstitutionDoi(): self
    {
        $this->remove('institutionDoi');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->get('countryCode');
    }

    /**
     * @param string|null $value
     */
    public function setCountryCode($value): self
    {
        $this->set('countryCode', $value);
        return $this;
    }

    public function hasCountryCode(): bool
    {
        return $this->has('countryCode');
    }

    public function unsetCountryCode(): self
    {
        $this->remove('countryCode');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRor()
    {
        return $this->get('ror');
    }

    /**
     * @param string|null $value
     */
    public function setRor($value): self
    {
        $this->set('ror', $value);
        return $this;
    }

    public function hasRor(): bool
    {
        return $this->has('ror');
    }

    public function unsetRor(): self
    {
        $this->remove('ror');
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
     * @return Funding[]
     */
    public function getFundings()
    {
        return $this->get('fundings');
    }

    /**
     * @param Funding[] $value
     */
    public function setFundings($value): self
    {
        $this->set('fundings', $value);
        return $this;
    }

    public function hasFundings(): bool
    {
        return $this->has('fundings');
    }

    public function unsetFundings(): self
    {
        $this->remove('fundings');
        return $this;
    }

    /**
     * @return Affiliation[]
     */
    public function getAffiliations()
    {
        return $this->get('affiliations');
    }

    /**
     * @param Affiliation[] $value
     */
    public function setAffiliations($value): self
    {
        $this->set('affiliations', $value);
        return $this;
    }

    public function hasAffiliations(): bool
    {
        return $this->has('affiliations');
    }

    public function unsetAffiliations(): self
    {
        $this->remove('affiliations');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Institution', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'institutionId',
                'description' => 'Thoth ID of the institution',
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
                'name' => 'institutionName',
                'description' => 'Name of the institution',
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
                'name' => 'institutionDoi',
                'description' => 'Digital Object Identifier of the organisation as full URL, using the HTTPS scheme and the doi.org domain (e.g. https://doi.org/10.13039/100014013)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'countryCode',
                'description' => 'Three-letter ISO 3166-1 code representing the country where this institution is based',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'CountryCode',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'ror',
                'description' => 'Research Organisation Registry identifier of the organisation as full URL, using the HTTPS scheme and the ror.org domain (e.g. https://ror.org/051z6e826)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Ror',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the institution record was created',
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
                'description' => 'Date and time at which the institution record was last updated',
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
                'name' => 'fundings',
                'description' => 'Get fundings linked to this institution',
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
                            'name' => 'FundingOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "PROGRAM", direction: "ASC"}',
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
                                'name' => 'Funding',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'affiliations',
                'description' => 'Get affiliations linked to this institution',
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
                            'name' => 'AffiliationOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "AFFILIATION_ORDINAL", direction: "ASC"}',
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
                                'name' => 'Affiliation',
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
