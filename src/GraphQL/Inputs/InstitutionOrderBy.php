<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class InstitutionOrderBy extends InputObject
{
    /**
     * @return string
     */
    public function getField()
    {
        return $this->get('field');
    }

    /**
     * @param string $value
     */
    public function setField($value): self
    {
        $this->set('field', $value);
        return $this;
    }

    public function hasField(): bool
    {
        return $this->has('field');
    }

    public function unsetField(): self
    {
        $this->remove('field');
        return $this;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->get('direction');
    }

    /**
     * @param string $value
     */
    public function setDirection($value): self
    {
        $this->set('direction', $value);
        return $this;
    }

    public function hasDirection(): bool
    {
        return $this->has('direction');
    }

    public function unsetDirection(): self
    {
        $this->remove('direction');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('InstitutionOrderBy', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'field',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'InstitutionField',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'direction',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'Direction',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
