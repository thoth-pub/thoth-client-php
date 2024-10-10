<?php

namespace ThothApi\GraphQL\Queries;

class WorkQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$workId: Uuid!) {
                work(workId: \$workId) {
                    ...workFields
                }
            }
            GQL
        );
    }

    public function getManyQuery(string $type = 'work'): string
    {
        return $this->buildQuery(
            <<<GQL
            query(
                \$limit: Int = 100
                \$offset: Int = 0
                \$filter: String = ""
                \$field: WorkField = TITLE
                \$direction: Direction = ASC
                \$publishers: [Uuid!] = []
                \$workStatuses: [WorkStatus!] = []
            ) {
                {$type}s(
                    limit: \$limit
                    offset: \$offset
                    filter: \$filter
                    order: {
                        field: \$field
                        direction: \$direction
                    }
                    publishers: \$publishers
                    workStatuses: \$workStatuses
                ) {
                    ...workFields
                }
            }
            GQL
        );
    }

    public function getByDoiQuery(string $type = 'work'): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$doi: Doi!) {
                {$type}ByDoi(doi: \$doi) {
                    ...workFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(string $type = 'work'): string
    {
        return <<<GQL
        query(
            \$filter:String = ""
            \$publishers: [Uuid!] = []
            \$workStatuses: [WorkStatus!] = []
        ) {
            {$type}Count(
                filter: \$filter
                publishers: \$publishers
                workStatuses: \$workStatuses
            )
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment workFields on Work {
            workId
            workType
            workStatus
            fullTitle
            title
            subtitle
            reference
            edition
            doi
            publicationDate
            withdrawnDate
            place
            pageCount
            pageBreakdown
            imageCount
            tableCount
            audioCount
            videoCount
            license
            copyrightHolder
            landingPage
            lccn
            oclc
            shortAbstract
            longAbstract
            generalNote
            bibliographyNote
            toc
            coverUrl
            coverCaption
            firstPage
            lastPage
            pageInterval
        }
        GQL;
    }
}
