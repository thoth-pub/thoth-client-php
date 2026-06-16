<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchWorkRelation extends InputObject
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

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchWorkRelation', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'workRelationId',
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
                'name' => 'relatorWorkId',
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
                'name' => 'relatedWorkId',
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
                'name' => 'relationType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'RelationType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'relationOrdinal',
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
