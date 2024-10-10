<?php

namespace ThothApi\GraphQL\Queries;

class FundingQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$fundingId: Uuid!) {
                funding(fundingId: \$fundingId) {
                    ...fundingFields
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
                \$field: FundingField = PROGRAM
                \$direction: Direction = ASC
                \$publishers: [Uuid!] = []
            ) {
                fundings(
                    limit: \$limit
                    offset: \$offset
                    order: {
                    field: \$field
                    direction: \$direction
                    }
                    publishers: \$publishers
                ) {
                    ...fundingFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query {
            fundingCount
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment fundingFields on Funding {
            fundingId
            workId
            institutionId
            program
            projectName
            projectShortname
            grantNumber
            jurisdiction
        }
        GQL;
    }
}
