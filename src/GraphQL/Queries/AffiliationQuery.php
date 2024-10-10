<?php

namespace ThothApi\GraphQL\Queries;

class AffiliationQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$affiliationId: Uuid!) {
                affiliation(affiliationId: \$affiliationId) {
                    ...affiliationFields
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
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query {
            affiliationCount
        }
        GQL;
    }

    protected function getFieldsFragment(): string
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
