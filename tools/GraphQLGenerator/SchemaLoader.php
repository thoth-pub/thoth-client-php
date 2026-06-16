<?php

declare(strict_types=1);

final class SchemaLoader
{
    public function load(?string $schemaSource): array
    {
        $response = $schemaSource ? $this->loadFromFile($schemaSource) : $this->fetch(THOTH_GRAPHQL_ENDPOINT);

        if (!isset($response['data']['__schema']) || !is_array($response['data']['__schema'])) {
            throw new GeneratorException('Invalid GraphQL introspection schema.');
        }

        return $response['data']['__schema'];
    }

    private function loadFromFile(string $schemaPath): array
    {
        if (!is_file($schemaPath) || !is_readable($schemaPath)) {
            throw new GeneratorException('Unable to read GraphQL introspection schema file: ' . $schemaPath);
        }

        $contents = file_get_contents($schemaPath);

        if ($contents === false) {
            throw new GeneratorException('Unable to read GraphQL introspection schema file: ' . $schemaPath);
        }

        $schema = json_decode($contents, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new GeneratorException('Invalid GraphQL introspection schema JSON: ' . json_last_error_msg());
        }

        return is_array($schema) ? $schema : [];
    }

    private function fetch(string $endpoint): array
    {
        $payload = json_encode(['query' => introspectionQuery()]);
        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/json\r\n",
                'content' => $payload,
            ],
        ]);
        $schema = json_decode((string) file_get_contents($endpoint, false, $context), true);

        return is_array($schema) ? $schema : [];
    }
}
