<?php

namespace ThothApi\GraphQL;

use ThothApi\GraphQL\Concerns\HasMutationOperations;
use ThothApi\GraphQL\Concerns\HasQueryOperations;
use ThothApi\GraphQL\Models\AbstractModel;
use ThothApi\GraphQL\Models\AbstractText;
use ThothApi\GraphQL\Models\AdditionalResource;
use ThothApi\GraphQL\Models\Me;
use ThothApi\GraphQL\Models\Work;

class Client
{
    use HasMutationOperations;
    use HasQueryOperations;

    private Request $request;

    private string $token = '';

    public const THOTH_BASE_URI = 'https://api.thoth.pub/';

    public function __construct(array $httpConfig = [])
    {
        if (!isset($httpConfig['base_uri'])) {
            $httpConfig['base_uri'] = self::THOTH_BASE_URI;
        }
        $this->request = new Request($httpConfig);
    }

    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    public function rawQuery(string $rawQuery, array $args = []): array
    {
        $response = $this->request->runQuery($rawQuery, $args);
        return $response->getData();
    }

    private function get(string $entityName, string $entityId, array $args = []): AbstractModel
    {
        $entityClass = $this->getModelClass($entityName);
        $args = array_merge(
            [$this->getIdentifierField($entityName) => $entityId],
            array_filter($args, fn ($value) => $value !== null)
        );

        $result = $this->query($entityName, $args, $entityName === 'me' ? $this->token : null);
        return new $entityClass($result[$entityName]);
    }

    private function getMany(string $entityName, array $args = []): array
    {
        $entityClass = $this->getModelClass($entityName);
        $queryName = $this->getPluralQueryName($entityName);

        $result = $this->query($queryName, $args);
        return array_map(fn ($data) => new $entityClass($data), $result[$queryName]);
    }

    private function count(string $entityName, array $args = []): int
    {
        $queryName = $entityName . 'Count';
        $result = $this->query($queryName, $args);
        return $result[$queryName];
    }

    private function getByDoi(string $entityName, string $doi): AbstractModel
    {
        $entityClass = $this->getModelClass($entityName);
        $queryName = $entityName . 'ByDoi';
        $result = $this->query($queryName, ['doi' => $doi]);
        return new $entityClass($result[$queryName]);
    }

    private function mutation(string $mutationName, array $data, string $returnValue, array $extraArgs = []): string
    {
        $result = $this->runMutation($mutationName, $data, $extraArgs);
        return $result[$returnValue];
    }

    private function runMutation(string $mutationName, array $data, array $extraArgs = []): array
    {
        $mutation = MutationBuilder::build($mutationName, $data, $extraArgs);
        $response = $this->request->runQuery($mutation, null, $this->token);
        $body = $response->getData();
        return $body[$mutationName];
    }

    private function getModelClass(string $entityName): string
    {
        $mapping = [
            'abstract' => AbstractText::class,
            'additionalResource' => AdditionalResource::class,
            'book' => Work::class,
            'chapter' => Work::class,
            'me' => Me::class,
        ];

        return $mapping[$entityName] ?? '\\ThothApi\\GraphQL\\Models\\' . ucfirst($entityName);
    }

    private function getIdentifierField(string $entityName): string
    {
        switch ($entityName) {
            case 'additionalResource':
                return 'additionalResourceId';
            case 'bookReview':
                return 'bookReviewId';
            case 'workFeaturedVideo':
                return 'workFeaturedVideoId';
            default:
                return $entityName . 'Id';
        }
    }

    private function getPluralQueryName(string $entityName): string
    {
        switch ($entityName) {
            case 'biography':
                return 'biographies';
            case 'series':
                return 'serieses';
            default:
                return $entityName . 's';
        }
    }

    private function query(string $queryName, array $args = [], ?string $token = null): array
    {
        $query = QueryProvider::get($queryName);
        $response = $this->request->runQuery($query, array_filter($args, fn ($value) => $value !== null), $token);
        return $response->getData();
    }
}
