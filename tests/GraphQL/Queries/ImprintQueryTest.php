<?php

namespace ThothApi\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\ImprintQuery;

final class ImprintQueryTest extends TestCase
{
    private ImprintQuery $imprintQuery;

    protected function setUp(): void
    {
        $this->imprintQuery = new ImprintQuery();
    }

    public function testGetImprintQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$imprintId: Uuid!) {
            imprint(imprintId: \$imprintId) {
                ...imprintFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->imprintQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetImprintsQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$limit: Int = 100
            \$offset: Int = 0
            \$filter: String = ""
            \$field: ImprintField = IMPRINT_NAME
            \$direction: Direction = ASC
            \$publishers: [Uuid!] = []
        ) {
            imprints(
                limit: \$limit
                offset: \$offset
                filter: \$filter
                order: {
                field: \$field
                direction: \$direction
                }
                publishers: \$publishers
            ) {
                ...imprintFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->imprintQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetImprintCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query(
            \$filter: String = ""
            \$publishers: [Uuid!] = []
        ) {
            imprintCount(
                filter: \$filter
                publishers: \$publishers
            )
        }
        GQL;

        $query = $this->imprintQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function getFieldsFragment(): string
    {
        return <<<GQL
        fragment imprintFields on Imprint {
            imprintId
            publisherId
            imprintName
            imprintUrl
            crossmarkDoi
        }
        GQL;
    }
}
