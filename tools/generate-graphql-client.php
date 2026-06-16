<?php

declare(strict_types=1);

require_once __DIR__ . '/GraphQLGenerator/bootstrap.php';

main($argv);

function main(array $argv): void
{
    $target = $argv[2] ?? dirname(__DIR__) . '/src/GraphQL';

    try {
        (new GraphQLClientGenerator())->generate($argv[1] ?? null, $target);
    } catch (GeneratorException $exception) {
        fwrite(STDERR, $exception->getMessage() . "\n");
        exit(1);
    }
}
