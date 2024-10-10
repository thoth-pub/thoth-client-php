<?php

namespace ThothApi\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\AffiliationQuery;

final class AffiliationQueryTest extends TestCase
{
    private AffiliationQuery $affiliationQuery;

    protected function setUp(): void
    {
        $this->affiliationQuery = new AffiliationQuery();
    }

    public function testGetAffiliationQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$affiliationId: Uuid!) {
            affiliation(affiliationId: \$affiliationId) {
                ...affiliationFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->affiliationQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetAffiliationsQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$limit: Int = 100
            \$offset: Int = 0
            \$field: AffiliationField = AFFILIATION_ORDINAL
            \$direction: Direction = ASC
            \$publishers: [Uuid!] = []
        ) {
            affiliations(
                limit: \$limit
                offset: \$offset
                order: {
                    field: \$field
                    direction: \$direction
                },
                publishers: \$publishers
            ) {
                ...affiliationFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->affiliationQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetAffiliationCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query {
            affiliationCount
        }
        GQL;

        $query = $this->affiliationQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    private function getFieldsFragment(): string
    {
        return <<<GQL
        fragment affiliationFields on Affiliation {
            affiliationId
            contributionId
            institutionId
            affiliationOrdinal
            position
        }
        GQL;
    }
}
