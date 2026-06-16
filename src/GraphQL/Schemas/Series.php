<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Series extends ObjectData
{
    /**
     * @return string
     */
    public function getSeriesId()
    {
        return $this->get('seriesId');
    }

    /**
     * @param string $value
     */
    public function setSeriesId($value): self
    {
        $this->set('seriesId', $value);
        return $this;
    }

    public function hasSeriesId(): bool
    {
        return $this->has('seriesId');
    }

    public function unsetSeriesId(): self
    {
        $this->remove('seriesId');
        return $this;
    }

    /**
     * @return string
     */
    public function getSeriesType()
    {
        return $this->get('seriesType');
    }

    /**
     * @param string $value
     */
    public function setSeriesType($value): self
    {
        $this->set('seriesType', $value);
        return $this;
    }

    public function hasSeriesType(): bool
    {
        return $this->has('seriesType');
    }

    public function unsetSeriesType(): self
    {
        $this->remove('seriesType');
        return $this;
    }

    /**
     * @return string
     */
    public function getSeriesName()
    {
        return $this->get('seriesName');
    }

    /**
     * @param string $value
     */
    public function setSeriesName($value): self
    {
        $this->set('seriesName', $value);
        return $this;
    }

    public function hasSeriesName(): bool
    {
        return $this->has('seriesName');
    }

    public function unsetSeriesName(): self
    {
        $this->remove('seriesName');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssnPrint()
    {
        return $this->get('issnPrint');
    }

    /**
     * @param string|null $value
     */
    public function setIssnPrint($value): self
    {
        $this->set('issnPrint', $value);
        return $this;
    }

    public function hasIssnPrint(): bool
    {
        return $this->has('issnPrint');
    }

    public function unsetIssnPrint(): self
    {
        $this->remove('issnPrint');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssnDigital()
    {
        return $this->get('issnDigital');
    }

    /**
     * @param string|null $value
     */
    public function setIssnDigital($value): self
    {
        $this->set('issnDigital', $value);
        return $this;
    }

    public function hasIssnDigital(): bool
    {
        return $this->has('issnDigital');
    }

    public function unsetIssnDigital(): self
    {
        $this->remove('issnDigital');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSeriesUrl()
    {
        return $this->get('seriesUrl');
    }

    /**
     * @param string|null $value
     */
    public function setSeriesUrl($value): self
    {
        $this->set('seriesUrl', $value);
        return $this;
    }

    public function hasSeriesUrl(): bool
    {
        return $this->has('seriesUrl');
    }

    public function unsetSeriesUrl(): self
    {
        $this->remove('seriesUrl');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSeriesDescription()
    {
        return $this->get('seriesDescription');
    }

    /**
     * @param string|null $value
     */
    public function setSeriesDescription($value): self
    {
        $this->set('seriesDescription', $value);
        return $this;
    }

    public function hasSeriesDescription(): bool
    {
        return $this->has('seriesDescription');
    }

    public function unsetSeriesDescription(): self
    {
        $this->remove('seriesDescription');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSeriesCfpUrl()
    {
        return $this->get('seriesCfpUrl');
    }

    /**
     * @param string|null $value
     */
    public function setSeriesCfpUrl($value): self
    {
        $this->set('seriesCfpUrl', $value);
        return $this;
    }

    public function hasSeriesCfpUrl(): bool
    {
        return $this->has('seriesCfpUrl');
    }

    public function unsetSeriesCfpUrl(): self
    {
        $this->remove('seriesCfpUrl');
        return $this;
    }

    /**
     * @return string
     */
    public function getImprintId()
    {
        return $this->get('imprintId');
    }

    /**
     * @param string $value
     */
    public function setImprintId($value): self
    {
        $this->set('imprintId', $value);
        return $this;
    }

    public function hasImprintId(): bool
    {
        return $this->has('imprintId');
    }

    public function unsetImprintId(): self
    {
        $this->remove('imprintId');
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
     * @return Imprint
     */
    public function getImprint()
    {
        return $this->get('imprint');
    }

    /**
     * @param Imprint $value
     */
    public function setImprint($value): self
    {
        $this->set('imprint', $value);
        return $this;
    }

    public function hasImprint(): bool
    {
        return $this->has('imprint');
    }

    public function unsetImprint(): self
    {
        $this->remove('imprint');
        return $this;
    }

    /**
     * @return Issue[]
     */
    public function getIssues()
    {
        return $this->get('issues');
    }

    /**
     * @param Issue[] $value
     */
    public function setIssues($value): self
    {
        $this->set('issues', $value);
        return $this;
    }

    public function hasIssues(): bool
    {
        return $this->has('issues');
    }

    public function unsetIssues(): self
    {
        $this->remove('issues');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Series', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'seriesId',
                'description' => 'Thoth ID of the series',
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
                'name' => 'seriesType',
                'description' => 'Type of the series',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'SeriesType',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'seriesName',
                'description' => 'Name of the series',
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
                'name' => 'issnPrint',
                'description' => 'Print ISSN (International Standard Serial Number) of the series. This represents the print media version.',
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
                'name' => 'issnDigital',
                'description' => 'Electronic ISSN (International Standard Serial Number) of the series. This represents the online version.',
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
                'name' => 'seriesUrl',
                'description' => 'URL of the series\' landing page',
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
                'name' => 'seriesDescription',
                'description' => 'Description of the series',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering series description',
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
                'name' => 'seriesCfpUrl',
                'description' => 'URL of the series\' call for proposals page',
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
                'name' => 'imprintId',
                'description' => 'Thoth ID of the imprint to which this series belongs',
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
                'name' => 'createdAt',
                'description' => 'Date and time at which the series record was created',
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
                'description' => 'Date and time at which the series record was last updated',
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
                'name' => 'imprint',
                'description' => 'Get the imprint linked to this series',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Imprint',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'issues',
                'description' => 'Get issues linked to this series',
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
                            'name' => 'IssueOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "ISSUE_ORDINAL", direction: "ASC"}',
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
                                'name' => 'Issue',
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
