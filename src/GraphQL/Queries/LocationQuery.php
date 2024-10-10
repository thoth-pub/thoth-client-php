<?php

namespace ThothApi\GraphQL\Queries;

class LocationQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$locationId: Uuid!) {
                location(locationId: \$locationId) {
                    ...locationFields
                }
            }
            GQL
        );
    }

    public function getManyQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
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
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query(\$locationPlatforms: [LocationPlatform!] = []) {
            locationCount(locationPlatforms: \$locationPlatforms)
        }
        GQL;
    }

    protected function getFieldsFragment(): string
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
