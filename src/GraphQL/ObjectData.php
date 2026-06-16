<?php

namespace ThothApi\GraphQL;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\Definition\ObjectTypeDefinition;

abstract class ObjectData
{
    private array $data;

    final public function __construct(array $data = [])
    {
        $this->data = [];

        foreach ($data as $field => $value) {
            $this->data[$field] = static::hydrateFieldValue((string) $field, $value);
        }
    }

    /**
     * @return static
     */
    public static function fromArray(array $data): self
    {
        return new static($data);
    }

    public function toArray(): array
    {
        return $this->normalizeArray($this->data);
    }

    protected function get(string $field)
    {
        return $this->data[$field] ?? null;
    }

    protected function set(string $field, $value): self
    {
        $this->data[$field] = static::hydrateFieldValue($field, $value);
        return $this;
    }

    protected function has(string $field): bool
    {
        return array_key_exists($field, $this->data);
    }

    protected function remove(string $field): self
    {
        unset($this->data[$field]);
        return $this;
    }

    abstract public static function definition(): ObjectTypeDefinition;

    protected static function hydrateFieldValue(string $fieldName, $value)
    {
        $field = static::getFieldDefinition($fieldName);

        if ($field === null) {
            return $value;
        }

        return (new ValueHydrator())->hydrate($value, $field->getType());
    }

    protected static function getFieldDefinition(string $fieldName): ?FieldDefinition
    {
        foreach (static::definition()->getFields() as $field) {
            if ($field->getName() === $fieldName) {
                return $field;
            }
        }

        return null;
    }

    private function normalizeArray(array $data): array
    {
        return array_map(
            function ($value) {
                if ($value instanceof self) {
                    return $value->toArray();
                }

                if (is_array($value)) {
                    return $this->normalizeArray($value);
                }

                return $value;
            },
            $data
        );
    }
}
