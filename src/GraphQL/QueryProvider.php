<?php

namespace ThothApi\GraphQL;

use ThothApi\GraphQL\Queries\AbstractQuery;
use ThothApi\GraphQL\Queries\AffiliationQuery;
use ThothApi\GraphQL\Queries\ContributionQuery;
use ThothApi\GraphQL\Queries\ContributorQuery;
use ThothApi\GraphQL\Queries\FundingQuery;
use ThothApi\GraphQL\Queries\ImprintQuery;
use ThothApi\GraphQL\Queries\InstitutionQuery;
use ThothApi\GraphQL\Queries\IssueQuery;
use ThothApi\GraphQL\Queries\LanguageQuery;
use ThothApi\GraphQL\Queries\LocationQuery;
use ThothApi\GraphQL\Queries\PriceQuery;
use ThothApi\GraphQL\Queries\PublicationQuery;
use ThothApi\GraphQL\Queries\PublisherQuery;
use ThothApi\GraphQL\Queries\ReferenceQuery;
use ThothApi\GraphQL\Queries\SeriesQuery;
use ThothApi\GraphQL\Queries\SubjectQuery;
use ThothApi\GraphQL\Queries\WorkQuery;

class QueryProvider
{
    private static array $queryMapping = [];

    public static function get(string $queryName): string
    {
        if (!isset(self::$queryMapping[$queryName])) {
            self::$queryMapping = self::buildQueryMapping();
        }

        if (!array_key_exists($queryName, self::$queryMapping)) {
            throw new \InvalidArgumentException('Query \'' . $queryName . '\' not found.');
        }

        return self::$queryMapping[$queryName];
    }

    private static function buildQueryMapping(): array
    {
        return array_merge(
            self::mapQuery(new AffiliationQuery(), 'affiliation'),
            self::mapQuery(new ContributionQuery(), 'contribution'),
            self::mapQuery(new ContributorQuery(), 'contributor'),
            self::mapQuery(new FundingQuery(), 'funding'),
            self::mapQuery(new ImprintQuery(), 'imprint'),
            self::mapQuery(new InstitutionQuery(), 'institution'),
            self::mapQuery(new IssueQuery(), 'issue'),
            self::mapQuery(new LanguageQuery(), 'language'),
            self::mapQuery(new LocationQuery(), 'location'),
            self::mapQuery(new PriceQuery(), 'price'),
            self::mapQuery(new PublicationQuery(), 'publication'),
            self::mapQuery(new PublisherQuery(), 'publisher'),
            self::mapQuery(new ReferenceQuery(), 'reference'),
            self::mapQuery(new SeriesQuery(), 'series'),
            self::mapQuery(new SubjectQuery(), 'subject'),
            self::mapWorkQueries(new WorkQuery())
        );
    }

    private static function mapQuery(AbstractQuery $queryObject, string $name): array
    {
        return [
            $name => $queryObject->getQuery(),
            $name . ($name !== 'series' ? 's' : 'es') => $queryObject->getManyQuery(),
            $name . 'Count' => $queryObject->getCountQuery(),
        ];
    }

    private static function mapWorkQueries(WorkQuery $workQuery): array
    {
        return [
            'books' => $workQuery->getManyQuery('book'),
            'bookByDoi' => $workQuery->getByDoiQuery('book'),
            'bookCount' => $workQuery->getCountQuery('book'),
            'chapters' => $workQuery->getManyQuery('chapter'),
            'chapterByDoi' => $workQuery->getByDoiQuery('chapter'),
            'chapterCount' => $workQuery->getCountQuery('chapter'),
            'work' => $workQuery->getQuery(),
            'works' => $workQuery->getManyQuery(),
            'workByDoi' => $workQuery->getByDoiQuery(),
            'workCount' => $workQuery->getCountQuery(),
        ];
    }
}
