<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewBookReview extends InputObject
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
     * @return string|null
     */
    public function getTitle()
    {
        return $this->get('title');
    }

    /**
     * @param string|null $value
     */
    public function setTitle($value): self
    {
        $this->set('title', $value);
        return $this;
    }

    public function hasTitle(): bool
    {
        return $this->has('title');
    }

    public function unsetTitle(): self
    {
        $this->remove('title');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorName()
    {
        return $this->get('authorName');
    }

    /**
     * @param string|null $value
     */
    public function setAuthorName($value): self
    {
        $this->set('authorName', $value);
        return $this;
    }

    public function hasAuthorName(): bool
    {
        return $this->has('authorName');
    }

    public function unsetAuthorName(): self
    {
        $this->remove('authorName');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReviewerOrcid()
    {
        return $this->get('reviewerOrcid');
    }

    /**
     * @param string|null $value
     */
    public function setReviewerOrcid($value): self
    {
        $this->set('reviewerOrcid', $value);
        return $this;
    }

    public function hasReviewerOrcid(): bool
    {
        return $this->has('reviewerOrcid');
    }

    public function unsetReviewerOrcid(): self
    {
        $this->remove('reviewerOrcid');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReviewerInstitutionId()
    {
        return $this->get('reviewerInstitutionId');
    }

    /**
     * @param string|null $value
     */
    public function setReviewerInstitutionId($value): self
    {
        $this->set('reviewerInstitutionId', $value);
        return $this;
    }

    public function hasReviewerInstitutionId(): bool
    {
        return $this->has('reviewerInstitutionId');
    }

    public function unsetReviewerInstitutionId(): self
    {
        $this->remove('reviewerInstitutionId');
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
    public function getReviewDate()
    {
        return $this->get('reviewDate');
    }

    /**
     * @param string|null $value
     */
    public function setReviewDate($value): self
    {
        $this->set('reviewDate', $value);
        return $this;
    }

    public function hasReviewDate(): bool
    {
        return $this->has('reviewDate');
    }

    public function unsetReviewDate(): self
    {
        $this->remove('reviewDate');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getJournalName()
    {
        return $this->get('journalName');
    }

    /**
     * @param string|null $value
     */
    public function setJournalName($value): self
    {
        $this->set('journalName', $value);
        return $this;
    }

    public function hasJournalName(): bool
    {
        return $this->has('journalName');
    }

    public function unsetJournalName(): self
    {
        $this->remove('journalName');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getJournalVolume()
    {
        return $this->get('journalVolume');
    }

    /**
     * @param string|null $value
     */
    public function setJournalVolume($value): self
    {
        $this->set('journalVolume', $value);
        return $this;
    }

    public function hasJournalVolume(): bool
    {
        return $this->has('journalVolume');
    }

    public function unsetJournalVolume(): self
    {
        $this->remove('journalVolume');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getJournalNumber()
    {
        return $this->get('journalNumber');
    }

    /**
     * @param string|null $value
     */
    public function setJournalNumber($value): self
    {
        $this->set('journalNumber', $value);
        return $this;
    }

    public function hasJournalNumber(): bool
    {
        return $this->has('journalNumber');
    }

    public function unsetJournalNumber(): self
    {
        $this->remove('journalNumber');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getJournalIssn()
    {
        return $this->get('journalIssn');
    }

    /**
     * @param string|null $value
     */
    public function setJournalIssn($value): self
    {
        $this->set('journalIssn', $value);
        return $this;
    }

    public function hasJournalIssn(): bool
    {
        return $this->has('journalIssn');
    }

    public function unsetJournalIssn(): self
    {
        $this->remove('journalIssn');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPageRange()
    {
        return $this->get('pageRange');
    }

    /**
     * @param string|null $value
     */
    public function setPageRange($value): self
    {
        $this->set('pageRange', $value);
        return $this;
    }

    public function hasPageRange(): bool
    {
        return $this->has('pageRange');
    }

    public function unsetPageRange(): self
    {
        $this->remove('pageRange');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getText()
    {
        return $this->get('text');
    }

    /**
     * @param string|null $value
     */
    public function setText($value): self
    {
        $this->set('text', $value);
        return $this;
    }

    public function hasText(): bool
    {
        return $this->has('text');
    }

    public function unsetText(): self
    {
        $this->remove('text');
        return $this;
    }

    /**
     * @return int
     */
    public function getReviewOrdinal()
    {
        return $this->get('reviewOrdinal');
    }

    /**
     * @param int $value
     */
    public function setReviewOrdinal($value): self
    {
        $this->set('reviewOrdinal', $value);
        return $this;
    }

    public function hasReviewOrdinal(): bool
    {
        return $this->has('reviewOrdinal');
    }

    public function unsetReviewOrdinal(): self
    {
        $this->remove('reviewOrdinal');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewBookReview', [
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
                'name' => 'title',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'authorName',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'reviewerOrcid',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Orcid',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'reviewerInstitutionId',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Uuid',
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
                'name' => 'reviewDate',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'journalName',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'journalVolume',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'journalNumber',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'journalIssn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'pageRange',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'text',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'reviewOrdinal',
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
            ])
        ]);
    }
}
