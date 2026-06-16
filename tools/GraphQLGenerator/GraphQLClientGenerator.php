<?php

declare(strict_types=1);

final class GraphQLClientGenerator
{
    private SchemaLoader $schemaLoader;

    private TypeIndexer $typeIndexer;

    private TargetDirectoryGuard $targetDirectoryGuard;

    private GeneratedDirectoryPreparer $directoryPreparer;

    private RootOperationGenerator $rootOperationGenerator;

    private SchemaTypeGenerator $schemaTypeGenerator;

    private ClientPhpDocGenerator $clientPhpDocGenerator;

    public function __construct(
        ?SchemaLoader $schemaLoader = null,
        ?TypeIndexer $typeIndexer = null,
        ?TargetDirectoryGuard $targetDirectoryGuard = null,
        ?GeneratedDirectoryPreparer $directoryPreparer = null,
        ?RootOperationGenerator $rootOperationGenerator = null,
        ?SchemaTypeGenerator $schemaTypeGenerator = null,
        ?ClientPhpDocGenerator $clientPhpDocGenerator = null
    ) {
        $this->schemaLoader = $schemaLoader ?: new SchemaLoader();
        $this->typeIndexer = $typeIndexer ?: new TypeIndexer();
        $this->targetDirectoryGuard = $targetDirectoryGuard ?: new TargetDirectoryGuard();
        $this->directoryPreparer = $directoryPreparer ?: new GeneratedDirectoryPreparer();
        $this->rootOperationGenerator = $rootOperationGenerator ?: new RootOperationGenerator();
        $this->schemaTypeGenerator = $schemaTypeGenerator ?: new SchemaTypeGenerator();
        $this->clientPhpDocGenerator = $clientPhpDocGenerator ?: new ClientPhpDocGenerator();
    }

    public function generate(?string $schemaSource, string $target): void
    {
        $this->targetDirectoryGuard->assertSafe($target);

        $schema = $this->schemaLoader->load($schemaSource);
        $types = $this->typeIndexer->indexByName($schema['types'] ?? []);

        $this->directoryPreparer->prepare($target);
        $this->rootOperationGenerator->generate($schema, $types, $target);
        $this->schemaTypeGenerator->generate($types, $target, $this->rootTypeNames($schema));
        $this->clientPhpDocGenerator->generate($schema, $types, $target);
    }

    private function rootTypeNames(array $schema): array
    {
        return array_values(array_filter([
            $schema['queryType']['name'] ?? null,
            $schema['mutationType']['name'] ?? null,
            $schema['subscriptionType']['name'] ?? null,
        ]));
    }
}
