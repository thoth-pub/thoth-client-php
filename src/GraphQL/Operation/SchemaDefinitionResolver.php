<?php

namespace ThothApi\GraphQL\Operation;

use ThothApi\GraphQL\Definition\TypeReference;

final class SchemaDefinitionResolver
{
    public function getInputFieldDefinitions(?TypeReference $type): ?array
    {
        $inputClass = $this->getSchemaClassName('Inputs', $type ? $type->baseName() : null);

        if (!class_exists($inputClass)) {
            return null;
        }

        return $this->getFieldDefinitions($inputClass);
    }

    public function getObjectFieldDefinitions(?TypeReference $type): ?array
    {
        $schemaClass = $this->getSchemaClassName('Schemas', $type ? $type->baseName() : null);

        if (!class_exists($schemaClass)) {
            return null;
        }

        return $this->getFieldDefinitions($schemaClass);
    }

    public function getInputFieldType(?TypeReference $type, string $fieldName): ?TypeReference
    {
        $inputFields = $this->getInputFieldDefinitions($type);

        if ($inputFields === null) {
            return null;
        }

        return $inputFields[$fieldName] ?? null;
    }

    public function isEnumType(?TypeReference $type): bool
    {
        if ($type === null) {
            return false;
        }

        if ($type->getKind() === 'NON_NULL') {
            return $this->isEnumType($type->getOfType());
        }

        return class_exists($this->getSchemaClassName('Enums', $type->baseName()));
    }

    public function getEnumValues(TypeReference $type): array
    {
        $enumClass = $this->getSchemaClassName('Enums', $type->baseName());

        return $enumClass::definition()->getValues();
    }

    private function getSchemaClassName(string $namespacePart, ?string $typeName): string
    {
        return '\\ThothApi\\GraphQL\\' . $namespacePart . '\\' . ($typeName === 'Abstract' ? 'GraphQLAbstract' : $typeName);
    }

    private function getFieldDefinitions(string $className): array
    {
        $fields = [];

        foreach ($className::definition()->getFields() as $field) {
            $fields[$field->getName()] = $field->getType();
        }

        return $fields;
    }
}
