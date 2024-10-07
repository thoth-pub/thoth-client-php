<?php

namespace ThothClient\GraphQL\Queries;

class SubjectQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$subjectId: Uuid!) {
                subject(subjectId: \$subjectId) {
                    ...subjectFields
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
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
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
    }

    protected function getFieldsFragment(): string
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
