<?php

namespace ThothApi\GraphQL\Models;

class Price extends AbstractModel
{
    public function getPriceId(): ?string
    {
        return $this->getData('priceId');
    }

    public function setPriceId(?string $priceId): void
    {
        $this->setData('priceId', $priceId);
    }

    public function getPublicationId(): ?string
    {
        return $this->getData('publicationId');
    }

    public function setPublicationId(?string $publicationId): void
    {
        $this->setData('publicationId', $publicationId);
    }

    public function getCurrencyCode(): ?string
    {
        return $this->getData('currencyCode');
    }

    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->setData('currencyCode', $currencyCode);
    }

    public function getUnitPrice(): ?float
    {
        return $this->getData('unitPrice');
    }

    public function setUnitPrice(?float $unitPrice): void
    {
        $this->setData('unitPrice', $unitPrice);
    }
}
