<?php

namespace ThothClient\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Queries\ContributionQuery;

final class ContributionQueryTest extends TestCase
{
    private ContributionQuery $contributionQuery;

    protected function setUp(): void
    {
        $this->contributionQuery = new ContributionQuery();
    }

    public function testGetContributionQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$contributionId: Uuid!) {
            contribution(contributionId: \$contributionId) {
                ...contributionFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->contributionQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetContributionsQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$limit: Int = 100
            \$offset: Int = 0
            \$field: ContributionField = CONTRIBUTION_TYPE
            \$direction: Direction = ASC
            \$publishers: [Uuid!] = []
            \$contributionTypes: [ContributionType!] = []
        ) {
            contributions(
                limit: \$limit
                offset: \$offset
                order: {
                field: \$field
                direction: \$direction
                }
                publishers: \$publishers
                contributionTypes: \$contributionTypes
            ) {
                ...contributionFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->contributionQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetContributionCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query(\$contributionTypes: [ContributionType!] = []) {
            contributionCount(contributionTypes: \$contributionTypes)
        }
        GQL;

        $query = $this->contributionQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    private function getFieldsFragment(): string
    {
        return <<<GQL
        fragment contributionFields on Contribution {
            contributionId
            contributorId
            workId
            contributionType
            mainContribution
            biography
            firstName
            lastName
            fullName
            contributionOrdinal
        }
        GQL;
    }
}
