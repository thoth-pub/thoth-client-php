<?php

namespace ThothApi\GraphQL\Models;

class Affiliation extends AbstractModel
{
    public function getAffiliationId(): ?string
    {
        return $this->getData('affiliationId');
    }

    public function setAffiliationId(?string $affiliationId): void
    {
        $this->setData('affiliationId', $affiliationId);
    }

    public function getContributionId(): ?string
    {
        return $this->getData('contributionId');
    }

    public function setContributionId(?string $contributionId): void
    {
        $this->setData('contributionId', $contributionId);
    }

    public function getInstitutionId(): ?string
    {
        return $this->getData('institutionId');
    }

    public function setInstitutionId(?string $institutionId): void
    {
        $this->setData('institutionId', $institutionId);
    }

    public function getAffiliationOrdinal(): int
    {
        return $this->getData('affiliationOrdinal');
    }

    public function setAffiliationOrdinal(int $affiliationOrdinal): void
    {
        $this->setData('affiliationOrdinal', $affiliationOrdinal);
    }

    public function getPosition(): ?string
    {
        return $this->getData('position');
    }

    public function setPosition(?string $position): void
    {
        $this->setData('position', $position);
    }
}
