<?php

namespace ThothClient\GraphQL\Models;

class Issue extends AbstractModel
{
    public function getIssueId(): ?string
    {
        return $this->getData('issueId');
    }

    public function setIssueId(?string $issueId): void
    {
        $this->setData('issueId', $issueId);
    }

    public function getWorkId(): ?string
    {
        return $this->getData('workId');
    }

    public function setWorkId(?string $workId): void
    {
        $this->setData('workId', $workId);
    }

    public function getSeriesId(): ?string
    {
        return $this->getData('seriesId');
    }

    public function setSeriesId(?string $seriesId): void
    {
        $this->setData('seriesId', $seriesId);
    }

    public function getIssueOrdinal(): ?int
    {
        return $this->getData('issueOrdinal');
    }

    public function setIssueOrdinal(?int $issueOrdinal): void
    {
        $this->setData('issueOrdinal', $issueOrdinal);
    }
}
