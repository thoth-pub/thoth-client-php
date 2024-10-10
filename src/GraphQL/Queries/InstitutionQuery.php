<?php

namespace ThothApi\GraphQL\Queries;

class InstitutionQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$institutionId: Uuid!) {
                institution(institutionId: \$institutionId) {
                    ...institutionFields
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
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query(
            \$filter: String = ""
        ) {
            institutionCount(filter: \$filter)
        }
        GQL;
    }

    protected function getFieldsFragment(): string
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
