<?php

namespace ThothApi\GraphQL\Operation;

use ThothApi\GraphQL\Definition\TypeReference;

final class SelectionFormatter
{
    private SchemaDefinitionResolver $schemaDefinitions;

    public function __construct(?SchemaDefinitionResolver $schemaDefinitions = null)
    {
        $this->schemaDefinitions = $schemaDefinitions ?: new SchemaDefinitionResolver();
    }

    public function format(array $selection, ?TypeReference $type = null): string
    {
        $lines = [];
        $objectFields = $this->schemaDefinitions->getObjectFieldDefinitions($type);

        foreach ($selection as $key => $value) {
            if (is_array($value)) {
                Identifier::assert((string) $key);
                $fieldType = $this->getSelectionFieldType($objectFields, (string) $key, $type);
                $lines[] = '        ' . $key . " {\n"
                    . $this->indent($this->format($value, $fieldType), 8)
                    . "\n        }";
                continue;
            }

            Identifier::assert((string) $value);
            $this->getSelectionFieldType($objectFields, (string) $value, $type);
            $lines[] = '        ' . $value;
        }

        return implode("\n", $lines);
    }

    private function getSelectionFieldType(?array $objectFields, string $fieldName, ?TypeReference $parentType): ?TypeReference
    {
        if ($objectFields === null) {
            return null;
        }

        if (!array_key_exists($fieldName, $objectFields)) {
            throw new \InvalidArgumentException(
                "Unknown GraphQL field '{$fieldName}' for '{$parentType->baseName()}'."
            );
        }

        return $objectFields[$fieldName];
    }

    private function indent(string $value, int $spaces): string
    {
        return str_replace("\n", "\n" . str_repeat(' ', $spaces), $value);
    }
}
