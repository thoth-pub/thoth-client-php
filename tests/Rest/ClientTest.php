<?php

namespace ThothClient\Tests\Rest;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use ThothClient\Exception\RestException;
use ThothClient\Rest\Client;

final class ClientTest extends TestCase
{
    private MockHandler $mockHandler;

    private Client $client;

    protected function setUp(): void
    {
        $this->mockHandler = new MockHandler();
        $handler = HandlerStack::create($this->mockHandler);
        $this->client = new Client(['handler' => $handler]);
    }

    public function testInvalidRequest(): void
    {
        $this->expectException(RestException::class);
        $this->expectExceptionMessage('No record was found for the given ID.');

        $this->mockHandler->append(new ClientException(
            '',
            new Request('post', ''),
            new Response(400, [], json_encode([
                'No record was found for the given ID.'
            ]))
        ));

        $this->client->format('foo');
    }

    public function testFormats(): void
    {
        $body = file_get_contents(__DIR__ . '/fixtures/formats.json');
        $expectedFormats = json_decode($body, true);

        $this->mockHandler->append(new Response(200, [], $body));

        $result = $this->client->formats();
        $this->assertSame($expectedFormats, $result);
    }

    public function testFormat(): void
    {
        $body = file_get_contents(__DIR__ . '/fixtures/format.json');
        $expectedFormat = json_decode($body, true);

        $this->mockHandler->append(new Response(200, [], $body));

        $result = $this->client->format('onix_3.0');
        $this->assertSame($expectedFormat, $result);
    }

    public function testSpecifications(): void
    {
        $body = file_get_contents(__DIR__ . '/fixtures/specifications.json');
        $expectedSpecifications = json_decode($body, true);

        $this->mockHandler->append(new Response(200, [], $body));

        $result = $this->client->specifications();
        $this->assertSame($expectedSpecifications, $result);
    }

    public function testSpecification(): void
    {
        $body = file_get_contents(__DIR__ . '/fixtures/specification.json');
        $expectedSpecification = json_decode($body, true);

        $this->mockHandler->append(new Response(200, [], $body));

        $result = $this->client->specification();
        $this->assertSame($expectedSpecification, $result);
    }

    public function testPublisher(): void
    {
        $expectedPublisher = file_get_contents(__DIR__ . '/fixtures/publisher.bib');

        $this->mockHandler->append(new Response(200, [], $expectedPublisher));

        $result = $this->client->publisher('bibtex::thoth', '52520a47-a5ab-4d9c-8be3-f4819a8cd404');
        $this->assertSame($expectedPublisher, $result);
    }

    public function testWork(): void
    {
        $expectedWork = file_get_contents(__DIR__ . '/fixtures/work.bib');

        $this->mockHandler->append(new Response(200, [], $expectedWork));

        $result = $this->client->work('bibtex::thoth', 'f01bef26-a7c4-4a01-9c63-336256a5b1d6');
        $this->assertSame($expectedWork, $result);
    }

    public function testPlatforms(): void
    {
        $body = file_get_contents(__DIR__ . '/fixtures/platforms.json');
        $expectedPlatforms = json_decode($body, true);

        $this->mockHandler->append(new Response(200, [], $body));

        $result = $this->client->platforms();
        $this->assertSame($expectedPlatforms, $result);
    }

    public function testPlatform(): void
    {
        $body = file_get_contents(__DIR__ . '/fixtures/platform.json');
        $expectedPlatform = json_decode($body, true);

        $this->mockHandler->append(new Response(200, [], $body));

        $result = $this->client->platform('onix_3.0');
        $this->assertSame($expectedPlatform, $result);
    }
}
