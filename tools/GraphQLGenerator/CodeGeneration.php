<?php

declare(strict_types=1);

function introspectionQuery(): string
{
    return 'query IntrospectionQuery { __schema { queryType { name } mutationType { name } subscriptionType { name } types { ...FullType } directives { name description locations args { ...InputValue } } } } fragment FullType on __Type { kind name description fields(includeDeprecated: true) { name description args { ...InputValue } type { ...TypeRef } isDeprecated deprecationReason } inputFields { ...InputValue } interfaces { ...TypeRef } enumValues(includeDeprecated: true) { name description isDeprecated deprecationReason } possibleTypes { ...TypeRef } } fragment InputValue on __InputValue { name description type { ...TypeRef } defaultValue } fragment TypeRef on __Type { kind name ofType { kind name ofType { kind name ofType { kind name ofType { kind name ofType { kind name ofType { kind name ofType { kind name } } } } } } } }';
}

function operationClassSuffix(string $operationType): string
{
    return $operationType === 'query' ? 'Query' : 'Mutation';
}

function operationClassCode(string $namespacePart, string $className, string $operationType, string $fieldCode): string
{
    return <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\FieldDefinition;
use ThothApi\\GraphQL\\OperationRequest;

final class {$className}
{
    public static function field(): FieldDefinition
    {
        return {$fieldCode};
    }

    public static function operation(array \$arguments = [], array \$selection = []): OperationRequest
    {
        return new OperationRequest('{$operationType}', self::field(), \$arguments, \$selection);
    }
}
PHP;
}

function fieldDefinitionListCode(array $fields, int $level): string
{
    return implode(",\n            ", array_map(
        static function (array $field) use ($level): string {
            return fieldCode($field, $level);
        },
        $fields
    ));
}

function argumentDefinitionListCode(array $arguments, int $level): string
{
    return implode(",\n            ", array_map(
        static function (array $argument) use ($level): string {
            return argumentCode($argument, $level);
        },
        $arguments
    ));
}

function fieldCode(array $field, int $level = 2): string
{
    return definitionFactoryCode('FieldDefinition', 'fromIntrospection', $field, $level);
}

function argumentCode(array $argument, int $level = 2): string
{
    return definitionFactoryCode('ArgumentDefinition', 'fromIntrospection', $argument, $level);
}

function definitionFactoryCode(string $className, string $methodName, array $data, int $level): string
{
    return "\\ThothApi\\GraphQL\\Definition\\{$className}::{$methodName}(" . exportPhpValue($data, $level) . ')';
}

function exportPhpValue($value, int $level = 0): string
{
    if (is_array($value)) {
        return exportPhpArray($value, $level);
    }

    if ($value === null) {
        return 'null';
    }

    if (is_bool($value)) {
        return $value ? 'true' : 'false';
    }

    return var_export($value, true);
}

function exportPhpArray(array $value, int $level): string
{
    if ($value === []) {
        return '[]';
    }

    $indent = str_repeat('    ', $level);
    $childIndent = str_repeat('    ', $level + 1);
    $isList = isSequentialArray($value);
    $lines = ['['];

    foreach ($value as $key => $childValue) {
        $prefix = $isList ? '' : exportPhpValue($key, 0) . ' => ';
        $lines[] = $childIndent . $prefix . exportPhpValue($childValue, $level + 1) . ',';
    }

    $lines[] = $indent . ']';
    return implode("\n", $lines);
}

function isSequentialArray(array $value): bool
{
    $expected = 0;

    foreach ($value as $key => $_) {
        if ($key !== $expected) {
            return false;
        }

        $expected++;
    }

    return true;
}

function studly(string $value): string
{
    $value = preg_replace('/[^A-Za-z0-9]+/', ' ', $value);
    $value = preg_replace('/(?<!^)([A-Z])/', ' $1', (string) $value);
    $value = str_replace(' ', '', ucwords(strtolower((string) $value)));

    if ($value === '' || preg_match('/^[0-9]/', $value)) {
        return 'Type' . $value;
    }

    return $value;
}

function sanitizeConstant(string $value): string
{
    $constant = preg_replace('/[^A-Za-z0-9_]/', '_', $value);
    $constant = strtoupper((string) $constant);

    if ($constant === '' || preg_match('/^[0-9]/', $constant)) {
        return 'VALUE_' . $constant;
    }

    return $constant;
}

function phpDocType(array $type): string
{
    $nullable = ($type['kind'] ?? null) !== 'NON_NULL';
    $baseType = phpDocBaseType($type);

    return $nullable ? $baseType . '|null' : $baseType;
}

function phpDocBaseType(array $type): string
{
    if (($type['kind'] ?? null) === 'NON_NULL') {
        return phpDocBaseType($type['ofType'] ?? []);
    }

    if (($type['kind'] ?? null) === 'LIST') {
        return phpDocBaseType($type['ofType'] ?? []) . '[]';
    }

    if (($type['kind'] ?? null) === 'ENUM') {
        return 'string';
    }

    if (($type['kind'] ?? null) === 'OBJECT' && isset($type['name'])) {
        return safeClassName(studly($type['name']));
    }

    if (($type['kind'] ?? null) === 'SCALAR') {
        return phpDocScalarType((string) ($type['name'] ?? ''));
    }

    return 'mixed';
}

function phpDocScalarType(string $typeName): string
{
    switch ($typeName) {
        case 'Boolean':
            return 'bool';
        case 'Float':
            return 'float';
        case 'Int':
            return 'int';
        case 'String':
        case 'Date':
        case 'Doi':
        case 'Isbn':
        case 'Orcid':
        case 'Ror':
        case 'Timestamp':
        case 'Uuid':
            return 'string';
    }

    return 'mixed';
}

function safeClassName(string $className): string
{
    if (in_array(strtolower($className), reservedWords(), true)) {
        return 'GraphQL' . $className;
    }

    return $className;
}

function reservedWords(): array
{
    return [
        'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch', 'class', 'clone', 'const',
        'continue', 'declare', 'default', 'die', 'do', 'echo', 'else', 'elseif', 'empty', 'enddeclare',
        'endfor', 'endforeach', 'endif', 'endswitch', 'endwhile', 'eval', 'exit', 'extends', 'final',
        'finally', 'fn', 'for', 'foreach', 'function', 'global', 'goto', 'if', 'implements', 'include',
        'include_once', 'instanceof', 'insteadof', 'interface', 'isset', 'list', 'match', 'namespace',
        'new', 'or', 'print', 'private', 'protected', 'public', 'readonly', 'require', 'require_once',
        'return', 'static', 'switch', 'throw', 'trait', 'try', 'unset', 'use', 'var', 'while', 'xor',
        'yield',
    ];
}
