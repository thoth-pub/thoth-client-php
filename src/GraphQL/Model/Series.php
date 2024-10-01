<?php

namespace ThothClient\GraphQL\Model;

class Series extends AbstractModel
{
    public const SERIES_TYPE_JOURNAL = 'JOURNAL';
    public const SERIES_TYPE_BOOK_SERIES = 'BOOK_SERIES';

    public function getSeriesId(): ?string
    {
        return $this->getData('seriesId');
    }

    public function setSeriesId(?string $seriesId): void
    {
        $this->setData('seriesId', $seriesId);
    }

    public function getSeriesType(): ?string
    {
        return $this->getData('seriesType');
    }

    public function setSeriesType(?string $seriesType): void
    {
        $this->setData('seriesType', $seriesType);
    }

    public function getSeriesName(): ?string
    {
        return $this->getData('seriesName');
    }

    public function setSeriesName(?string $seriesName): void
    {
        $this->setData('seriesName', $seriesName);
    }

    public function getIssnPrint(): ?string
    {
        return $this->getData('issnPrint');
    }

    public function setIssnPrint(?string $issnPrint): void
    {
        $this->setData('issnPrint', $issnPrint);
    }

    public function getIssnDigital(): ?string
    {
        return $this->getData('issnDigital');
    }

    public function setIssnDigital(?string $issnDigital): void
    {
        $this->setData('issnDigital', $issnDigital);
    }

    public function getSeriesUrl(): ?string
    {
        return $this->getData('seriesUrl');
    }

    public function setSeriesUrl(?string $seriesUrl): void
    {
        $this->setData('seriesUrl', $seriesUrl);
    }

    public function getSeriesDescription(): ?string
    {
        return $this->getData('seriesDescription');
    }

    public function setSeriesDescription(?string $seriesDescription): void
    {
        $this->setData('seriesDescription', $seriesDescription);
    }

    public function getSeriesCfpUrl(): ?string
    {
        return $this->getData('seriesCfpUrl');
    }

    public function setSeriesCfpUrl(?string $seriesCfpUrl): void
    {
        $this->setData('seriesCfpUrl', $seriesCfpUrl);
    }

    public function getImprintId(): ?string
    {
        return $this->getData('imprintId');
    }

    public function setImprintId(?string $imprintId): void
    {
        $this->setData('imprintId', $imprintId);
    }
}
