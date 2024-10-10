<?php

namespace ThothApi\Tests\GraphQL\Models;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Models\Reference;

final class ReferenceTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $referenceId = '3fd1aaec-6e07-47be-baaa-bacd6d1a6a26';
        $workId = 'acbfb657-cc3f-4b65-acff-3bd55f1bc2e6';
        $referenceOrdinal = 1;
        $doi = 'https://doi.org/10.1017/ssh.2021.1';
        $unstructuredCitation = 'Alvarez-Palau, Eduard J., Alfonso Díez-Minguela and Jordi Martí-Henneberg, ' .
            '\'Railroad Integration and Uneven Development on the European Periphery, 1870-1910\', ' .
            'Social Science History 45:2 (2021), 261-289, https://doi.org/10.1017/ssh.2021.1.';
        $issn = '0145-5532';
        $isbn = '978-0-429-26545-7';
        $journalTitle = 'Social Science History';
        $articleTitle = 'Railroad Integration and Uneven Development on the European Periphery, 1870-1910';
        $seriesTitle = 'Social Science History';
        $volumeTitle = 'A Billion Black Anthropocenes or None';
        $edition = 1;
        $author = 'Eduard J. Alvarez-Palau; Alfonso Díez-Minguela; Jordi Martí-Henneberg';
        $volume = '45';
        $issue = '2';
        $firstPage = '261';
        $componentNumber = 'Foo';
        $standardDesignator = 'Bar';
        $standardsBodyName = 'Baz';
        $standardsBodyAcronym = 'Qux';
        $url = 'https://www.cambridge.org/core/product/identifier/S0145553221000018/type/journal_article';
        $publicationDate = '2021-01-01';
        $retrievalDate = '2024-05-06';

        $reference = new Reference();
        $reference->setReferenceId($referenceId);
        $reference->setWorkId($workId);
        $reference->setReferenceOrdinal($referenceOrdinal);
        $reference->setDoi($doi);
        $reference->setUnstructuredCitation($unstructuredCitation);
        $reference->setIssn($issn);
        $reference->setIsbn($isbn);
        $reference->setJournalTitle($journalTitle);
        $reference->setArticleTitle($articleTitle);
        $reference->setSeriesTitle($seriesTitle);
        $reference->setVolumeTitle($volumeTitle);
        $reference->setEdition($edition);
        $reference->setAuthor($author);
        $reference->setVolume($volume);
        $reference->setIssue($issue);
        $reference->setFirstPage($firstPage);
        $reference->setComponentNumber($componentNumber);
        $reference->setStandardDesignator($standardDesignator);
        $reference->setStandardsBodyName($standardsBodyName);
        $reference->setStandardsBodyAcronym($standardsBodyAcronym);
        $reference->setUrl($url);
        $reference->setPublicationDate($publicationDate);
        $reference->setRetrievalDate($retrievalDate);

        $this->assertSame($referenceId, $reference->getReferenceId());
        $this->assertSame($workId, $reference->getWorkId());
        $this->assertSame($referenceOrdinal, $reference->getReferenceOrdinal());
        $this->assertSame($doi, $reference->getDoi());
        $this->assertSame($unstructuredCitation, $reference->getUnstructuredCitation());
        $this->assertSame($issn, $reference->getIssn());
        $this->assertSame($isbn, $reference->getIsbn());
        $this->assertSame($journalTitle, $reference->getJournalTitle());
        $this->assertSame($articleTitle, $reference->getArticleTitle());
        $this->assertSame($seriesTitle, $reference->getSeriesTitle());
        $this->assertSame($volumeTitle, $reference->getVolumeTitle());
        $this->assertSame($edition, $reference->getEdition());
        $this->assertSame($author, $reference->getAuthor());
        $this->assertSame($volume, $reference->getVolume());
        $this->assertSame($issue, $reference->getIssue());
        $this->assertSame($firstPage, $reference->getFirstPage());
        $this->assertSame($componentNumber, $reference->getComponentNumber());
        $this->assertSame($standardDesignator, $reference->getStandardDesignator());
        $this->assertSame($standardsBodyName, $reference->getStandardsBodyName());
        $this->assertSame($standardsBodyAcronym, $reference->getStandardsBodyAcronym());
        $this->assertSame($url, $reference->getUrl());
        $this->assertSame($publicationDate, $reference->getPublicationDate());
        $this->assertSame($retrievalDate, $reference->getRetrievalDate());
    }
}
