<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewEndorsement extends InputObject
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

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewEndorsement', [
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
                'name' => 'authorName',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'authorRole',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'authorOrcid',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Orcid',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'authorInstitutionId',
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
                'name' => 'endorsementOrdinal',
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
