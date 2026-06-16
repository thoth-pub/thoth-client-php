<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchInstitution extends InputObject
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

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchInstitution', [
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
                'name' => 'institutionName',
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
                'name' => 'institutionDoi',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'ror',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Ror',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'countryCode',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'CountryCode',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
