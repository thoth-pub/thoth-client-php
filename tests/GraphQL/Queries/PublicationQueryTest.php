<?php

namespace ThothApi\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\PublicationQuery;

final class PublicationQueryTest extends TestCase
{
    private PublicationQuery $publicationQuery;

    protected function setUp(): void
    {
        $this->publicationQuery = new PublicationQuery();
    }

    public function testGetPublicationQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$publicationId: Uuid!
            \$lengthUnit: LengthUnit = MM
            \$weightUnit: WeightUnit = G
        ) {
            publication(publicationId: \$publicationId) {
                ...publicationFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->publicationQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetPublicationsQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$filter: String = ""
            \$limit: Int = 100
            \$offset: Int = 0
            \$field: PublicationField = PUBLICATION_TYPE
            \$direction: Direction = ASC
            \$publicationTypes: [PublicationType!] = []
            \$publishers: [Uuid!] = []
            \$lengthUnit: LengthUnit = MM
            \$weightUnit: WeightUnit = G
        ) {
            publications(
                limit: \$limit
                filter: \$filter
                offset: \$offset
                order: {
                    field: \$field
                    direction: \$direction
                }
                publicationTypes: \$publicationTypes
                publishers: \$publishers
            ) {
                ...publicationFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->publicationQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetPublicationCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query(
            \$filter: String = ""
            \$publicationTypes: [PublicationType!] = []
            \$publishers: [Uuid!] = []
        ) {
            publicationCount(
                filter: \$filter
                publicationTypes: \$publicationTypes
                publishers: \$publishers
            )
        }
        GQL;

        $query = $this->publicationQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function getFieldsFragment(): string
    {
        return <<<GQL
        fragment publicationFields on Publication {
            publicationId
            publicationType
            workId
            isbn
            width(units: \$lengthUnit)
            height(units: \$lengthUnit)
            depth(units: \$lengthUnit)
            weight(units: \$weightUnit)
        }
        GQL;
    }
}
