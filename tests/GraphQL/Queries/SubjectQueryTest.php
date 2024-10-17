<?php

namespace ThothApi\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\SubjectQuery;

final class SubjectQueryTest extends TestCase
{
    private SubjectQuery $subjectQuery;

    protected function setUp(): void
    {
        $this->subjectQuery = new SubjectQuery();
    }

    public function testGetSubjectQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$subjectId: Uuid!) {
            subject(subjectId: \$subjectId) {
                ...subjectFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->subjectQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetSubjectsQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$filter: String = ""
            \$limit: Int = 100
            \$offset: Int = 0
            \$field: SubjectField = SUBJECT_TYPE
            \$direction: Direction = ASC
            \$publishers: [Uuid!] = []
            \$subjectTypes: [SubjectType!] = []
        ) {
            subjects(
                filter: \$filter
                limit: \$limit
                offset: \$offset
                order: {
                    field: \$field
                    direction: \$direction
                }
                publishers: \$publishers
                subjectTypes: \$subjectTypes
            ) {
                ...subjectFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->subjectQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetSubjectCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query(
            \$filter: String = ""
            \$subjectTypes: [SubjectType!] = []
        ) {
            subjectCount(
                filter: \$filter
                subjectTypes: \$subjectTypes
            )
        }
        GQL;

        $query = $this->subjectQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function getFieldsFragment(): string
    {
        return <<<GQL
        fragment subjectFields on Subject {
            subjectId
            workId
            subjectType
            subjectCode
            subjectOrdinal
        }
        GQL;
    }
}
