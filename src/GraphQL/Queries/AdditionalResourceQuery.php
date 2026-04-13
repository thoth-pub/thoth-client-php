<?php

namespace ThothApi\GraphQL\Queries;

class AdditionalResourceQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$additionalResourceId: Uuid!) {
                additionalResource(additionalResourceId: \$additionalResourceId) {
                    ...additionalResourceFields
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
                \$field: AdditionalResourceField = RESOURCE_ORDINAL
                \$direction: Direction = ASC
                \$publishers: [Uuid!] = []
            ) {
                additionalResources(
                    limit: \$limit
                    offset: \$offset
                    order: {
                        field: \$field
                        direction: \$direction
                    }
                    publishers: \$publishers
                ) {
                    ...additionalResourceFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query {
            additionalResourceCount
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment additionalResourceFields on WorkResource {
            workResourceId
            workId
            title
            description
            attribution
            resourceType
            doi
            handle
            url
            date
            resourceOrdinal
        }
        GQL;
    }
}
