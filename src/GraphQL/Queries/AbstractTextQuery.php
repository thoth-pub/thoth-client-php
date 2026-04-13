<?php

namespace ThothApi\GraphQL\Queries;

class AbstractTextQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(
                \$abstractId: Uuid!
                \$markupFormat: MarkupFormat
            ) {
                abstract(abstractId: \$abstractId, markupFormat: \$markupFormat) {
                    ...abstractFields
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
                \$field: AbstractField = CONTENT
                \$direction: Direction = ASC
                \$localeCodes: [LocaleCode!] = []
                \$markupFormat: MarkupFormat
            ) {
                abstracts(
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
                    ...abstractFields
                }
            }
            GQL
        );
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment abstractFields on Abstract {
            abstractId
            workId
            localeCode
            content
            canonical
            abstractType
        }
        GQL;
    }
}
