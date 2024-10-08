<?php

namespace ThothClient\GraphQL\Models;

class Location extends AbstractModel
{
    public const LOCATION_PLATFORM_PROJECT_MUSE = 'PROJECT_MUSE';
    public const LOCATION_PLATFORM_OAPEN = 'OAPEN';
    public const LOCATION_PLATFORM_DOAB = 'DOAB';
    public const LOCATION_PLATFORM_JSTOR = 'JSTOR';
    public const LOCATION_PLATFORM_EBSCO_HOST = 'EBSCO_HOST';
    public const LOCATION_PLATFORM_OCLC_KB = 'OCLC_KB';
    public const LOCATION_PLATFORM_PROQUEST_KB = 'PROQUEST_KB';
    public const LOCATION_PLATFORM_PPROQUEST_EXLIBRIS = 'PPROQUEST_EXLIBRIS';
    public const LOCATION_PLATFORM_EBSCO_KB = 'EBSCO_KB';
    public const LOCATION_PLATFORM_JISC_KB = 'JISC_KB';
    public const LOCATION_PLATFORM_GOOGLE_BOOKS = 'GOOGLE_BOOKS';
    public const LOCATION_PLATFORM_INTERNET_ARCHIVE = 'INTERNET_ARCHIVE';
    public const LOCATION_PLATFORM_SCIENCE_OPEN = 'SCIENCE_OPEN';
    public const LOCATION_PLATFORM_SCIELO_BOOKS = 'SCIELO_BOOKS';
    public const LOCATION_PLATFORM_ZENODO = 'ZENODO';
    public const LOCATION_PLATFORM_PUBLISHER_WEBSITE = 'PUBLISHER_WEBSITE';
    public const LOCATION_PLATFORM_OTHER = 'OTHER';

    public function getLocationId(): ?string
    {
        return $this->getData('locationId');
    }

    public function setLocationId(?string $locationId): void
    {
        $this->setData('locationId', $locationId);
    }

    public function getPublicationId(): ?string
    {
        return $this->getData('publicationId');
    }

    public function setPublicationId(?string $publicationId): void
    {
        $this->setData('publicationId', $publicationId);
    }

    public function getLandingPage(): ?string
    {
        return $this->getData('landingPage');
    }

    public function setLandingPage(?string $landingPage): void
    {
        $this->setData('landingPage', $landingPage);
    }

    public function getFullTextUrl(): ?string
    {
        return $this->getData('fullTextUrl');
    }

    public function setFullTextUrl(?string $fullTextUrl): void
    {
        $this->setData('fullTextUrl', $fullTextUrl);
    }

    public function getLocationPlatform(): ?string
    {
        return $this->getData('locationPlatform');
    }

    public function setLocationPlatform(?string $locationPlatform): void
    {
        $this->setData('locationPlatform', $locationPlatform);
    }

    public function getCanonical(): ?bool
    {
        return $this->getData('canonical');
    }

    public function setCanonical(?bool $canonical): void
    {
        $this->setData('canonical', $canonical);
    }
}
