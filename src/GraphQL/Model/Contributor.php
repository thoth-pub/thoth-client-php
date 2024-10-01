<?php

namespace ThothClient\GraphQL\Model;

class Contributor extends AbstractModel
{
    public function getContributorId(): ?string
    {
        return $this->getData('contributorId');
    }

    public function setContributorId(?string $contributorId): void
    {
        $this->setData('contributorId', $contributorId);
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

    public function getOrcid(): ?string
    {
        return $this->getData('orcid');
    }

    public function setOrcid(?string $orcid): void
    {
        $this->setData('orcid', $orcid);
    }

    public function getWebsite(): ?string
    {
        return $this->getData('website');
    }

    public function setWebsite(?string $website): void
    {
        $this->setData('website', $website);
    }
}
