<?php

namespace ThothApi\GraphQL\Operation;

use ThothApi\GraphQL\EnumValue;

final class OperationCallArguments
{
    private const SCALAR_TYPES = ['Boolean', 'Date', 'Doi', 'Float', 'Int', 'Isbn', 'Orcid', 'Ror', 'String', 'Timestamp', 'Uuid'];

    public function build(array $schemaArguments, array $arguments): array
    {
        $selection = $this->getSelectionArgument($arguments, $schemaArguments);

        return [
            'arguments' => $this->getOperationArguments($schemaArguments, $arguments),
            'selection' => $selection,
        ];
    }

    private function getSelectionArgument(array &$arguments, array $schemaArguments): array
    {
        $lastArgument = count($arguments) - 1;

        if ($lastArgument < 0 || !is_array($arguments[$lastArgument])) {
            return [];
        }

        if (count($arguments) > count($schemaArguments) && $this->isSelectionArray($arguments[$lastArgument])) {
            return array_pop($arguments);
        }

        if (
            isset($schemaArguments[$lastArgument])
            && $this->isScalarType($schemaArguments[$lastArgument]->getType())
            && $this->isSelectionArray($arguments[$lastArgument])
        ) {
            return array_pop($arguments);
        }

        if (
            count($arguments) === 2
            && is_array($arguments[0])
            && $this->hasSchemaNamedArguments($arguments[0], $schemaArguments)
            && $this->isSelectionArray($arguments[$lastArgument])
        ) {
            return array_pop($arguments);
        }

        return [];
    }

    private function getOperationArguments(array $schemaArguments, array $arguments): array
    {
        if ($schemaArguments === []) {
            return [];
        }

        if (count($arguments) === 1 && is_array($arguments[0]) && $this->isAssociativeArray($arguments[0])) {
            if (count($schemaArguments) !== 1 || array_key_exists($schemaArguments[0]->getName(), $arguments[0])) {
                return $this->normalizeValue($arguments[0]);
            }
        }

        if (count($schemaArguments) === 1) {
            return [$schemaArguments[0]->getName() => $this->normalizeValue($arguments[0] ?? null)];
        }

        $operationArguments = [];

        foreach ($schemaArguments as $index => $schemaArgument) {
            if (array_key_exists($index, $arguments)) {
                $operationArguments[$schemaArgument->getName()] = $this->normalizeValue($arguments[$index]);
            }
        }

        return $operationArguments;
    }

    private function normalizeValue($value)
    {
        if ($value instanceof EnumValue) {
            return $value;
        }

        if (is_array($value)) {
            return array_map([$this, 'normalizeValue'], $value);
        }

        if (is_object($value)) {
            if (method_exists($value, 'getAllData')) {
                return $this->normalizeValue($value->getAllData());
            }

            if ($value instanceof \JsonSerializable) {
                return $this->normalizeValue($value->jsonSerialize());
            }

            return $this->normalizeValue(get_object_vars($value));
        }

        return $value;
    }

    private function isAssociativeArray(array $value): bool
    {
        return $value !== [] && array_keys($value) !== range(0, count($value) - 1);
    }

    private function isSelectionArray(array $value): bool
    {
        foreach ($value as $field => $selection) {
            if (is_array($selection)) {
                if (!is_string($field) || !$this->isSelectionArray($selection)) {
                    return false;
                }

                continue;
            }

            if (!is_string($selection)) {
                return false;
            }
        }

        return true;
    }

    private function hasSchemaNamedArguments(array $arguments, array $schemaArguments): bool
    {
        if (!$this->isAssociativeArray($arguments)) {
            return false;
        }

        foreach ($schemaArguments as $schemaArgument) {
            if (array_key_exists($schemaArgument->getName(), $arguments)) {
                return true;
            }
        }

        return false;
    }

    private function isScalarType($type): bool
    {
        if ($type->getKind() === 'NON_NULL' && $type->getOfType() !== null) {
            return $this->isScalarType($type->getOfType());
        }

        if ($type->getKind() === 'LIST') {
            return false;
        }

        return in_array($type->baseName(), self::SCALAR_TYPES, true);
    }
}
