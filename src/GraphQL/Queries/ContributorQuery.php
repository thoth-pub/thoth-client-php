<?php

namespace ThothClient\GraphQL\Queries;

class ContributorQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$contributorId: Uuid!) {
                contributor(contributorId: \$contributorId) {
                    ...contributorFields
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
                \$field: ContributorField = FULL_NAME
                \$direction: Direction = ASC
            ) {
                contributors(
                    limit: \$limit
                    offset: \$offset
                    filter: \$filter
                    order: {
                        field: \$field
                        direction: \$direction
                    }
                ) {
                    ...contributorFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query(\$filter: String = "") {
            contributorCount(filter: \$filter)
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment contributorFields on Contributor {
            contributorId
            firstName
            lastName
            fullName
            orcid
            website
        }
        GQL;
    }
}
