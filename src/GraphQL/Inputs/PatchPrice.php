<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchPrice extends InputObject
{
    /**
     * @return string
     */
    public function getPriceId()
    {
        return $this->get('priceId');
    }

    /**
     * @param string $value
     */
    public function setPriceId($value): self
    {
        $this->set('priceId', $value);
        return $this;
    }

    public function hasPriceId(): bool
    {
        return $this->has('priceId');
    }

    public function unsetPriceId(): self
    {
        $this->remove('priceId');
        return $this;
    }

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
    public function getCurrencyCode()
    {
        return $this->get('currencyCode');
    }

    /**
     * @param string $value
     */
    public function setCurrencyCode($value): self
    {
        $this->set('currencyCode', $value);
        return $this;
    }

    public function hasCurrencyCode(): bool
    {
        return $this->has('currencyCode');
    }

    public function unsetCurrencyCode(): self
    {
        $this->remove('currencyCode');
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->get('unitPrice');
    }

    /**
     * @param float $value
     */
    public function setUnitPrice($value): self
    {
        $this->set('unitPrice', $value);
        return $this;
    }

    public function hasUnitPrice(): bool
    {
        return $this->has('unitPrice');
    }

    public function unsetUnitPrice(): self
    {
        $this->remove('unitPrice');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchPrice', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'priceId',
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
                'name' => 'publicationId',
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
                'name' => 'currencyCode',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'CurrencyCode',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'unitPrice',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Float',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
