<?php

namespace ThothApi\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\PublisherQuery;

final class PublisherQueryTest extends TestCase
{
    private PublisherQuery $publisherQuery;

    protected function setUp(): void
    {
        $this->publisherQuery = new PublisherQuery();
    }

    public function testGetPublisherQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$publisherId: Uuid!) {
            publisher(publisherId: \$publisherId) {
                ...publisherFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->publisherQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetPublishersQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$filter: String = ""
            \$limit: Int = 100
            \$offset: Int = 0
            \$field: PublisherField = PUBLISHER_NAME
            \$direction: Direction = ASC
            \$publishers: [Uuid!] = []
        ) {
            publishers(
                filter: \$filter
                limit: \$limit
                offset: \$offset
                order: {
                    field: \$field
                    direction: \$direction
                }
                publishers: \$publishers
            ) {
                ...publisherFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->publisherQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetPublisherCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query(
            \$filter: String = ""
            \$publishers: [Uuid!] = []
        ) {
            publisherCount(
                filter: \$filter
                publishers: \$publishers
            )
        }
        GQL;

        $query = $this->publisherQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function getFieldsFragment(): string
    {
        return <<<GQL
        fragment publisherFields on Publisher {
            publisherId
            publisherName
            publisherShortname
            publisherUrl
        }
        GQL;
    }
}
