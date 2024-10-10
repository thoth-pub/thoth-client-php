<?php

namespace ThothApi\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\FundingQuery;

final class FundingQueryTest extends TestCase
{
    private FundingQuery $fundingQuery;

    protected function setUp(): void
    {
        $this->fundingQuery = new FundingQuery();
    }

    public function testGetFundingQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$fundingId: Uuid!) {
            funding(fundingId: \$fundingId) {
                ...fundingFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->fundingQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetFundingsQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$limit: Int = 100
            \$offset: Int = 0
            \$field: FundingField = PROGRAM
            \$direction: Direction = ASC
            \$publishers: [Uuid!] = []
        ) {
            fundings(
                limit: \$limit
                offset: \$offset
                order: {
                field: \$field
                direction: \$direction
                }
                publishers: \$publishers
            ) {
                ...fundingFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->fundingQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetFundingCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query {
            fundingCount
        }
        GQL;

        $query = $this->fundingQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    private function getFieldsFragment(): string
    {
        return <<<GQL
        fragment fundingFields on Funding {
            fundingId
            workId
            institutionId
            program
            projectName
            projectShortname
            grantNumber
            jurisdiction
        }
        GQL;
    }
}
