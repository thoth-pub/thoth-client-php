<?php

namespace ThothApi\GraphQL\Queries;

class ImprintQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$imprintId: Uuid!) {
                imprint(imprintId: \$imprintId) {
                    ...imprintFields
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
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
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
    }

    protected function getFieldsFragment(): string
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
