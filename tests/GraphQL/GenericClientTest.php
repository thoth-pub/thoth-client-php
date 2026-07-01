<?php

namespace ThothApi\Tests\GraphQL;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Client;
use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\Definition\TypeReference;
use ThothApi\GraphQL\Enums\Direction;
use ThothApi\GraphQL\Enums\WorkField;
use ThothApi\GraphQL\Enums\WorkStatus;
use ThothApi\GraphQL\Enums\WorkType;
use ThothApi\GraphQL\Inputs\NewPublicationFileUpload;
use ThothApi\GraphQL\Inputs\NewWork;
use ThothApi\GraphQL\OperationRequest;
use ThothApi\GraphQL\Schemas\Imprint;
use ThothApi\GraphQL\Schemas\Publication;
use ThothApi\GraphQL\Schemas\Publisher;
use ThothApi\GraphQL\Schemas\Work;

final class GenericClientTest extends TestCase
{
    public function testItExecutesAnyOperationRequest(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'books' => [
                        [
                            'workId' => 'work-1',
                            'fullTitle' => 'Generated client',
                        ],
                    ],
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $operation = new OperationRequest(
            'query',
            new FieldDefinition('books', TypeReference::named('Work')),
            [],
            ['workId', 'fullTitle']
        );

        $this->assertSame([
            [
                'workId' => 'work-1',
                'fullTitle' => 'Generated client',
            ],
        ], $client->execute($operation));
    }

    public function testItExecutesGeneratedMutationByMethodName(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'createWork' => [
                        'workId' => 'work-1',
                    ],
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);

        $this->assertSame('work-1', $client->createWork([
            'workType' => OperationRequest::enum('MONOGRAPH'),
            'workStatus' => OperationRequest::enum('ACTIVE'),
            'imprintId' => '71faf1c3-900a-4b8c-bca7-4f927699fb90',
        ]));
    }

    public function testItAcceptsObjectsWithGetAllDataWhenExecutingGeneratedMutationByMethodName(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'createWork' => [
                        'workId' => 'work-1',
                    ],
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $newWork = new class () {
            public function getAllData(): array
            {
                return [
                    'workType' => OperationRequest::enum('MONOGRAPH'),
                    'workStatus' => OperationRequest::enum('ACTIVE'),
                    'imprintId' => '71faf1c3-900a-4b8c-bca7-4f927699fb90',
                ];
            }
        };

        $this->assertSame('work-1', $client->createWork($newWork));
    }

    public function testItExecutesGeneratedMutationWithGeneratedInputClass(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'createWork' => [
                        'workId' => 'work-1',
                    ],
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $newWork = new NewWork([
            'workType' => WorkType::MONOGRAPH,
            'workStatus' => WorkStatus::ACTIVE,
            'imprintId' => '71faf1c3-900a-4b8c-bca7-4f927699fb90',
        ]);

        $this->assertSame('work-1', $client->createWork($newWork));
    }

    public function testItHydratesGeneratedSchemaForExplicitObjectSelection(): void
    {
        $history = [];
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'createWork' => [
                        'workId' => 'work-1',
                        'fullTitle' => 'Generated client',
                    ],
                ],
            ])),
        ]);
        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($history));
        $client = new Client(['handler' => $handlerStack]);
        $newWork = new NewWork([
            'workType' => WorkType::MONOGRAPH,
            'workStatus' => WorkStatus::ACTIVE,
            'imprintId' => '71faf1c3-900a-4b8c-bca7-4f927699fb90',
        ]);

        $work = $client->createWork($newWork, ['workId', 'fullTitle']);

        $this->assertInstanceOf(Work::class, $work);
        $this->assertSame('work-1', $work->getWorkId());
        $this->assertSame('Generated client', $work->getFullTitle());

        $body = json_decode((string) $history[0]['request']->getBody(), true);

        $this->assertStringContainsString('workId', $body['query']);
        $this->assertStringContainsString('fullTitle', $body['query']);
    }

    public function testItHydratesNestedGeneratedSchemas(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'createWork' => [
                        'workId' => 'work-1',
                        'imprint' => [
                            'imprintId' => 'imprint-1',
                            'publisher' => [
                                'publisherId' => 'publisher-1',
                                'publisherName' => 'ACME Press',
                            ],
                        ],
                    ],
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $newWork = new NewWork([
            'workType' => WorkType::MONOGRAPH,
            'workStatus' => WorkStatus::ACTIVE,
            'imprintId' => '71faf1c3-900a-4b8c-bca7-4f927699fb90',
        ]);
        $work = $client->createWork($newWork, [
            'workId',
            'imprint' => [
                'imprintId',
                'publisher' => [
                    'publisherId',
                    'publisherName',
                ],
            ],
        ]);

        $this->assertInstanceOf(Work::class, $work);
        $this->assertInstanceOf(Imprint::class, $work->getImprint());
        $this->assertInstanceOf(Publisher::class, $work->getImprint()->getPublisher());
        $this->assertSame('ACME Press', $work->getImprint()->getPublisher()->getPublisherName());
    }

    public function testItHydratesSingleAssociativeSelectionWithoutUnwrapping(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'work' => [
                        'publications' => [
                            [
                                'publicationId' => 'publication-1',
                                'publicationType' => 'PAPERBACK',
                            ],
                        ],
                    ],
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);

        $work = $client->work('work-1', [
            'publications' => [
                'publicationId',
                'publicationType',
            ],
        ]);

        $this->assertInstanceOf(Work::class, $work);
        $this->assertContainsOnlyInstancesOf(Publication::class, $work->getPublications());
        $this->assertSame('publication-1', $work->getPublications()[0]->getPublicationId());
    }

    public function testGeneratedSchemaObjectsExposeSettersAndArrayData(): void
    {
        $work = new Work();

        $work->setWorkId('work-1')->setFullTitle('Generated client');

        $this->assertSame('work-1', $work->getWorkId());
        $this->assertSame([
            'workId' => 'work-1',
            'fullTitle' => 'Generated client',
        ], $work->toArray());
    }

    public function testGeneratedSchemaObjectsDistinguishNullFromMissingFields(): void
    {
        $work = new Work();

        $this->assertFalse($work->hasSubtitle());

        $work->setSubtitle(null);

        $this->assertTrue($work->hasSubtitle());
        $this->assertNull($work->getSubtitle());
        $this->assertSame(['subtitle' => null], $work->toArray());

        $work->unsetSubtitle();

        $this->assertFalse($work->hasSubtitle());
        $this->assertSame([], $work->toArray());
    }

    public function testGeneratedInputObjectsExposeSettersAndPresenceMethods(): void
    {
        $newWork = (new NewWork())
            ->setWorkType(WorkType::MONOGRAPH)
            ->setWorkStatus(WorkStatus::ACTIVE)
            ->setImprintId('71faf1c3-900a-4b8c-bca7-4f927699fb90')
            ->setReference(null);

        $this->assertTrue($newWork->hasReference());
        $this->assertNull($newWork->getReference());
        $this->assertSame([
            'workType' => WorkType::MONOGRAPH,
            'workStatus' => WorkStatus::ACTIVE,
            'imprintId' => '71faf1c3-900a-4b8c-bca7-4f927699fb90',
            'reference' => null,
        ], $newWork->getAllData());

        $newWork->unsetReference();

        $this->assertFalse($newWork->hasReference());
        $this->assertSame([
            'workType' => WorkType::MONOGRAPH,
            'workStatus' => WorkStatus::ACTIVE,
            'imprintId' => '71faf1c3-900a-4b8c-bca7-4f927699fb90',
        ], $newWork->getAllData());
    }

    public function testItUsesFirstIdFieldFromGeneratedSchemaAsDefaultSelection(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'initPublicationFileUpload' => [
                        'fileUploadId' => 'upload-1',
                    ],
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $input = new NewPublicationFileUpload([
            'publicationId' => 'publication-1',
            'declaredMimeType' => 'application/pdf',
            'declaredExtension' => 'pdf',
            'declaredSha256' => str_repeat('a', 64),
        ]);

        $this->assertSame('upload-1', $client->initPublicationFileUpload($input));
    }

    public function testGeneratedInputObjectsPreserveExplicitNullVariables(): void
    {
        $history = [];
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'createWork' => [
                        'workId' => 'work-1',
                    ],
                ],
            ])),
        ]);
        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($history));
        $client = new Client(['handler' => $handlerStack]);

        $newWork = (new NewWork())
            ->setWorkType(WorkType::MONOGRAPH)
            ->setWorkStatus(WorkStatus::ACTIVE)
            ->setImprintId('71faf1c3-900a-4b8c-bca7-4f927699fb90')
            ->setReference(null);

        $client->createWork($newWork);

        $body = json_decode((string) $history[0]['request']->getBody(), true);

        $this->assertArrayHasKey('reference', $body['variables']['data']);
        $this->assertNull($body['variables']['data']['reference']);
    }

    public function testItReturnsScalarOperationResults(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'workCount' => 3,
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);

        $this->assertSame(3, $client->workCount());
    }

    public function testItUsesTokenWhenExecutingRawQueries(): void
    {
        $history = [];
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'ping' => true,
                ],
            ])),
        ]);
        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($history));
        $client = new Client(['handler' => $handlerStack]);

        $client->setToken('token-1')->rawQuery('query { ping }');

        $this->assertSame('Bearer token-1', $history[0]['request']->getHeaderLine('Authorization'));
    }

    public function testItKeepsArrayArgumentsWhenNoExplicitSelectionIsProvided(): void
    {
        $history = [];
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'works' => [
                        ['workId' => 'work-1'],
                    ],
                ],
            ])),
        ]);
        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($history));
        $client = new Client(['handler' => $handlerStack]);

        $client->works(100, 0, '', [
            'field' => WorkField::FULL_TITLE,
            'direction' => Direction::ASC,
        ]);

        $body = json_decode((string) $history[0]['request']->getBody(), true);

        $this->assertStringContainsString('order: $order', $body['query']);
        $this->assertStringContainsString('workId', $body['query']);
        $this->assertSame([
            'limit' => 100,
            'offset' => 0,
            'filter' => '',
            'order' => [
                'field' => 'FULL_TITLE',
                'direction' => 'ASC',
            ],
        ], $body['variables']);
    }

    public function testItAcceptsExplicitSelectionAfterOptionalPositionalArguments(): void
    {
        $history = [];
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'works' => [
                        [
                            'workId' => 'work-1',
                            'fullTitle' => 'Generated client',
                        ],
                    ],
                ],
            ])),
        ]);
        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($history));
        $client = new Client(['handler' => $handlerStack]);

        $client->works(5, ['workId', 'fullTitle']);

        $body = json_decode((string) $history[0]['request']->getBody(), true);

        $this->assertStringContainsString('works(limit: $limit)', $body['query']);
        $this->assertStringContainsString('fullTitle', $body['query']);
        $this->assertSame(['limit' => 5], $body['variables']);
    }

    public function testItHydratesGeneratedSchemasInListResults(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'works' => [
                        [
                            'workId' => 'work-1',
                            'fullTitle' => 'Generated client',
                        ],
                    ],
                ],
            ])),
        ]);
        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);

        $works = $client->works(5, ['workId', 'fullTitle']);

        $this->assertInstanceOf(Work::class, $works[0]);
        $this->assertSame('Generated client', $works[0]->getFullTitle());
    }
}
