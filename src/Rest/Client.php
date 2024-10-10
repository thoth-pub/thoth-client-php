<?php

namespace ThothApi\Rest;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ClientException;
use ThothApi\Exception\RestException;

class Client
{
    public const THOTH_EXPORT_BASE_URI = 'https://export.thoth.pub/';

    public function __construct(array $httpConfig = [])
    {
        if (!isset($httpConfig['base_uri'])) {
            $httpConfig['base_uri'] = self::THOTH_EXPORT_BASE_URI;
        }
        $this->httpClient = new HttpClient($httpConfig);
    }

    public function formats(): array
    {
        $result = $this->request('formats/');
        return json_decode($result, true);
    }

    public function format(string $formatId = ''): array
    {
        $result = $this->request('formats/' . $formatId);
        return json_decode($result, true);
    }

    public function specifications(): array
    {
        $result = $this->request('specifications/');
        return json_decode($result, true);
    }

    public function specification(string $specificationId = ''): array
    {
        $result = $this->request('specifications/' . $specificationId);
        return json_decode($result, true);
    }

    public function publisher(string $specificationId, string $publisherId): string
    {
        return $this->request('specifications/' . $specificationId . '/publisher/' . $publisherId);
    }

    public function work(string $specificationId, string $workId): string
    {
        return $this->request('specifications/' . $specificationId . '/work/' . $workId);
    }

    public function platforms(): array
    {
        $result = $this->request('platforms/');
        return json_decode($result, true);
    }

    public function platform(string $platformId = ''): array
    {
        $result = $this->request('platforms/' . $platformId);
        return json_decode($result, true);
    }

    private function request(string $endpoint): string
    {
        try {
            $response = $this->httpClient->get($endpoint, [
                'headers' => [
                    'accept' => 'application/json'
                ]
            ]);
        } catch (ClientException $exception) {
            $response = $exception->getResponse();
            $error = $response->getBody()->getContents();
            throw new RestException($error);
        }

        return $response->getBody()->getContents();
    }
}
