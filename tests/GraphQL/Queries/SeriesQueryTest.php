<?php

namespace ThothClient\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Queries\SeriesQuery;

final class SeriesQueryTest extends TestCase
{
    private SeriesQuery $seriesQuery;

    protected function setUp(): void
    {
        $this->seriesQuery = new SeriesQuery();
    }

    public function testGetSeriesQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$series: Uuid!) {
            series(seriesId: \$series) {
                ...seriesFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->seriesQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetSeriesesQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$filter: String = ""
            \$limit: Int = 100
            \$offset: Int = 0
            \$field:SeriesField = SERIES_NAME
            \$direction: Direction = ASC
            \$publishers: [Uuid!] = []
            \$seriesTypes: [SeriesType!] = []
        ) {
            serieses(
                filter: \$filter
                limit: \$limit
                offset: \$offset
                order: {
                    field: \$field
                    direction: \$direction
                }
                publishers: \$publishers
                seriesTypes: \$seriesTypes
            ) {
                ...seriesFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->seriesQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetSeriesCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query(
            \$filter: String = ""
            \$publishers: [Uuid!] = []
            \$seriesTypes: [SeriesType!] = []
        ) {
            seriesCount(
                filter: \$filter
                publishers: \$publishers
                seriesTypes: \$seriesTypes
            )
        }
        GQL;

        $query = $this->seriesQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function getFieldsFragment(): string
    {
        return <<<GQL
        fragment seriesFields on Series {
            seriesId
            seriesType
            seriesName
            issnPrint
            issnDigital
            seriesUrl
            seriesDescription
            seriesCfpUrl
            imprintId
        }
        GQL;
    }
}
