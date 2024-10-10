<?php

namespace ThothApi\Tests\GraphQL\Models;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Models\Location;

final class LocationTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $locationId = 'd873472f-b133-4005-8c8b-78bf24341221';
        $publicationId = '314b39c8-87b9-4768-b8e9-4ec164692749';
        $landingPage = 'https://foo.bar/';
        $fullTextUrl = 'https://foo.bar/baz/qux';
        $locationPlatform = Location::LOCATION_PLATFORM_PROJECT_MUSE;
        $canonical = true;

        $location = new Location();
        $location->setLocationId($locationId);
        $location->setPublicationId($publicationId);
        $location->setLandingPage($landingPage);
        $location->setFullTextUrl($fullTextUrl);
        $location->setLocationPlatform($locationPlatform);
        $location->setCanonical($canonical);

        $this->assertSame($locationId, $location->getLocationId());
        $this->assertSame($publicationId, $location->getPublicationId());
        $this->assertSame($landingPage, $location->getLandingPage());
        $this->assertSame($fullTextUrl, $location->getFullTextUrl());
        $this->assertSame($locationPlatform, $location->getLocationPlatform());
        $this->assertSame($canonical, $location->getCanonical());
    }
}
