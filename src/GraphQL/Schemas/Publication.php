<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Publication extends ObjectData
{
    /**
     * @return string
     */
    public function getPublicationId()
    {
        return $this->get('publicationId');
    }

    /**
     * @param string $value
     */
    public function setPublicationId($value): self
    {
        $this->set('publicationId', $value);
        return $this;
    }

    public function hasPublicationId(): bool
    {
        return $this->has('publicationId');
    }

    public function unsetPublicationId(): self
    {
        $this->remove('publicationId');
        return $this;
    }

    /**
     * @return string
     */
    public function getPublicationType()
    {
        return $this->get('publicationType');
    }

    /**
     * @param string $value
     */
    public function setPublicationType($value): self
    {
        $this->set('publicationType', $value);
        return $this;
    }

    public function hasPublicationType(): bool
    {
        return $this->has('publicationType');
    }

    public function unsetPublicationType(): self
    {
        $this->remove('publicationType');
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
     * @return string|null
     */
    public function getIsbn()
    {
        return $this->get('isbn');
    }

    /**
     * @param string|null $value
     */
    public function setIsbn($value): self
    {
        $this->set('isbn', $value);
        return $this;
    }

    public function hasIsbn(): bool
    {
        return $this->has('isbn');
    }

    public function unsetIsbn(): self
    {
        $this->remove('isbn');
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
     * @return float|null
     */
    public function getWidth()
    {
        return $this->get('width');
    }

    /**
     * @param float|null $value
     */
    public function setWidth($value): self
    {
        $this->set('width', $value);
        return $this;
    }

    public function hasWidth(): bool
    {
        return $this->has('width');
    }

    public function unsetWidth(): self
    {
        $this->remove('width');
        return $this;
    }

    /**
     * @return float|null
     */
    public function getHeight()
    {
        return $this->get('height');
    }

    /**
     * @param float|null $value
     */
    public function setHeight($value): self
    {
        $this->set('height', $value);
        return $this;
    }

    public function hasHeight(): bool
    {
        return $this->has('height');
    }

    public function unsetHeight(): self
    {
        $this->remove('height');
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDepth()
    {
        return $this->get('depth');
    }

    /**
     * @param float|null $value
     */
    public function setDepth($value): self
    {
        $this->set('depth', $value);
        return $this;
    }

    public function hasDepth(): bool
    {
        return $this->has('depth');
    }

    public function unsetDepth(): self
    {
        $this->remove('depth');
        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeight()
    {
        return $this->get('weight');
    }

    /**
     * @param float|null $value
     */
    public function setWeight($value): self
    {
        $this->set('weight', $value);
        return $this;
    }

    public function hasWeight(): bool
    {
        return $this->has('weight');
    }

    public function unsetWeight(): self
    {
        $this->remove('weight');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccessibilityStandard()
    {
        return $this->get('accessibilityStandard');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityStandard($value): self
    {
        $this->set('accessibilityStandard', $value);
        return $this;
    }

    public function hasAccessibilityStandard(): bool
    {
        return $this->has('accessibilityStandard');
    }

    public function unsetAccessibilityStandard(): self
    {
        $this->remove('accessibilityStandard');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccessibilityAdditionalStandard()
    {
        return $this->get('accessibilityAdditionalStandard');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityAdditionalStandard($value): self
    {
        $this->set('accessibilityAdditionalStandard', $value);
        return $this;
    }

    public function hasAccessibilityAdditionalStandard(): bool
    {
        return $this->has('accessibilityAdditionalStandard');
    }

    public function unsetAccessibilityAdditionalStandard(): self
    {
        $this->remove('accessibilityAdditionalStandard');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccessibilityException()
    {
        return $this->get('accessibilityException');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityException($value): self
    {
        $this->set('accessibilityException', $value);
        return $this;
    }

    public function hasAccessibilityException(): bool
    {
        return $this->has('accessibilityException');
    }

    public function unsetAccessibilityException(): self
    {
        $this->remove('accessibilityException');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccessibilityReportUrl()
    {
        return $this->get('accessibilityReportUrl');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityReportUrl($value): self
    {
        $this->set('accessibilityReportUrl', $value);
        return $this;
    }

    public function hasAccessibilityReportUrl(): bool
    {
        return $this->has('accessibilityReportUrl');
    }

    public function unsetAccessibilityReportUrl(): self
    {
        $this->remove('accessibilityReportUrl');
        return $this;
    }

    /**
     * @return Price[]
     */
    public function getPrices()
    {
        return $this->get('prices');
    }

    /**
     * @param Price[] $value
     */
    public function setPrices($value): self
    {
        $this->set('prices', $value);
        return $this;
    }

    public function hasPrices(): bool
    {
        return $this->has('prices');
    }

    public function unsetPrices(): self
    {
        $this->remove('prices');
        return $this;
    }

    /**
     * @return Location[]
     */
    public function getLocations()
    {
        return $this->get('locations');
    }

    /**
     * @param Location[] $value
     */
    public function setLocations($value): self
    {
        $this->set('locations', $value);
        return $this;
    }

    public function hasLocations(): bool
    {
        return $this->has('locations');
    }

    public function unsetLocations(): self
    {
        $this->remove('locations');
        return $this;
    }

    /**
     * @return File|null
     */
    public function getFile()
    {
        return $this->get('file');
    }

    /**
     * @param File|null $value
     */
    public function setFile($value): self
    {
        $this->set('file', $value);
        return $this;
    }

    public function hasFile(): bool
    {
        return $this->has('file');
    }

    public function unsetFile(): self
    {
        $this->remove('file');
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
        return new ObjectTypeDefinition('Publication', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'publicationId',
                'description' => 'Thoth ID of the publication',
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
                'name' => 'publicationType',
                'description' => 'Format of this publication',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'PublicationType',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workId',
                'description' => 'Thoth ID of the work to which this publication belongs',
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
                'name' => 'isbn',
                'description' => 'International Standard Book Number of the publication, in ISBN-13 format',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Isbn',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the publication record was created',
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
                'description' => 'Date and time at which the publication record was last updated',
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
                'name' => 'width',
                'description' => 'Width of the physical Publication (in mm, cm or in) (only applicable to non-Chapter Paperbacks and Hardbacks)',
                'args' => [
                    [
                        'name' => 'units',
                        'description' => 'Unit of measurement in which to represent the width (mm, cm or in)',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'ENUM',
                                'name' => 'LengthUnit',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => '"MM"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'height',
                'description' => 'Height of the physical Publication (in mm, cm or in) (only applicable to non-Chapter Paperbacks and Hardbacks)',
                'args' => [
                    [
                        'name' => 'units',
                        'description' => 'Unit of measurement in which to represent the height (mm, cm or in)',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'ENUM',
                                'name' => 'LengthUnit',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => '"MM"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'depth',
                'description' => 'Depth of the physical Publication (in mm, cm or in) (only applicable to non-Chapter Paperbacks and Hardbacks)',
                'args' => [
                    [
                        'name' => 'units',
                        'description' => 'Unit of measurement in which to represent the depth (mm, cm or in)',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'ENUM',
                                'name' => 'LengthUnit',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => '"MM"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'weight',
                'description' => 'Weight of the physical Publication (in g or oz) (only applicable to non-Chapter Paperbacks and Hardbacks)',
                'args' => [
                    [
                        'name' => 'units',
                        'description' => 'Unit of measurement in which to represent the weight (grams or ounces)',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'ENUM',
                                'name' => 'WeightUnit',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => '"G"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'accessibilityStandard',
                'description' => 'WCAG standard accessibility level met by this publication (if any)',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityStandard',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'accessibilityAdditionalStandard',
                'description' => 'EPUB- or PDF-specific standard accessibility level met by this publication, if applicable',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityStandard',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'accessibilityException',
                'description' => 'Reason for this publication not being required to comply with accessibility standards (if any)',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityException',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'accessibilityReportUrl',
                'description' => 'Link to a web page showing detailed accessibility information for this publication',
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
                'name' => 'prices',
                'description' => 'Get prices linked to this publication',
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
                            'name' => 'PriceOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "CURRENCY_CODE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'currencyCodes',
                        'description' => 'Specific currencies to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'CurrencyCode',
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
                                'name' => 'Price',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'locations',
                'description' => 'Get locations linked to this publication',
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
                            'name' => 'LocationOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "LOCATION_PLATFORM", direction: "ASC"}',
                    ],
                    [
                        'name' => 'locationPlatforms',
                        'description' => 'Specific platforms to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'LocationPlatform',
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
                                'name' => 'Location',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'file',
                'description' => 'Get the publication file for this publication',
                'args' => [],
                'type' => [
                    'kind' => 'OBJECT',
                    'name' => 'File',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'work',
                'description' => 'Get the work to which this publication belongs',
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
