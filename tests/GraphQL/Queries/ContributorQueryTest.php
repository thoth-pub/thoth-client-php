<?php

namespace ThothClient\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Queries\ContributorQuery;

final class ContributorQueryTest extends TestCase
{
    private ContributorQuery $contributorQuery;

    protected function setUp(): void
    {
        $this->contributorQuery = new ContributorQuery();
    }

    public function testGetContributorQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$contributorId: Uuid!) {
            contributor(contributorId: \$contributorId) {
                ...contributorFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->contributorQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetContributorsQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$limit: Int = 100
            \$offset: Int = 0
            \$filter: String = ""
            \$field: ContributorField = FULL_NAME
            \$direction: Direction = ASC
        ) {
            contributors(
                limit: \$limit
                offset: \$offset
                filter: \$filter
                order: {
                    field: \$field
                    direction: \$direction
                }
            ) {
                ...contributorFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->contributorQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetContributorCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query(\$filter: String = "") {
            contributorCount(filter: \$filter)
        }
        GQL;

        $query = $this->contributorQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    private function getFieldsFragment(): string
    {
        return <<<GQL
        fragment contributorFields on Contributor {
            contributorId
            firstName
            lastName
            fullName
            orcid
            website
        }
        GQL;
    }
}
