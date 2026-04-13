<?php

namespace ThothApi\GraphQL\Queries;

class TitleQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(
                \$titleId: Uuid!
                \$markupFormat: MarkupFormat
            ) {
                title(titleId: \$titleId, markupFormat: \$markupFormat) {
                    ...titleFields
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
                \$field: TitleField = FULL_TITLE
                \$direction: Direction = ASC
                \$localeCodes: [LocaleCode!] = []
                \$markupFormat: MarkupFormat
            ) {
                titles(
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
                    ...titleFields
                }
            }
            GQL
        );
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment titleFields on Title {
            titleId
            workId
            localeCode
            fullTitle
            title
            subtitle
            canonical
        }
        GQL;
    }
}
