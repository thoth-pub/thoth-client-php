<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewReference extends InputObject
{
    /**
     * @return string
     */
    public function getWorkId()
    {
        return $this->get('workId');
    }

    /**
     * @param string $value
     */
    public function setWorkId($value): self
    {
        $this->set('workId', $value);
        return $this;
    }

    public function hasWorkId(): bool
    {
        return $this->has('workId');
    }

    public function unsetWorkId(): self
    {
        $this->remove('workId');
        return $this;
    }

    /**
     * @return int
     */
    public function getReferenceOrdinal()
    {
        return $this->get('referenceOrdinal');
    }

    /**
     * @param int $value
     */
    public function setReferenceOrdinal($value): self
    {
        $this->set('referenceOrdinal', $value);
        return $this;
    }

    public function hasReferenceOrdinal(): bool
    {
        return $this->has('referenceOrdinal');
    }

    public function unsetReferenceOrdinal(): self
    {
        $this->remove('referenceOrdinal');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDoi()
    {
        return $this->get('doi');
    }

    /**
     * @param string|null $value
     */
    public function setDoi($value): self
    {
        $this->set('doi', $value);
        return $this;
    }

    public function hasDoi(): bool
    {
        return $this->has('doi');
    }

    public function unsetDoi(): self
    {
        $this->remove('doi');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnstructuredCitation()
    {
        return $this->get('unstructuredCitation');
    }

    /**
     * @param string|null $value
     */
    public function setUnstructuredCitation($value): self
    {
        $this->set('unstructuredCitation', $value);
        return $this;
    }

    public function hasUnstructuredCitation(): bool
    {
        return $this->has('unstructuredCitation');
    }

    public function unsetUnstructuredCitation(): self
    {
        $this->remove('unstructuredCitation');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssn()
    {
        return $this->get('issn');
    }

    /**
     * @param string|null $value
     */
    public function setIssn($value): self
    {
        $this->set('issn', $value);
        return $this;
    }

    public function hasIssn(): bool
    {
        return $this->has('issn');
    }

    public function unsetIssn(): self
    {
        $this->remove('issn');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIsbn()
    {
        return $this->get('isbn');
    }

    /**
     * @param string|null $value
     */
    public function setIsbn($value): self
    {
        $this->set('isbn', $value);
        return $this;
    }

    public function hasIsbn(): bool
    {
        return $this->has('isbn');
    }

    public function unsetIsbn(): self
    {
        $this->remove('isbn');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getJournalTitle()
    {
        return $this->get('journalTitle');
    }

    /**
     * @param string|null $value
     */
    public function setJournalTitle($value): self
    {
        $this->set('journalTitle', $value);
        return $this;
    }

    public function hasJournalTitle(): bool
    {
        return $this->has('journalTitle');
    }

    public function unsetJournalTitle(): self
    {
        $this->remove('journalTitle');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getArticleTitle()
    {
        return $this->get('articleTitle');
    }

    /**
     * @param string|null $value
     */
    public function setArticleTitle($value): self
    {
        $this->set('articleTitle', $value);
        return $this;
    }

    public function hasArticleTitle(): bool
    {
        return $this->has('articleTitle');
    }

    public function unsetArticleTitle(): self
    {
        $this->remove('articleTitle');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSeriesTitle()
    {
        return $this->get('seriesTitle');
    }

    /**
     * @param string|null $value
     */
    public function setSeriesTitle($value): self
    {
        $this->set('seriesTitle', $value);
        return $this;
    }

    public function hasSeriesTitle(): bool
    {
        return $this->has('seriesTitle');
    }

    public function unsetSeriesTitle(): self
    {
        $this->remove('seriesTitle');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVolumeTitle()
    {
        return $this->get('volumeTitle');
    }

    /**
     * @param string|null $value
     */
    public function setVolumeTitle($value): self
    {
        $this->set('volumeTitle', $value);
        return $this;
    }

    public function hasVolumeTitle(): bool
    {
        return $this->has('volumeTitle');
    }

    public function unsetVolumeTitle(): self
    {
        $this->remove('volumeTitle');
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEdition()
    {
        return $this->get('edition');
    }

    /**
     * @param int|null $value
     */
    public function setEdition($value): self
    {
        $this->set('edition', $value);
        return $this;
    }

    public function hasEdition(): bool
    {
        return $this->has('edition');
    }

    public function unsetEdition(): self
    {
        $this->remove('edition');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->get('author');
    }

    /**
     * @param string|null $value
     */
    public function setAuthor($value): self
    {
        $this->set('author', $value);
        return $this;
    }

    public function hasAuthor(): bool
    {
        return $this->has('author');
    }

    public function unsetAuthor(): self
    {
        $this->remove('author');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVolume()
    {
        return $this->get('volume');
    }

    /**
     * @param string|null $value
     */
    public function setVolume($value): self
    {
        $this->set('volume', $value);
        return $this;
    }

    public function hasVolume(): bool
    {
        return $this->has('volume');
    }

    public function unsetVolume(): self
    {
        $this->remove('volume');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssue()
    {
        return $this->get('issue');
    }

    /**
     * @param string|null $value
     */
    public function setIssue($value): self
    {
        $this->set('issue', $value);
        return $this;
    }

    public function hasIssue(): bool
    {
        return $this->has('issue');
    }

    public function unsetIssue(): self
    {
        $this->remove('issue');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstPage()
    {
        return $this->get('firstPage');
    }

    /**
     * @param string|null $value
     */
    public function setFirstPage($value): self
    {
        $this->set('firstPage', $value);
        return $this;
    }

    public function hasFirstPage(): bool
    {
        return $this->has('firstPage');
    }

    public function unsetFirstPage(): self
    {
        $this->remove('firstPage');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComponentNumber()
    {
        return $this->get('componentNumber');
    }

    /**
     * @param string|null $value
     */
    public function setComponentNumber($value): self
    {
        $this->set('componentNumber', $value);
        return $this;
    }

    public function hasComponentNumber(): bool
    {
        return $this->has('componentNumber');
    }

    public function unsetComponentNumber(): self
    {
        $this->remove('componentNumber');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStandardDesignator()
    {
        return $this->get('standardDesignator');
    }

    /**
     * @param string|null $value
     */
    public function setStandardDesignator($value): self
    {
        $this->set('standardDesignator', $value);
        return $this;
    }

    public function hasStandardDesignator(): bool
    {
        return $this->has('standardDesignator');
    }

    public function unsetStandardDesignator(): self
    {
        $this->remove('standardDesignator');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStandardsBodyName()
    {
        return $this->get('standardsBodyName');
    }

    /**
     * @param string|null $value
     */
    public function setStandardsBodyName($value): self
    {
        $this->set('standardsBodyName', $value);
        return $this;
    }

    public function hasStandardsBodyName(): bool
    {
        return $this->has('standardsBodyName');
    }

    public function unsetStandardsBodyName(): self
    {
        $this->remove('standardsBodyName');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStandardsBodyAcronym()
    {
        return $this->get('standardsBodyAcronym');
    }

    /**
     * @param string|null $value
     */
    public function setStandardsBodyAcronym($value): self
    {
        $this->set('standardsBodyAcronym', $value);
        return $this;
    }

    public function hasStandardsBodyAcronym(): bool
    {
        return $this->has('standardsBodyAcronym');
    }

    public function unsetStandardsBodyAcronym(): self
    {
        $this->remove('standardsBodyAcronym');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl()
    {
        return $this->get('url');
    }

    /**
     * @param string|null $value
     */
    public function setUrl($value): self
    {
        $this->set('url', $value);
        return $this;
    }

    public function hasUrl(): bool
    {
        return $this->has('url');
    }

    public function unsetUrl(): self
    {
        $this->remove('url');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPublicationDate()
    {
        return $this->get('publicationDate');
    }

    /**
     * @param string|null $value
     */
    public function setPublicationDate($value): self
    {
        $this->set('publicationDate', $value);
        return $this;
    }

    public function hasPublicationDate(): bool
    {
        return $this->has('publicationDate');
    }

    public function unsetPublicationDate(): self
    {
        $this->remove('publicationDate');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRetrievalDate()
    {
        return $this->get('retrievalDate');
    }

    /**
     * @param string|null $value
     */
    public function setRetrievalDate($value): self
    {
        $this->set('retrievalDate', $value);
        return $this;
    }

    public function hasRetrievalDate(): bool
    {
        return $this->has('retrievalDate');
    }

    public function unsetRetrievalDate(): self
    {
        $this->remove('retrievalDate');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewReference', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'workId',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Uuid',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'referenceOrdinal',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'doi',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'unstructuredCitation',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'issn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'isbn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Isbn',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'journalTitle',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'articleTitle',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'seriesTitle',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'volumeTitle',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'edition',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'author',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'volume',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'issue',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'firstPage',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'componentNumber',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'standardDesignator',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'standardsBodyName',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'standardsBodyAcronym',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'url',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'publicationDate',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'retrievalDate',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
