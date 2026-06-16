<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Reference extends ObjectData
{
    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->get('referenceId');
    }

    /**
     * @param string $value
     */
    public function setReferenceId($value): self
    {
        $this->set('referenceId', $value);
        return $this;
    }

    public function hasReferenceId(): bool
    {
        return $this->has('referenceId');
    }

    public function unsetReferenceId(): self
    {
        $this->remove('referenceId');
        return $this;
    }

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

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->get('createdAt');
    }

    /**
     * @param string $value
     */
    public function setCreatedAt($value): self
    {
        $this->set('createdAt', $value);
        return $this;
    }

    public function hasCreatedAt(): bool
    {
        return $this->has('createdAt');
    }

    public function unsetCreatedAt(): self
    {
        $this->remove('createdAt');
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string $value
     */
    public function setUpdatedAt($value): self
    {
        $this->set('updatedAt', $value);
        return $this;
    }

    public function hasUpdatedAt(): bool
    {
        return $this->has('updatedAt');
    }

    public function unsetUpdatedAt(): self
    {
        $this->remove('updatedAt');
        return $this;
    }

    /**
     * @return Work
     */
    public function getWork()
    {
        return $this->get('work');
    }

    /**
     * @param Work $value
     */
    public function setWork($value): self
    {
        $this->set('work', $value);
        return $this;
    }

    public function hasWork(): bool
    {
        return $this->has('work');
    }

    public function unsetWork(): self
    {
        $this->remove('work');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Reference', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'referenceId',
                'description' => 'UUID of the reference.',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Uuid',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workId',
                'description' => 'UUID of the citing work.',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Uuid',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'referenceOrdinal',
                'description' => 'Number used to order references within a work\'s bibliography.',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'doi',
                'description' => 'Digital Object Identifier of the cited work as full URL.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'unstructuredCitation',
                'description' => 'Full reference text. When the DOI of the cited work is not known this field is required, and may be used in conjunction with other structured data to help identify the cited work.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'issn',
                'description' => 'ISSN of a series.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'isbn',
                'description' => 'Book ISBN, when the cited work is a book or a chapter.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Isbn',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'journalTitle',
                'description' => 'Title of a journal, when the cited work is an article.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'articleTitle',
                'description' => 'Journal article, conference paper, or book chapter title.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'seriesTitle',
                'description' => 'Title of a book or conference series.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'volumeTitle',
                'description' => 'Title of a book or conference proceeding.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'edition',
                'description' => 'Book edition number.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'author',
                'description' => 'First author of the cited work.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'volume',
                'description' => 'Volume number of a journal or book set.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'issue',
                'description' => 'Journal issue, when the cited work is an article.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'firstPage',
                'description' => 'First page of the cited page range.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'componentNumber',
                'description' => 'The chapter, section or part number, when the cited work is a component of a book.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'standardDesignator',
                'description' => 'Standard identifier (e.g. "14064-1"), when the cited work is a standard.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'standardsBodyName',
                'description' => 'Full name of the standards organisation (e.g. "International Organization for Standardization"), when the cited work is a standard.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'standardsBodyAcronym',
                'description' => 'Acronym of the standards organisation (e.g. "ISO"), when the cited work is a standard.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'url',
                'description' => 'URL of the cited work.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'publicationDate',
                'description' => 'Publication date of the cited work. Day and month should be set to "01" when only the publication year is known.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'retrievalDate',
                'description' => 'Date the cited work was accessed, when citing a website or online article.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Timestamp of the creation of this record within Thoth.',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Timestamp',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updatedAt',
                'description' => 'Timestamp of the last update to this record within Thoth.',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Timestamp',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'work',
                'description' => 'The citing work.',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Work',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
