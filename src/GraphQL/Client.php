<?php

namespace ThothApi\GraphQL;

use ThothApi\GraphQL\Operation\OperationCallArguments;

/**
 * GraphQL API client.
 *
 * <graphql-operation-methods>
 * @method \ThothApi\GraphQL\Schemas\GraphQLAbstract abstract(string $abstractId, string|null $markupFormat = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\GraphQLAbstract[] abstracts(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\AbstractOrderBy|array|null $order = null, string[]|null $localeCodes = null, string|null $markupFormat = null, array $selection = [])
 * @method int additionalResourceCount(array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkResource additionalResource(string $additionalResourceId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkResource[] additionalResources(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\AdditionalResourceOrderBy|array|null $order = null, string[]|null $publishers = null, array $selection = [])
 * @method int affiliationCount(array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Affiliation affiliation(string $affiliationId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Affiliation[] affiliations(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\AffiliationOrderBy|array|null $order = null, string[]|null $publishers = null, array $selection = [])
 * @method int awardCount(array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Award award(string $awardId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Award[] awards(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\AwardOrderBy|array|null $order = null, string[]|null $publishers = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Biography[] biographies(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\BiographyOrderBy|array|null $order = null, string[]|null $localeCodes = null, string|null $markupFormat = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Biography biography(string $biographyId, string|null $markupFormat = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Work bookByDoi(string $doi, array $selection = [])
 * @method int bookCount(string|null $filter = null, string[]|null $publishers = null, string|null $workStatus = null, string[]|null $workStatuses = null, \ThothApi\GraphQL\Inputs\TimeExpression|array|null $publicationDate = null, \ThothApi\GraphQL\Inputs\TimeExpression|array|null $updatedAtWithRelations = null, array $selection = [])
 * @method int bookReviewCount(array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\BookReview bookReview(string $bookReviewId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\BookReview[] bookReviews(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\BookReviewOrderBy|array|null $order = null, string[]|null $publishers = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Work[] books(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\WorkOrderBy|array|null $order = null, string[]|null $publishers = null, string|null $workStatus = null, string[]|null $workStatuses = null, \ThothApi\GraphQL\Inputs\TimeExpression|array|null $publicationDate = null, \ThothApi\GraphQL\Inputs\TimeExpression|array|null $updatedAtWithRelations = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Work chapterByDoi(string $doi, array $selection = [])
 * @method int chapterCount(string|null $filter = null, string[]|null $publishers = null, string|null $workStatus = null, string[]|null $workStatuses = null, \ThothApi\GraphQL\Inputs\TimeExpression|array|null $publicationDate = null, \ThothApi\GraphQL\Inputs\TimeExpression|array|null $updatedAtWithRelations = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Work[] chapters(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\WorkOrderBy|array|null $order = null, string[]|null $publishers = null, string|null $workStatus = null, string[]|null $workStatuses = null, \ThothApi\GraphQL\Inputs\TimeExpression|array|null $publicationDate = null, \ThothApi\GraphQL\Inputs\TimeExpression|array|null $updatedAtWithRelations = null, array $selection = [])
 * @method int contactCount(string[]|null $contactTypes = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contact contact(string $contactId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contact[] contacts(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\ContactOrderBy|array|null $order = null, string[]|null $publishers = null, string[]|null $contactTypes = null, array $selection = [])
 * @method int contributionCount(string[]|null $contributionTypes = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contribution contribution(string $contributionId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contribution[] contributions(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\ContributionOrderBy|array|null $order = null, string[]|null $publishers = null, string[]|null $contributionTypes = null, array $selection = [])
 * @method int contributorCount(string|null $filter = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contributor contributor(string $contributorId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contributor[] contributors(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\ContributorOrderBy|array|null $order = null, array $selection = [])
 * @method int endorsementCount(array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Endorsement endorsement(string $endorsementId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Endorsement[] endorsements(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\EndorsementOrderBy|array|null $order = null, string[]|null $publishers = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\File file(string $fileId, array $selection = [])
 * @method int fundingCount(array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Funding funding(string $fundingId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Funding[] fundings(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\FundingOrderBy|array|null $order = null, string[]|null $publishers = null, array $selection = [])
 * @method int imprintCount(string|null $filter = null, string[]|null $publishers = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Imprint imprint(string $imprintId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Imprint[] imprints(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\ImprintOrderBy|array|null $order = null, string[]|null $publishers = null, array $selection = [])
 * @method int institutionCount(string|null $filter = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Institution institution(string $institutionId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Institution[] institutions(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\InstitutionOrderBy|array|null $order = null, array $selection = [])
 * @method int issueCount(array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Issue issue(string $issueId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Issue[] issues(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\IssueOrderBy|array|null $order = null, string[]|null $publishers = null, array $selection = [])
 * @method int languageCount(string[]|null $languageCodes = null, string|null $languageRelation = null, string[]|null $languageRelations = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Language language(string $languageId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Language[] languages(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\LanguageOrderBy|array|null $order = null, string[]|null $publishers = null, string[]|null $languageCodes = null, string|null $languageRelation = null, string[]|null $languageRelations = null, array $selection = [])
 * @method int locationCount(string[]|null $locationPlatforms = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Location location(string $locationId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Location[] locations(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\LocationOrderBy|array|null $order = null, string[]|null $publishers = null, string[]|null $locationPlatforms = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Me me(array $selection = [])
 * @method int priceCount(string[]|null $currencyCodes = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Price price(string $priceId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Price[] prices(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\PriceOrderBy|array|null $order = null, string[]|null $publishers = null, string[]|null $currencyCodes = null, array $selection = [])
 * @method int publicationCount(string|null $filter = null, string[]|null $publishers = null, string[]|null $publicationTypes = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Publication publication(string $publicationId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Publication[] publications(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\PublicationOrderBy|array|null $order = null, string[]|null $publishers = null, string[]|null $publicationTypes = null, array $selection = [])
 * @method int publisherCount(string|null $filter = null, string[]|null $publishers = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Publisher publisher(string $publisherId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Publisher[] publishers(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\PublisherOrderBy|array|null $order = null, string[]|null $publishers = null, array $selection = [])
 * @method int referenceCount(array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Reference reference(string $referenceId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Reference[] references(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\ReferenceOrderBy|array|null $order = null, string[]|null $publishers = null, array $selection = [])
 * @method int seriesCount(string|null $filter = null, string[]|null $publishers = null, string[]|null $seriesTypes = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Series series(string $seriesId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Series[] serieses(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\SeriesOrderBy|array|null $order = null, string[]|null $publishers = null, string[]|null $seriesTypes = null, array $selection = [])
 * @method int subjectCount(string|null $filter = null, string[]|null $subjectTypes = null, string[]|null $workStatuses = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Subject subject(string $subjectId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Subject[] subjects(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\SubjectOrderBy|array|null $order = null, string[]|null $publishers = null, string[]|null $subjectTypes = null, string[]|null $workStatuses = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Title title(string $titleId, string|null $markupFormat = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Title[] titles(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\TitleOrderBy|array|null $order = null, string[]|null $localeCodes = null, string|null $markupFormat = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Work workByDoi(string $doi, array $selection = [])
 * @method int workCount(string|null $filter = null, string[]|null $publishers = null, string[]|null $workTypes = null, string|null $workStatus = null, string[]|null $workStatuses = null, \ThothApi\GraphQL\Inputs\TimeExpression|array|null $publicationDate = null, \ThothApi\GraphQL\Inputs\TimeExpression|array|null $updatedAtWithRelations = null, array $selection = [])
 * @method int workFeaturedVideoCount(array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkFeaturedVideo workFeaturedVideo(string $workFeaturedVideoId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkFeaturedVideo[] workFeaturedVideos(int|null $limit = null, int|null $offset = null, \ThothApi\GraphQL\Inputs\WorkFeaturedVideoOrderBy|array|null $order = null, string[]|null $publishers = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Work work(string $workId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Work[] works(int|null $limit = null, int|null $offset = null, string|null $filter = null, \ThothApi\GraphQL\Inputs\WorkOrderBy|array|null $order = null, string[]|null $publishers = null, string[]|null $workTypes = null, string|null $workStatus = null, string[]|null $workStatuses = null, \ThothApi\GraphQL\Inputs\TimeExpression|array|null $publicationDate = null, \ThothApi\GraphQL\Inputs\TimeExpression|array|null $updatedAtWithRelations = null, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\File completeFileUpload(\ThothApi\GraphQL\Inputs\CompleteFileUpload|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\GraphQLAbstract createAbstract(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\NewAbstract|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkResource createAdditionalResource(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\NewAdditionalResource|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Affiliation createAffiliation(\ThothApi\GraphQL\Inputs\NewAffiliation|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Award createAward(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\NewAward|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Biography createBiography(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\NewBiography|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\BookReview createBookReview(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\NewBookReview|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contact createContact(\ThothApi\GraphQL\Inputs\NewContact|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contribution createContribution(\ThothApi\GraphQL\Inputs\NewContribution|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contributor createContributor(\ThothApi\GraphQL\Inputs\NewContributor|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Endorsement createEndorsement(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\NewEndorsement|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Funding createFunding(\ThothApi\GraphQL\Inputs\NewFunding|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Imprint createImprint(\ThothApi\GraphQL\Inputs\NewImprint|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Institution createInstitution(\ThothApi\GraphQL\Inputs\NewInstitution|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Issue createIssue(\ThothApi\GraphQL\Inputs\NewIssue|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Language createLanguage(\ThothApi\GraphQL\Inputs\NewLanguage|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Location createLocation(\ThothApi\GraphQL\Inputs\NewLocation|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Price createPrice(\ThothApi\GraphQL\Inputs\NewPrice|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Publication createPublication(\ThothApi\GraphQL\Inputs\NewPublication|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Publisher createPublisher(\ThothApi\GraphQL\Inputs\NewPublisher|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Reference createReference(\ThothApi\GraphQL\Inputs\NewReference|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Series createSeries(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\NewSeries|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Subject createSubject(\ThothApi\GraphQL\Inputs\NewSubject|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Title createTitle(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\NewTitle|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkFeaturedVideo createWorkFeaturedVideo(\ThothApi\GraphQL\Inputs\NewWorkFeaturedVideo|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Work createWork(\ThothApi\GraphQL\Inputs\NewWork|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkRelation createWorkRelation(\ThothApi\GraphQL\Inputs\NewWorkRelation|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\GraphQLAbstract deleteAbstract(string $abstractId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkResource deleteAdditionalResource(string $additionalResourceId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Affiliation deleteAffiliation(string $affiliationId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Award deleteAward(string $awardId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Biography deleteBiography(string $biographyId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\BookReview deleteBookReview(string $bookReviewId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contact deleteContact(string $contactId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contribution deleteContribution(string $contributionId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contributor deleteContributor(string $contributorId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Endorsement deleteEndorsement(string $endorsementId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Funding deleteFunding(string $fundingId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Imprint deleteImprint(string $imprintId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Institution deleteInstitution(string $institutionId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Issue deleteIssue(string $issueId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Language deleteLanguage(string $languageId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Location deleteLocation(string $locationId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Price deletePrice(string $priceId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Publication deletePublication(string $publicationId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Publisher deletePublisher(string $publisherId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Reference deleteReference(string $referenceId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Series deleteSeries(string $seriesId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Subject deleteSubject(string $subjectId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Title deleteTitle(string $titleId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkFeaturedVideo deleteWorkFeaturedVideo(string $workFeaturedVideoId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Work deleteWork(string $workId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkRelation deleteWorkRelation(string $workRelationId, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\FileUploadResponse initAdditionalResourceFileUpload(\ThothApi\GraphQL\Inputs\NewAdditionalResourceFileUpload|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\FileUploadResponse initFrontcoverFileUpload(\ThothApi\GraphQL\Inputs\NewFrontcoverFileUpload|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\FileUploadResponse initPublicationFileUpload(\ThothApi\GraphQL\Inputs\NewPublicationFileUpload|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\FileUploadResponse initWorkFeaturedVideoFileUpload(\ThothApi\GraphQL\Inputs\NewWorkFeaturedVideoFileUpload|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkResource moveAdditionalResource(string $additionalResourceId, int $newOrdinal, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Affiliation moveAffiliation(string $affiliationId, int $newOrdinal, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Award moveAward(string $awardId, int $newOrdinal, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\BookReview moveBookReview(string $bookReviewId, int $newOrdinal, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contribution moveContribution(string $contributionId, int $newOrdinal, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Endorsement moveEndorsement(string $endorsementId, int $newOrdinal, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Issue moveIssue(string $issueId, int $newOrdinal, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Reference moveReference(string $referenceId, int $newOrdinal, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Subject moveSubject(string $subjectId, int $newOrdinal, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkRelation moveWorkRelation(string $workRelationId, int $newOrdinal, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\GraphQLAbstract updateAbstract(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\PatchAbstract|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkResource updateAdditionalResource(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\PatchAdditionalResource|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Affiliation updateAffiliation(\ThothApi\GraphQL\Inputs\PatchAffiliation|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Award updateAward(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\PatchAward|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Biography updateBiography(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\PatchBiography|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\BookReview updateBookReview(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\PatchBookReview|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contact updateContact(\ThothApi\GraphQL\Inputs\PatchContact|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contribution updateContribution(\ThothApi\GraphQL\Inputs\PatchContribution|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Contributor updateContributor(\ThothApi\GraphQL\Inputs\PatchContributor|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Endorsement updateEndorsement(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\PatchEndorsement|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Funding updateFunding(\ThothApi\GraphQL\Inputs\PatchFunding|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Imprint updateImprint(\ThothApi\GraphQL\Inputs\PatchImprint|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Institution updateInstitution(\ThothApi\GraphQL\Inputs\PatchInstitution|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Issue updateIssue(\ThothApi\GraphQL\Inputs\PatchIssue|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Language updateLanguage(\ThothApi\GraphQL\Inputs\PatchLanguage|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Location updateLocation(\ThothApi\GraphQL\Inputs\PatchLocation|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Price updatePrice(\ThothApi\GraphQL\Inputs\PatchPrice|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Publication updatePublication(\ThothApi\GraphQL\Inputs\PatchPublication|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Publisher updatePublisher(\ThothApi\GraphQL\Inputs\PatchPublisher|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Reference updateReference(\ThothApi\GraphQL\Inputs\PatchReference|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Series updateSeries(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\PatchSeries|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Subject updateSubject(\ThothApi\GraphQL\Inputs\PatchSubject|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Title updateTitle(string|null $markupFormat = null, \ThothApi\GraphQL\Inputs\PatchTitle|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkFeaturedVideo updateWorkFeaturedVideo(\ThothApi\GraphQL\Inputs\PatchWorkFeaturedVideo|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\Work updateWork(\ThothApi\GraphQL\Inputs\PatchWork|array $data, array $selection = [])
 * @method \ThothApi\GraphQL\Schemas\WorkRelation updateWorkRelation(\ThothApi\GraphQL\Inputs\PatchWorkRelation|array $data, array $selection = [])
 * </graphql-operation-methods>
 */
class Client
{
    private const SCALAR_TYPES = ['Boolean', 'Date', 'Doi', 'Float', 'Int', 'Isbn', 'Orcid', 'Ror', 'String', 'Timestamp', 'Uuid'];

    private Request $request;

    private string $token = '';

    private static array $defaultSelections = [];

    public const THOTH_BASE_URI = 'https://api.thoth.pub/';

    public function __construct(array $httpConfig = [])
    {
        if (!isset($httpConfig['base_uri'])) {
            $httpConfig['base_uri'] = self::THOTH_BASE_URI;
        }
        $this->request = new Request($httpConfig);
    }

    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    public function rawQuery(string $rawQuery, array $args = []): array
    {
        $response = $this->request->runQuery($rawQuery, $args, $this->token ?: null);
        return $response->getData();
    }

    public function execute(OperationRequest $operation)
    {
        $response = $this->request->runQuery($operation->toGraphQL(), $operation->getVariables(), $this->token ?: null);
        $data = $response->getData();

        return $data[$operation->getField()->getName()];
    }

    public function __call(string $name, array $arguments)
    {
        $operationClass = $this->getOperationClass($name);
        $field = $operationClass::field();
        $operationCall = (new OperationCallArguments())->build($field->getArguments(), $arguments);
        $selection = $operationCall['selection'];
        $operation = $operationClass::operation(
            $operationCall['arguments'],
            $selection ?: $this->getDefaultSelection($field->getType()->baseName())
        );

        $result = $this->execute($operation);
        $unwrappedResult = $this->unwrapSingleSelection($result, $operation->getSelection());

        if ($unwrappedResult !== $result) {
            return $unwrappedResult;
        }

        return (new ValueHydrator())->hydrate($result, $field->getType());
    }

    private function getOperationClass(string $name): string
    {
        $className = $this->studly($name);
        $mutationClass = '\\ThothApi\\GraphQL\\Mutations\\' . $className . 'Mutation';

        if (class_exists($mutationClass)) {
            return $mutationClass;
        }

        $queryClass = '\\ThothApi\\GraphQL\\Queries\\' . $className . 'Query';

        if (class_exists($queryClass)) {
            return $queryClass;
        }

        throw new \BadMethodCallException("Operation '{$name}' not found.");
    }

    private function getDefaultSelection(?string $typeName): array
    {
        if ($typeName === null || in_array($typeName, self::SCALAR_TYPES, true)) {
            return [];
        }

        if (array_key_exists($typeName, self::$defaultSelections)) {
            return self::$defaultSelections[$typeName];
        }

        $schemaClass = '\\ThothApi\\GraphQL\\Schemas\\' . ($typeName === 'Abstract' ? 'GraphQLAbstract' : $typeName);

        if (!class_exists($schemaClass)) {
            self::$defaultSelections[$typeName] = [];
            return self::$defaultSelections[$typeName];
        }

        foreach ($schemaClass::definition()->getFields() as $field) {
            if (substr($field->getName(), -2) === 'Id') {
                self::$defaultSelections[$typeName] = [$field->getName()];
                return self::$defaultSelections[$typeName];
            }
        }

        self::$defaultSelections[$typeName] = [];
        return self::$defaultSelections[$typeName];
    }

    private function unwrapSingleSelection($result, array $selection)
    {
        if (
            !is_array($result)
            || count($selection) !== 1
            || !array_key_exists(0, $selection)
            || !is_string($selection[0])
        ) {
            return $result;
        }

        return array_key_exists($selection[0], $result) ? $result[$selection[0]] : $result;
    }

    private function studly(string $value): string
    {
        $value = preg_replace('/[^A-Za-z0-9]+/', ' ', $value);
        $value = preg_replace('/(?<!^)([A-Z])/', ' $1', (string) $value);
        $value = str_replace(' ', '', ucwords(strtolower((string) $value)));

        if ($value === '' || preg_match('/^[0-9]/', $value)) {
            return 'Type' . $value;
        }

        return $value;
    }

}
