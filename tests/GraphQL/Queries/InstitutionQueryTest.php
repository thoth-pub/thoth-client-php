<?php

namespace ThothApi\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\InstitutionQuery;

final class InstitutionQueryTest extends TestCase
{
    private InstitutionQuery $institutionQuery;

    protected function setUp(): void
    {
        $this->institutionQuery = new InstitutionQuery();
    }

    public function testGetInstitutionQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$institutionId: Uuid!) {
            institution(institutionId: \$institutionId) {
                ...institutionFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->institutionQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetInstitutionsQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$limit: Int = 100
            \$offset: Int = 0
            \$filter: String = ""
            \$field:InstitutionField = INSTITUTION_NAME
            \$direction: Direction = ASC
        ) {
            institutions (
                limit: \$limit
                offset: \$offset
                filter: \$filter
                order: {
                    field: \$field
                    direction: \$direction
                }
            ) {
                ...institutionFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->institutionQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetInstitutionCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query(
            \$filter: String = ""
        ) {
            institutionCount(filter: \$filter)
        }
        GQL;

        $query = $this->institutionQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function getFieldsFragment(): string
    {
        return <<<GQL
        fragment institutionFields on Institution {
            institutionId
            institutionName
            institutionDoi
            countryCode
            ror
        }
        GQL;
    }
}
