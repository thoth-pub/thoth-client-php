<?php

namespace ThothClient\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Queries\PriceQuery;

final class PriceQueryTest extends TestCase
{
    private PriceQuery $priceQuery;

    protected function setUp(): void
    {
        $this->priceQuery = new PriceQuery();
    }

    public function testGetPriceQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
        query(\$priceId: Uuid!) {
            price(priceId: \$priceId) {
                ...priceFields
            }
        }
        {$fragment}
        GQL;

        $query = $this->priceQuery->getQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetPricesQuery(): void
    {
        $fragment = $this->getFieldsFragment();
        $expectedQuery = <<<GQL
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
        {$fragment}
        GQL;

        $query = $this->priceQuery->getManyQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function testGetPriceCountQuery(): void
    {
        $expectedQuery = <<<GQL
        query(\$currencyCodes: [CurrencyCode!] = []) {
            priceCount(currencyCodes: \$currencyCodes)
        }
        GQL;

        $query = $this->priceQuery->getCountQuery();
        $this->assertSame($expectedQuery, $query);
    }

    public function getFieldsFragment(): string
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
