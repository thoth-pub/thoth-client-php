<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class WorkRelation extends ObjectData
{
    /**
     * @return string
     */
    public function getWorkRelationId()
    {
        return $this->get('workRelationId');
    }

    /**
     * @param string $value
     */
    public function setWorkRelationId($value): self
    {
        $this->set('workRelationId', $value);
        return $this;
    }

    public function hasWorkRelationId(): bool
    {
        return $this->has('workRelationId');
    }

    public function unsetWorkRelationId(): self
    {
        $this->remove('workRelationId');
        return $this;
    }

    /**
     * @return string
     */
    public function getRelatorWorkId()
    {
        return $this->get('relatorWorkId');
    }

    /**
     * @param string $value
     */
    public function setRelatorWorkId($value): self
    {
        $this->set('relatorWorkId', $value);
        return $this;
    }

    public function hasRelatorWorkId(): bool
    {
        return $this->has('relatorWorkId');
    }

    public function unsetRelatorWorkId(): self
    {
        $this->remove('relatorWorkId');
        return $this;
    }

    /**
     * @return string
     */
    public function getRelatedWorkId()
    {
        return $this->get('relatedWorkId');
    }

    /**
     * @param string $value
     */
    public function setRelatedWorkId($value): self
    {
        $this->set('relatedWorkId', $value);
        return $this;
    }

    public function hasRelatedWorkId(): bool
    {
        return $this->has('relatedWorkId');
    }

    public function unsetRelatedWorkId(): self
    {
        $this->remove('relatedWorkId');
        return $this;
    }

    /**
     * @return string
     */
    public function getRelationType()
    {
        return $this->get('relationType');
    }

    /**
     * @param string $value
     */
    public function setRelationType($value): self
    {
        $this->set('relationType', $value);
        return $this;
    }

    public function hasRelationType(): bool
    {
        return $this->has('relationType');
    }

    public function unsetRelationType(): self
    {
        $this->remove('relationType');
        return $this;
    }

    /**
     * @return int
     */
    public function getRelationOrdinal()
    {
        return $this->get('relationOrdinal');
    }

    /**
     * @param int $value
     */
    public function setRelationOrdinal($value): self
    {
        $this->set('relationOrdinal', $value);
        return $this;
    }

    public function hasRelationOrdinal(): bool
    {
        return $this->has('relationOrdinal');
    }

    public function unsetRelationOrdinal(): self
    {
        $this->remove('relationOrdinal');
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
    public function getRelatedWork()
    {
        return $this->get('relatedWork');
    }

    /**
     * @param Work $value
     */
    public function setRelatedWork($value): self
    {
        $this->set('relatedWork', $value);
        return $this;
    }

    public function hasRelatedWork(): bool
    {
        return $this->has('relatedWork');
    }

    public function unsetRelatedWork(): self
    {
        $this->remove('relatedWork');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('WorkRelation', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workRelationId',
                'description' => 'Thoth ID of the work relation',
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
                'name' => 'relatorWorkId',
                'description' => 'Thoth ID of the work to which this work relation belongs',
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
                'name' => 'relatedWorkId',
                'description' => 'Thoth ID of the other work in the relationship',
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
                'name' => 'relationType',
                'description' => 'Nature of the relationship',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'RelationType',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'relationOrdinal',
                'description' => 'Number representing this work relation\'s position in an ordered list of relations of the same type within the work',
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
                'description' => 'Date and time at which the work relation record was created',
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
                'description' => 'Date and time at which the work relation record was last updated',
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
                'name' => 'relatedWork',
                'description' => 'Get the other work in the relationship',
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
