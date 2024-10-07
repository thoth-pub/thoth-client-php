<?php

namespace ThothClient\GraphQL;

use ThothClient\GraphQL\Queries\AbstractQuery;
use ThothClient\GraphQL\Queries\AffiliationQuery;
use ThothClient\GraphQL\Queries\ContributionQuery;
use ThothClient\GraphQL\Queries\ContributorQuery;
use ThothClient\GraphQL\Queries\FundingQuery;
use ThothClient\GraphQL\Queries\ImprintQuery;
use ThothClient\GraphQL\Queries\InstitutionQuery;
use ThothClient\GraphQL\Queries\IssueQuery;
use ThothClient\GraphQL\Queries\LanguageQuery;
use ThothClient\GraphQL\Queries\LocationQuery;
use ThothClient\GraphQL\Queries\PriceQuery;
use ThothClient\GraphQL\Queries\PublicationQuery;
use ThothClient\GraphQL\Queries\PublisherQuery;
use ThothClient\GraphQL\Queries\ReferenceQuery;
use ThothClient\GraphQL\Queries\SeriesQuery;
use ThothClient\GraphQL\Queries\SubjectQuery;
use ThothClient\GraphQL\Queries\WorkQuery;

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
