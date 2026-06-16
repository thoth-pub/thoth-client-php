<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Imprint extends ObjectData
{
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
    public function getImprintName()
    {
        return $this->get('imprintName');
    }

    /**
     * @param string $value
     */
    public function setImprintName($value): self
    {
        $this->set('imprintName', $value);
        return $this;
    }

    public function hasImprintName(): bool
    {
        return $this->has('imprintName');
    }

    public function unsetImprintName(): self
    {
        $this->remove('imprintName');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImprintUrl()
    {
        return $this->get('imprintUrl');
    }

    /**
     * @param string|null $value
     */
    public function setImprintUrl($value): self
    {
        $this->set('imprintUrl', $value);
        return $this;
    }

    public function hasImprintUrl(): bool
    {
        return $this->has('imprintUrl');
    }

    public function unsetImprintUrl(): self
    {
        $this->remove('imprintUrl');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCrossmarkDoi()
    {
        return $this->get('crossmarkDoi');
    }

    /**
     * @param string|null $value
     */
    public function setCrossmarkDoi($value): self
    {
        $this->set('crossmarkDoi', $value);
        return $this;
    }

    public function hasCrossmarkDoi(): bool
    {
        return $this->has('crossmarkDoi');
    }

    public function unsetCrossmarkDoi(): self
    {
        $this->remove('crossmarkDoi');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getS3Bucket()
    {
        return $this->get('s3Bucket');
    }

    /**
     * @param string|null $value
     */
    public function setS3Bucket($value): self
    {
        $this->set('s3Bucket', $value);
        return $this;
    }

    public function hasS3Bucket(): bool
    {
        return $this->has('s3Bucket');
    }

    public function unsetS3Bucket(): self
    {
        $this->remove('s3Bucket');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCdnDomain()
    {
        return $this->get('cdnDomain');
    }

    /**
     * @param string|null $value
     */
    public function setCdnDomain($value): self
    {
        $this->set('cdnDomain', $value);
        return $this;
    }

    public function hasCdnDomain(): bool
    {
        return $this->has('cdnDomain');
    }

    public function unsetCdnDomain(): self
    {
        $this->remove('cdnDomain');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCloudfrontDistId()
    {
        return $this->get('cloudfrontDistId');
    }

    /**
     * @param string|null $value
     */
    public function setCloudfrontDistId($value): self
    {
        $this->set('cloudfrontDistId', $value);
        return $this;
    }

    public function hasCloudfrontDistId(): bool
    {
        return $this->has('cloudfrontDistId');
    }

    public function unsetCloudfrontDistId(): self
    {
        $this->remove('cloudfrontDistId');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDefaultCurrency()
    {
        return $this->get('defaultCurrency');
    }

    /**
     * @param string|null $value
     */
    public function setDefaultCurrency($value): self
    {
        $this->set('defaultCurrency', $value);
        return $this;
    }

    public function hasDefaultCurrency(): bool
    {
        return $this->has('defaultCurrency');
    }

    public function unsetDefaultCurrency(): self
    {
        $this->remove('defaultCurrency');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDefaultPlace()
    {
        return $this->get('defaultPlace');
    }

    /**
     * @param string|null $value
     */
    public function setDefaultPlace($value): self
    {
        $this->set('defaultPlace', $value);
        return $this;
    }

    public function hasDefaultPlace(): bool
    {
        return $this->has('defaultPlace');
    }

    public function unsetDefaultPlace(): self
    {
        $this->remove('defaultPlace');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDefaultLocale()
    {
        return $this->get('defaultLocale');
    }

    /**
     * @param string|null $value
     */
    public function setDefaultLocale($value): self
    {
        $this->set('defaultLocale', $value);
        return $this;
    }

    public function hasDefaultLocale(): bool
    {
        return $this->has('defaultLocale');
    }

    public function unsetDefaultLocale(): self
    {
        $this->remove('defaultLocale');
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
     * @return Publisher
     */
    public function getPublisher()
    {
        return $this->get('publisher');
    }

    /**
     * @param Publisher $value
     */
    public function setPublisher($value): self
    {
        $this->set('publisher', $value);
        return $this;
    }

    public function hasPublisher(): bool
    {
        return $this->has('publisher');
    }

    public function unsetPublisher(): self
    {
        $this->remove('publisher');
        return $this;
    }

    /**
     * @return Work[]
     */
    public function getWorks()
    {
        return $this->get('works');
    }

    /**
     * @param Work[] $value
     */
    public function setWorks($value): self
    {
        $this->set('works', $value);
        return $this;
    }

    public function hasWorks(): bool
    {
        return $this->has('works');
    }

    public function unsetWorks(): self
    {
        $this->remove('works');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Imprint', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'imprintId',
                'description' => 'Thoth ID of the imprint',
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
                'name' => 'publisherId',
                'description' => 'Thoth ID of the publisher to which this imprint belongs',
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
                'name' => 'imprintName',
                'description' => 'Name of the imprint',
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
                'name' => 'imprintUrl',
                'description' => 'URL of the imprint\'s landing page',
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
                'name' => 'crossmarkDoi',
                'description' => 'DOI of the imprint\'s Crossmark policy page, if publisher participates. Crossmark \'gives readers quick and easy access to the
    current status of an item of content, including any corrections, retractions, or updates\'. More: https://www.crossref.org/services/crossmark/',
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
                'name' => 's3Bucket',
                'description' => 'S3 bucket used for files belonging to this imprint',
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
                'name' => 'cdnDomain',
                'description' => 'CDN domain used for files belonging to this imprint',
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
                'name' => 'cloudfrontDistId',
                'description' => 'CloudFront distribution ID used for files belonging to this imprint',
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
                'name' => 'defaultCurrency',
                'description' => 'Default currency code for works under this imprint',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'CurrencyCode',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'defaultPlace',
                'description' => 'Default publication place for works under this imprint',
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
                'name' => 'defaultLocale',
                'description' => 'Default locale code for works under this imprint',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'LocaleCode',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the imprint record was created',
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
                'description' => 'Date and time at which the imprint record was last updated',
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
                'name' => 'publisher',
                'description' => 'Get the publisher to which this imprint belongs',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publisher',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'works',
                'description' => 'Get works linked to this imprint',
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
                        'name' => 'filter',
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on full_title, doi, reference, short_abstract, long_abstract, and landing_page',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'String',
                            'ofType' => null,
                        ],
                        'defaultValue' => '""',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'WorkOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "FULL_TITLE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'workTypes',
                        'description' => 'Specific types to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'WorkType',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                    [
                        'name' => 'workStatus',
                        'description' => '(deprecated) A specific status to filter by',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'WorkStatus',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'workStatuses',
                        'description' => 'Specific statuses to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'WorkStatus',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                    [
                        'name' => 'publicationDate',
                        'description' => 'Only show results updated either before (less than) or after (greater than) the specified timestamp',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'TimeExpression',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'updatedAtWithRelations',
                        'description' => 'Only show results with a publication date either before (less than) or after (greater than) the specified timestamp',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'TimeExpression',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
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
                                'name' => 'Work',
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
