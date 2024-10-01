<?php

namespace ThothClient\Tests\GraphQL\Model;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Model\Work;

final class WorkTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $workId = '9d201922-46b6-4876-9061-65663af15a25';
        $workType = Work::WORK_TYPE_BOOK_CHAPTER;
        $workStatus = Work::WORK_STATUS_FORTHCOMING;
        $fullTitle = 'Lorem ipsum: Neque porro quisquam est';
        $title = 'Lorem ipsum';
        $subtitle = 'Neque porro quisquam est';
        $reference = 'foo';
        $edition = 1;
        $doi = 'https://doi.org/10.00000/00000000';
        $publicationDate = '2020-01-01';
        $withdrawnDate = '2020-12-12';
        $place = 'Earth, Milky Way';
        $pageCount = 326;
        $pageBreakdown = '0';
        $imageCount = 5;
        $tableCount = 2;
        $audioCount = 0;
        $videoCount = 1;
        $license = 'https://creativecommons.org/licenses/by-nc/4.0/';
        $copyrightHolder = 'John Doe';
        $landingPage = 'https://foo.bar/lorem-ipsum/';
        $lccn = '2014471418';
        $oclc = '1086518639';
        $shortAbstract = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra ut finibus suscipit';
        $longAbstract = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra nulla ut finibus ' .
            'suscipit. Etiam dictum cursus dolor, in fringilla felis placerat sed. Fusce aliquam orci ut sapien ' .
            'lobortis, id cursus dolor dapibus. Nunc vitae ligula nec ex ornare pretium. Donec et purus ac ipsum ' .
            'finibus faucibus. Fusce at ipsum velit.';
        $generalNote = 'Sed nunc dui, semper eu semper vel, bibendum in nulla.';
        $bibliographyNote = 'Phasellus ac gravida odio. Mauris nec sodales odio.';
        $toc = '0. Introduction\n1. Lorem ipsum dolor sit amet\n2. Nullam viverra ut finibus suscipit\n' .
            '3. Etiam dictum cursus dolor\n4. Conclusions';
        $coverUrl = 'https://foo.bar/baz/qux';
        $coverCaption = 'foobar';
        $firstPage = '1';
        $lastPage = '326';
        $pageInterval = '1-326';

        $work = new Work();
        $work->setWorkId($workId);
        $work->setWorkType($workType);
        $work->setWorkStatus($workStatus);
        $work->setFullTitle($fullTitle);
        $work->setTitle($title);
        $work->setSubtitle($subtitle);
        $work->setReference($reference);
        $work->setEdition($edition);
        $work->setDoi($doi);
        $work->setPublicationDate($publicationDate);
        $work->setWithdrawnDate($withdrawnDate);
        $work->setPlace($place);
        $work->setPageCount($pageCount);
        $work->setPageBreakdown($pageBreakdown);
        $work->setImageCount($imageCount);
        $work->setTableCount($tableCount);
        $work->setAudioCount($audioCount);
        $work->setVideoCount($videoCount);
        $work->setLicense($license);
        $work->setCopyrightHolder($copyrightHolder);
        $work->setLandingPage($landingPage);
        $work->setLccn($lccn);
        $work->setOclc($oclc);
        $work->setShortAbstract($shortAbstract);
        $work->setLongAbstract($longAbstract);
        $work->setGeneralNote($generalNote);
        $work->setBibliographyNote($bibliographyNote);
        $work->setToc($toc);
        $work->setCoverUrl($coverUrl);
        $work->setCoverCaption($coverCaption);
        $work->setFirstPage($firstPage);
        $work->setLastPage($lastPage);
        $work->setPageInterval($pageInterval);

        $this->assertSame($workId, $work->getWorkId());
        $this->assertSame($workType, $work->getWorkType());
        $this->assertSame($workStatus, $work->getWorkStatus());
        $this->assertSame($fullTitle, $work->getFullTitle());
        $this->assertSame($title, $work->getTitle());
        $this->assertSame($subtitle, $work->getSubtitle());
        $this->assertSame($reference, $work->getReference());
        $this->assertSame($edition, $work->getEdition());
        $this->assertSame($doi, $work->getDoi());
        $this->assertSame($publicationDate, $work->getPublicationDate());
        $this->assertSame($withdrawnDate, $work->getWithdrawnDate());
        $this->assertSame($place, $work->getPlace());
        $this->assertSame($pageCount, $work->getPageCount());
        $this->assertSame($pageBreakdown, $work->getPageBreakdown());
        $this->assertSame($imageCount, $work->getImageCount());
        $this->assertSame($tableCount, $work->getTableCount());
        $this->assertSame($audioCount, $work->getAudioCount());
        $this->assertSame($videoCount, $work->getVideoCount());
        $this->assertSame($license, $work->getLicense());
        $this->assertSame($copyrightHolder, $work->getCopyrightHolder());
        $this->assertSame($landingPage, $work->getLandingPage());
        $this->assertSame($lccn, $work->getLccn());
        $this->assertSame($oclc, $work->getOclc());
        $this->assertSame($shortAbstract, $work->getShortAbstract());
        $this->assertSame($longAbstract, $work->getLongAbstract());
        $this->assertSame($generalNote, $work->getGeneralNote());
        $this->assertSame($bibliographyNote, $work->getBibliographyNote());
        $this->assertSame($toc, $work->getToc());
        $this->assertSame($coverUrl, $work->getCoverUrl());
        $this->assertSame($coverCaption, $work->getCoverCaption());
        $this->assertSame($firstPage, $work->getFirstPage());
        $this->assertSame($lastPage, $work->getLastPage());
        $this->assertSame($pageInterval, $work->getPageInterval());
    }
}
