<?php

namespace ThothApi\Tests\GraphQL\Models;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Models\Publication;

final class PublicationTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $publicationId = '5073eefd-8173-4b2e-99d0-734639d5f3e7';
        $workId = 'ad904728-2f96-4cbb-973f-70b4414cf27e';
        $publicationType = Publication::PUBLICATION_TYPE_PAPERBACK;
        $isbn = '987-6-54321-234-5';
        $widthMm = 156.0;
        $heightMm = 234.0;
        $depthMm = 25.0;
        $weightG = 206.0;

        $publication = new Publication();
        $publication->setPublicationId($publicationId);
        $publication->setWorkId($workId);
        $publication->setPublicationType($publicationType);
        $publication->setIsbn($isbn);
        $publication->setWidthMm($widthMm);
        $publication->setHeightMm($heightMm);
        $publication->setDepthMm($depthMm);
        $publication->setWeightG($weightG);

        $this->assertSame($publicationId, $publication->getPublicationId());
        $this->assertSame($workId, $publication->getWorkId());
        $this->assertSame($publicationType, $publication->getPublicationType());
        $this->assertSame($isbn, $publication->getIsbn());
        $this->assertSame($widthMm, $publication->getWidthMm());
        $this->assertSame($heightMm, $publication->getHeightMm());
        $this->assertSame($depthMm, $publication->getDepthMm());
        $this->assertSame($weightG, $publication->getWeightG());
    }

    public function testGettersAndSettersWithConvention(): void
    {
        $publication = new Publication();
        $publication->setWidthMm(156, true);
        $publication->setHeightMm(234, true);
        $publication->setDepthMm(5, true);
        $publication->setWeightG(206, true);

        $this->assertSame(6.14, $publication->getWidthIn());
        $this->assertSame(9.21, $publication->getHeightIn());
        $this->assertSame(0.2, $publication->getDepthIn());
        $this->assertSame(7.2664, $publication->getWeightOz());
    }
}
