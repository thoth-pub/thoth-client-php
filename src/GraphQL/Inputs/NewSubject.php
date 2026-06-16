<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewSubject extends InputObject
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
    public function getSubjectType()
    {
        return $this->get('subjectType');
    }

    /**
     * @param string $value
     */
    public function setSubjectType($value): self
    {
        $this->set('subjectType', $value);
        return $this;
    }

    public function hasSubjectType(): bool
    {
        return $this->has('subjectType');
    }

    public function unsetSubjectType(): self
    {
        $this->remove('subjectType');
        return $this;
    }

    /**
     * @return string
     */
    public function getSubjectCode()
    {
        return $this->get('subjectCode');
    }

    /**
     * @param string $value
     */
    public function setSubjectCode($value): self
    {
        $this->set('subjectCode', $value);
        return $this;
    }

    public function hasSubjectCode(): bool
    {
        return $this->has('subjectCode');
    }

    public function unsetSubjectCode(): self
    {
        $this->remove('subjectCode');
        return $this;
    }

    /**
     * @return int
     */
    public function getSubjectOrdinal()
    {
        return $this->get('subjectOrdinal');
    }

    /**
     * @param int $value
     */
    public function setSubjectOrdinal($value): self
    {
        $this->set('subjectOrdinal', $value);
        return $this;
    }

    public function hasSubjectOrdinal(): bool
    {
        return $this->has('subjectOrdinal');
    }

    public function unsetSubjectOrdinal(): self
    {
        $this->remove('subjectOrdinal');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewSubject', [
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
                'name' => 'subjectType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'SubjectType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'subjectCode',
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
                'name' => 'subjectOrdinal',
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
