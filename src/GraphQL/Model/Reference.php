<?php

namespace ThothClient\GraphQL\Model;

class Reference extends AbstractModel
{
    public function getReferenceId(): ?string
    {
        return $this->getData('referenceId');
    }

    public function setReferenceId(?string $referenceId): void
    {
        $this->setData('referenceId', $referenceId);
    }

    public function getWorkId(): ?string
    {
        return $this->getData('workId');
    }

    public function setWorkId(?string $workId): void
    {
        $this->setData('workId', $workId);
    }

    public function getReferenceOrdinal(): int
    {
        return $this->getData('referenceOrdinal');
    }

    public function setReferenceOrdinal(int $referenceOrdinal): void
    {
        $this->setData('referenceOrdinal', $referenceOrdinal);
    }

    public function getDoi(): ?string
    {
        return $this->getData('doi');
    }

    public function setDoi(?string $doi): void
    {
        $this->setData('doi', $doi);
    }

    public function getUnstructuredCitation(): ?string
    {
        return $this->getData('unstructuredCitation');
    }

    public function setUnstructuredCitation(?string $unstructuredCitation): void
    {
        $this->setData('unstructuredCitation', $unstructuredCitation);
    }

    public function getIssn(): ?string
    {
        return $this->getData('issn');
    }

    public function setIssn(?string $issn): void
    {
        $this->setData('issn', $issn);
    }

    public function getIsbn(): ?string
    {
        return $this->getData('isbn');
    }

    public function setIsbn(?string $isbn): void
    {
        $this->setData('isbn', $isbn);
    }

    public function getJournalTitle(): ?string
    {
        return $this->getData('journalTitle');
    }

    public function setJournalTitle(?string $journalTitle): void
    {
        $this->setData('journalTitle', $journalTitle);
    }

    public function getArticleTitle(): ?string
    {
        return $this->getData('articleTitle');
    }

    public function setArticleTitle(?string $articleTitle): void
    {
        $this->setData('articleTitle', $articleTitle);
    }

    public function getSeriesTitle(): ?string
    {
        return $this->getData('seriesTitle');
    }

    public function setSeriesTitle(?string $seriesTitle): void
    {
        $this->setData('seriesTitle', $seriesTitle);
    }

    public function getVolumeTitle(): ?string
    {
        return $this->getData('volumeTitle');
    }

    public function setVolumeTitle(?string $volumeTitle): void
    {
        $this->setData('volumeTitle', $volumeTitle);
    }

    public function getEdition(): int
    {
        return $this->getData('edition');
    }

    public function setEdition(int $edition): void
    {
        $this->setData('edition', $edition);
    }

    public function getAuthor(): ?string
    {
        return $this->getData('author');
    }

    public function setAuthor(?string $author): void
    {
        $this->setData('author', $author);
    }

    public function getVolume(): ?string
    {
        return $this->getData('volume');
    }

    public function setVolume(?string $volume): void
    {
        $this->setData('volume', $volume);
    }

    public function getIssue(): ?string
    {
        return $this->getData('issue');
    }

    public function setIssue(?string $issue): void
    {
        $this->setData('issue', $issue);
    }

    public function getFirstPage(): ?string
    {
        return $this->getData('firstPage');
    }

    public function setFirstPage(?string $firstPage): void
    {
        $this->setData('firstPage', $firstPage);
    }

    public function getComponentNumber(): ?string
    {
        return $this->getData('componentNumber');
    }

    public function setComponentNumber(?string $componentNumber): void
    {
        $this->setData('componentNumber', $componentNumber);
    }

    public function getStandardDesignator(): ?string
    {
        return $this->getData('standardDesignator');
    }

    public function setStandardDesignator(?string $standardDesignator): void
    {
        $this->setData('standardDesignator', $standardDesignator);
    }

    public function getStandardsBodyName(): ?string
    {
        return $this->getData('standardsBodyName');
    }

    public function setStandardsBodyName(?string $standardsBodyName): void
    {
        $this->setData('standardsBodyName', $standardsBodyName);
    }

    public function getStandardsBodyAcronym(): ?string
    {
        return $this->getData('standardsBodyAcronym');
    }

    public function setStandardsBodyAcronym(?string $standardsBodyAcronym): void
    {
        $this->setData('standardsBodyAcronym', $standardsBodyAcronym);
    }

    public function getUrl(): ?string
    {
        return $this->getData('url');
    }

    public function setUrl(?string $url): void
    {
        $this->setData('url', $url);
    }

    public function getPublicationDate(): ?string
    {
        return $this->getData('publicationDate');
    }

    public function setPublicationDate(?string $publicationDate): void
    {
        $this->setData('publicationDate', $publicationDate);
    }

    public function getRetrievalDate(): ?string
    {
        return $this->getData('retrievalDate');
    }

    public function setRetrievalDate(?string $retrievalDate): void
    {
        $this->setData('retrievalDate', $retrievalDate);
    }
}
