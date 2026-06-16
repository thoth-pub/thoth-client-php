<?php

declare(strict_types=1);

const THOTH_GRAPHQL_ENDPOINT = 'https://api.thoth.pub/graphql';
const GENERATED_DIRECTORIES = ['Queries', 'Mutations', 'Schemas', 'Inputs', 'Enums', 'Scalars'];

require_once __DIR__ . '/GeneratorException.php';
require_once __DIR__ . '/CodeGeneration.php';
require_once __DIR__ . '/AccessorMethodsBuilder.php';
require_once __DIR__ . '/ClassFileWriter.php';
require_once __DIR__ . '/ClientPhpDocGenerator.php';
require_once __DIR__ . '/TypeClassBuilder.php';
require_once __DIR__ . '/EnumTypeClassBuilder.php';
require_once __DIR__ . '/GeneratedDirectoryPreparer.php';
require_once __DIR__ . '/InputTypeClassBuilder.php';
require_once __DIR__ . '/ObjectTypeClassBuilder.php';
require_once __DIR__ . '/RootOperationGenerator.php';
require_once __DIR__ . '/ScalarTypeClassBuilder.php';
require_once __DIR__ . '/SchemaLoader.php';
require_once __DIR__ . '/SchemaTypeGenerator.php';
require_once __DIR__ . '/TargetDirectoryGuard.php';
require_once __DIR__ . '/TypeIndexer.php';
require_once __DIR__ . '/GraphQLClientGenerator.php';
