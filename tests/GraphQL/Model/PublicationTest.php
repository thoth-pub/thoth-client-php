<?php

namespace ThothClient\Tests\GraphQL\Model;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Model\Publication;

final class PublicationTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $publicationId = '5073eefd-8173-4b2e-99d0-734639d5f3e7';
        $workId = 'ad904728-2f96-4cbb-973f-70b4414cf27e';
        $publicationType = Publication::PUBLICATION_TYPE_PAPERBACK;
        $isbn = '987-6-54321-234-5';
        $width = 156.0;
        $height = 234.0;
        $depth = 25.0;
        $weight = 206.0;

        $publication = new Publication();
        $publication->setPublicationId($publicationId);
        $publication->setWorkId($workId);
        $publication->setPublicationType($publicationType);
        $publication->setIsbn($isbn);
        $publication->setWidth($width);
        $publication->setHeight($height);
        $publication->setDepth($depth);
        $publication->setWeight($weight);

        $this->assertSame($publicationId, $publication->getPublicationId());
        $this->assertSame($workId, $publication->getWorkId());
        $this->assertSame($publicationType, $publication->getPublicationType());
        $this->assertSame($isbn, $publication->getIsbn());
        $this->assertSame($width, $publication->getWidth());
        $this->assertSame($height, $publication->getHeight());
        $this->assertSame($depth, $publication->getDepth());
        $this->assertSame($weight, $publication->getWeight());
    }
}
