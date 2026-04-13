<?php

namespace ThothApi\Tests\GraphQL;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\QueryProvider;

final class QueryProviderSchemaSyncTest extends TestCase
{
    public function testGetMarkupQueries(): void
    {
        foreach (['abstract', 'abstracts', 'biography', 'biographies', 'title', 'titles'] as $queryName) {
            $query = QueryProvider::get($queryName);
            $this->assertStringContainsString($queryName, $query);
        }
    }

    public function testGetAdditionalSchemaQueries(): void
    {
        foreach ([
            'additionalResource',
            'additionalResources',
            'additionalResourceCount',
            'award',
            'awards',
            'awardCount',
            'bookReview',
            'bookReviews',
            'bookReviewCount',
            'contact',
            'contacts',
            'contactCount',
            'endorsement',
            'endorsements',
            'endorsementCount',
            'workFeaturedVideo',
            'workFeaturedVideos',
            'workFeaturedVideoCount',
        ] as $queryName) {
            $query = QueryProvider::get($queryName);
            $this->assertStringContainsString($queryName, $query);
        }
    }

    public function testGetStandaloneQueries(): void
    {
        $query = QueryProvider::get('file');
        $this->assertStringContainsString('file(fileId:', $query);

        $query = QueryProvider::get('me');
        $this->assertStringContainsString('me {', $query);
    }
}
