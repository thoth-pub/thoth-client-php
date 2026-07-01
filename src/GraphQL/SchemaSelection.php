<?php

namespace ThothApi\GraphQL;

use ThothApi\GraphQL\Definition\FieldDefinition;

final class SchemaSelection
{
    public static function for(string $schema, int $depth = 1): array
    {
        if ($depth < 1) {
            throw new \InvalidArgumentException('Depth must be greater than zero.');
        }

        return self::selectionForSchema(self::schemaClass($schema), $depth);
    }

    private static function selectionForSchema(string $schemaClass, int $depth, array $seen = []): array
    {
        if (!class_exists($schemaClass) || isset($seen[$schemaClass])) {
            return [];
        }

        $seen[$schemaClass] = true;
        $selection = [];

        foreach ($schemaClass::definition()->getFields() as $field) {
            $fieldSelection = self::fieldSelection($field, $depth, $seen);

            if ($fieldSelection === null) {
                continue;
            }

            if (is_array($fieldSelection)) {
                $selection[$field->getName()] = $fieldSelection;
                continue;
            }

            $selection[] = $fieldSelection;
        }

        return $selection;
    }

    /**
     * @return string|array|null
     */
    private static function fieldSelection(FieldDefinition $field, int $depth, array $seen)
    {
        $fieldName = $field->getName();
        $nestedSchemaClass = self::schemaClass($field->getType()->baseName());

        if (!class_exists($nestedSchemaClass)) {
            return $fieldName;
        }

        if ($depth === 1) {
            return null;
        }

        $nestedSelection = self::selectionForSchema($nestedSchemaClass, $depth - 1, $seen);

        if ($nestedSelection === []) {
            $nestedSelection = self::idSelection($nestedSchemaClass);
        }

        return $nestedSelection === [] ? null : $nestedSelection;
    }

    private static function idSelection(string $schemaClass): array
    {
        foreach ($schemaClass::definition()->getFields() as $field) {
            if (substr($field->getName(), -2) === 'Id') {
                return [$field->getName()];
            }
        }

        return [];
    }

    private static function schemaClass(?string $schema): string
    {
        if ($schema === null) {
            return '';
        }

        if (strpos($schema, '\\') !== false) {
            return $schema;
        }

        return '\\ThothApi\\GraphQL\\Schemas\\' . ($schema === 'Abstract' ? 'GraphQLAbstract' : $schema);
    }
}
