<?php

namespace ThothApi\GraphQL\Concerns;

use ThothApi\GraphQL\Models\AbstractText;
use ThothApi\GraphQL\Models\AdditionalResource;
use ThothApi\GraphQL\Models\Affiliation;
use ThothApi\GraphQL\Models\Award;
use ThothApi\GraphQL\Models\Biography;
use ThothApi\GraphQL\Models\BookReview;
use ThothApi\GraphQL\Models\Contact;
use ThothApi\GraphQL\Models\Contribution;
use ThothApi\GraphQL\Models\Contributor;
use ThothApi\GraphQL\Models\Endorsement;
use ThothApi\GraphQL\Models\File;
use ThothApi\GraphQL\Models\FileUploadResponse;
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
use ThothApi\GraphQL\Models\Title;
use ThothApi\GraphQL\Models\Work;
use ThothApi\GraphQL\Models\WorkFeaturedVideo;
use ThothApi\GraphQL\Models\WorkRelation;

trait HasMutationOperations
{
    public function createAdditionalResource(AdditionalResource $additionalResource, ?string $markupFormat = null): string
    {
        return $this->mutation(
            'createAdditionalResource',
            $additionalResource->getAllData(),
            'workResourceId',
            ['markupFormat' => $markupFormat]
        );
    }

    public function updateAdditionalResource(AdditionalResource $additionalResource, ?string $markupFormat = null): string
    {
        return $this->mutation(
            'updateAdditionalResource',
            $additionalResource->getAllData(),
            'workResourceId',
            ['markupFormat' => $markupFormat]
        );
    }

    public function deleteAdditionalResource(string $additionalResourceId): string
    {
        return $this->mutation(
            'deleteAdditionalResource',
            ['additionalResourceId' => $additionalResourceId],
            'workResourceId'
        );
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

    public function createAbstract(AbstractText $abstract, ?string $markupFormat = null): string
    {
        return $this->mutation('createAbstract', $abstract->getAllData(), 'abstractId', ['markupFormat' => $markupFormat]);
    }

    public function updateAbstract(AbstractText $abstract, ?string $markupFormat = null): string
    {
        return $this->mutation('updateAbstract', $abstract->getAllData(), 'abstractId', ['markupFormat' => $markupFormat]);
    }

    public function deleteAbstract(string $abstractId): string
    {
        return $this->mutation('deleteAbstract', ['abstractId' => $abstractId], 'abstractId');
    }

    public function createAward(Award $award, ?string $markupFormat = null): string
    {
        return $this->mutation('createAward', $award->getAllData(), 'awardId', ['markupFormat' => $markupFormat]);
    }

    public function updateAward(Award $award, ?string $markupFormat = null): string
    {
        return $this->mutation('updateAward', $award->getAllData(), 'awardId', ['markupFormat' => $markupFormat]);
    }

    public function deleteAward(string $awardId): string
    {
        return $this->mutation('deleteAward', ['awardId' => $awardId], 'awardId');
    }

    public function createBiography(Biography $biography, ?string $markupFormat = null): string
    {
        return $this->mutation('createBiography', $biography->getAllData(), 'biographyId', ['markupFormat' => $markupFormat]);
    }

    public function updateBiography(Biography $biography, ?string $markupFormat = null): string
    {
        return $this->mutation('updateBiography', $biography->getAllData(), 'biographyId', ['markupFormat' => $markupFormat]);
    }

    public function deleteBiography(string $biographyId): string
    {
        return $this->mutation('deleteBiography', ['biographyId' => $biographyId], 'biographyId');
    }

    public function createBookReview(BookReview $bookReview, ?string $markupFormat = null): string
    {
        return $this->mutation('createBookReview', $bookReview->getAllData(), 'bookReviewId', ['markupFormat' => $markupFormat]);
    }

    public function updateBookReview(BookReview $bookReview, ?string $markupFormat = null): string
    {
        return $this->mutation('updateBookReview', $bookReview->getAllData(), 'bookReviewId', ['markupFormat' => $markupFormat]);
    }

    public function deleteBookReview(string $bookReviewId): string
    {
        return $this->mutation('deleteBookReview', ['bookReviewId' => $bookReviewId], 'bookReviewId');
    }

    public function createContact(Contact $contact): string
    {
        return $this->mutation('createContact', $contact->getAllData(), 'contactId');
    }

    public function updateContact(Contact $contact): string
    {
        return $this->mutation('updateContact', $contact->getAllData(), 'contactId');
    }

    public function deleteContact(string $contactId): string
    {
        return $this->mutation('deleteContact', ['contactId' => $contactId], 'contactId');
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

    public function createEndorsement(Endorsement $endorsement, ?string $markupFormat = null): string
    {
        return $this->mutation(
            'createEndorsement',
            $endorsement->getAllData(),
            'endorsementId',
            ['markupFormat' => $markupFormat]
        );
    }

    public function updateEndorsement(Endorsement $endorsement, ?string $markupFormat = null): string
    {
        return $this->mutation(
            'updateEndorsement',
            $endorsement->getAllData(),
            'endorsementId',
            ['markupFormat' => $markupFormat]
        );
    }

    public function deleteEndorsement(string $endorsementId): string
    {
        return $this->mutation('deleteEndorsement', ['endorsementId' => $endorsementId], 'endorsementId');
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

    public function createTitle(Title $title, ?string $markupFormat = null): string
    {
        return $this->mutation('createTitle', $title->getAllData(), 'titleId', ['markupFormat' => $markupFormat]);
    }

    public function updateTitle(Title $title, ?string $markupFormat = null): string
    {
        return $this->mutation('updateTitle', $title->getAllData(), 'titleId', ['markupFormat' => $markupFormat]);
    }

    public function deleteTitle(string $titleId): string
    {
        return $this->mutation('deleteTitle', ['titleId' => $titleId], 'titleId');
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

    public function createWorkFeaturedVideo(WorkFeaturedVideo $workFeaturedVideo): string
    {
        return $this->mutation('createWorkFeaturedVideo', $workFeaturedVideo->getAllData(), 'workFeaturedVideoId');
    }

    public function updateWorkFeaturedVideo(WorkFeaturedVideo $workFeaturedVideo): string
    {
        return $this->mutation('updateWorkFeaturedVideo', $workFeaturedVideo->getAllData(), 'workFeaturedVideoId');
    }

    public function deleteWorkFeaturedVideo(string $workFeaturedVideoId): string
    {
        return $this->mutation('deleteWorkFeaturedVideo', ['workFeaturedVideoId' => $workFeaturedVideoId], 'workFeaturedVideoId');
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

    public function moveAffiliation(string $affiliationId, int $newOrdinal): string
    {
        return $this->mutation('moveAffiliation', compact('affiliationId', 'newOrdinal'), 'affiliationId');
    }

    public function moveContribution(string $contributionId, int $newOrdinal): string
    {
        return $this->mutation('moveContribution', compact('contributionId', 'newOrdinal'), 'contributionId');
    }

    public function moveIssue(string $issueId, int $newOrdinal): string
    {
        return $this->mutation('moveIssue', compact('issueId', 'newOrdinal'), 'issueId');
    }

    public function moveReference(string $referenceId, int $newOrdinal): string
    {
        return $this->mutation('moveReference', compact('referenceId', 'newOrdinal'), 'referenceId');
    }

    public function moveAdditionalResource(string $additionalResourceId, int $newOrdinal): string
    {
        return $this->mutation('moveAdditionalResource', compact('additionalResourceId', 'newOrdinal'), 'workResourceId');
    }

    public function moveAward(string $awardId, int $newOrdinal): string
    {
        return $this->mutation('moveAward', compact('awardId', 'newOrdinal'), 'awardId');
    }

    public function moveEndorsement(string $endorsementId, int $newOrdinal): string
    {
        return $this->mutation('moveEndorsement', compact('endorsementId', 'newOrdinal'), 'endorsementId');
    }

    public function moveBookReview(string $bookReviewId, int $newOrdinal): string
    {
        return $this->mutation('moveBookReview', compact('bookReviewId', 'newOrdinal'), 'bookReviewId');
    }

    public function moveSubject(string $subjectId, int $newOrdinal): string
    {
        return $this->mutation('moveSubject', compact('subjectId', 'newOrdinal'), 'subjectId');
    }

    public function moveWorkRelation(string $workRelationId, int $newOrdinal): string
    {
        return $this->mutation('moveWorkRelation', compact('workRelationId', 'newOrdinal'), 'workRelationId');
    }

    public function initPublicationFileUpload(array $data): FileUploadResponse
    {
        return new FileUploadResponse($this->runMutation('initPublicationFileUpload', $data));
    }

    public function initFrontcoverFileUpload(array $data): FileUploadResponse
    {
        return new FileUploadResponse($this->runMutation('initFrontcoverFileUpload', $data));
    }

    public function initAdditionalResourceFileUpload(array $data): FileUploadResponse
    {
        return new FileUploadResponse($this->runMutation('initAdditionalResourceFileUpload', $data));
    }

    public function initWorkFeaturedVideoFileUpload(array $data): FileUploadResponse
    {
        return new FileUploadResponse($this->runMutation('initWorkFeaturedVideoFileUpload', $data));
    }

    public function completeFileUpload(array $data): File
    {
        return new File($this->runMutation('completeFileUpload', $data));
    }
}
