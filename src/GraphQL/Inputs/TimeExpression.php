<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class TimeExpression extends InputObject
{
    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->get('timestamp');
    }

    /**
     * @param string $value
     */
    public function setTimestamp($value): self
    {
        $this->set('timestamp', $value);
        return $this;
    }

    public function hasTimestamp(): bool
    {
        return $this->has('timestamp');
    }

    public function unsetTimestamp(): self
    {
        $this->remove('timestamp');
        return $this;
    }

    /**
     * @return string
     */
    public function getExpression()
    {
        return $this->get('expression');
    }

    /**
     * @param string $value
     */
    public function setExpression($value): self
    {
        $this->set('expression', $value);
        return $this;
    }

    public function hasExpression(): bool
    {
        return $this->has('expression');
    }

    public function unsetExpression(): self
    {
        $this->remove('expression');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('TimeExpression', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'timestamp',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Timestamp',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'expression',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'Expression',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
