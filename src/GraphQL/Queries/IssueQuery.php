<?php

namespace ThothClient\GraphQL\Queries;

class IssueQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$issueId: Uuid!) {
                issue(issueId: \$issueId) {
                    ...issueFields
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
                \$field: IssueField = ISSUE_ORDINAL
                \$direction: Direction = ASC
                \$publishers: [Uuid!] = []
            ) {
                issues(
                    limit: \$limit
                    offset: \$offset
                    order: {
                    field: \$field
                    direction: \$direction
                    }
                    publishers: \$publishers
                ) {
                    ...issueFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query {
            issueCount
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment issueFields on Issue {
            issueId
            workId
            seriesId
            issueOrdinal
        }
        GQL;
    }
}
