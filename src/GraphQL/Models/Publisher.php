<?php

namespace ThothClient\GraphQL\Models;

class Publisher extends AbstractModel
{
    public function getPublisherId(): ?string
    {
        return $this->getData('publisherId');
    }

    public function setPublisherId(?string $publisherId): void
    {
        $this->setData('publisherId', $publisherId);
    }

    public function getPublisherName(): ?string
    {
        return $this->getData('publisherName');
    }

    public function setPublisherName(?string $publisherName): void
    {
        $this->setData('publisherName', $publisherName);
    }

    public function getPublisherShortName(): ?string
    {
        return $this->getData('publisherShortName');
    }

    public function setPublisherShortName(?string $publisherShortName): void
    {
        $this->setData('publisherShortName', $publisherShortName);
    }

    public function getPublisherUrl(): ?string
    {
        return $this->getData('publisherUrl');
    }

    public function setPublisherUrl(?string $publisherUrl): void
    {
        $this->setData('publisherUrl', $publisherUrl);
    }
}
