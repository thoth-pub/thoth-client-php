<?php

namespace ThothClient\GraphQL;

class MutationBuilder
{
    public static function build(string $mutationName, array $mutationData, bool $nested = true): string
    {
        $mutationFields = self::getMutationFields($mutationName);
        if ($mutationFields === null) {
            throw new \InvalidArgumentException("Mutation '{$mutationName}' not found.");
        }

        $fields = $mutationFields['fields'];
        $returnValue = $mutationFields['returnValue'];
        $data = self::prepareData($fields, $mutationData);

        $dataStr = $nested ? 'data: {%s}' : '%s';
        $mutationStr = <<<GQL
        mutation {
            %s(
                {$dataStr}
            ) {
                %s
            }
        }
        GQL;

        return sprintf($mutationStr, $mutationName, $data, $returnValue);
    }

    private static function getMutationFields(string $mutationName): ?array
    {
        $mapping = [
            'createAffiliation' => [
                'fields' => [
                    'contributionId' => false,
                    'institutionId' => false,
                    'affiliationOrdinal' => false,
                    'position' => false
                ],
                'returnValue' => 'affiliationId'
            ],
            'updateAffiliation' => [
                'fields' => [
                    'affiliationId' => false,
                    'contributionId' => false,
                    'institutionId' => false,
                    'affiliationOrdinal' => false,
                    'position' => false
                ],
                'returnValue' => 'affiliationId'
            ],
            'deleteAffiliation' => [
                'fields' => [
                    'affiliationId' => false,
                ],
                'returnValue' => 'affiliationId'
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
                    'biography' => false
                ],
                'returnValue' => 'contributionId'
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
                    'biography' => false
                ],
                'returnValue' => 'contributionId'
            ],
            'deleteContribution' => [
                'fields' => [
                    'contributionId' => false,
                ],
                'returnValue' => 'contributionId'
            ],
            'createContributor' => [
                'fields' => [
                    'firstName' => false,
                    'lastName' => false,
                    'fullName' => false,
                    'orcid' => false,
                    'website' => false
                ],
                'returnValue' => 'contributorId'
            ],
            'updateContributor' => [
                'fields' => [
                    'contributorId' => false,
                    'firstName' => false,
                    'lastName' => false,
                    'fullName' => false,
                    'orcid' => false,
                    'website' => false
                ],
                'returnValue' => 'contributorId'
            ],
            'deleteContributor' => [
                'fields' => [
                    'contributorId' => false,
                ],
                'returnValue' => 'contributorId'
            ],
            'createFunding' => [
                'fields' => [
                    'workId' => false,
                    'institutionId' => false,
                    'program' => false,
                    'projectName' => false,
                    'projectShortname' => false,
                    'grantNumber' => false,
                    'jurisdiction' => false
                ],
                'returnValue' => 'fundingId'
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
                    'jurisdiction' => false
                ],
                'returnValue' => 'fundingId'
            ],
            'deleteFunding' => [
                'fields' => [
                    'fundingId' => false,
                ],
                'returnValue' => 'fundingId'
            ],
            'createImprint' => [
                'fields' => [
                    'publisherId' => false,
                    'imprintName' => false,
                    'imprintUrl' => false,
                    'crossmarkDoi' => false
                ],
                'returnValue' => 'imprintId'
            ],
            'updateImprint' => [
                'fields' => [
                    'imprintId' => false,
                    'publisherId' => false,
                    'imprintName' => false,
                    'imprintUrl' => false,
                    'crossmarkDoi' => false
                ],
                'returnValue' => 'imprintId'
            ],
            'deleteImprint' => [
                'fields' => [
                    'imprintId' => false,
                ],
                'returnValue' => 'imprintId'
            ],
            'createInstitution' => [
                'fields' => [
                    'institutionName' => false,
                    'institutionDoi' => false,
                    'countryCode' => true,
                    'ror' => false
                ],
                'returnValue' => 'institutionId'
            ],
            'updateInstitution' => [
                'fields' => [
                    'institutionId' => false,
                    'institutionName' => false,
                    'institutionDoi' => false,
                    'countryCode' => true,
                    'ror' => false
                ],
                'returnValue' => 'institutionId'
            ],
            'deleteInstitution' => [
                'fields' => [
                    'institutionId' => false,
                ],
                'returnValue' => 'institutionId'
            ],
            'createIssue' => [
                'fields' => [
                    'seriesId' => false,
                    'workId' => false,
                    'issueOrdinal' => false
                ],
                'returnValue' => 'issueId'
            ],
            'updateIssue' => [
                'fields' => [
                    'issueId' => false,
                    'seriesId' => false,
                    'workId' => false,
                    'issueOrdinal' => false
                ],
                'returnValue' => 'issueId'
            ],
            'deleteIssue' => [
                'fields' => [
                    'issueId' => false,
                ],
                'returnValue' => 'issueId'
            ],
            'createLanguage' => [
                'fields' => [
                    'workId' => false,
                    'languageCode' => true,
                    'languageRelation' => true,
                    'mainLanguage' => false
                ],
                'returnValue' => 'languageId'
            ],
            'updateLanguage' => [
                'fields' => [
                    'languageId' => false,
                    'workId' => false,
                    'languageCode' => true,
                    'languageRelation' => true,
                    'mainLanguage' => false
                ],
                'returnValue' => 'languageId'
            ],
            'deleteLanguage' => [
                'fields' => [
                    'languageId' => false,
                ],
                'returnValue' => 'languageId'
            ],
            'createLocation' => [
                'fields' => [
                    'publicationId' => false,
                    'locationPlatform' => true,
                    'canonical' => false,
                    'landingPage' => false,
                    'fullTextUrl' => false
                ],
                'returnValue' => 'locationId'
            ],
            'updateLocation' => [
                'fields' => [
                    'locationId' => false,
                    'publicationId' => false,
                    'locationPlatform' => true,
                    'canonical' => false,
                    'landingPage' => false,
                    'fullTextUrl' => false
                ],
                'returnValue' => 'locationId'
            ],
            'deleteLocation' => [
                'fields' => [
                    'locationId' => false,
                ],
                'returnValue' => 'locationId'
            ],
            'createPrice' => [
                'fields' => [
                    'publicationId' => false,
                    'currencyCode' => true,
                    'unitPrice' => false
                ],
                'returnValue' => 'priceId'
            ],
            'updatePrice' => [
                'fields' => [
                    'priceId' => false,
                    'publicationId' => false,
                    'currencyCode' => true,
                    'unitPrice' => false
                ],
                'returnValue' => 'priceId'
            ],
            'deletePrice' => [
                'fields' => [
                    'priceId' => false,
                ],
                'returnValue' => 'priceId'
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
                    'isbn' => false
                ],
                'returnValue' => 'publicationId'
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
                    'isbn' => false
                ],
                'returnValue' => 'publicationId'
            ],
            'deletePublication' => [
                'fields' => [
                    'publicationId' => false,
                ],
                'returnValue' => 'publicationId'
            ],
            'createPublisher' => [
                'fields' => [
                    'publisherName' => false,
                    'publisherShortname' => false,
                    'publisherUrl' => false
                ],
                'returnValue' => 'publisherId'
            ],
            'updatePublisher' => [
                'fields' => [
                    'publisherId' => false,
                    'publisherName' => false,
                    'publisherShortname' => false,
                    'publisherUrl' => false
                ],
                'returnValue' => 'publisherId'
            ],
            'deletePublisher' => [
                'fields' => [
                    'publisherId' => false,
                ],
                'returnValue' => 'publisherId'
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
                    'retrievalDate' => false
                ],
                'returnValue' => 'referenceId'
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
                    'retrievalDate' => false
                ],
                'returnValue' => 'referenceId'
            ],
            'deleteReference' => [
                'fields' => [
                    'referenceId' => false,
                ],
                'returnValue' => 'referenceId'
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
                    'seriesCfpUrl' => false
                ],
                'returnValue' => 'seriesId'
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
                    'seriesCfpUrl' => false
                ],
                'returnValue' => 'seriesId'
            ],
            'deleteSeries' => [
                'fields' => [
                    'seriesId' => false,
                ],
                'returnValue' => 'seriesId'
            ],
            'createSubject' => [
                'fields' => [
                    'workId' => false,
                    'subjectType' => true,
                    'subjectCode' => false,
                    'subjectOrdinal' => false
                ],
                'returnValue' => 'subjectId'
            ],
            'updateSubject' => [
                'fields' => [
                    'subjectId' => false,
                    'workId' => false,
                    'subjectType' => true,
                    'subjectCode' => false,
                    'subjectOrdinal' => false
                ],
                'returnValue' => 'subjectId'
            ],
            'deleteSubject' => [
                'fields' => [
                    'subjectId' => false,
                ],
                'returnValue' => 'subjectId'
            ],
            'createWork' => [
                'fields' => [
                    'workType' => true,
                    'workStatus' => true,
                    'fullTitle' => false,
                    'title' => false,
                    'subtitle' => false,
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
                    'shortAbstract' => false,
                    'longAbstract' => false,
                    'generalNote' => false,
                    'bibliographyNote' => false,
                    'toc' => false,
                    'coverUrl' => false,
                    'coverCaption' => false,
                    'firstPage' => false,
                    'lastPage' => false,
                    'pageInterval' => false
                ],
                'returnValue' => 'workId'
            ],
            'updateWork' => [
                'fields' => [
                    'workId' => false,
                    'workType' => true,
                    'workStatus' => true,
                    'fullTitle' => false,
                    'title' => false,
                    'subtitle' => false,
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
                    'shortAbstract' => false,
                    'longAbstract' => false,
                    'generalNote' => false,
                    'bibliographyNote' => false,
                    'toc' => false,
                    'coverUrl' => false,
                    'coverCaption' => false,
                    'firstPage' => false,
                    'lastPage' => false,
                    'pageInterval' => false
                ],
                'returnValue' => 'workId'
            ],
            'deleteWork' => [
                'fields' => [
                    'workId' => false,
                ],
                'returnValue' => 'workId'
            ],
            'createWorkRelation' => [
                'fields' => [
                    'relatorWorkId' => false,
                    'relatedWorkId' => false,
                    'relationType' => true,
                    'relationOrdinal' => false
                ],
                'returnValue' => 'workRelationId'
            ],
            'updateWorkRelation' => [
                'fields' => [
                    'workRelationId' => false,
                    'relatorWorkId' => false,
                    'relatedWorkId' => false,
                    'relationType' => true,
                    'relationOrdinal' => false
                ],
                'returnValue' => 'workRelationId'
            ],
            'deleteWorkRelation' => [
                'fields' => [
                    'workRelationId' => false,
                ],
                'returnValue' => 'workRelationId'
            ]
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
