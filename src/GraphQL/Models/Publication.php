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

    public function getWidthMm(): ?float
    {
        return $this->getData('widthMm');
    }

    public function setWidthMm(?float $widthMm, bool $convert = false): void
    {
        $this->setData('widthMm', $widthMm);

        if ($convert) {
            $this->setData('widthIn', $widthMm ? round($widthMm / 25.4, 2) : null);
        }
    }

    public function getWidthIn(): ?float
    {
        return $this->getData('widthIn');
    }

    public function setWidthIn(?float $widthIn, bool $convert = false): void
    {
        $this->setData('widthIn', $widthIn);

        if ($convert) {
            $this->setData('widthMm', $widthIn ? round($widthIn * 25.4, 2) : null);
        }
    }

    public function getHeightMm(): ?float
    {
        return $this->getData('heightMm');
    }

    public function setHeightMm(?float $heightMm, bool $convert = false): void
    {
        $this->setData('heightMm', $heightMm);

        if ($convert) {
            $this->setData('heightIn', $heightMm ? round($heightMm / 25.4, 2) : null);
        }
    }

    public function getHeightIn(): ?float
    {
        return $this->getData('heightIn');
    }

    public function setHeightIn(?float $heightIn, bool $convert = false): void
    {
        $this->setData('heightIn', $heightIn);

        if ($convert) {
            $this->setData('heightMm', $heightIn ? round($heightIn * 25.4, 2) : null);
        }
    }

    public function getDepthMm(): ?float
    {
        return $this->getData('depthMm');
    }

    public function setDepthMm(?float $depthMm, bool $convert = false): void
    {
        $this->setData('depthMm', $depthMm);

        if ($convert) {
            $this->setData('depthIn', $depthMm ? round($depthMm / 25.4, 2) : null);
        }
    }

    public function getDepthIn(): ?float
    {
        return $this->getData('depthIn');
    }

    public function setDepthIn(?float $depthIn, bool $convert = false): void
    {
        $this->setData('depthIn', $depthIn);

        if ($convert) {
            $this->setData('depthMm', $depthIn ? round($depthIn * 25.4, 2) : null);
        }
    }

    public function getWeightG(): ?float
    {
        return $this->getData('weightG');
    }

    public function setWeightG(?float $weightG, bool $convert = false): void
    {
        $this->setData('weightG', $weightG);

        if ($convert) {
            $this->setData('weightOz', $weightG ? round($weightG / 28.349523125, 4) : null);
        }
    }

    public function getWeightOz(): ?float
    {
        return $this->getData('weightOz');
    }

    public function setWeightOz(?float $weightOz, bool $convert = false): void
    {
        $this->setData('weightOz', $weightOz);

        if ($convert) {
            $this->setData('weightG', $weightOz ? round($weightOz * 28.349523125, 4) : null);
        }
    }
}
