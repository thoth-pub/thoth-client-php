<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Endorsement extends ObjectData
{
    /**
     * @return string
     */
    public function getEndorsementId()
    {
        return $this->get('endorsementId');
    }

    /**
     * @param string $value
     */
    public function setEndorsementId($value): self
    {
        $this->set('endorsementId', $value);
        return $this;
    }

    public function hasEndorsementId(): bool
    {
        return $this->has('endorsementId');
    }

    public function unsetEndorsementId(): self
    {
        $this->remove('endorsementId');
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
     * @return string
     */
    public function getAuthorName()
    {
        return $this->get('authorName');
    }

    /**
     * @param string $value
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
    public function getAuthorRole()
    {
        return $this->get('authorRole');
    }

    /**
     * @param string|null $value
     */
    public function setAuthorRole($value): self
    {
        $this->set('authorRole', $value);
        return $this;
    }

    public function hasAuthorRole(): bool
    {
        return $this->has('authorRole');
    }

    public function unsetAuthorRole(): self
    {
        $this->remove('authorRole');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorOrcid()
    {
        return $this->get('authorOrcid');
    }

    /**
     * @param string|null $value
     */
    public function setAuthorOrcid($value): self
    {
        $this->set('authorOrcid', $value);
        return $this;
    }

    public function hasAuthorOrcid(): bool
    {
        return $this->has('authorOrcid');
    }

    public function unsetAuthorOrcid(): self
    {
        $this->remove('authorOrcid');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorInstitutionId()
    {
        return $this->get('authorInstitutionId');
    }

    /**
     * @param string|null $value
     */
    public function setAuthorInstitutionId($value): self
    {
        $this->set('authorInstitutionId', $value);
        return $this;
    }

    public function hasAuthorInstitutionId(): bool
    {
        return $this->has('authorInstitutionId');
    }

    public function unsetAuthorInstitutionId(): self
    {
        $this->remove('authorInstitutionId');
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
    public function getEndorsementOrdinal()
    {
        return $this->get('endorsementOrdinal');
    }

    /**
     * @param int $value
     */
    public function setEndorsementOrdinal($value): self
    {
        $this->set('endorsementOrdinal', $value);
        return $this;
    }

    public function hasEndorsementOrdinal(): bool
    {
        return $this->has('endorsementOrdinal');
    }

    public function unsetEndorsementOrdinal(): self
    {
        $this->remove('endorsementOrdinal');
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

    /**
     * @return Institution|null
     */
    public function getAuthorInstitution()
    {
        return $this->get('authorInstitution');
    }

    /**
     * @param Institution|null $value
     */
    public function setAuthorInstitution($value): self
    {
        $this->set('authorInstitution', $value);
        return $this;
    }

    public function hasAuthorInstitution(): bool
    {
        return $this->has('authorInstitution');
    }

    public function unsetAuthorInstitution(): self
    {
        $this->remove('authorInstitution');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Endorsement', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'endorsementId',
                'description' => 'Thoth ID of the endorsement',
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
                'description' => 'Thoth ID of the work to which this endorsement belongs',
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
                'name' => 'authorName',
                'description' => 'Name of the endorsement author',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'authorRole',
                'description' => 'Role of the endorsement author',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering endorsement author role',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'authorOrcid',
                'description' => 'ORCID (Open Researcher and Contributor ID) of the endorsement author as full URL, using the HTTPS scheme and the orcid.org domain',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Orcid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'authorInstitutionId',
                'description' => 'Thoth ID of the endorsement author\'s institution',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Uuid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'url',
                'description' => 'URL associated with this endorsement',
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
                'name' => 'text',
                'description' => 'Text of the endorsement',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering endorsement text',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'endorsementOrdinal',
                'description' => 'Number representing this endorsement\'s position in an ordered list of endorsements within the work',
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
                'name' => 'createdAt',
                'description' => 'Date and time at which the endorsement record was created',
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
                'description' => 'Date and time at which the endorsement record was last updated',
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
                'description' => 'Get the work linked to this endorsement',
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
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'authorInstitution',
                'description' => 'Get the endorsement author\'s institution',
                'args' => [],
                'type' => [
                    'kind' => 'OBJECT',
                    'name' => 'Institution',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
