<?php

namespace ThothApi\GraphQL\Models;

class Publication extends AbstractModel
{
    public const PUBLICATION_TYPE_PAPERBACK = 'PAPERBACK';
    public const PUBLICATION_TYPE_HARDBACK = 'HARDBACK';
    public const PUBLICATION_TYPE_PDF = 'PDF';
    public const PUBLICATION_TYPE_HTML = 'HTML';
    public const PUBLICATION_TYPE_XML = 'XML';
    public const PUBLICATION_TYPE_EPUB = 'EPUB';
    public const PUBLICATION_TYPE_MOBI = 'MOBI';
    public const PUBLICATION_TYPE_AZW3 = 'AZW3';
    public const PUBLICATION_TYPE_DOCX = 'DOCX';
    public const PUBLICATION_TYPE_FICTION_BOOK = 'FICTION_BOOK';
    public const PUBLICATION_TYPE_MP3 = 'MP3';
    public const PUBLICATION_TYPE_WAV = 'WAV';

    public function getPublicationId(): ?string
    {
        return $this->getData('publicationId');
    }

    public function setPublicationId(?string $publicationId): void
    {
        $this->setData('publicationId', $publicationId);
    }

    public function getWorkId(): ?string
    {
        return $this->getData('workId');
    }

    public function setWorkId(?string $workId): void
    {
        $this->setData('workId', $workId);
    }

    public function getPublicationType(): ?string
    {
        return $this->getData('publicationType');
    }

    public function setPublicationType(?string $publicationType): void
    {
        $this->setData('publicationType', $publicationType);
    }

    public function getIsbn(): ?string
    {
        return $this->getData('isbn');
    }

    public function setIsbn(?string $isbn): void
    {
        $this->setData('isbn', $isbn);
    }

    public function getWidth(): ?float
    {
        return $this->getData('width');
    }

    public function setWidth(?float $width): void
    {
        $this->setData('width', $width);
    }

    public function getHeight(): ?float
    {
        return $this->getData('height');
    }

    public function setHeight(?float $height): void
    {
        $this->setData('height', $height);
    }

    public function getDepth(): ?float
    {
        return $this->getData('depth');
    }

    public function setDepth(?float $depth): void
    {
        $this->setData('depth', $depth);
    }

    public function getWeight(): ?float
    {
        return $this->getData('weight');
    }

    public function setWeight(?float $weight): void
    {
        $this->setData('weight', $weight);
    }
}
