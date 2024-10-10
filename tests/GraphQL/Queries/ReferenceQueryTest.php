<?php

namespace ThothApi\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\ReferenceQuery;

final class ReferenceQueryTest extends TestCase
{
    private ReferenceQuery $referenceQuery;

    protected function setUp(): void
    {
        $this->referenceQuery = new ReferenceQuery();
    }

    public function testGetReferenceQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$referenceId: Uuid!) {
            reference(referenceId: \$referenceId) {
                ...referenceFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->referenceQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetReferencesQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$limit: Int = 100
            \$offset: Int = 0
            \$field: ReferenceField = REFERENCE_ORDINAL
            \$direction: Direction = ASC
            \$publishers: [Uuid!] = []
        ) {
            references (
                limit: \$limit
                offset: \$offset
                order: {
                    field: \$field
                    direction: \$direction
                }
                publishers: \$publishers
            ) {
                ...referenceFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->referenceQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetReferenceCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query {
            referenceCount
        }
        GQL;

        $query = $this->referenceQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function getFieldsFragment(): string
    {
        return <<<GQL
        fragment referenceFields on Reference {
            referenceId
            workId
            referenceOrdinal
            doi
            unstructuredCitation
            issn
            isbn
            journalTitle
            articleTitle
            seriesTitle
            volumeTitle
            edition
            author
            volume
            issue
            firstPage
            componentNumber
            standardDesignator
            standardsBodyName
            standardsBodyAcronym
            url
            publicationDate
            retrievalDate
        }
        GQL;
    }
}
