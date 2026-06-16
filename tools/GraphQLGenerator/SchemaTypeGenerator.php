<?php

declare(strict_types=1);

final class SchemaTypeGenerator
{
    private ClassFileWriter $classFileWriter;

    private ObjectTypeClassBuilder $objectTypeBuilder;

    private InputTypeClassBuilder $inputTypeBuilder;

    private EnumTypeClassBuilder $enumTypeBuilder;

    private ScalarTypeClassBuilder $scalarTypeBuilder;

    public function __construct(
        ?ClassFileWriter $classFileWriter = null,
        ?ObjectTypeClassBuilder $objectTypeBuilder = null,
        ?InputTypeClassBuilder $inputTypeBuilder = null,
        ?EnumTypeClassBuilder $enumTypeBuilder = null,
        ?ScalarTypeClassBuilder $scalarTypeBuilder = null
    ) {
        $this->classFileWriter = $classFileWriter ?: new ClassFileWriter();
        $this->objectTypeBuilder = $objectTypeBuilder ?: new ObjectTypeClassBuilder();
        $this->inputTypeBuilder = $inputTypeBuilder ?: new InputTypeClassBuilder();
        $this->enumTypeBuilder = $enumTypeBuilder ?: new EnumTypeClassBuilder();
        $this->scalarTypeBuilder = $scalarTypeBuilder ?: new ScalarTypeClassBuilder();
    }

    public function generate(array $types, string $target, array $ignoredTypeNames = []): void
    {
        foreach ($types as $type) {
            if ($this->shouldSkipType($type, $ignoredTypeNames)) {
                continue;
            }

            $this->generateType($type, $target);
        }
    }

    private function shouldSkipType(array $type, array $ignoredTypeNames): bool
    {
        if ($this->isInternalType($type)) {
            return true;
        }

        return isset($type['name']) && in_array($type['name'], $ignoredTypeNames, true);
    }

    private function isInternalType(array $type): bool
    {
        return isset($type['name']) && strpos($type['name'], '__') === 0;
    }

    private function generateType(array $type, string $target): void
    {
        switch ($type['kind'] ?? '') {
            case 'OBJECT':
                $this->writeClass($this->objectTypeBuilder, $type, $target . '/Schemas', 'Schemas');
                return;
            case 'INPUT_OBJECT':
                $this->writeClass($this->inputTypeBuilder, $type, $target . '/Inputs', 'Inputs');
                return;
            case 'ENUM':
                $this->writeClass($this->enumTypeBuilder, $type, $target . '/Enums', 'Enums');
                return;
            case 'SCALAR':
                $this->writeClass($this->scalarTypeBuilder, $type, $target . '/Scalars', 'Scalars');
                return;
        }
    }

    private function writeClass(TypeClassBuilder $builder, array $type, string $directory, string $namespacePart): void
    {
        $this->classFileWriter->write(
            $directory,
            $builder->className($type),
            $builder->code($type, $namespacePart)
        );
    }
}
