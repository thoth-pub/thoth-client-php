<?php

namespace ThothApi\Tests\GraphQL\Models;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Models\Price;

final class PriceTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $priceId = 'f026cdd8-3728-430a-a0d6-af18f8bbe2b7';
        $publicationId = '235a8a7b-830a-4828-b231-7e539fb25fcb';
        $currentCode = 'USD';
        $unitPrice = 12.0;

        $price = new Price();
        $price->setPriceId($priceId);
        $price->setPublicationId($publicationId);
        $price->setCurrentCode($currentCode);
        $price->setUnitPrice($unitPrice);

        $this->assertSame($priceId, $price->getPriceId());
        $this->assertSame($publicationId, $price->getPublicationId());
        $this->assertSame($currentCode, $price->getCurrentCode());
        $this->assertSame($unitPrice, $price->getUnitPrice());
    }
}
