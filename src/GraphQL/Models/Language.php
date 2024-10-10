<?php

namespace ThothApi\GraphQL\Models;

class Language extends AbstractModel
{
    public const LANGUAGE_RELATION_ORIGINAL = 'ORIGINAL';
    public const LANGUAGE_RELATION_TRANSLATED_FROM = 'TRANSLATED_FROM';
    public const LANGUAGE_RELATION_TRANSLATED_INTO = 'TRANSLATED_INTO';

    public function getLanguageId(): ?string
    {
        return $this->getData('languageId');
    }

    public function setLanguageId(?string $languageId): void
    {
        $this->setData('languageId', $languageId);
    }

    public function getWorkId(): ?string
    {
        return $this->getData('workId');
    }

    public function setWorkId(?string $workId): void
    {
        $this->setData('workId', $workId);
    }

    public function getLanguageCode(): ?string
    {
        return $this->getData('languageCode');
    }

    public function setLanguageCode(?string $languageCode): void
    {
        $this->setData('languageCode', $languageCode);
    }

    public function getLanguageRelation(): ?string
    {
        return $this->getData('languageRelation');
    }

    public function setLanguageRelation(?string $languageRelation): void
    {
        $this->setData('languageRelation', $languageRelation);
    }

    public function getMainLanguage(): ?bool
    {
        return $this->getData('mainLanguage');
    }

    public function setMainLanguage(?bool $mainLanguage): void
    {
        $this->setData('mainLanguage', $mainLanguage);
    }
}
