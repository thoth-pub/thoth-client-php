<?php

namespace ThothClient\Tests\GraphQL;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\QueryProvider;

final class QueryProviderTest extends TestCase
{
    public function testGetInvalidQuery(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Query \'foo\' not found.');

        $query = QueryProvider::get('foo');
    }

    public function testGetAffiliationQueries(): void
    {
        $query = QueryProvider::get('affiliation');
        $this->assertStringContainsString('affiliation', $query);

        $query = QueryProvider::get('affiliations');
        $this->assertStringContainsString('affiliations', $query);

        $query = QueryProvider::get('affiliationCount');
        $this->assertStringContainsString('affiliationCount', $query);
    }

    public function testGetContributionQueries(): void
    {
        $query = QueryProvider::get('contribution');
        $this->assertStringContainsString('contribution', $query);

        $query = QueryProvider::get('contributions');
        $this->assertStringContainsString('contributions', $query);

        $query = QueryProvider::get('contributionCount');
        $this->assertStringContainsString('contributionCount', $query);
    }

    public function testGetContributorQueries(): void
    {
        $query = QueryProvider::get('contributor');
        $this->assertStringContainsString('contributor', $query);

        $query = QueryProvider::get('contributors');
        $this->assertStringContainsString('contributors', $query);

        $query = QueryProvider::get('contributorCount');
        $this->assertStringContainsString('contributorCount', $query);
    }

    public function testGetFundingQueries(): void
    {
        $query = QueryProvider::get('funding');
        $this->assertStringContainsString('funding', $query);

        $query = QueryProvider::get('fundings');
        $this->assertStringContainsString('fundings', $query);

        $query = QueryProvider::get('fundingCount');
        $this->assertStringContainsString('fundingCount', $query);
    }

    public function testGetImprintQueries(): void
    {
        $query = QueryProvider::get('imprint');
        $this->assertStringContainsString('imprint', $query);

        $query = QueryProvider::get('imprints');
        $this->assertStringContainsString('imprints', $query);

        $query = QueryProvider::get('imprintCount');
        $this->assertStringContainsString('imprintCount', $query);
    }

    public function testGetInstitutionQueries(): void
    {
        $query = QueryProvider::get('institution');
        $this->assertStringContainsString('institution', $query);

        $query = QueryProvider::get('institutions');
        $this->assertStringContainsString('institutions', $query);

        $query = QueryProvider::get('institutionCount');
        $this->assertStringContainsString('institutionCount', $query);
    }

    public function testGetIssueQueries(): void
    {
        $query = QueryProvider::get('issue');
        $this->assertStringContainsString('issue', $query);

        $query = QueryProvider::get('issues');
        $this->assertStringContainsString('issues', $query);

        $query = QueryProvider::get('issueCount');
        $this->assertStringContainsString('issueCount', $query);
    }

    public function testGetLanguageQueries(): void
    {
        $query = QueryProvider::get('language');
        $this->assertStringContainsString('language', $query);

        $query = QueryProvider::get('languages');
        $this->assertStringContainsString('languages', $query);

        $query = QueryProvider::get('languageCount');
        $this->assertStringContainsString('languageCount', $query);
    }

    public function testGetLocationQueries(): void
    {
        $query = QueryProvider::get('location');
        $this->assertStringContainsString('location', $query);

        $query = QueryProvider::get('locations');
        $this->assertStringContainsString('locations', $query);

        $query = QueryProvider::get('locationCount');
        $this->assertStringContainsString('locationCount', $query);
    }

    public function testGetPriceQueries(): void
    {
        $query = QueryProvider::get('price');
        $this->assertStringContainsString('price', $query);

        $query = QueryProvider::get('prices');
        $this->assertStringContainsString('prices', $query);

        $query = QueryProvider::get('priceCount');
        $this->assertStringContainsString('priceCount', $query);
    }

    public function testGetPublicationQueries(): void
    {
        $query = QueryProvider::get('publication');
        $this->assertStringContainsString('publication', $query);

        $query = QueryProvider::get('publications');
        $this->assertStringContainsString('publications', $query);

        $query = QueryProvider::get('publicationCount');
        $this->assertStringContainsString('publicationCount', $query);
    }

    public function testGetPublisherQueries(): void
    {
        $query = QueryProvider::get('publisher');
        $this->assertStringContainsString('publisher', $query);

        $query = QueryProvider::get('publishers');
        $this->assertStringContainsString('publishers', $query);

        $query = QueryProvider::get('publisherCount');
        $this->assertStringContainsString('publisherCount', $query);
    }

    public function testGetReferenceQueries(): void
    {
        $query = QueryProvider::get('reference');
        $this->assertStringContainsString('reference', $query);

        $query = QueryProvider::get('references');
        $this->assertStringContainsString('references', $query);

        $query = QueryProvider::get('referenceCount');
        $this->assertStringContainsString('referenceCount', $query);
    }

    public function testGetSeriesQueries(): void
    {
        $query = QueryProvider::get('series');
        $this->assertStringContainsString('series', $query);

        $query = QueryProvider::get('serieses');
        $this->assertStringContainsString('serieses', $query);

        $query = QueryProvider::get('seriesCount');
        $this->assertStringContainsString('seriesCount', $query);
    }

    public function testGetSubjectQueries(): void
    {
        $query = QueryProvider::get('subject');
        $this->assertStringContainsString('subject', $query);

        $query = QueryProvider::get('subjects');
        $this->assertStringContainsString('subjects', $query);

        $query = QueryProvider::get('subjectCount');
        $this->assertStringContainsString('subjectCount', $query);
    }

    public function testGetWorkQueries(): void
    {
        $query = QueryProvider::get('books');
        $this->assertStringContainsString('books', $query);

        $query = QueryProvider::get('bookByDoi');
        $this->assertStringContainsString('bookByDoi', $query);

        $query = QueryProvider::get('bookCount');
        $this->assertStringContainsString('bookCount', $query);

        $query = QueryProvider::get('chapters');
        $this->assertStringContainsString('chapters', $query);

        $query = QueryProvider::get('chapterByDoi');
        $this->assertStringContainsString('chapterByDoi', $query);

        $query = QueryProvider::get('chapterCount');
        $this->assertStringContainsString('chapterCount', $query);

        $query = QueryProvider::get('work');
        $this->assertStringContainsString('work', $query);

        $query = QueryProvider::get('works');
        $this->assertStringContainsString('works', $query);

        $query = QueryProvider::get('workByDoi');
        $this->assertStringContainsString('workByDoi', $query);

        $query = QueryProvider::get('workCount');
        $this->assertStringContainsString('workCount', $query);
    }
}
