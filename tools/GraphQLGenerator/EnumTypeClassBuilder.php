<?php

declare(strict_types=1);

final class EnumTypeClassBuilder implements TypeClassBuilder
{
    public function className(array $type): string
    {
        return safeClassName(studly($type['name']));
    }

    public function code(array $type, string $namespacePart): string
    {
        $values = $this->valueNames($type['enumValues'] ?? []);

        return $this->classCode(
            $namespacePart,
            $this->className($type),
            $type['name'],
            $this->constantsCode($values),
            exportPhpValue($values, 2)
        );
    }

    private function valueNames(array $enumValues): array
    {
        return array_map(
            static function (array $value): string {
                return $value['name'];
            },
            $enumValues
        );
    }

    private function constantsCode(array $values): string
    {
        return implode("\n", array_map(
            static function (string $value): string {
                return '    public const ' . sanitizeConstant($value) . ' = ' . exportPhpValue($value) . ';';
            },
            $values
        ));
    }

    private function classCode(
        string $namespacePart,
        string $className,
        string $typeName,
        string $constantsCode,
        string $valuesCode
    ): string {
        return <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\EnumTypeDefinition;
use ThothApi\\GraphQL\\EnumValue;

final class {$className}
{
{$constantsCode}

    public static function value(string \$value): EnumValue
    {
        return new EnumValue(\$value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('{$typeName}', {$valuesCode});
    }
}
PHP;
    }
}
