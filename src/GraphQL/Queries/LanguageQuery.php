<?php

namespace ThothApi\GraphQL\Queries;

class LanguageQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query (\$languageId: Uuid!) {
                language(languageId: \$languageId) {
                    ...languageFields
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
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
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
    }

    protected function getFieldsFragment(): string
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
