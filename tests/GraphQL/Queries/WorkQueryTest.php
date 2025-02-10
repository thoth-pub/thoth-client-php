<?php

namespace ThothApi\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\WorkQuery;

final class WorkQueryTest extends TestCase
{
    private WorkQuery $workQuery;

    protected function setUp(): void
    {
        $this->workQuery = new WorkQuery();
    }

    public function testGetWorkQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$workId: Uuid!) {
            work(workId: \$workId) {
                ...workFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->workQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetWorksQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$limit: Int = 100
            \$offset: Int = 0
            \$filter: String = ""
            \$field: WorkField = TITLE
            \$direction: Direction = ASC
            \$publishers: [Uuid!] = []
            \$workStatuses: [WorkStatus!] = []
        ) {
            works(
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
        {$fragment}
        GQL;

        $query = $this->workQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetWorkByDoiQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$doi: Doi!) {
            workByDoi(doi: \$doi) {
                ...workFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->workQuery->getByDoiQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetWorkCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query(
            \$filter:String = ""
            \$publishers: [Uuid!] = []
            \$workStatuses: [WorkStatus!] = []
        ) {
            workCount(
                filter: \$filter
                publishers: \$publishers
                workStatuses: \$workStatuses
            )
        }
        GQL;

        $query = $this->workQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function getFieldsFragment(): string
    {
        return <<<GQL
        fragment workFields on Work {
            workId
            imprintId
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
