<?php

namespace ThothApi\GraphQL\Queries;

class BiographyQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(
                \$biographyId: Uuid!
                \$markupFormat: MarkupFormat
            ) {
                biography(biographyId: \$biographyId, markupFormat: \$markupFormat) {
                    ...biographyFields
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
                \$filter: String = ""
                \$field: BiographyField = CONTENT
                \$direction: Direction = ASC
                \$localeCodes: [LocaleCode!] = []
                \$markupFormat: MarkupFormat
            ) {
                biographies(
                    limit: \$limit
                    offset: \$offset
                    filter: \$filter
                    order: {
                        field: \$field
                        direction: \$direction
                    }
                    localeCodes: \$localeCodes
                    markupFormat: \$markupFormat
                ) {
                    ...biographyFields
                }
            }
            GQL
        );
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment biographyFields on Biography {
            biographyId
            contributionId
            localeCode
            content
            canonical
        }
        GQL;
    }
}
