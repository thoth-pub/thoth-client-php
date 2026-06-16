<?php

declare(strict_types=1);

final class RootOperationGenerator
{
    private ClassFileWriter $classFileWriter;

    public function __construct(?ClassFileWriter $classFileWriter = null)
    {
        $this->classFileWriter = $classFileWriter ?: new ClassFileWriter();
    }

    public function generate(array $schema, array $types, string $target): void
    {
        $this->generateOperations(
            $types[$schema['queryType']['name']] ?? [],
            'query',
            $target . '/Queries',
            'Queries'
        );
        $this->generateOperations(
            $types[$schema['mutationType']['name']] ?? [],
            'mutation',
            $target . '/Mutations',
            'Mutations'
        );
    }

    private function generateOperations(array $rootType, string $operationType, string $directory, string $namespacePart): void
    {
        foreach ($rootType['fields'] ?? [] as $field) {
            $className = safeClassName(studly($field['name']) . operationClassSuffix($operationType));

            $this->classFileWriter->write($directory, $className, operationClassCode(
                $namespacePart,
                $className,
                $operationType,
                fieldCode($field)
            ));
        }
    }
}
