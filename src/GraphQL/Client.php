<?php

namespace ThothApi\GraphQL;

use ThothApi\GraphQL\Models\AbstractModel;
use ThothApi\GraphQL\Models\Affiliation;
use ThothApi\GraphQL\Models\Contribution;
use ThothApi\GraphQL\Models\Contributor;
use ThothApi\GraphQL\Models\Funding;
use ThothApi\GraphQL\Models\Imprint;
use ThothApi\GraphQL\Models\Institution;
use ThothApi\GraphQL\Models\Issue;
use ThothApi\GraphQL\Models\Language;
use ThothApi\GraphQL\Models\Location;
use ThothApi\GraphQL\Models\Price;
use ThothApi\GraphQL\Models\Publication;
use ThothApi\GraphQL\Models\Publisher;
use ThothApi\GraphQL\Models\Reference;
use ThothApi\GraphQL\Models\Series;
use ThothApi\GraphQL\Models\Subject;
use ThothApi\GraphQL\Models\Work;
use ThothApi\GraphQL\Models\WorkRelation;

class Client
{
    private Request $request;

    private string $token = '';

    public const THOTH_BASE_URI = 'https://api.thoth.pub/';

    public function __construct(array $httpConfig = [])
    {
        if (!isset($httpConfig['base_uri'])) {
            $httpConfig['base_uri'] = self::THOTH_BASE_URI;
        }
        $this->request = new Request($httpConfig);
    }

    public function login(string $email, string $password): self
    {
        $this->token = (new Account($this->request))->login($email, $password);
        return $this;
    }

    public function accountDetails(): array
    {
        return (new Account($this->request))->details($this->token);
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

    public function createAffiliation(Affiliation $affiliation): string
    {
        return $this->mutation('createAffiliation', $affiliation->getAllData(), 'affiliationId');
    }

    public function updateAffiliation(Affiliation $affiliation): string
    {
        return $this->mutation('updateAffiliation', $affiliation->getAllData(), 'affiliationId');
    }

    public function deleteAffiliation(string $affiliationId): string
    {
        return $this->mutation('deleteAffiliation', ['affiliationId' => $affiliationId], 'affiliationId');
    }

    public function createContribution(Contribution $contribution): string
    {
        return $this->mutation('createContribution', $contribution->getAllData(), 'contributionId');
    }

    public function updateContribution(Contribution $contribution): string
    {
        return $this->mutation('updateContribution', $contribution->getAllData(), 'contributionId');
    }

    public function deleteContribution(string $contributionId): string
    {
        return $this->mutation('deleteContribution', ['contributionId' => $contributionId], 'contributionId');
    }

    public function createContributor(Contributor $contributor): string
    {
        return $this->mutation('createContributor', $contributor->getAllData(), 'contributorId');
    }

    public function updateContributor(Contributor $contributor): string
    {
        return $this->mutation('updateContributor', $contributor->getAllData(), 'contributorId');
    }

    public function deleteContributor(string $contributorId): string
    {
        return $this->mutation('deleteContributor', ['contributorId' => $contributorId], 'contributorId');
    }

    public function createFunding(Funding $funding): string
    {
        return $this->mutation('createFunding', $funding->getAllData(), 'fundingId');
    }

    public function updateFunding(Funding $funding): string
    {
        return $this->mutation('updateFunding', $funding->getAllData(), 'fundingId');
    }

    public function deleteFunding(string $fundingId): string
    {
        return $this->mutation('deleteFunding', ['fundingId' => $fundingId], 'fundingId');
    }

    public function createImprint(Imprint $imprint): string
    {
        return $this->mutation('createImprint', $imprint->getAllData(), 'imprintId');
    }

    public function updateImprint(Imprint $imprint): string
    {
        return $this->mutation('updateImprint', $imprint->getAllData(), 'imprintId');
    }

    public function deleteImprint(string $imprintId): string
    {
        return $this->mutation('deleteImprint', ['imprintId' => $imprintId], 'imprintId');
    }

    public function createInstitution(Institution $institution): string
    {
        return $this->mutation('createInstitution', $institution->getAllData(), 'institutionId');
    }

    public function updateInstitution(Institution $institution): string
    {
        return $this->mutation('updateInstitution', $institution->getAllData(), 'institutionId');
    }

    public function deleteInstitution(string $institutionId): string
    {
        return $this->mutation('deleteInstitution', ['institutionId' => $institutionId], 'institutionId');
    }

    public function createIssue(Issue $issue): string
    {
        return $this->mutation('createIssue', $issue->getAllData(), 'issueId');
    }

    public function updateIssue(Issue $issue): string
    {
        return $this->mutation('updateIssue', $issue->getAllData(), 'issueId');
    }

    public function deleteIssue(string $issueId): string
    {
        return $this->mutation('deleteIssue', ['issueId' => $issueId], 'issueId');
    }

    public function createLanguage(Language $language): string
    {
        return $this->mutation('createLanguage', $language->getAllData(), 'languageId');
    }

    public function updateLanguage(Language $language): string
    {
        return $this->mutation('updateLanguage', $language->getAllData(), 'languageId');
    }

    public function deleteLanguage(string $languageId): string
    {
        return $this->mutation('deleteLanguage', ['languageId' => $languageId], 'languageId');
    }

    public function createLocation(Location $location): string
    {
        return $this->mutation('createLocation', $location->getAllData(), 'locationId');
    }

    public function updateLocation(Location $location): string
    {
        return $this->mutation('updateLocation', $location->getAllData(), 'locationId');
    }

    public function deleteLocation(string $locationId): string
    {
        return $this->mutation('deleteLocation', ['locationId' => $locationId], 'locationId');
    }

    public function createPrice(Price $price): string
    {
        return $this->mutation('createPrice', $price->getAllData(), 'priceId');
    }

    public function updatePrice(Price $price): string
    {
        return $this->mutation('updatePrice', $price->getAllData(), 'priceId');
    }

    public function deletePrice(string $priceId): string
    {
        return $this->mutation('deletePrice', ['priceId' => $priceId], 'priceId');
    }

    public function createPublication(Publication $publication): string
    {
        return $this->mutation('createPublication', $publication->getAllData(), 'publicationId');
    }

    public function updatePublication(Publication $publication): string
    {
        return $this->mutation('updatePublication', $publication->getAllData(), 'publicationId');
    }

    public function deletePublication(string $publicationId): string
    {
        return $this->mutation('deletePublication', ['publicationId' => $publicationId], 'publicationId');
    }

    public function createPublisher(Publisher $publisher): string
    {
        return $this->mutation('createPublisher', $publisher->getAllData(), 'publisherId');
    }

    public function updatePublisher(Publisher $publisher): string
    {
        return $this->mutation('updatePublisher', $publisher->getAllData(), 'publisherId');
    }

    public function deletePublisher(string $publisherId): string
    {
        return $this->mutation('deletePublisher', ['publisherId' => $publisherId], 'publisherId');
    }

    public function createReference(Reference $reference): string
    {
        return $this->mutation('createReference', $reference->getAllData(), 'referenceId');
    }

    public function updateReference(Reference $reference): string
    {
        return $this->mutation('updateReference', $reference->getAllData(), 'referenceId');
    }

    public function deleteReference(string $referenceId): string
    {
        return $this->mutation('deleteReference', ['referenceId' => $referenceId], 'referenceId');
    }

    public function createSeries(Series $series): string
    {
        return $this->mutation('createSeries', $series->getAllData(), 'seriesId');
    }

    public function updateSeries(Series $series): string
    {
        return $this->mutation('updateSeries', $series->getAllData(), 'seriesId');
    }

    public function deleteSeries(string $seriesId): string
    {
        return $this->mutation('deleteSeries', ['seriesId' => $seriesId], 'seriesId');
    }

    public function createSubject(Subject $subject): string
    {
        return $this->mutation('createSubject', $subject->getAllData(), 'subjectId');
    }

    public function updateSubject(Subject $subject): string
    {
        return $this->mutation('updateSubject', $subject->getAllData(), 'subjectId');
    }

    public function deleteSubject(string $subjectId): string
    {
        return $this->mutation('deleteSubject', ['subjectId' => $subjectId], 'subjectId');
    }

    public function createWork(Work $work): string
    {
        return $this->mutation('createWork', $work->getAllData(), 'workId');
    }

    public function updateWork(Work $work): string
    {
        return $this->mutation('updateWork', $work->getAllData(), 'workId');
    }

    public function deleteWork(string $workId): string
    {
        return $this->mutation('deleteWork', ['workId' => $workId], 'workId');
    }

    public function createWorkRelation(WorkRelation $workRelation): string
    {
        return $this->mutation('createWorkRelation', $workRelation->getAllData(), 'workRelationId');
    }

    public function updateWorkRelation(WorkRelation $workRelation): string
    {
        return $this->mutation('updateWorkRelation', $workRelation->getAllData(), 'workRelationId');
    }

    public function deleteWorkRelation(string $workRelationId): string
    {
        return $this->mutation('deleteWorkRelation', ['workRelationId' => $workRelationId], 'workRelationId');
    }

    public function rawQuery(string $rawQuery, array $args = []): array
    {
        $response = $this->request->runQuery($rawQuery, $args);
        return $response->getData();
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

    private function mutation(string $mutationName, array $data, string $returnValue): string
    {
        $mutation = MutationBuilder::build($mutationName, $data);
        $response = $this->request->runQuery($mutation, null, $this->token);
        $data = $response->getData();
        return $data[$mutationName][$returnValue];
    }

    private function getModelClass(string $entityName): string
    {
        if ($entityName == 'book' || $entityName == 'chapter') {
            $entityName = 'work';
        }
        return '\\ThothApi\\GraphQL\\Models\\' . ucfirst($entityName);
    }

    private function query(string $queryName, array $args = []): array
    {
        $query = QueryProvider::get($queryName);
        $response = $this->request->runQuery($query, $args);
        return $response->getData();
    }
}
