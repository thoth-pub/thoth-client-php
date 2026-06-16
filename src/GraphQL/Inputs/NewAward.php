<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewAward extends InputObject
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
    public function getTitle()
    {
        return $this->get('title');
    }

    /**
     * @param string $value
     */
    public function setTitle($value): self
    {
        $this->set('title', $value);
        return $this;
    }

    public function hasTitle(): bool
    {
        return $this->has('title');
    }

    public function unsetTitle(): self
    {
        $this->remove('title');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl()
    {
        return $this->get('url');
    }

    /**
     * @param string|null $value
     */
    public function setUrl($value): self
    {
        $this->set('url', $value);
        return $this;
    }

    public function hasUrl(): bool
    {
        return $this->has('url');
    }

    public function unsetUrl(): self
    {
        $this->remove('url');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategory()
    {
        return $this->get('category');
    }

    /**
     * @param string|null $value
     */
    public function setCategory($value): self
    {
        $this->set('category', $value);
        return $this;
    }

    public function hasCategory(): bool
    {
        return $this->has('category');
    }

    public function unsetCategory(): self
    {
        $this->remove('category');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getYear()
    {
        return $this->get('year');
    }

    /**
     * @param string|null $value
     */
    public function setYear($value): self
    {
        $this->set('year', $value);
        return $this;
    }

    public function hasYear(): bool
    {
        return $this->has('year');
    }

    public function unsetYear(): self
    {
        $this->remove('year');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getJury()
    {
        return $this->get('jury');
    }

    /**
     * @param string|null $value
     */
    public function setJury($value): self
    {
        $this->set('jury', $value);
        return $this;
    }

    public function hasJury(): bool
    {
        return $this->has('jury');
    }

    public function unsetJury(): self
    {
        $this->remove('jury');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry()
    {
        return $this->get('country');
    }

    /**
     * @param string|null $value
     */
    public function setCountry($value): self
    {
        $this->set('country', $value);
        return $this;
    }

    public function hasCountry(): bool
    {
        return $this->has('country');
    }

    public function unsetCountry(): self
    {
        $this->remove('country');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrizeStatement()
    {
        return $this->get('prizeStatement');
    }

    /**
     * @param string|null $value
     */
    public function setPrizeStatement($value): self
    {
        $this->set('prizeStatement', $value);
        return $this;
    }

    public function hasPrizeStatement(): bool
    {
        return $this->has('prizeStatement');
    }

    public function unsetPrizeStatement(): self
    {
        $this->remove('prizeStatement');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRole()
    {
        return $this->get('role');
    }

    /**
     * @param string|null $value
     */
    public function setRole($value): self
    {
        $this->set('role', $value);
        return $this;
    }

    public function hasRole(): bool
    {
        return $this->has('role');
    }

    public function unsetRole(): self
    {
        $this->remove('role');
        return $this;
    }

    /**
     * @return int
     */
    public function getAwardOrdinal()
    {
        return $this->get('awardOrdinal');
    }

    /**
     * @param int $value
     */
    public function setAwardOrdinal($value): self
    {
        $this->set('awardOrdinal', $value);
        return $this;
    }

    public function hasAwardOrdinal(): bool
    {
        return $this->has('awardOrdinal');
    }

    public function unsetAwardOrdinal(): self
    {
        $this->remove('awardOrdinal');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewAward', [
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
                'name' => 'title',
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
                'name' => 'url',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'category',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'year',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'jury',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'country',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'CountryCode',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'prizeStatement',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'role',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AwardRole',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'awardOrdinal',
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
