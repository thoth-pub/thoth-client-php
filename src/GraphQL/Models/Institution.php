<?php

namespace ThothClient\GraphQL\Models;

class Institution extends AbstractModel
{
    public function getInstitutionId(): ?string
    {
        return $this->getData('institutionId');
    }

    public function setInstitutionId(?string $institutionId): void
    {
        $this->setData('institutionId', $institutionId);
    }

    public function getInstitutionName(): ?string
    {
        return $this->getData('institutionName');
    }

    public function setInstitutionName(?string $institutionName): void
    {
        $this->setData('institutionName', $institutionName);
    }

    public function getInstitutionDoi(): ?string
    {
        return $this->getData('institutionDoi');
    }

    public function setInstitutionDoi(?string $institutionDoi): void
    {
        $this->setData('institutionDoi', $institutionDoi);
    }

    public function getCountryCode(): ?string
    {
        return $this->getData('countryCode');
    }

    public function setCountryCode(?string $countryCode): void
    {
        $this->setData('countryCode', $countryCode);
    }

    public function getRor(): ?string
    {
        return $this->getData('ror');
    }

    public function setRor(?string $ror): void
    {
        $this->setData('ror', $ror);
    }
}
