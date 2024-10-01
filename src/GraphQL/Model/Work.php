<?php

namespace ThothClient\GraphQL\Model;

class Work extends AbstractModel
{
    public const WORK_TYPE_BOOK_CHAPTER = 'BOOK_CHAPTER';
    public const WORK_TYPE_MONOGRAPH = 'MONOGRAPH';
    public const WORK_TYPE_EDITED_BOOK = 'EDITED_BOOK';
    public const WORK_TYPE_TEXTBOOK = 'TEXTBOOK';
    public const WORK_TYPE_JOURNAL_ISSUE = 'JOURNAL_ISSUE';
    public const WORK_TYPE_BOOK_SET = 'BOOK_SET';

    public const WORK_STATUS_FORTHCOMING = 'FORTHCOMING';
    public const WORK_STATUS_ACTIVE = 'ACTIVE';
    public const WORK_STATUS_WITHDRAWN = 'WITHDRAWN';
    public const WORK_STATUS_SUPERSEDED = 'SUPERSEDED';
    public const WORK_STATUS_POSTPONED_INDEFINITELY = 'POSTPONED_INDEFINITELY';
    public const WORK_STATUS_CANCELLED = 'CANCELLED';

    public function getWorkId(): string
    {
        return $this->getData('workId');
    }

    public function setWorkId(string $workId): void
    {
        $this->setData('workId', $workId);
    }

    public function getWorkType(): string
    {
        return $this->getData('workType');
    }

    public function setWorkType(string $workType): void
    {
        $this->setData('workType', $workType);
    }

    public function getWorkStatus(): string
    {
        return $this->getData('workStatus');
    }

    public function setWorkStatus(string $workStatus): void
    {
        $this->setData('workStatus', $workStatus);
    }

    public function getFullTitle(): string
    {
        return $this->getData('fullTitle');
    }

    public function setFullTitle(string $fullTitle): void
    {
        $this->setData('fullTitle', $fullTitle);
    }

    public function getTitle(): string
    {
        return $this->getData('title');
    }

    public function setTitle(string $title): void
    {
        $this->setData('title', $title);
    }

    public function getSubtitle(): string
    {
        return $this->getData('subtitle');
    }

    public function setSubtitle(string $subtitle): void
    {
        $this->setData('subtitle', $subtitle);
    }

    public function getReference(): string
    {
        return $this->getData('reference');
    }

    public function setReference(string $reference): void
    {
        $this->setData('reference', $reference);
    }

    public function getEdition(): int
    {
        return $this->getData('edition');
    }

    public function setEdition(int $edition): void
    {
        $this->setData('edition', $edition);
    }

    public function getDoi(): string
    {
        return $this->getData('doi');
    }

    public function setDoi(string $doi): void
    {
        $this->setData('doi', $doi);
    }

    public function getPublicationDate(): string
    {
        return $this->getData('publicationDate');
    }

    public function setPublicationDate(string $publicationDate): void
    {
        $this->setData('publicationDate', $publicationDate);
    }

    public function getWithdrawnDate(): string
    {
        return $this->getData('withdrawnDate');
    }

    public function setWithdrawnDate(string $withdrawnDate): void
    {
        $this->setData('withdrawnDate', $withdrawnDate);
    }

    public function getPlace(): string
    {
        return $this->getData('place');
    }

    public function setPlace(string $place): void
    {
        $this->setData('place', $place);
    }

    public function getPageCount(): int
    {
        return $this->getData('pageCount');
    }

    public function setPageCount(int $pageCount): void
    {
        $this->setData('pageCount', $pageCount);
    }

    public function getPageBreakdown(): string
    {
        return $this->getData('pageBreakdown');
    }

    public function setPageBreakdown(string $pageBreakdown): void
    {
        $this->setData('pageBreakdown', $pageBreakdown);
    }

    public function getImageCount(): int
    {
        return $this->getData('imageCount');
    }

    public function setImageCount(int $imageCount): void
    {
        $this->setData('imageCount', $imageCount);
    }

    public function getTableCount(): int
    {
        return $this->getData('tableCount');
    }

    public function setTableCount(int $tableCount): void
    {
        $this->setData('tableCount', $tableCount);
    }

    public function getAudioCount(): int
    {
        return $this->getData('audioCount');
    }

    public function setAudioCount(int $audioCount): void
    {
        $this->setData('audioCount', $audioCount);
    }

    public function getVideoCount(): int
    {
        return $this->getData('videoCount');
    }

    public function setVideoCount(int $videoCount): void
    {
        $this->setData('videoCount', $videoCount);
    }

    public function getLicense(): string
    {
        return $this->getData('license');
    }

    public function setLicense(string $license): void
    {
        $this->setData('license', $license);
    }

    public function getCopyrightHolder(): string
    {
        return $this->getData('copyrightHolder');
    }

    public function setCopyrightHolder(string $copyrightHolder): void
    {
        $this->setData('copyrightHolder', $copyrightHolder);
    }

    public function getLandingPage(): string
    {
        return $this->getData('landingPage');
    }

    public function setLandingPage(string $landingPage): void
    {
        $this->setData('landingPage', $landingPage);
    }

    public function getLccn(): string
    {
        return $this->getData('lccn');
    }

    public function setLccn(string $lccn): void
    {
        $this->setData('lccn', $lccn);
    }

    public function getOclc(): string
    {
        return $this->getData('oclc');
    }

    public function setOclc(string $oclc): void
    {
        $this->setData('oclc', $oclc);
    }

    public function getShortAbstract(): string
    {
        return $this->getData('shortAbstract');
    }

    public function setShortAbstract(string $shortAbstract): void
    {
        $this->setData('shortAbstract', $shortAbstract);
    }

    public function getLongAbstract(): string
    {
        return $this->getData('longAbstract');
    }

    public function setLongAbstract(string $longAbstract): void
    {
        $this->setData('longAbstract', $longAbstract);
    }

    public function getGeneralNote(): string
    {
        return $this->getData('generalNote');
    }

    public function setGeneralNote(string $generalNote): void
    {
        $this->setData('generalNote', $generalNote);
    }

    public function getBibliographyNote(): string
    {
        return $this->getData('bibliographyNote');
    }

    public function setBibliographyNote(string $bibliographyNote): void
    {
        $this->setData('bibliographyNote', $bibliographyNote);
    }

    public function getToc(): string
    {
        return $this->getData('toc');
    }

    public function setToc(string $toc): void
    {
        $this->setData('toc', $toc);
    }

    public function getCoverUrl(): string
    {
        return $this->getData('coverUrl');
    }

    public function setCoverUrl(string $coverUrl): void
    {
        $this->setData('coverUrl', $coverUrl);
    }

    public function getCoverCaption(): string
    {
        return $this->getData('coverCaption');
    }

    public function setCoverCaption(string $coverCaption): void
    {
        $this->setData('coverCaption', $coverCaption);
    }

    public function getFirstPage(): string
    {
        return $this->getData('firstPage');
    }

    public function setFirstPage(string $firstPage): void
    {
        $this->setData('firstPage', $firstPage);
    }

    public function getLastPage(): string
    {
        return $this->getData('lastPage');
    }

    public function setLastPage(string $lastPage): void
    {
        $this->setData('lastPage', $lastPage);
    }

    public function getPageInterval(): string
    {
        return $this->getData('pageInterval');
    }

    public function setPageInterval(string $pageInterval): void
    {
        $this->setData('pageInterval', $pageInterval);
    }
}
