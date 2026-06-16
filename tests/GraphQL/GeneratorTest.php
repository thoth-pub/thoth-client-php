<?php

namespace ThothApi\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

final class GeneratorTest extends TestCase
{
    private ?string $temporaryDirectory = null;

    protected function tearDown(): void
    {
        if ($this->temporaryDirectory !== null) {
            $this->removeDirectory($this->temporaryDirectory);
        }
    }

    public function testItGeneratesPhpDocForObjectAccessors(): void
    {
        $this->temporaryDirectory = sys_get_temp_dir() . '/thoth-graphql-generator-' . uniqid('', true);
        $target = $this->temporaryDirectory . '/GraphQL';
        mkdir($target, 0777, true);

        $schema = __DIR__ . '/fixtures/minimal-introspection.json';
        $script = dirname(__DIR__, 2) . '/tools/generate-graphql-client.php';
        copy(dirname(__DIR__, 2) . '/src/GraphQL/Client.php', $target . '/Client.php');

        $command = PHP_BINARY . ' ' . escapeshellarg($script) . ' ' . escapeshellarg($schema) . ' '
            . escapeshellarg($target);

        exec($command, $output, $exitCode);

        $this->assertSame(0, $exitCode, implode("\n", $output));

        $workClass = file_get_contents($target . '/Schemas/Work.php');

        $this->assertStringContainsString('@return string', $workClass);
        $this->assertStringContainsString('@return string|null', $workClass);
        $this->assertStringContainsString('@return Imprint|null', $workClass);
        $this->assertStringContainsString('@return string[]|null', $workClass);
        $this->assertStringContainsString('@param string $value', $workClass);
        $this->assertStringContainsString('public function hasTitle(): bool', $workClass);
        $this->assertStringContainsString('public function unsetTitle(): self', $workClass);
        $this->assertFileExists($target . '/Queries/BooksQuery.php');
        $this->assertFileExists($target . '/Mutations/CreateWorkMutation.php');
        $this->assertFileDoesNotExist($target . '/Schemas/QueryRoot.php');
        $this->assertFileDoesNotExist($target . '/Schemas/MutationRoot.php');

        $clientClass = file_get_contents($target . '/Client.php');

        $this->assertStringContainsString('@method \\ThothApi\\GraphQL\\Schemas\\Work[]|null books(array $selection = [])', $clientClass);
        $this->assertStringContainsString('@method \\ThothApi\\GraphQL\\Schemas\\Work createWork(array $selection = [])', $clientClass);
    }

    public function testItRejectsUnsafeTargets(): void
    {
        $this->temporaryDirectory = sys_get_temp_dir() . '/thoth-graphql-generator-' . uniqid('', true);
        $target = $this->temporaryDirectory . '/not-graphql';
        mkdir($target, 0777, true);

        $schema = __DIR__ . '/fixtures/minimal-introspection.json';
        $script = dirname(__DIR__, 2) . '/tools/generate-graphql-client.php';
        $command = PHP_BINARY . ' ' . escapeshellarg($script) . ' ' . escapeshellarg($schema) . ' '
            . escapeshellarg($target) . ' 2>&1';

        exec($command, $output, $exitCode);

        $this->assertSame(1, $exitCode);
        $this->assertSame('Refusing to generate GraphQL client outside a GraphQL target directory.', $output[0]);
        $this->assertDirectoryDoesNotExist($target . '/Queries');
    }

    public function testItReportsMissingSchemaFile(): void
    {
        $this->temporaryDirectory = sys_get_temp_dir() . '/thoth-graphql-generator-' . uniqid('', true);
        $target = $this->temporaryDirectory . '/GraphQL';
        mkdir($target, 0777, true);

        $schema = $this->temporaryDirectory . '/missing-schema.json';
        $script = dirname(__DIR__, 2) . '/tools/generate-graphql-client.php';
        $command = PHP_BINARY . ' ' . escapeshellarg($script) . ' ' . escapeshellarg($schema) . ' '
            . escapeshellarg($target) . ' 2>&1';

        exec($command, $output, $exitCode);

        $this->assertSame(1, $exitCode);
        $this->assertSame('Unable to read GraphQL introspection schema file: ' . $schema, $output[0]);
    }

    public function testItReportsInvalidSchemaJson(): void
    {
        $this->temporaryDirectory = sys_get_temp_dir() . '/thoth-graphql-generator-' . uniqid('', true);
        $target = $this->temporaryDirectory . '/GraphQL';
        mkdir($target, 0777, true);

        $schema = $this->temporaryDirectory . '/invalid-schema.json';
        file_put_contents($schema, '{invalid json');

        $script = dirname(__DIR__, 2) . '/tools/generate-graphql-client.php';
        $command = PHP_BINARY . ' ' . escapeshellarg($script) . ' ' . escapeshellarg($schema) . ' '
            . escapeshellarg($target) . ' 2>&1';

        exec($command, $output, $exitCode);

        $this->assertSame(1, $exitCode);
        $this->assertSame('Invalid GraphQL introspection schema JSON: Syntax error', $output[0]);
    }

    public function testGeneratorEntrypointLoadsSeparateComponents(): void
    {
        $projectRoot = dirname(__DIR__, 2);
        $script = file_get_contents($projectRoot . '/tools/generate-graphql-client.php');

        $this->assertFileExists($projectRoot . '/tools/GraphQLGenerator/GraphQLClientGenerator.php');
        $this->assertStringContainsString("require_once __DIR__ . '/GraphQLGenerator/bootstrap.php';", $script);
        $this->assertStringNotContainsString('final class GraphQLClientGenerator', $script);
    }

    public function testGeneratorEntrypointHandlesComponentExceptions(): void
    {
        $projectRoot = dirname(__DIR__, 2);
        $script = file_get_contents($projectRoot . '/tools/generate-graphql-client.php');
        $guard = file_get_contents($projectRoot . '/tools/GraphQLGenerator/TargetDirectoryGuard.php');
        $loader = file_get_contents($projectRoot . '/tools/GraphQLGenerator/SchemaLoader.php');

        $this->assertFileExists($projectRoot . '/tools/GraphQLGenerator/GeneratorException.php');
        $this->assertStringContainsString('catch (GeneratorException $exception)', $script);
        $this->assertStringNotContainsString('exit(1)', $guard);
        $this->assertStringNotContainsString('exit(1)', $loader);
    }

    public function testSchemaTypeGenerationUsesDedicatedBuilders(): void
    {
        $projectRoot = dirname(__DIR__, 2);
        $schemaTypeGenerator = file_get_contents($projectRoot . '/tools/GraphQLGenerator/SchemaTypeGenerator.php');
        $codeGeneration = file_get_contents($projectRoot . '/tools/GraphQLGenerator/CodeGeneration.php');

        $this->assertFileExists($projectRoot . '/tools/GraphQLGenerator/ObjectTypeClassBuilder.php');
        $this->assertFileExists($projectRoot . '/tools/GraphQLGenerator/InputTypeClassBuilder.php');
        $this->assertFileExists($projectRoot . '/tools/GraphQLGenerator/EnumTypeClassBuilder.php');
        $this->assertFileExists($projectRoot . '/tools/GraphQLGenerator/ScalarTypeClassBuilder.php');
        $this->assertStringContainsString('private ObjectTypeClassBuilder $objectTypeBuilder;', $schemaTypeGenerator);
        $this->assertStringNotContainsString('function generateObjectType', $codeGeneration);
        $this->assertStringNotContainsString('function generateInputType', $codeGeneration);
    }

    private function removeDirectory(string $directory): void
    {
        if (!is_dir($directory)) {
            return;
        }

        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directory, \FilesystemIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($iterator as $file) {
            if ($file->isDir()) {
                rmdir($file->getPathname());
                continue;
            }

            unlink($file->getPathname());
        }

        rmdir($directory);
    }
}
