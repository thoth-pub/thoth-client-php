<?php

namespace ThothApi\GraphQL\Operation;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\Definition\TypeReference;
use ThothApi\GraphQL\EnumValue;

final class VariableNormalizer
{
    private FieldDefinition $field;

    private SchemaDefinitionResolver $schemaDefinitions;

    public function __construct(FieldDefinition $field, ?SchemaDefinitionResolver $schemaDefinitions = null)
    {
        $this->field = $field;
        $this->schemaDefinitions = $schemaDefinitions ?: new SchemaDefinitionResolver();
    }

    public function normalize(array $variables, array $schemaArguments): array
    {
        $normalized = [];

        foreach ($schemaArguments as $name => $type) {
            if ($this->isNonNullType($type) && (!array_key_exists($name, $variables) || $variables[$name] === null)) {
                throw new \InvalidArgumentException("Missing required GraphQL argument '{$name}'.");
            }
        }

        foreach ($variables as $name => $value) {
            Identifier::assert((string) $name);

            if (!array_key_exists($name, $schemaArguments)) {
                throw new \InvalidArgumentException(
                    "Unknown GraphQL argument '{$name}' for '{$this->field->getName()}'."
                );
            }

            if ($value !== null) {
                $normalized[$name] = $this->normalizeValue($value, $schemaArguments[$name] ?? null);
            }
        }

        return $normalized;
    }

    private function normalizeValue($value, ?TypeReference $type = null)
    {
        if ($type !== null && $type->getKind() === 'NON_NULL' && $type->getOfType() !== null) {
            return $this->normalizeValue($value, $type->getOfType());
        }

        if ($value instanceof EnumValue) {
            Identifier::assert((string) $value);
            $this->assertEnumValue((string) $value, $type);
            return (string) $value;
        }

        if ($type !== null && $type->getKind() === 'LIST' && !$this->isListValue($value)) {
            throw new \InvalidArgumentException(
                "Invalid GraphQL value for '{$type->toGraphQL()}'; expected list."
            );
        }

        if (is_array($value)) {
            return $this->normalizeArrayValue($value, $type);
        }

        if ($this->schemaDefinitions->isEnumType($type)) {
            Identifier::assert((string) $value);
            $this->assertEnumValue((string) $value, $type);
        }

        $this->assertScalarValue($value, $type);

        return $value;
    }

    private function normalizeArrayValue(array $value, ?TypeReference $type): array
    {
        if ($this->isList($value)) {
            $listType = $this->getListItemType($type);

            return array_map(function ($item) use ($listType) {
                return $this->normalizeValue($item, $listType);
            }, $value);
        }

        $normalized = [];
        $inputFields = $this->schemaDefinitions->getInputFieldDefinitions($type);

        foreach ($value as $field => $fieldValue) {
            Identifier::assert((string) $field);

            if ($inputFields !== null && !array_key_exists($field, $inputFields)) {
                throw new \InvalidArgumentException(
                    "Unknown GraphQL input field '{$field}' for '{$type->baseName()}'."
                );
            }

            $normalized[$field] = $fieldValue === null
                ? null
                : $this->normalizeValue(
                    $fieldValue,
                    $inputFields[$field] ?? $this->schemaDefinitions->getInputFieldType($type, (string) $field)
                );
        }

        if ($inputFields !== null) {
            foreach ($inputFields as $fieldName => $fieldType) {
                if (
                    $this->isNonNullType($fieldType)
                    && (!array_key_exists($fieldName, $normalized) || $normalized[$fieldName] === null)
                ) {
                    throw new \InvalidArgumentException(
                        "Missing required GraphQL input field '{$fieldName}' for '{$type->baseName()}'."
                    );
                }
            }
        }

        return $normalized;
    }

    private function assertScalarValue($value, ?TypeReference $type): void
    {
        if ($type === null || $type->getKind() !== 'NAMED') {
            return;
        }

        switch ($type->baseName()) {
            case 'Boolean':
                if (!is_bool($value)) {
                    $this->throwInvalidScalarValue($type, 'bool');
                }
                return;
            case 'Float':
                if (!is_float($value) && !is_int($value)) {
                    $this->throwInvalidScalarValue($type, 'float');
                }
                return;
            case 'Int':
                if (!is_int($value)) {
                    $this->throwInvalidScalarValue($type, 'int');
                }
                return;
            case 'String':
            case 'Date':
            case 'Doi':
            case 'Isbn':
            case 'Orcid':
            case 'Ror':
            case 'Timestamp':
            case 'Uuid':
                if (!is_string($value)) {
                    $this->throwInvalidScalarValue($type, 'string');
                }
                return;
        }
    }

    private function throwInvalidScalarValue(TypeReference $type, string $expectedType): void
    {
        throw new \InvalidArgumentException(
            "Invalid GraphQL value for '{$type->toGraphQL()}'; expected {$expectedType}."
        );
    }

    private function assertEnumValue(string $value, ?TypeReference $type): void
    {
        if (!$this->schemaDefinitions->isEnumType($type)) {
            return;
        }

        if (!in_array($value, $this->schemaDefinitions->getEnumValues($type), true)) {
            throw new \InvalidArgumentException(
                "Invalid GraphQL enum value '{$value}' for '{$type->baseName()}'."
            );
        }
    }

    private function getListItemType(?TypeReference $type): ?TypeReference
    {
        if ($type === null) {
            return null;
        }

        if ($type->getKind() === 'NON_NULL') {
            return $this->getListItemType($type->getOfType());
        }

        if ($type->getKind() === 'LIST') {
            return $type->getOfType();
        }

        return null;
    }

    private function isNonNullType(TypeReference $type): bool
    {
        return $type->getKind() === 'NON_NULL';
    }

    private function isListValue($value): bool
    {
        return is_array($value) && $this->isList($value);
    }

    private function isList(array $value): bool
    {
        if ($value === []) {
            return true;
        }

        return array_keys($value) === range(0, count($value) - 1);
    }
}
