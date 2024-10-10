<?php

namespace ThothApi\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\LanguageQuery;

final class LanguageQueryTest extends TestCase
{
    private LanguageQuery $languageQuery;

    protected function setUp(): void
    {
        $this->languageQuery = new LanguageQuery();
    }

    public function testGetLanguageQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query (\$languageId: Uuid!) {
            language(languageId: \$languageId) {
                ...languageFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->languageQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetLanguagesQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(
            \$languageCodes: [LanguageCode!] = []
            \$languageRelations: [LanguageRelation!] = []
            \$limit: Int = 100
            \$offset: Int = 0
            \$field: LanguageField = LANGUAGE_CODE
            \$direction: Direction = ASC
            \$publishers: [Uuid!] = []
        ) {
            languages(
                languageCodes: \$languageCodes
                languageRelations: \$languageRelations
                limit: \$limit
                offset: \$offset
                order: {
                    field: \$field
                    direction: \$direction
                }
                publishers: \$publishers
            ) {
                ...languageFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->languageQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetLanguageCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query(
            \$languageCodes: [LanguageCode!] = []
            \$languageRelations: [LanguageRelation!] = []
        ) {
            languageCount(
                languageCodes: \$languageCodes
                languageRelations: \$languageRelations
            )
        }
        GQL;

        $query = $this->languageQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function getFieldsFragment(): string
    {
        return <<<GQL
        fragment languageFields on Language {
            languageId
            workId
            languageCode
            languageRelation
            mainLanguage
        }
        GQL;
    }
}
