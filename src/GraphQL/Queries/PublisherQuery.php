<?php

namespace ThothApi\GraphQL\Queries;

class PublisherQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$publisherId: Uuid!) {
                publisher(publisherId: \$publisherId) {
                    ...publisherFields
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
            publisherCount(
                filter: \$filter
                publishers: \$publishers
            )
        }
        GQL;
    }

    protected function getFieldsFragment(): string
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
