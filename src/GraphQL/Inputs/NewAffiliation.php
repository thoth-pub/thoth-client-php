<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewAffiliation extends InputObject
{
    /**
     * @return string
     */
    public function getContributionId()
    {
        return $this->get('contributionId');
    }

    /**
     * @param string $value
     */
    public function setContributionId($value): self
    {
        $this->set('contributionId', $value);
        return $this;
    }

    public function hasContributionId(): bool
    {
        return $this->has('contributionId');
    }

    public function unsetContributionId(): self
    {
        $this->remove('contributionId');
        return $this;
    }

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
     * @return int
     */
    public function getAffiliationOrdinal()
    {
        return $this->get('affiliationOrdinal');
    }

    /**
     * @param int $value
     */
    public function setAffiliationOrdinal($value): self
    {
        $this->set('affiliationOrdinal', $value);
        return $this;
    }

    public function hasAffiliationOrdinal(): bool
    {
        return $this->has('affiliationOrdinal');
    }

    public function unsetAffiliationOrdinal(): self
    {
        $this->remove('affiliationOrdinal');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPosition()
    {
        return $this->get('position');
    }

    /**
     * @param string|null $value
     */
    public function setPosition($value): self
    {
        $this->set('position', $value);
        return $this;
    }

    public function hasPosition(): bool
    {
        return $this->has('position');
    }

    public function unsetPosition(): self
    {
        $this->remove('position');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewAffiliation', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'contributionId',
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
                'name' => 'institutionId',
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
                'name' => 'affiliationOrdinal',
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
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'position',
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
