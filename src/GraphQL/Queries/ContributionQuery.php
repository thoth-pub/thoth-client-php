<?php

namespace ThothApi\GraphQL\Queries;

class ContributionQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$contributionId: Uuid!) {
                contribution(contributionId: \$contributionId) {
                    ...contributionFields
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
                \$field: ContributionField = CONTRIBUTION_TYPE
                \$direction: Direction = ASC
                \$publishers: [Uuid!] = []
                \$contributionTypes: [ContributionType!] = []
            ) {
                contributions(
                    limit: \$limit
                    offset: \$offset
                    order: {
                    field: \$field
                    direction: \$direction
                    }
                    publishers: \$publishers
                    contributionTypes: \$contributionTypes
                ) {
                    ...contributionFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query(\$contributionTypes: [ContributionType!] = []) {
            contributionCount(contributionTypes: \$contributionTypes)
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment contributionFields on Contribution {
            contributionId
            contributorId
            workId
            contributionType
            mainContribution
            biography
            firstName
            lastName
            fullName
            contributionOrdinal
        }
        GQL;
    }
}
