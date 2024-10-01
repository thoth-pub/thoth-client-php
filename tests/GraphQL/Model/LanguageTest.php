<?php

namespace ThothClient\Tests\GraphQL\Model;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Model\Language;

final class LanguageTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $languageId = 'e646c027-7c98-4aa2-84e4-6f61ab4321cd';
        $workId = 'e14ba757-5388-4903-bb6a-396161a531bb';
        $languageCode = 'SWE';
        $languageRelation = language::LANGUAGE_RELATION_ORIGINAL;
        $mainLanguage = true;

        $language = new Language();
        $language->setLanguageId($languageId);
        $language->setWorkId($workId);
        $language->setLanguageCode($languageCode);
        $language->setLanguageRelation($languageRelation);
        $language->setMainLanguage($mainLanguage);

        $this->assertSame($languageId, $language->getLanguageId());
        $this->assertSame($workId, $language->getWorkId());
        $this->assertSame($languageCode, $language->getLanguageCode());
        $this->assertSame($languageRelation, $language->getLanguageRelation());
        $this->assertSame($mainLanguage, $language->getMainLanguage());
    }
}
