<?php

namespace ThothClient\GraphQL;

use ThothClient\GraphQL\Model\AbstractModel;
use ThothClient\GraphQL\Model\Affiliation;
use ThothClient\GraphQL\Model\Contribution;
use ThothClient\GraphQL\Model\Contributor;
use ThothClient\GraphQL\Model\Funding;
use ThothClient\GraphQL\Model\Imprint;
use ThothClient\GraphQL\Model\Institution;
use ThothClient\GraphQL\Model\Issue;
use ThothClient\GraphQL\Model\Language;
use ThothClient\GraphQL\Model\Location;
use ThothClient\GraphQL\Model\Price;
use ThothClient\GraphQL\Model\Publication;
use ThothClient\GraphQL\Model\Publisher;
use ThothClient\GraphQL\Model\Reference;
use ThothClient\GraphQL\Model\Series;
use ThothClient\GraphQL\Model\Subject;
use ThothClient\GraphQL\Model\Work;

class Client
{
    private Request $request;

    public const THOTH_ENDPOINT = 'https://api.thoth.pub/graphql';

    public function __construct(?Request $request = null)
    {
        $this->request = $request ?? new Request(self::THOTH_ENDPOINT);
    }

    public function affiliation(string $affiliationId): Affiliation
    {
        return $this->get('affiliation', $affiliationId);
    }

    public function affiliations(array $args = []): array
    {
        return $this->getMany('affiliation', $args);
    }

    public function affiliationCount(): int
    {
        return $this->count('affiliation');
    }

    public function books(array $args = []): array
    {
        return $this->getMany('book', $args);
    }

    public function bookByDoi(string $doi): Work
    {
        return $this->getByDoi('book', $doi);
    }

    public function bookCount(): int
    {
        return $this->count('book');
    }

    public function chapters(array $args = []): array
    {
        return $this->getMany('chapter', $args);
    }

    public function chapterByDoi(string $doi): Work
    {
        return $this->getByDoi('chapter', $doi);
    }

    public function chapterCount(): int
    {
        return $this->count('chapter');
    }

    public function contribution(string $contributionId): Contribution
    {
        return $this->get('contribution', $contributionId);
    }

    public function contributions(array $args = []): array
    {
        return $this->getMany('contribution', $args);
    }

    public function contributionCount(): int
    {
        return $this->count('contribution');
    }

    public function contributor(string $contributorId): Contributor
    {
        return $this->get('contributor', $contributorId);
    }

    public function contributors(array $args = []): array
    {
        return $this->getMany('contributor', $args);
    }

    public function contributorCount(): int
    {
        return $this->count('contributor');
    }

    public function funding(string $fundingId): Funding
    {
        return $this->get('funding', $fundingId);
    }

    public function fundings(array $args = []): array
    {
        return $this->getMany('funding', $args);
    }

    public function fundingCount(): int
    {
        return $this->count('funding');
    }

    public function imprint(string $imprintId): Imprint
    {
        return $this->get('imprint', $imprintId);
    }

    public function imprints(array $args = []): array
    {
        return $this->getMany('imprint', $args);
    }

    public function imprintCount(): int
    {
        return $this->count('imprint');
    }

    public function institution(string $institutionId): Institution
    {
        return $this->get('institution', $institutionId);
    }

    public function institutions(array $args = []): array
    {
        return $this->getMany('institution', $args);
    }

    public function institutionCount(): int
    {
        return $this->count('institution');
    }

    public function issue(string $issueId): Issue
    {
        return $this->get('issue', $issueId);
    }

    public function issues(array $args = []): array
    {
        return $this->getMany('issue', $args);
    }

    public function issueCount(): int
    {
        return $this->count('issue');
    }

    public function language(string $languageId): Language
    {
        return $this->get('language', $languageId);
    }

    public function languages(array $args = []): array
    {
        return $this->getMany('language', $args);
    }

    public function languageCount(): int
    {
        return $this->count('language');
    }

    public function location(string $locationId): Location
    {
        return $this->get('location', $locationId);
    }

    public function locations(array $args = []): array
    {
        return $this->getMany('location', $args);
    }

    public function locationCount(): int
    {
        return $this->count('location');
    }

    public function price(string $priceId): Price
    {
        return $this->get('price', $priceId);
    }

    public function prices(array $args = []): array
    {
        return $this->getMany('price', $args);
    }

    public function priceCount(): int
    {
        return $this->count('price');
    }

    public function publication(string $publicationId): Publication
    {
        return $this->get('publication', $publicationId);
    }

    public function publications(array $args = []): array
    {
        return $this->getMany('publication', $args);
    }

    public function publicationCount(): int
    {
        return $this->count('publication');
    }

    public function publisher(string $publisherId): Publisher
    {
        return $this->get('publisher', $publisherId);
    }

    public function publishers(array $args = []): array
    {
        return $this->getMany('publisher', $args);
    }

    public function publisherCount(): int
    {
        return $this->count('publisher');
    }

    public function reference(string $referenceId): Reference
    {
        return $this->get('reference', $referenceId);
    }

    public function references(array $args = []): array
    {
        return $this->getMany('reference', $args);
    }

    public function referenceCount(): int
    {
        return $this->count('reference');
    }

    public function series(string $seriesId): Series
    {
        return $this->get('series', $seriesId);
    }

    public function serieses(array $args = []): array
    {
        return $this->getMany('series', $args);
    }

    public function seriesCount(): int
    {
        return $this->count('series');
    }

    public function subject(string $subjectId): Subject
    {
        return $this->get('subject', $subjectId);
    }

    public function subjects(array $args = []): array
    {
        return $this->getMany('subject', $args);
    }

    public function subjectCount(): int
    {
        return $this->count('subject');
    }

    public function work(string $workId): Work
    {
        return $this->get('work', $workId);
    }

    public function works(array $args = []): array
    {
        return $this->getMany('work', $args);
    }

    public function workByDoi(string $doi): Work
    {
        return $this->getByDoi('work', $doi);
    }

    public function workCount(): int
    {
        return $this->count('work');
    }

    private function get(string $entityName, string $entityId): AbstractModel
    {
        $entityClass = $this->getModelClass($entityName);
        $args = [
            $entityName . 'Id' => $entityId
        ];

        $result = $this->query($entityName, $args);
        return new $entityClass($result[$entityName]);
    }

    private function getMany(string $entityName, array $args = []): array
    {
        $entityClass = $this->getModelClass($entityName);
        $queryName = $entityName . ($entityName !== 'series' ? 's' : 'es');

        $result = $this->query($queryName, $args);
        return array_map(fn ($data) => new $entityClass($data), $result[$queryName]);
    }

    private function count(string $entityName, array $args = []): int
    {
        $queryName = $entityName . 'Count';

        $result = $this->query($queryName, $args);
        return $result[$queryName];
    }

    private function getByDoi(string $entityName, string $doi): AbstractModel
    {
        $entityClass = $this->getModelClass($entityName);
        $queryName = $entityName . 'ByDoi';
        $args = [
            'doi' => $doi
        ];

        $result = $this->query($queryName, $args);
        return new $entityClass($result[$queryName]);
    }

    private function getModelClass(string $entityName): string
    {
        if ($entityName == 'book' || $entityName == 'chapter') {
            $entityName = 'work';
        }
        return '\\ThothClient\\GraphQL\\Model\\' . ucfirst($entityName);
    }

    private function query(string $queryName, array $args = []): array
    {
        $query = QueryProvider::get($queryName);
        $response = $this->request->execute($query, $args);
        return $response->getData();
    }
}
