<?php

namespace ThothApi\GraphQL;

use ThothApi\GraphQL\Definition\TypeReference;

final class ValueHydrator
{
    public function hydrate($value, TypeReference $type)
    {
        if ($value === null) {
            return null;
        }

        if ($type->getKind() === 'NON_NULL' && $type->getOfType() !== null) {
            return $this->hydrate($value, $type->getOfType());
        }

        if ($type->getKind() === 'LIST' && $type->getOfType() !== null && is_array($value)) {
            return array_map(
                function ($item) use ($type) {
                    return $this->hydrate($item, $type->getOfType());
                },
                $value
            );
        }

        if (!is_array($value)) {
            return $value;
        }

        $schemaClass = $this->schemaClassForType($type->baseName());

        if (!class_exists($schemaClass)) {
            return $value;
        }

        return $schemaClass::fromArray($value);
    }

    private function schemaClassForType(?string $typeName): string
    {
        return '\\ThothApi\\GraphQL\\Schemas\\' . ($typeName === 'Abstract' ? 'GraphQLAbstract' : $typeName);
    }
}
