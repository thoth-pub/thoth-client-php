<?php

namespace ThothClient\GraphQL\Models;

class Imprint extends AbstractModel
{
    public function getImprintId(): ?string
    {
        return $this->getData('imprintId');
    }

    public function setImprintId(?string $imprintId): void
    {
        $this->setData('imprintId', $imprintId);
    }

    public function getPublisherId(): ?string
    {
        return $this->getData('publisherId');
    }

    public function setPublisherId(?string $publisherId): void
    {
        $this->setData('publisherId', $publisherId);
    }

    public function getImprintName(): ?string
    {
        return $this->getData('imprintName');
    }

    public function setImprintName(?string $imprintName): void
    {
        $this->setData('imprintName', $imprintName);
    }

    public function getImprintUrl(): ?string
    {
        return $this->getData('imprintUrl');
    }

    public function setImprintUrl(?string $imprintUrl): void
    {
        $this->setData('imprintUrl', $imprintUrl);
    }

    public function getCrossmarkDoi(): ?string
    {
        return $this->getData('crossmarkDoi');
    }

    public function setCrossmarkDoi(?string $crossmarkDoi): void
    {
        $this->setData('crossmarkDoi', $crossmarkDoi);
    }
}
