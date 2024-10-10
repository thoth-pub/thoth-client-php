<?php

namespace ThothApi\GraphQL\Models;

class Subject extends AbstractModel
{
    public const SUBJECT_TYPE_BIC = 'BIC';
    public const SUBJECT_TYPE_BISAC = 'BISAC';
    public const SUBJECT_TYPE_THEMA = 'THEMA';
    public const SUBJECT_TYPE_LCC = 'LCC';
    public const SUBJECT_TYPE_CUSTOM = 'CUSTOM';
    public const SUBJECT_TYPE_KEYWORD = 'KEYWORD';

    public function getSubjectId(): ?string
    {
        return $this->getData('subjectId');
    }

    public function setSubjectId(?string $subjectId): void
    {
        $this->setData('subjectId', $subjectId);
    }

    public function getWorkId(): ?string
    {
        return $this->getData('workId');
    }

    public function setWorkId(?string $workId): void
    {
        $this->setData('workId', $workId);
    }

    public function getSubjectType(): ?string
    {
        return $this->getData('subjectType');
    }

    public function setSubjectType(?string $subjectType): void
    {
        $this->setData('subjectType', $subjectType);
    }

    public function getSubjectCode(): ?string
    {
        return $this->getData('subjectCode');
    }

    public function setSubjectCode(?string $subjectCode): void
    {
        $this->setData('subjectCode', $subjectCode);
    }

    public function getSubjectOrdinal(): ?int
    {
        return $this->getData('subjectOrdinal');
    }

    public function setSubjectOrdinal(?int $subjectOrdinal): void
    {
        $this->setData('subjectOrdinal', $subjectOrdinal);
    }
}
