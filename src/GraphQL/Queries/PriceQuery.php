<?php

namespace ThothApi\GraphQL\Queries;

class PriceQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$priceId: Uuid!) {
                price(priceId: \$priceId) {
                    ...priceFields
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
                \$currencyCodes: [CurrencyCode!] = []
                \$limit: Int = 100
                \$offset: Int = 0
                \$field: PriceField = CURRENCY_CODE
                \$direction: Direction = ASC
                \$publishers: [Uuid!] = []
            ) {
                prices(
                    currencyCodes: \$currencyCodes
                    limit: \$limit
                    offset: \$offset
                    order: {
                        field: \$field
                        direction: \$direction
                    }
                    publishers: \$publishers
                ) {
                    ...priceFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query(\$currencyCodes: [CurrencyCode!] = []) {
            priceCount(currencyCodes: \$currencyCodes)
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment priceFields on Price {
            priceId
            publicationId
            currencyCode
            unitPrice
        }
        GQL;
    }
}
