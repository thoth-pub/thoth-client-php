<?php

namespace ThothClient\GraphQL\Models;

class Contribution extends AbstractModel
{
    public const CONTRIBUTION_TYPE_AUTHOR = 'AUTHOR';
    public const CONTRIBUTION_TYPE_EDITOR = 'EDITOR';
    public const CONTRIBUTION_TYPE_TRANSLATOR = 'TRANSLATOR';
    public const CONTRIBUTION_TYPE_PHOTOGRAPHER = 'PHOTOGRAPHER';
    public const CONTRIBUTION_TYPE_ILLUSTRATOR = 'ILLUSTRATOR';
    public const CONTRIBUTION_TYPE_MUSIC_EDITOR = 'MUSIC_EDITOR';
    public const CONTRIBUTION_TYPE_FOREWORD_BY = 'FOREWORD_BY';
    public const CONTRIBUTION_TYPE_INTRODUCTION_BY = 'INTRODUCTION_BY';
    public const CONTRIBUTION_TYPE_AFTERWORD_BY = 'AFTERWORD_BY';
    public const CONTRIBUTION_TYPE_PREFACE_BY = 'PREFACE_BY';
    public const CONTRIBUTION_TYPE_SOFTWARE_BY = 'SOFTWARE_BY';
    public const CONTRIBUTION_TYPE_RESEARCH_BY = 'RESEARCH_BY';
    public const CONTRIBUTION_TYPE_CONTRIBUTIONS_BY = 'CONTRIBUTIONS_BY';
    public const CONTRIBUTION_TYPE_INDEXER = 'INDEXER';

    public function getContributionId(): ?string
    {
        return $this->getData('contributionId');
    }

    public function setContributionId(?string $contributionId): void
    {
        $this->setData('contributionId', $contributionId);
    }

    public function getContributorId(): ?string
    {
        return $this->getData('contributorId');
    }

    public function setContributorId(?string $contributorId): void
    {
        $this->setData('contributorId', $contributorId);
    }

    public function getWorkId(): ?string
    {
        return $this->getData('workId');
    }

    public function setWorkId(?string $workId): void
    {
        $this->setData('workId', $workId);
    }

    public function getContributionType(): ?string
    {
        return $this->getData('contributionType');
    }

    public function setContributionType(?string $contributionType): void
    {
        $this->setData('contributionType', $contributionType);
    }

    public function getMainContribution(): ?bool
    {
        return $this->getData('mainContribution');
    }

    public function setMainContribution(?bool $mainContribution): void
    {
        $this->setData('mainContribution', $mainContribution);
    }

    public function getBiography(): ?string
    {
        return $this->getData('biography');
    }

    public function setBiography(?string $biography): void
    {
        $this->setData('biography', $biography);
    }

    public function getFirstName(): ?string
    {
        return $this->getData('firstName');
    }

    public function setFirstName(?string $firstName): void
    {
        $this->setData('firstName', $firstName);
    }

    public function getLastName(): ?string
    {
        return $this->getData('lastName');
    }

    public function setLastName(?string $lastName): void
    {
        $this->setData('lastName', $lastName);
    }

    public function getFullName(): ?string
    {
        return $this->getData('fullName');
    }

    public function setFullName(?string $fullName): void
    {
        $this->setData('fullName', $fullName);
    }

    public function getContributionOrdinal(): ?int
    {
        return $this->getData('ContributionOrdinal');
    }

    public function setContributionOrdinal(?int $ContributionOrdinal): void
    {
        $this->setData('ContributionOrdinal', $ContributionOrdinal);
    }
}
