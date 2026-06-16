<?php

declare(strict_types=1);

final class InputTypeClassBuilder implements TypeClassBuilder
{
    private AccessorMethodsBuilder $accessorMethodsBuilder;

    public function __construct(?AccessorMethodsBuilder $accessorMethodsBuilder = null)
    {
        $this->accessorMethodsBuilder = $accessorMethodsBuilder ?: new AccessorMethodsBuilder();
    }

    public function className(array $type): string
    {
        return safeClassName(studly($type['name']));
    }

    public function code(array $type, string $namespacePart): string
    {
        return $this->classCode(
            $namespacePart,
            $this->className($type),
            $type['name'],
            $this->accessorMethodsBuilder->code($type['inputFields'] ?? []),
            argumentDefinitionListCode($type['inputFields'] ?? [], 3)
        );
    }

    private function classCode(
        string $namespacePart,
        string $className,
        string $typeName,
        string $methodsCode,
        string $fieldsCode
    ): string {
        return <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\InputObjectTypeDefinition;
use ThothApi\\GraphQL\\InputObject;

final class {$className} extends InputObject
{
{$methodsCode}

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('{$typeName}', [
            {$fieldsCode}
        ]);
    }
}
PHP;
    }
}
