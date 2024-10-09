<?php

namespace ThothClient\Tests\GraphQL\Models;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Models\Series;

final class SeriesTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $seriesId = '90f5e4ec-e591-4bd9-b06b-506670cb523e';
        $seriesType = Series::SERIES_TYPE_JOURNAL;
        $seriesName = 'Foobar';
        $issnPrint = '2515-0758';
        $issnDigital = '2515-0766';
        $seriesUrl = 'http://foo.bar/';
        $seriesDescription = 'Sed nunc dui, semper eu semper vel, bibendum in nulla.';
        $seriesCfpUrl = 'http://foo.bar/baz/cfp';
        $imprintId = 'c2a4eca1-9bb4-479f-98ad-09abc9756745';

        $series = new Series();
        $series->setSeriesId($seriesId);
        $series->setSeriesType($seriesType);
        $series->setSeriesName($seriesName);
        $series->setIssnPrint($issnPrint);
        $series->setIssnDigital($issnDigital);
        $series->setSeriesUrl($seriesUrl);
        $series->setSeriesDescription($seriesDescription);
        $series->setSeriesCfpUrl($seriesCfpUrl);
        $series->setImprintId($imprintId);

        $this->assertSame($seriesId, $series->getSeriesId());
        $this->assertSame($seriesType, $series->getSeriesType());
        $this->assertSame($seriesName, $series->getSeriesName());
        $this->assertSame($issnPrint, $series->getIssnPrint());
        $this->assertSame($issnDigital, $series->getIssnDigital());
        $this->assertSame($seriesUrl, $series->getSeriesUrl());
        $this->assertSame($seriesDescription, $series->getSeriesDescription());
        $this->assertSame($seriesCfpUrl, $series->getSeriesCfpUrl());
        $this->assertSame($imprintId, $series->getImprintId());
    }
}
