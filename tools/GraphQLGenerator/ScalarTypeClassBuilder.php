<?php

declare(strict_types=1);

final class ScalarTypeClassBuilder implements TypeClassBuilder
{
    public function className(array $type): string
    {
        return safeClassName(studly($type['name']) . 'Scalar');
    }

    public function code(array $type, string $namespacePart): string
    {
        return $this->classCode(
            $namespacePart,
            $this->className($type),
            $type['name'],
            exportPhpValue($type['description'] ?? null, 2)
        );
    }

    private function classCode(string $namespacePart, string $className, string $typeName, string $description): string
    {
        return <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\ScalarTypeDefinition;

final class {$className}
{
    public static function definition(): ScalarTypeDefinition
    {
        return new ScalarTypeDefinition('{$typeName}', {$description});
    }
}
PHP;
    }
}
