<?php

declare(strict_types=1);

final class ClientPhpDocGenerator
{
    private const START_MARKER = '<graphql-operation-methods>';
    private const END_MARKER = '</graphql-operation-methods>';

    public function generate(array $schema, array $types, string $target): void
    {
        $clientFile = $target . '/Client.php';

        if (!is_file($clientFile)) {
            return;
        }

        $contents = file_get_contents($clientFile);

        if ($contents === false) {
            throw new GeneratorException('Unable to read GraphQL client file: ' . $clientFile);
        }

        $updatedContents = $this->replaceClassDocBlock($contents, $this->docBlock($schema, $types));

        if (file_put_contents($clientFile, $updatedContents) === false) {
            throw new GeneratorException('Unable to write GraphQL client file: ' . $clientFile);
        }
    }

    private function replaceClassDocBlock(string $contents, string $docBlock): string
    {
        $pattern = '/\/\*\*.*?' . preg_quote(self::START_MARKER, '/') . '.*?'
            . preg_quote(self::END_MARKER, '/') . '.*?\*\/\nclass Client/s';

        if (preg_match($pattern, $contents) === 1) {
            return (string) preg_replace($pattern, $docBlock . "\nclass Client", $contents, 1);
        }

        return (string) preg_replace('/\nclass Client\n/', "\n" . $docBlock . "\nclass Client\n", $contents, 1);
    }

    private function docBlock(array $schema, array $types): string
    {
        $methods = array_merge(
            $this->operationMethodTags($schema, $types, 'queryType'),
            $this->operationMethodTags($schema, $types, 'mutationType')
        );

        return "/**\n"
            . " * GraphQL API client.\n"
            . " *\n"
            . ' * ' . self::START_MARKER . "\n"
            . implode("\n", $methods) . "\n"
            . ' * ' . self::END_MARKER . "\n"
            . ' */';
    }

    private function operationMethodTags(array $schema, array $types, string $rootKey): array
    {
        $rootTypeName = $schema[$rootKey]['name'] ?? null;
        $rootType = is_string($rootTypeName) ? ($types[$rootTypeName] ?? []) : [];
        $methods = [];

        foreach ($rootType['fields'] ?? [] as $field) {
            $methods[] = ' * @method ' . $this->returnType($field['type'] ?? [])
                . ' ' . $field['name'] . '(' . $this->parameterList($field['args'] ?? []) . ')';
        }

        return $methods;
    }

    private function parameterList(array $arguments): string
    {
        $parameters = [];

        foreach ($arguments as $argument) {
            $type = $argument['type'] ?? [];
            $parameters[] = $this->argumentType($type) . ' $'
                . $this->parameterName((string) ($argument['name'] ?? 'value')) . $this->defaultValue($type);
        }

        $parameters[] = 'array $selection = []';
        return implode(', ', $parameters);
    }

    private function defaultValue(array $type): string
    {
        return ($type['kind'] ?? null) === 'NON_NULL' ? '' : ' = null';
    }

    private function returnType(array $type): string
    {
        return $this->phpDocType($type, 'Schemas');
    }

    private function argumentType(array $type): string
    {
        return $this->phpDocType($type, 'Inputs');
    }

    private function phpDocType(array $type, string $objectNamespace): string
    {
        $nullable = ($type['kind'] ?? null) !== 'NON_NULL';
        $baseType = $this->phpDocBaseType($type, $objectNamespace);

        return $nullable ? $baseType . '|null' : $baseType;
    }

    private function phpDocBaseType(array $type, string $objectNamespace): string
    {
        if (($type['kind'] ?? null) === 'NON_NULL') {
            return $this->phpDocBaseType($type['ofType'] ?? [], $objectNamespace);
        }

        if (($type['kind'] ?? null) === 'LIST') {
            return $this->phpDocBaseType($type['ofType'] ?? [], $objectNamespace) . '[]';
        }

        if (($type['kind'] ?? null) === 'ENUM') {
            return 'string';
        }

        if (($type['kind'] ?? null) === 'NAMED' && isset($type['name'])) {
            return $this->namedPhpDocType((string) $type['name'], $objectNamespace);
        }

        if (($type['kind'] ?? null) === 'INPUT_OBJECT' && isset($type['name'])) {
            return $this->className('Inputs', (string) $type['name']) . '|array';
        }

        if (($type['kind'] ?? null) === 'OBJECT' && isset($type['name'])) {
            return $this->className($objectNamespace, (string) $type['name']);
        }

        if (($type['kind'] ?? null) === 'SCALAR') {
            return phpDocScalarType((string) ($type['name'] ?? ''));
        }

        return 'mixed';
    }

    private function namedPhpDocType(string $typeName, string $objectNamespace): string
    {
        $inputClass = $this->className('Inputs', $typeName);

        if ($objectNamespace === 'Inputs' && class_exists($inputClass)) {
            return $inputClass . '|array';
        }

        $schemaClass = $this->className('Schemas', $typeName);

        if ($objectNamespace === 'Schemas' && class_exists($schemaClass)) {
            return $schemaClass;
        }

        $enumClass = $this->className('Enums', $typeName);

        if (class_exists($enumClass)) {
            return 'string';
        }

        return phpDocScalarType($typeName);
    }

    private function className(string $namespacePart, string $typeName): string
    {
        return '\\ThothApi\\GraphQL\\' . $namespacePart . '\\' . safeClassName(studly($typeName));
    }

    private function parameterName(string $name): string
    {
        $name = preg_replace('/[^A-Za-z0-9_]/', '_', $name);
        $name = preg_replace('/^[^A-Za-z_]+/', '', (string) $name);

        return $name === '' ? 'value' : $name;
    }
}
