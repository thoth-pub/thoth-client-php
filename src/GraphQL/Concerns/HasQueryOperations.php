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
use ThothApi\GraphQL\Models\Funding;
use ThothApi\GraphQL\Models\Imprint;
use ThothApi\GraphQL\Models\Institution;
use ThothApi\GraphQL\Models\Issue;
use ThothApi\GraphQL\Models\Language;
use ThothApi\GraphQL\Models\Location;
use ThothApi\GraphQL\Models\Me;
use ThothApi\GraphQL\Models\Price;
use ThothApi\GraphQL\Models\Publication;
use ThothApi\GraphQL\Models\Publisher;
use ThothApi\GraphQL\Models\Reference;
use ThothApi\GraphQL\Models\Series;
use ThothApi\GraphQL\Models\Subject;
use ThothApi\GraphQL\Models\Title;
use ThothApi\GraphQL\Models\Work;
use ThothApi\GraphQL\Models\WorkFeaturedVideo;

trait HasQueryOperations
{
    public function additionalResource(string $additionalResourceId): AdditionalResource
    {
        return $this->get('additionalResource', $additionalResourceId);
    }

    public function additionalResources(array $args = []): array
    {
        return $this->getMany('additionalResource', $args);
    }

    public function additionalResourceCount(): int
    {
        return $this->count('additionalResource');
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

    public function abstract(string $abstractId, ?string $markupFormat = null): AbstractText
    {
        return $this->get('abstract', $abstractId, ['markupFormat' => $markupFormat]);
    }

    public function abstracts(array $args = []): array
    {
        return $this->getMany('abstract', $args);
    }

    public function award(string $awardId): Award
    {
        return $this->get('award', $awardId);
    }

    public function awards(array $args = []): array
    {
        return $this->getMany('award', $args);
    }

    public function awardCount(): int
    {
        return $this->count('award');
    }

    public function biography(string $biographyId, ?string $markupFormat = null): Biography
    {
        return $this->get('biography', $biographyId, ['markupFormat' => $markupFormat]);
    }

    public function biographies(array $args = []): array
    {
        return $this->getMany('biography', $args);
    }

    public function books(array $args = []): array
    {
        return $this->getMany('book', $args);
    }

    public function bookByDoi(string $doi): Work
    {
        return $this->getByDoi('book', $doi);
    }

    public function bookCount(array $args = []): int
    {
        return $this->count('book', $args);
    }

    public function bookReview(string $bookReviewId): BookReview
    {
        return $this->get('bookReview', $bookReviewId);
    }

    public function bookReviews(array $args = []): array
    {
        return $this->getMany('bookReview', $args);
    }

    public function bookReviewCount(): int
    {
        return $this->count('bookReview');
    }

    public function chapters(array $args = []): array
    {
        return $this->getMany('chapter', $args);
    }

    public function chapterByDoi(string $doi): Work
    {
        return $this->getByDoi('chapter', $doi);
    }

    public function chapterCount(array $args = []): int
    {
        return $this->count('chapter', $args);
    }

    public function contact(string $contactId): Contact
    {
        return $this->get('contact', $contactId);
    }

    public function contacts(array $args = []): array
    {
        return $this->getMany('contact', $args);
    }

    public function contactCount(array $args = []): int
    {
        return $this->count('contact', $args);
    }

    public function contribution(string $contributionId): Contribution
    {
        return $this->get('contribution', $contributionId);
    }

    public function contributions(array $args = []): array
    {
        return $this->getMany('contribution', $args);
    }

    public function contributionCount(array $args = []): int
    {
        return $this->count('contribution', $args);
    }

    public function contributor(string $contributorId): Contributor
    {
        return $this->get('contributor', $contributorId);
    }

    public function contributors(array $args = []): array
    {
        return $this->getMany('contributor', $args);
    }

    public function contributorCount(array $args = []): int
    {
        return $this->count('contributor', $args);
    }

    public function endorsement(string $endorsementId): Endorsement
    {
        return $this->get('endorsement', $endorsementId);
    }

    public function endorsements(array $args = []): array
    {
        return $this->getMany('endorsement', $args);
    }

    public function endorsementCount(): int
    {
        return $this->count('endorsement');
    }

    public function file(string $fileId): File
    {
        return $this->get('file', $fileId);
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

    public function imprintCount(array $args = []): int
    {
        return $this->count('imprint', $args);
    }

    public function institution(string $institutionId): Institution
    {
        return $this->get('institution', $institutionId);
    }

    public function institutions(array $args = []): array
    {
        return $this->getMany('institution', $args);
    }

    public function institutionCount(array $args = []): int
    {
        return $this->count('institution', $args);
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

    public function languageCount(array $args = []): int
    {
        return $this->count('language', $args);
    }

    public function location(string $locationId): Location
    {
        return $this->get('location', $locationId);
    }

    public function locations(array $args = []): array
    {
        return $this->getMany('location', $args);
    }

    public function locationCount(array $args = []): int
    {
        return $this->count('location', $args);
    }

    public function me(): Me
    {
        $result = $this->query('me', [], $this->token);
        return new Me($result['me']);
    }

    public function price(string $priceId): Price
    {
        return $this->get('price', $priceId);
    }

    public function prices(array $args = []): array
    {
        return $this->getMany('price', $args);
    }

    public function priceCount(array $args = []): int
    {
        return $this->count('price', $args);
    }

    public function publication(string $publicationId): Publication
    {
        return $this->get('publication', $publicationId);
    }

    public function publications(array $args = []): array
    {
        return $this->getMany('publication', $args);
    }

    public function publicationCount(array $args = []): int
    {
        return $this->count('publication', $args);
    }

    public function publisher(string $publisherId): Publisher
    {
        return $this->get('publisher', $publisherId);
    }

    public function publishers(array $args = []): array
    {
        return $this->getMany('publisher', $args);
    }

    public function publisherCount(array $args = []): int
    {
        return $this->count('publisher', $args);
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

    public function seriesCount(array $args = []): int
    {
        return $this->count('series', $args);
    }

    public function subject(string $subjectId): Subject
    {
        return $this->get('subject', $subjectId);
    }

    public function subjects(array $args = []): array
    {
        return $this->getMany('subject', $args);
    }

    public function subjectCount(array $args = []): int
    {
        return $this->count('subject', $args);
    }

    public function title(string $titleId, ?string $markupFormat = null): Title
    {
        return $this->get('title', $titleId, ['markupFormat' => $markupFormat]);
    }

    public function titles(array $args = []): array
    {
        return $this->getMany('title', $args);
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

    public function workCount(array $args = []): int
    {
        return $this->count('work', $args);
    }

    public function workFeaturedVideo(string $workFeaturedVideoId): WorkFeaturedVideo
    {
        return $this->get('workFeaturedVideo', $workFeaturedVideoId);
    }

    public function workFeaturedVideos(array $args = []): array
    {
        return $this->getMany('workFeaturedVideo', $args);
    }

    public function workFeaturedVideoCount(): int
    {
        return $this->count('workFeaturedVideo');
    }
}
