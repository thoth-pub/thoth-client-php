<?php

namespace ThothClient\GraphQL;

use ThothClient\GraphQL\Models\AbstractModel;
use ThothClient\GraphQL\Models\Affiliation;
use ThothClient\GraphQL\Models\Contribution;
use ThothClient\GraphQL\Models\Contributor;
use ThothClient\GraphQL\Models\Funding;
use ThothClient\GraphQL\Models\Imprint;
use ThothClient\GraphQL\Models\Institution;
use ThothClient\GraphQL\Models\Issue;
use ThothClient\GraphQL\Models\Language;
use ThothClient\GraphQL\Models\Location;
use ThothClient\GraphQL\Models\Price;
use ThothClient\GraphQL\Models\Publication;
use ThothClient\GraphQL\Models\Publisher;
use ThothClient\GraphQL\Models\Reference;
use ThothClient\GraphQL\Models\Series;
use ThothClient\GraphQL\Models\Subject;
use ThothClient\GraphQL\Models\Work;
use ThothClient\GraphQL\Models\WorkRelation;

class Client
{
    private Request $request;

    private string $token;

    public const THOTH_BASE_URI = 'https://api.thoth.pub/';

    public function __construct(?Request $request = null)
    {
        $this->request = $request ?? new Request(self::THOTH_BASE_URI);
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
        return $this->mutation('createAffiliation', $affiliation, 'affiliationId');
    }

    public function updateAffiliation(Affiliation $affiliation): string
    {
        return $this->mutation('updateAffiliation', $affiliation, 'affiliationId');
    }

    public function deleteAffiliation(Affiliation $affiliation): string
    {
        return $this->mutation('deleteAffiliation', $affiliation, 'affiliationId');
    }

    public function createContribution(Contribution $contribution): string
    {
        return $this->mutation('createContribution', $contribution, 'contributionId');
    }

    public function updateContribution(Contribution $contribution): string
    {
        return $this->mutation('updateContribution', $contribution, 'contributionId');
    }

    public function deleteContribution(Contribution $contribution): string
    {
        return $this->mutation('deleteContribution', $contribution, 'contributionId');
    }

    public function createContributor(Contributor $contributor): string
    {
        return $this->mutation('createContributor', $contributor, 'contributorId');
    }

    public function updateContributor(Contributor $contributor): string
    {
        return $this->mutation('updateContributor', $contributor, 'contributorId');
    }

    public function deleteContributor(Contributor $contributor): string
    {
        return $this->mutation('deleteContributor', $contributor, 'contributorId');
    }

    public function createFunding(Funding $funding): string
    {
        return $this->mutation('createFunding', $funding, 'fundingId');
    }

    public function updateFunding(Funding $funding): string
    {
        return $this->mutation('updateFunding', $funding, 'fundingId');
    }

    public function deleteFunding(Funding $funding): string
    {
        return $this->mutation('deleteFunding', $funding, 'fundingId');
    }

    public function createImprint(Imprint $imprint): string
    {
        return $this->mutation('createImprint', $imprint, 'imprintId');
    }

    public function updateImprint(Imprint $imprint): string
    {
        return $this->mutation('updateImprint', $imprint, 'imprintId');
    }

    public function deleteImprint(Imprint $imprint): string
    {
        return $this->mutation('deleteImprint', $imprint, 'imprintId');
    }

    public function createInstitution(Institution $institution): string
    {
        return $this->mutation('createInstitution', $institution, 'institutionId');
    }

    public function updateInstitution(Institution $institution): string
    {
        return $this->mutation('updateInstitution', $institution, 'institutionId');
    }

    public function deleteInstitution(Institution $institution): string
    {
        return $this->mutation('deleteInstitution', $institution, 'institutionId');
    }

    public function createIssue(Issue $issue): string
    {
        return $this->mutation('createIssue', $issue, 'issueId');
    }

    public function updateIssue(Issue $issue): string
    {
        return $this->mutation('updateIssue', $issue, 'issueId');
    }

    public function deleteIssue(Issue $issue): string
    {
        return $this->mutation('deleteIssue', $issue, 'issueId');
    }

    public function createLanguage(Language $language): string
    {
        return $this->mutation('createLanguage', $language, 'languageId');
    }

    public function updateLanguage(Language $language): string
    {
        return $this->mutation('updateLanguage', $language, 'languageId');
    }

    public function deleteLanguage(Language $language): string
    {
        return $this->mutation('deleteLanguage', $language, 'languageId');
    }

    public function createLocation(Location $location): string
    {
        return $this->mutation('createLocation', $location, 'locationId');
    }

    public function updateLocation(Location $location): string
    {
        return $this->mutation('updateLocation', $location, 'locationId');
    }

    public function deleteLocation(Location $location): string
    {
        return $this->mutation('deleteLocation', $location, 'locationId');
    }

    public function createPrice(Price $price): string
    {
        return $this->mutation('createPrice', $price, 'priceId');
    }

    public function updatePrice(Price $price): string
    {
        return $this->mutation('updatePrice', $price, 'priceId');
    }

    public function deletePrice(Price $price): string
    {
        return $this->mutation('deletePrice', $price, 'priceId');
    }

    public function createPublication(Publication $publication): string
    {
        return $this->mutation('createPublication', $publication, 'publicationId');
    }

    public function updatePublication(Publication $publication): string
    {
        return $this->mutation('updatePublication', $publication, 'publicationId');
    }

    public function deletePublication(Publication $publication): string
    {
        return $this->mutation('deletePublication', $publication, 'publicationId');
    }

    public function createPublisher(Publisher $publisher): string
    {
        return $this->mutation('createPublisher', $publisher, 'publisherId');
    }

    public function updatePublisher(Publisher $publisher): string
    {
        return $this->mutation('updatePublisher', $publisher, 'publisherId');
    }

    public function deletePublisher(Publisher $publisher): string
    {
        return $this->mutation('deletePublisher', $publisher, 'publisherId');
    }

    public function createReference(Reference $reference): string
    {
        return $this->mutation('createReference', $reference, 'referenceId');
    }

    public function updateReference(Reference $reference): string
    {
        return $this->mutation('updateReference', $reference, 'referenceId');
    }

    public function deleteReference(Reference $reference): string
    {
        return $this->mutation('deleteReference', $reference, 'referenceId');
    }

    public function createSeries(Series $series): string
    {
        return $this->mutation('createSeries', $series, 'seriesId');
    }

    public function updateSeries(Series $series): string
    {
        return $this->mutation('updateSeries', $series, 'seriesId');
    }

    public function deleteSeries(Series $series): string
    {
        return $this->mutation('deleteSeries', $series, 'seriesId');
    }

    public function createSubject(Subject $subject): string
    {
        return $this->mutation('createSubject', $subject, 'subjectId');
    }

    public function updateSubject(Subject $subject): string
    {
        return $this->mutation('updateSubject', $subject, 'subjectId');
    }

    public function deleteSubject(Subject $subject): string
    {
        return $this->mutation('deleteSubject', $subject, 'subjectId');
    }

    public function createWork(Work $work): string
    {
        return $this->mutation('createWork', $work, 'workId');
    }

    public function updateWork(Work $work): string
    {
        return $this->mutation('updateWork', $work, 'workId');
    }

    public function deleteWork(Work $work): string
    {
        return $this->mutation('deleteWork', $work, 'workId');
    }

    public function createWorkRelation(WorkRelation $workRelation): string
    {
        return $this->mutation('createWorkRelation', $workRelation, 'workRelationId');
    }

    public function updateWorkRelation(WorkRelation $workRelation): string
    {
        return $this->mutation('updateWorkRelation', $workRelation, 'workRelationId');
    }

    public function deleteWorkRelation(WorkRelation $workRelation): string
    {
        return $this->mutation('deleteWorkRelation', $workRelation, 'workRelationId');
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

    private function mutation(string $mutationName, AbstractModel $mutationObject, string $returnValue): string
    {
        $mutation = MutationBuilder::build($mutationName, $mutationObject->getAllData());
        $response = $this->request->runQuery($mutation);
        $data = $response->getData();
        return $data[$mutationName][$returnValue];
    }

    private function getModelClass(string $entityName): string
    {
        if ($entityName == 'book' || $entityName == 'chapter') {
            $entityName = 'work';
        }
        return '\\ThothClient\\GraphQL\\Models\\' . ucfirst($entityName);
    }

    private function query(string $queryName, array $args = []): array
    {
        $query = QueryProvider::get($queryName);
        $response = $this->request->runQuery($query, $args);
        return $response->getData();
    }
}
