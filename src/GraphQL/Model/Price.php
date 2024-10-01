<?php

namespace ThothClient\GraphQL\Model;

class Price extends AbstractModel
{
    public function getPriceId(): string
    {
        return $this->getData('priceId');
    }

    public function setPriceId(string $priceId): void
    {
        $this->setData('priceId', $priceId);
    }

    public function getPublicationId(): string
    {
        return $this->getData('publicationId');
    }

    public function setPublicationId(string $publicationId): void
    {
        $this->setData('publicationId', $publicationId);
    }

    public function getCurrentCode(): string
    {
        return $this->getData('currentCode');
    }

    public function setCurrentCode(string $currentCode): void
    {
        $this->setData('currentCode', $currentCode);
    }

    public function getUnitPrice(): float
    {
        return $this->getData('unitPrice');
    }

    public function setUnitPrice(float $unitPrice): void
    {
        $this->setData('unitPrice', $unitPrice);
    }
}
