<?php

namespace ThothApi\GraphQL\Queries;

class SeriesQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$series: Uuid!) {
                series(seriesId: \$series) {
                    ...seriesFields
                }
            }
            GQL
        );
    }

    public function getManyQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
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
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
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
    }

    protected function getFieldsFragment(): string
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
