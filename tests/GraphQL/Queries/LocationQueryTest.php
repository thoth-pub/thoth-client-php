<?php

namespace ThothApi\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\LocationQuery;

final class LocationQueryTest extends TestCase
{
    private LocationQuery $locationQuery;

    protected function setUp(): void
    {
        $this->locationQuery = new LocationQuery();
    }

    public function testGetLocationQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$locationId: Uuid!) {
            location(locationId: \$locationId) {
                ...locationFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->locationQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetLocationsQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query (
            \$limit: Int = 100
            \$offset: Int = 0
            \$field: LocationField = LOCATION_PLATFORM
            \$direction: Direction = ASC
            \$locationPlatforms: [LocationPlatform!] = []
            \$publishers: [Uuid!] = []
        ) {
            locations(
                limit: \$limit
                offset: \$offset
                order: {
                    field: \$field
                    direction: \$direction
                }
                locationPlatforms: \$locationPlatforms
                publishers: \$publishers
            ) {
                ...locationFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->locationQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetLocationCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query(\$locationPlatforms: [LocationPlatform!] = []) {
            locationCount(locationPlatforms: \$locationPlatforms)
        }
        GQL;

        $query = $this->locationQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function getFieldsFragment(): string
    {
        return <<<GQL
        fragment locationFields on Location {
            locationId
            publicationId
            landingPage
            fullTextUrl
            locationPlatform
            canonical
        }
        GQL;
    }
}
