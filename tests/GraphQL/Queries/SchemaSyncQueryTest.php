<?php

namespace ThothApi\Tests\GraphQL\Queries;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\AbstractTextQuery;
use ThothApi\GraphQL\Queries\AdditionalResourceQuery;
use ThothApi\GraphQL\Queries\AwardQuery;
use ThothApi\GraphQL\Queries\BiographyQuery;
use ThothApi\GraphQL\Queries\BookReviewQuery;
use ThothApi\GraphQL\Queries\ContactQuery;
use ThothApi\GraphQL\Queries\EndorsementQuery;
use ThothApi\GraphQL\Queries\FileQuery;
use ThothApi\GraphQL\Queries\MeQuery;
use ThothApi\GraphQL\Queries\TitleQuery;
use ThothApi\GraphQL\Queries\WorkFeaturedVideoQuery;

final class SchemaSyncQueryTest extends TestCase
{
    public function testAdditionalResourceQueries(): void
    {
        $query = new AdditionalResourceQuery();
        $this->assertStringContainsString('additionalResource(additionalResourceId:', $query->getQuery());
        $this->assertStringContainsString('additionalResources(', $query->getManyQuery());
        $this->assertStringContainsString('additionalResourceCount', $query->getCountQuery());
        $this->assertStringContainsString('fragment additionalResourceFields on WorkResource', $query->getQuery());
    }

    public function testAbstractQueries(): void
    {
        $query = new AbstractTextQuery();
        $this->assertStringContainsString('abstract(abstractId:', $query->getQuery());
        $this->assertStringContainsString('markupFormat: $markupFormat', $query->getQuery());
        $this->assertStringContainsString('abstracts(', $query->getManyQuery());
        $this->assertStringContainsString('fragment abstractFields on Abstract', $query->getManyQuery());
    }

    public function testAwardQueries(): void
    {
        $query = new AwardQuery();
        $this->assertStringContainsString('award(awardId:', $query->getQuery());
        $this->assertStringContainsString('awards(', $query->getManyQuery());
        $this->assertStringContainsString('awardCount', $query->getCountQuery());
        $this->assertStringContainsString('fragment awardFields on Award', $query->getQuery());
    }

    public function testBiographyQueries(): void
    {
        $query = new BiographyQuery();
        $this->assertStringContainsString('biography(biographyId:', $query->getQuery());
        $this->assertStringContainsString('biographies(', $query->getManyQuery());
        $this->assertStringContainsString('fragment biographyFields on Biography', $query->getQuery());
    }

    public function testBookReviewQueries(): void
    {
        $query = new BookReviewQuery();
        $this->assertStringContainsString('bookReview(bookReviewId:', $query->getQuery());
        $this->assertStringContainsString('bookReviews(', $query->getManyQuery());
        $this->assertStringContainsString('bookReviewCount', $query->getCountQuery());
        $this->assertStringContainsString('fragment bookReviewFields on BookReview', $query->getQuery());
    }

    public function testContactQueries(): void
    {
        $query = new ContactQuery();
        $this->assertStringContainsString('contact(contactId:', $query->getQuery());
        $this->assertStringContainsString('contacts(', $query->getManyQuery());
        $this->assertStringContainsString('contactCount(contactTypes:', $query->getCountQuery());
        $this->assertStringContainsString('fragment contactFields on Contact', $query->getQuery());
    }

    public function testEndorsementQueries(): void
    {
        $query = new EndorsementQuery();
        $this->assertStringContainsString('endorsement(endorsementId:', $query->getQuery());
        $this->assertStringContainsString('endorsements(', $query->getManyQuery());
        $this->assertStringContainsString('endorsementCount', $query->getCountQuery());
        $this->assertStringContainsString('fragment endorsementFields on Endorsement', $query->getQuery());
    }

    public function testFileQuery(): void
    {
        $query = new FileQuery();
        $this->assertStringContainsString('file(fileId:', $query->getQuery());
        $this->assertStringContainsString('fragment fileFields on File', $query->getQuery());
    }

    public function testMeQuery(): void
    {
        $query = new MeQuery();
        $this->assertStringContainsString('me {', $query->getQuery());
        $this->assertStringContainsString('fragment meFields on Me', $query->getQuery());
    }

    public function testTitleQueries(): void
    {
        $query = new TitleQuery();
        $this->assertStringContainsString('title(titleId:', $query->getQuery());
        $this->assertStringContainsString('titles(', $query->getManyQuery());
        $this->assertStringContainsString('fragment titleFields on Title', $query->getQuery());
    }

    public function testWorkFeaturedVideoQueries(): void
    {
        $query = new WorkFeaturedVideoQuery();
        $this->assertStringContainsString('workFeaturedVideo(workFeaturedVideoId:', $query->getQuery());
        $this->assertStringContainsString('workFeaturedVideos(', $query->getManyQuery());
        $this->assertStringContainsString('workFeaturedVideoCount', $query->getCountQuery());
        $this->assertStringContainsString('fragment workFeaturedVideoFields on WorkFeaturedVideo', $query->getQuery());
    }
}
