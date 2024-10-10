<?php

namespace ThothApi\GraphQL\Models;

class Funding extends AbstractModel
{
    public function getFundingId(): ?string
    {
        return $this->getData('fundingId');
    }

    public function setFundingId(?string $fundingId): void
    {
        $this->setData('fundingId', $fundingId);
    }

    public function getWorkId(): ?string
    {
        return $this->getData('workId');
    }

    public function setWorkId(?string $workId): void
    {
        $this->setData('workId', $workId);
    }

    public function getInstitutionId(): ?string
    {
        return $this->getData('institutionId');
    }

    public function setInstitutionId(?string $institutionId): void
    {
        $this->setData('institutionId', $institutionId);
    }

    public function getProgram(): ?string
    {
        return $this->getData('program');
    }

    public function setProgram(?string $program): void
    {
        $this->setData('program', $program);
    }

    public function getProjectName(): ?string
    {
        return $this->getData('projectName');
    }

    public function setProjectName(?string $projectName): void
    {
        $this->setData('projectName', $projectName);
    }

    public function getProjectShortName(): ?string
    {
        return $this->getData('projectShortName');
    }

    public function setProjectShortName(?string $projectShortName): void
    {
        $this->setData('projectShortName', $projectShortName);
    }

    public function getGrantNumber(): ?string
    {
        return $this->getData('grantNumber');
    }

    public function setGrantNumber(?string $grantNumber): void
    {
        $this->setData('grantNumber', $grantNumber);
    }

    public function getJurisdiction(): ?string
    {
        return $this->getData('jurisdiction');
    }

    public function setJurisdiction(?string $jurisdiction): void
    {
        $this->setData('jurisdiction', $jurisdiction);
    }
}
