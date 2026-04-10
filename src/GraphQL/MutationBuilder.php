<?php

namespace ThothApi\GraphQL;

class MutationBuilder
{
    public static function build(string $mutationName, array $mutationData, array|bool $extraArgs = []): string
    {
        $nestedOverride = null;
        if (is_bool($extraArgs)) {
            $nestedOverride = $extraArgs;
            $extraArgs = [];
        }

        $mutationFields = self::getMutationFields($mutationName);
        if ($mutationFields === null) {
            throw new \InvalidArgumentException("Mutation '{$mutationName}' not found.");
        }

        $nested = $nestedOverride ?? ($mutationFields['nested'] ?? !str_starts_with($mutationName, 'delete'));
        $data = self::prepareData($mutationFields['fields'], $mutationData);
        $args = [];

        if ($nested) {
            $args[] = 'data: {' . $data . '}';
        } else {
            $args[] = $data;
        }

        if (isset($mutationFields['extraArgs'])) {
            $extra = self::prepareData($mutationFields['extraArgs'], $extraArgs);
            if ($extra !== '') {
                $args[] = $extra;
            }
        }

        $args = array_filter($args, fn ($value) => $value !== '');
        $mutationStr = <<<GQL
        mutation {
            %s(
                %s
            ) {
                %s
            }
        }
        GQL;

        return sprintf($mutationStr, $mutationName, implode(",\n                ", $args), $mutationFields['returnValue']);
    }

    private static function getMutationFields(string $mutationName): ?array
    {
        $markupArg = ['markupFormat' => true];
        $uploadFields = [
            'declaredMimeType' => false,
            'declaredExtension' => false,
            'declaredSha256' => false,
        ];

        $mapping = [
            'createAdditionalResource' => [
                'fields' => [
                    'workId' => false,
                    'title' => false,
                    'description' => false,
                    'attribution' => false,
                    'resourceType' => true,
                    'doi' => false,
                    'handle' => false,
                    'url' => false,
                    'date' => false,
                    'resourceOrdinal' => false,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'workResourceId',
            ],
            'updateAdditionalResource' => [
                'fields' => [
                    'additionalResourceId' => false,
                    'workId' => false,
                    'title' => false,
                    'description' => false,
                    'attribution' => false,
                    'resourceType' => true,
                    'doi' => false,
                    'handle' => false,
                    'url' => false,
                    'date' => false,
                    'resourceOrdinal' => false,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'workResourceId',
            ],
            'deleteAdditionalResource' => [
                'fields' => ['additionalResourceId' => false],
                'nested' => false,
                'returnValue' => 'workResourceId',
            ],
            'createAffiliation' => [
                'fields' => [
                    'contributionId' => false,
                    'institutionId' => false,
                    'affiliationOrdinal' => false,
                    'position' => false,
                ],
                'returnValue' => 'affiliationId',
            ],
            'updateAffiliation' => [
                'fields' => [
                    'affiliationId' => false,
                    'contributionId' => false,
                    'institutionId' => false,
                    'affiliationOrdinal' => false,
                    'position' => false,
                ],
                'returnValue' => 'affiliationId',
            ],
            'deleteAffiliation' => [
                'fields' => ['affiliationId' => false],
                'nested' => false,
                'returnValue' => 'affiliationId',
            ],
            'createAbstract' => [
                'fields' => [
                    'workId' => false,
                    'content' => false,
                    'localeCode' => true,
                    'abstractType' => true,
                    'canonical' => false,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'abstractId',
            ],
            'updateAbstract' => [
                'fields' => [
                    'abstractId' => false,
                    'workId' => false,
                    'content' => false,
                    'localeCode' => true,
                    'abstractType' => true,
                    'canonical' => false,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'abstractId',
            ],
            'deleteAbstract' => [
                'fields' => ['abstractId' => false],
                'nested' => false,
                'returnValue' => 'abstractId',
            ],
            'createAward' => [
                'fields' => [
                    'workId' => false,
                    'title' => false,
                    'url' => false,
                    'category' => false,
                    'year' => false,
                    'jury' => false,
                    'country' => true,
                    'prizeStatement' => false,
                    'role' => true,
                    'awardOrdinal' => false,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'awardId',
            ],
            'updateAward' => [
                'fields' => [
                    'awardId' => false,
                    'workId' => false,
                    'title' => false,
                    'url' => false,
                    'category' => false,
                    'year' => false,
                    'jury' => false,
                    'country' => true,
                    'prizeStatement' => false,
                    'role' => true,
                    'awardOrdinal' => false,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'awardId',
            ],
            'deleteAward' => [
                'fields' => ['awardId' => false],
                'nested' => false,
                'returnValue' => 'awardId',
            ],
            'createBiography' => [
                'fields' => [
                    'contributionId' => false,
                    'content' => false,
                    'canonical' => false,
                    'localeCode' => true,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'biographyId',
            ],
            'updateBiography' => [
                'fields' => [
                    'biographyId' => false,
                    'contributionId' => false,
                    'content' => false,
                    'canonical' => false,
                    'localeCode' => true,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'biographyId',
            ],
            'deleteBiography' => [
                'fields' => ['biographyId' => false],
                'nested' => false,
                'returnValue' => 'biographyId',
            ],
            'createBookReview' => [
                'fields' => [
                    'workId' => false,
                    'title' => false,
                    'authorName' => false,
                    'reviewerOrcid' => false,
                    'reviewerInstitutionId' => false,
                    'url' => false,
                    'doi' => false,
                    'reviewDate' => false,
                    'journalName' => false,
                    'journalVolume' => false,
                    'journalNumber' => false,
                    'journalIssn' => false,
                    'pageRange' => false,
                    'text' => false,
                    'reviewOrdinal' => false,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'bookReviewId',
            ],
            'updateBookReview' => [
                'fields' => [
                    'bookReviewId' => false,
                    'workId' => false,
                    'title' => false,
                    'authorName' => false,
                    'reviewerOrcid' => false,
                    'reviewerInstitutionId' => false,
                    'url' => false,
                    'doi' => false,
                    'reviewDate' => false,
                    'journalName' => false,
                    'journalVolume' => false,
                    'journalNumber' => false,
                    'journalIssn' => false,
                    'pageRange' => false,
                    'text' => false,
                    'reviewOrdinal' => false,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'bookReviewId',
            ],
            'deleteBookReview' => [
                'fields' => ['bookReviewId' => false],
                'nested' => false,
                'returnValue' => 'bookReviewId',
            ],
            'createContact' => [
                'fields' => [
                    'publisherId' => false,
                    'contactType' => true,
                    'email' => false,
                ],
                'returnValue' => 'contactId',
            ],
            'updateContact' => [
                'fields' => [
                    'contactId' => false,
                    'publisherId' => false,
                    'contactType' => true,
                    'email' => false,
                ],
                'returnValue' => 'contactId',
            ],
            'deleteContact' => [
                'fields' => ['contactId' => false],
                'nested' => false,
                'returnValue' => 'contactId',
            ],
            'createContribution' => [
                'fields' => [
                    'workId' => false,
                    'contributorId' => false,
                    'contributionType' => true,
                    'mainContribution' => false,
                    'contributionOrdinal' => false,
                    'firstName' => false,
                    'lastName' => false,
                    'fullName' => false,
                ],
                'returnValue' => 'contributionId',
            ],
            'updateContribution' => [
                'fields' => [
                    'contributionId' => false,
                    'workId' => false,
                    'contributorId' => false,
                    'contributionType' => true,
                    'mainContribution' => false,
                    'contributionOrdinal' => false,
                    'firstName' => false,
                    'lastName' => false,
                    'fullName' => false,
                ],
                'returnValue' => 'contributionId',
            ],
            'deleteContribution' => [
                'fields' => ['contributionId' => false],
                'nested' => false,
                'returnValue' => 'contributionId',
            ],
            'createContributor' => [
                'fields' => [
                    'firstName' => false,
                    'lastName' => false,
                    'fullName' => false,
                    'orcid' => false,
                    'website' => false,
                ],
                'returnValue' => 'contributorId',
            ],
            'updateContributor' => [
                'fields' => [
                    'contributorId' => false,
                    'firstName' => false,
                    'lastName' => false,
                    'fullName' => false,
                    'orcid' => false,
                    'website' => false,
                ],
                'returnValue' => 'contributorId',
            ],
            'deleteContributor' => [
                'fields' => ['contributorId' => false],
                'nested' => false,
                'returnValue' => 'contributorId',
            ],
            'createEndorsement' => [
                'fields' => [
                    'workId' => false,
                    'authorName' => false,
                    'authorRole' => false,
                    'authorOrcid' => false,
                    'authorInstitutionId' => false,
                    'url' => false,
                    'text' => false,
                    'endorsementOrdinal' => false,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'endorsementId',
            ],
            'updateEndorsement' => [
                'fields' => [
                    'endorsementId' => false,
                    'workId' => false,
                    'authorName' => false,
                    'authorRole' => false,
                    'authorOrcid' => false,
                    'authorInstitutionId' => false,
                    'url' => false,
                    'text' => false,
                    'endorsementOrdinal' => false,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'endorsementId',
            ],
            'deleteEndorsement' => [
                'fields' => ['endorsementId' => false],
                'nested' => false,
                'returnValue' => 'endorsementId',
            ],
            'createFunding' => [
                'fields' => [
                    'workId' => false,
                    'institutionId' => false,
                    'program' => false,
                    'projectName' => false,
                    'projectShortname' => false,
                    'grantNumber' => false,
                ],
                'returnValue' => 'fundingId',
            ],
            'updateFunding' => [
                'fields' => [
                    'fundingId' => false,
                    'workId' => false,
                    'institutionId' => false,
                    'program' => false,
                    'projectName' => false,
                    'projectShortname' => false,
                    'grantNumber' => false,
                ],
                'returnValue' => 'fundingId',
            ],
            'deleteFunding' => [
                'fields' => ['fundingId' => false],
                'nested' => false,
                'returnValue' => 'fundingId',
            ],
            'createImprint' => [
                'fields' => [
                    'publisherId' => false,
                    'imprintName' => false,
                    'imprintUrl' => false,
                    'crossmarkDoi' => false,
                    's3Bucket' => false,
                    'cdnDomain' => false,
                    'cloudfrontDistId' => false,
                    'defaultCurrency' => true,
                    'defaultPlace' => false,
                    'defaultLocale' => true,
                ],
                'returnValue' => 'imprintId',
            ],
            'updateImprint' => [
                'fields' => [
                    'imprintId' => false,
                    'publisherId' => false,
                    'imprintName' => false,
                    'imprintUrl' => false,
                    'crossmarkDoi' => false,
                    's3Bucket' => false,
                    'cdnDomain' => false,
                    'cloudfrontDistId' => false,
                    'defaultCurrency' => true,
                    'defaultPlace' => false,
                    'defaultLocale' => true,
                ],
                'returnValue' => 'imprintId',
            ],
            'deleteImprint' => [
                'fields' => ['imprintId' => false],
                'nested' => false,
                'returnValue' => 'imprintId',
            ],
            'createInstitution' => [
                'fields' => [
                    'institutionName' => false,
                    'institutionDoi' => false,
                    'countryCode' => true,
                    'ror' => false,
                ],
                'returnValue' => 'institutionId',
            ],
            'updateInstitution' => [
                'fields' => [
                    'institutionId' => false,
                    'institutionName' => false,
                    'institutionDoi' => false,
                    'countryCode' => true,
                    'ror' => false,
                ],
                'returnValue' => 'institutionId',
            ],
            'deleteInstitution' => [
                'fields' => ['institutionId' => false],
                'nested' => false,
                'returnValue' => 'institutionId',
            ],
            'createIssue' => [
                'fields' => [
                    'seriesId' => false,
                    'workId' => false,
                    'issueOrdinal' => false,
                    'issueNumber' => false,
                ],
                'returnValue' => 'issueId',
            ],
            'updateIssue' => [
                'fields' => [
                    'issueId' => false,
                    'seriesId' => false,
                    'workId' => false,
                    'issueOrdinal' => false,
                    'issueNumber' => false,
                ],
                'returnValue' => 'issueId',
            ],
            'deleteIssue' => [
                'fields' => ['issueId' => false],
                'nested' => false,
                'returnValue' => 'issueId',
            ],
            'createLanguage' => [
                'fields' => [
                    'workId' => false,
                    'languageCode' => true,
                    'languageRelation' => true,
                ],
                'returnValue' => 'languageId',
            ],
            'updateLanguage' => [
                'fields' => [
                    'languageId' => false,
                    'workId' => false,
                    'languageCode' => true,
                    'languageRelation' => true,
                ],
                'returnValue' => 'languageId',
            ],
            'deleteLanguage' => [
                'fields' => ['languageId' => false],
                'nested' => false,
                'returnValue' => 'languageId',
            ],
            'createLocation' => [
                'fields' => [
                    'publicationId' => false,
                    'locationPlatform' => true,
                    'canonical' => false,
                    'landingPage' => false,
                    'fullTextUrl' => false,
                ],
                'returnValue' => 'locationId',
            ],
            'updateLocation' => [
                'fields' => [
                    'locationId' => false,
                    'publicationId' => false,
                    'locationPlatform' => true,
                    'canonical' => false,
                    'landingPage' => false,
                    'fullTextUrl' => false,
                ],
                'returnValue' => 'locationId',
            ],
            'deleteLocation' => [
                'fields' => ['locationId' => false],
                'nested' => false,
                'returnValue' => 'locationId',
            ],
            'createPrice' => [
                'fields' => [
                    'publicationId' => false,
                    'currencyCode' => true,
                    'unitPrice' => false,
                ],
                'returnValue' => 'priceId',
            ],
            'updatePrice' => [
                'fields' => [
                    'priceId' => false,
                    'publicationId' => false,
                    'currencyCode' => true,
                    'unitPrice' => false,
                ],
                'returnValue' => 'priceId',
            ],
            'deletePrice' => [
                'fields' => ['priceId' => false],
                'nested' => false,
                'returnValue' => 'priceId',
            ],
            'createPublication' => [
                'fields' => [
                    'publicationType' => true,
                    'workId' => false,
                    'depthMm' => false,
                    'depthIn' => false,
                    'widthMm' => false,
                    'widthIn' => false,
                    'heightMm' => false,
                    'heightIn' => false,
                    'weightG' => false,
                    'weightOz' => false,
                    'isbn' => false,
                    'accessibilityStandard' => true,
                    'accessibilityAdditionalStandard' => true,
                    'accessibilityException' => true,
                    'accessibilityReportUrl' => false,
                ],
                'returnValue' => 'publicationId',
            ],
            'updatePublication' => [
                'fields' => [
                    'publicationId' => false,
                    'publicationType' => true,
                    'workId' => false,
                    'depthMm' => false,
                    'depthIn' => false,
                    'widthMm' => false,
                    'widthIn' => false,
                    'heightMm' => false,
                    'heightIn' => false,
                    'weightG' => false,
                    'weightOz' => false,
                    'isbn' => false,
                    'accessibilityStandard' => true,
                    'accessibilityAdditionalStandard' => true,
                    'accessibilityException' => true,
                    'accessibilityReportUrl' => false,
                ],
                'returnValue' => 'publicationId',
            ],
            'deletePublication' => [
                'fields' => ['publicationId' => false],
                'nested' => false,
                'returnValue' => 'publicationId',
            ],
            'createPublisher' => [
                'fields' => [
                    'publisherName' => false,
                    'publisherShortname' => false,
                    'publisherUrl' => false,
                    'accessibilityStatement' => false,
                    'accessibilityReportUrl' => false,
                ],
                'returnValue' => 'publisherId',
            ],
            'updatePublisher' => [
                'fields' => [
                    'publisherId' => false,
                    'publisherName' => false,
                    'publisherShortname' => false,
                    'publisherUrl' => false,
                    'accessibilityStatement' => false,
                    'accessibilityReportUrl' => false,
                ],
                'returnValue' => 'publisherId',
            ],
            'deletePublisher' => [
                'fields' => ['publisherId' => false],
                'nested' => false,
                'returnValue' => 'publisherId',
            ],
            'createReference' => [
                'fields' => [
                    'workId' => false,
                    'referenceOrdinal' => false,
                    'doi' => false,
                    'unstructuredCitation' => false,
                    'issn' => false,
                    'isbn' => false,
                    'journalTitle' => false,
                    'articleTitle' => false,
                    'seriesTitle' => false,
                    'volumeTitle' => false,
                    'edition' => false,
                    'author' => false,
                    'volume' => false,
                    'issue' => false,
                    'firstPage' => false,
                    'componentNumber' => false,
                    'standardDesignator' => false,
                    'standardsBodyName' => false,
                    'standardsBodyAcronym' => false,
                    'url' => false,
                    'publicationDate' => false,
                    'retrievalDate' => false,
                ],
                'returnValue' => 'referenceId',
            ],
            'updateReference' => [
                'fields' => [
                    'referenceId' => false,
                    'workId' => false,
                    'referenceOrdinal' => false,
                    'doi' => false,
                    'unstructuredCitation' => false,
                    'issn' => false,
                    'isbn' => false,
                    'journalTitle' => false,
                    'articleTitle' => false,
                    'seriesTitle' => false,
                    'volumeTitle' => false,
                    'edition' => false,
                    'author' => false,
                    'volume' => false,
                    'issue' => false,
                    'firstPage' => false,
                    'componentNumber' => false,
                    'standardDesignator' => false,
                    'standardsBodyName' => false,
                    'standardsBodyAcronym' => false,
                    'url' => false,
                    'publicationDate' => false,
                    'retrievalDate' => false,
                ],
                'returnValue' => 'referenceId',
            ],
            'deleteReference' => [
                'fields' => ['referenceId' => false],
                'nested' => false,
                'returnValue' => 'referenceId',
            ],
            'createSeries' => [
                'fields' => [
                    'imprintId' => false,
                    'seriesType' => true,
                    'seriesName' => false,
                    'issnPrint' => false,
                    'issnDigital' => false,
                    'seriesUrl' => false,
                    'seriesDescription' => false,
                    'seriesCfpUrl' => false,
                ],
                'returnValue' => 'seriesId',
            ],
            'updateSeries' => [
                'fields' => [
                    'seriesId' => false,
                    'imprintId' => false,
                    'seriesType' => true,
                    'seriesName' => false,
                    'issnPrint' => false,
                    'issnDigital' => false,
                    'seriesUrl' => false,
                    'seriesDescription' => false,
                    'seriesCfpUrl' => false,
                ],
                'returnValue' => 'seriesId',
            ],
            'deleteSeries' => [
                'fields' => ['seriesId' => false],
                'nested' => false,
                'returnValue' => 'seriesId',
            ],
            'createSubject' => [
                'fields' => [
                    'workId' => false,
                    'subjectType' => true,
                    'subjectCode' => false,
                    'subjectOrdinal' => false,
                ],
                'returnValue' => 'subjectId',
            ],
            'updateSubject' => [
                'fields' => [
                    'subjectId' => false,
                    'workId' => false,
                    'subjectType' => true,
                    'subjectCode' => false,
                    'subjectOrdinal' => false,
                ],
                'returnValue' => 'subjectId',
            ],
            'deleteSubject' => [
                'fields' => ['subjectId' => false],
                'nested' => false,
                'returnValue' => 'subjectId',
            ],
            'createTitle' => [
                'fields' => [
                    'workId' => false,
                    'localeCode' => true,
                    'fullTitle' => false,
                    'title' => false,
                    'subtitle' => false,
                    'canonical' => false,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'titleId',
            ],
            'updateTitle' => [
                'fields' => [
                    'titleId' => false,
                    'workId' => false,
                    'localeCode' => true,
                    'fullTitle' => false,
                    'title' => false,
                    'subtitle' => false,
                    'canonical' => false,
                ],
                'extraArgs' => $markupArg,
                'returnValue' => 'titleId',
            ],
            'deleteTitle' => [
                'fields' => ['titleId' => false],
                'nested' => false,
                'returnValue' => 'titleId',
            ],
            'createWork' => [
                'fields' => [
                    'workType' => true,
                    'workStatus' => true,
                    'reference' => false,
                    'edition' => false,
                    'imprintId' => false,
                    'doi' => false,
                    'publicationDate' => false,
                    'withdrawnDate' => false,
                    'place' => false,
                    'pageCount' => false,
                    'pageBreakdown' => false,
                    'imageCount' => false,
                    'tableCount' => false,
                    'audioCount' => false,
                    'videoCount' => false,
                    'license' => false,
                    'copyrightHolder' => false,
                    'landingPage' => false,
                    'lccn' => false,
                    'oclc' => false,
                    'generalNote' => false,
                    'bibliographyNote' => false,
                    'toc' => false,
                    'resourcesDescription' => false,
                    'coverUrl' => false,
                    'coverCaption' => false,
                    'firstPage' => false,
                    'lastPage' => false,
                    'pageInterval' => false,
                ],
                'returnValue' => 'workId',
            ],
            'updateWork' => [
                'fields' => [
                    'workId' => false,
                    'workType' => true,
                    'workStatus' => true,
                    'reference' => false,
                    'edition' => false,
                    'imprintId' => false,
                    'doi' => false,
                    'publicationDate' => false,
                    'withdrawnDate' => false,
                    'place' => false,
                    'pageCount' => false,
                    'pageBreakdown' => false,
                    'imageCount' => false,
                    'tableCount' => false,
                    'audioCount' => false,
                    'videoCount' => false,
                    'license' => false,
                    'copyrightHolder' => false,
                    'landingPage' => false,
                    'lccn' => false,
                    'oclc' => false,
                    'generalNote' => false,
                    'bibliographyNote' => false,
                    'toc' => false,
                    'resourcesDescription' => false,
                    'coverUrl' => false,
                    'coverCaption' => false,
                    'firstPage' => false,
                    'lastPage' => false,
                    'pageInterval' => false,
                ],
                'returnValue' => 'workId',
            ],
            'deleteWork' => [
                'fields' => ['workId' => false],
                'nested' => false,
                'returnValue' => 'workId',
            ],
            'createWorkFeaturedVideo' => [
                'fields' => [
                    'workId' => false,
                    'title' => false,
                    'url' => false,
                    'width' => false,
                    'height' => false,
                ],
                'returnValue' => 'workFeaturedVideoId',
            ],
            'updateWorkFeaturedVideo' => [
                'fields' => [
                    'workFeaturedVideoId' => false,
                    'workId' => false,
                    'title' => false,
                    'url' => false,
                    'width' => false,
                    'height' => false,
                ],
                'returnValue' => 'workFeaturedVideoId',
            ],
            'deleteWorkFeaturedVideo' => [
                'fields' => ['workFeaturedVideoId' => false],
                'nested' => false,
                'returnValue' => 'workFeaturedVideoId',
            ],
            'createWorkRelation' => [
                'fields' => [
                    'relatorWorkId' => false,
                    'relatedWorkId' => false,
                    'relationType' => true,
                    'relationOrdinal' => false,
                ],
                'returnValue' => 'workRelationId',
            ],
            'updateWorkRelation' => [
                'fields' => [
                    'workRelationId' => false,
                    'relatorWorkId' => false,
                    'relatedWorkId' => false,
                    'relationType' => true,
                    'relationOrdinal' => false,
                ],
                'returnValue' => 'workRelationId',
            ],
            'deleteWorkRelation' => [
                'fields' => ['workRelationId' => false],
                'nested' => false,
                'returnValue' => 'workRelationId',
            ],
            'moveAffiliation' => [
                'fields' => ['affiliationId' => false, 'newOrdinal' => false],
                'nested' => false,
                'returnValue' => 'affiliationId',
            ],
            'moveContribution' => [
                'fields' => ['contributionId' => false, 'newOrdinal' => false],
                'nested' => false,
                'returnValue' => 'contributionId',
            ],
            'moveIssue' => [
                'fields' => ['issueId' => false, 'newOrdinal' => false],
                'nested' => false,
                'returnValue' => 'issueId',
            ],
            'moveReference' => [
                'fields' => ['referenceId' => false, 'newOrdinal' => false],
                'nested' => false,
                'returnValue' => 'referenceId',
            ],
            'moveAdditionalResource' => [
                'fields' => ['additionalResourceId' => false, 'newOrdinal' => false],
                'nested' => false,
                'returnValue' => 'workResourceId',
            ],
            'moveAward' => [
                'fields' => ['awardId' => false, 'newOrdinal' => false],
                'nested' => false,
                'returnValue' => 'awardId',
            ],
            'moveEndorsement' => [
                'fields' => ['endorsementId' => false, 'newOrdinal' => false],
                'nested' => false,
                'returnValue' => 'endorsementId',
            ],
            'moveBookReview' => [
                'fields' => ['bookReviewId' => false, 'newOrdinal' => false],
                'nested' => false,
                'returnValue' => 'bookReviewId',
            ],
            'moveSubject' => [
                'fields' => ['subjectId' => false, 'newOrdinal' => false],
                'nested' => false,
                'returnValue' => 'subjectId',
            ],
            'moveWorkRelation' => [
                'fields' => ['workRelationId' => false, 'newOrdinal' => false],
                'nested' => false,
                'returnValue' => 'workRelationId',
            ],
            'initPublicationFileUpload' => [
                'fields' => ['publicationId' => false] + $uploadFields,
                'returnValue' => 'fileUploadId',
            ],
            'initFrontcoverFileUpload' => [
                'fields' => ['workId' => false] + $uploadFields,
                'returnValue' => 'fileUploadId',
            ],
            'initAdditionalResourceFileUpload' => [
                'fields' => ['additionalResourceId' => false] + $uploadFields,
                'returnValue' => 'fileUploadId',
            ],
            'initWorkFeaturedVideoFileUpload' => [
                'fields' => ['workFeaturedVideoId' => false] + $uploadFields,
                'returnValue' => 'fileUploadId',
            ],
            'completeFileUpload' => [
                'fields' => ['fileUploadId' => false],
                'returnValue' => 'fileId',
            ],
        ];

        return $mapping[$mutationName] ?? null;
    }

    private static function prepareData(array $mutationFields, array $fieldsData): string
    {
        $sanitizedFields = [];
        foreach ($mutationFields as $key => $raw) {
            $value = $fieldsData[$key] ?? null;
            if ($value === null || $value === '') {
                continue;
            }
            $sanitizedFields[] = $key . ': ' . ($raw ? $value : json_encode($value));
        }

        return implode(', ', $sanitizedFields);
    }
}
