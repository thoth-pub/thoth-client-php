<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Award extends ObjectData
{
    /**
     * @return string
     */
    public function getAwardId()
    {
        return $this->get('awardId');
    }

    /**
     * @param string $value
     */
    public function setAwardId($value): self
    {
        $this->set('awardId', $value);
        return $this;
    }

    public function hasAwardId(): bool
    {
        return $this->has('awardId');
    }

    public function unsetAwardId(): self
    {
        $this->remove('awardId');
        return $this;
    }

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
     * @return Work
     */
    public function getWork()
    {
        return $this->get('work');
    }

    /**
     * @param Work $value
     */
    public function setWork($value): self
    {
        $this->set('work', $value);
        return $this;
    }

    public function hasWork(): bool
    {
        return $this->has('work');
    }

    public function unsetWork(): self
    {
        $this->remove('work');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Award', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'awardId',
                'description' => 'Thoth ID of the award',
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
                'name' => 'workId',
                'description' => 'Thoth ID of the work to which this award belongs',
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
                'name' => 'title',
                'description' => 'Title of the award',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering title',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
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
                'name' => 'url',
                'description' => 'URL of the award page',
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
                'name' => 'category',
                'description' => 'Category of the award',
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
                'name' => 'year',
                'description' => 'Year or year span associated with the award',
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
                'name' => 'jury',
                'description' => 'Jury associated with the award',
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
                'name' => 'country',
                'description' => 'Country associated with the award',
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
                'name' => 'role',
                'description' => 'Role of the work in this award',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AwardRole',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'prizeStatement',
                'description' => 'Prize statement for this award',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering prize statement',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'awardOrdinal',
                'description' => 'Number representing this award\'s position in an ordered list of awards within the work',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the award record was created',
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
                'description' => 'Date and time at which the award record was last updated',
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
                'name' => 'work',
                'description' => 'Get the work linked to this award',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Work',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
