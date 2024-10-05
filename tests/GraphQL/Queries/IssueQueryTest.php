<?php

namespace ThothClient\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Queries\IssueQuery;

final class IssueQueryTest extends TestCase
{
    private IssueQuery $issueQuery;

    protected function setUp(): void
    {
        $this->issueQuery = new IssueQuery();
    }

    public function testGetIssueQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$issueId: Uuid!) {
            issue(issueId: \$issueId) {
                ...issueFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->issueQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetIssuesQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
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
        {$fragment}
        GQL;

        $query = $this->issueQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetIssueCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query {
            issueCount
        }
        GQL;

        $query = $this->issueQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function getFieldsFragment(): string
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
