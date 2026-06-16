<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchSeries extends InputObject
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

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchSeries', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'seriesId',
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
                'name' => 'seriesType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'SeriesType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'seriesName',
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
                'name' => 'issnPrint',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'issnDigital',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'seriesUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'seriesDescription',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'seriesCfpUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'imprintId',
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
            ])
        ]);
    }
}
