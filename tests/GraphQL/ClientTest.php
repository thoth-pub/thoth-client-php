<?php

namespace ThothClient\Tests\GraphQL;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Client;
use ThothClient\GraphQL\Models\Affiliation;
use ThothClient\GraphQL\Models\Contribution;
use ThothClient\GraphQL\Models\Contributor;
use ThothClient\GraphQL\Models\Funding;
use ThothClient\GraphQL\Models\Imprint;
use ThothClient\GraphQL\Models\Institution;
use ThothClient\GraphQL\Models\Issue;
use ThothClient\GraphQL\Models\Language;
use ThothClient\GraphQL\Models\Location;
use ThothClient\GraphQL\Models\Price;
use ThothClient\GraphQL\Models\Publication;
use ThothClient\GraphQL\Models\Publisher;
use ThothClient\GraphQL\Models\Reference;
use ThothClient\GraphQL\Models\Series;
use ThothClient\GraphQL\Models\Subject;
use ThothClient\GraphQL\Models\Work;
use ThothClient\GraphQL\Request;

final class ClientTest extends TestCase
{
    private MockHandler $mockHandler;

    private Client $client;

    protected function setUp(): void
    {
        $this->mockHandler = new MockHandler();
        $handler = HandlerStack::create($this->mockHandler);
        $request = new Request('', ['handler' => $handler]);
        $this->client = new Client($request);
    }

    public function testGetAccountDetails(): void
    {
        $expectedDetails = [
            'accountId' => 'c00ac1b7-5fda-468d-8634-707cd069f560'
        ];
        $this->mockHandler->append(new Response(200, [], json_encode([
            'token' => 'someLongToken'
        ])));
        $this->mockHandler->append(new Response(200, [], json_encode($expectedDetails)));

        $email = 'user@mailinator.com';
        $password = 'secret';

        $accountDetails = $this->client->login($email, $password)->accountDetails();
        $this->assertSame($expectedDetails, $accountDetails);
    }

    public function testAffiliation(): void
    {
        $affiliation = new Affiliation(['affiliationId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'affiliation' => [
                    'affiliationId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->affiliation('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($affiliation, $result);
    }

    public function testAffiliations(): void
    {
        $affiliations = [
            new Affiliation(['affiliationId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Affiliation(['affiliationId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'affiliations' => [
                    [
                        'affiliationId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'affiliationId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->affiliations();
        $this->assertEquals($affiliations, $result);
    }

    public function testAffiliationCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'affiliationCount' => 710
            ]
        ])));

        $result = $this->client->affiliationCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testContribution(): void
    {
        $contribution = new Contribution(['contributionId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'contribution' => [
                    'contributionId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->contribution('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($contribution, $result);
    }

    public function testBooks(): void
    {
        $books = [
            new Work(['workId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Work(['workId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'books' => [
                    [
                        'workId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'workId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->books();
        $this->assertEquals($books, $result);
    }

    public function testBookByDoi(): void
    {
        $book = new Work([
            'workId' => '9afc6760-f556-46a1-a912-39ea5ebc921b',
            'doi' => 'https://doi.org/10.00000/00000000'
        ]);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'bookByDoi' => [
                    'workId' => '9afc6760-f556-46a1-a912-39ea5ebc921b',
                    'doi' => 'https://doi.org/10.00000/00000000'
                ]
            ]
        ])));

        $result = $this->client->bookByDoi('https://doi.org/10.00000/00000000');
        $this->assertEquals($book, $result);
    }

    public function testBookCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'bookCount' => 710
            ]
        ])));

        $result = $this->client->bookCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testChapters(): void
    {
        $chapters = [
            new Work(['workId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Work(['workId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'chapters' => [
                    [
                        'workId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'workId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->chapters();
        $this->assertEquals($chapters, $result);
    }

    public function testChapterByDoi(): void
    {
        $chapter = new Work([
            'workId' => '9afc6760-f556-46a1-a912-39ea5ebc921b',
            'doi' => 'https://doi.org/10.00000/00000000'
        ]);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'chapterByDoi' => [
                    'workId' => '9afc6760-f556-46a1-a912-39ea5ebc921b',
                    'doi' => 'https://doi.org/10.00000/00000000'
                ]
            ]
        ])));

        $result = $this->client->chapterByDoi('https://doi.org/10.00000/00000000');
        $this->assertEquals($chapter, $result);
    }

    public function testChapterCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'chapterCount' => 710
            ]
        ])));

        $result = $this->client->chapterCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testContributions(): void
    {
        $contributions = [
            new Contribution(['contributionId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Contribution(['contributionId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'contributions' => [
                    [
                        'contributionId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'contributionId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->contributions();
        $this->assertEquals($contributions, $result);
    }

    public function testContributionCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'contributionCount' => 710
            ]
        ])));

        $result = $this->client->contributionCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testContributor(): void
    {
        $contributor = new Contributor(['contributorId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'contributor' => [
                    'contributorId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->contributor('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($contributor, $result);
    }

    public function testContributors(): void
    {
        $contributors = [
            new Contributor(['contributorId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Contributor(['contributorId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'contributors' => [
                    [
                        'contributorId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'contributorId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->contributors();
        $this->assertEquals($contributors, $result);
    }

    public function testContributorCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'contributorCount' => 710
            ]
        ])));

        $result = $this->client->contributorCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testFunding(): void
    {
        $funding = new Funding(['fundingId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'funding' => [
                    'fundingId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->funding('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($funding, $result);
    }

    public function testFundings(): void
    {
        $fundings = [
            new Funding(['fundingId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Funding(['fundingId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'fundings' => [
                    [
                        'fundingId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'fundingId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->fundings();
        $this->assertEquals($fundings, $result);
    }

    public function testFundingCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'fundingCount' => 710
            ]
        ])));

        $result = $this->client->fundingCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testImprint(): void
    {
        $imprint = new Imprint(['imprintId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'imprint' => [
                    'imprintId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->imprint('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($imprint, $result);
    }

    public function testImprints(): void
    {
        $imprints = [
            new Imprint(['imprintId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Imprint(['imprintId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'imprints' => [
                    [
                        'imprintId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'imprintId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->imprints();
        $this->assertEquals($imprints, $result);
    }

    public function testImprintCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'imprintCount' => 710
            ]
        ])));

        $result = $this->client->imprintCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testInstitution(): void
    {
        $institution = new Institution(['institutionId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'institution' => [
                    'institutionId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->institution('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($institution, $result);
    }

    public function testInstitutions(): void
    {
        $institutions = [
            new Institution(['institutionId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Institution(['institutionId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'institutions' => [
                    [
                        'institutionId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'institutionId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->institutions();
        $this->assertEquals($institutions, $result);
    }

    public function testInstitutionCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'institutionCount' => 710
            ]
        ])));

        $result = $this->client->institutionCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testIssue(): void
    {
        $issue = new Issue(['issueId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'issue' => [
                    'issueId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->issue('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($issue, $result);
    }

    public function testIssues(): void
    {
        $issues = [
            new Issue(['issueId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Issue(['issueId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'issues' => [
                    [
                        'issueId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'issueId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->issues();
        $this->assertEquals($issues, $result);
    }

    public function testIssueCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'issueCount' => 710
            ]
        ])));

        $result = $this->client->issueCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testLanguage(): void
    {
        $language = new Language(['languageId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'language' => [
                    'languageId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->language('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($language, $result);
    }

    public function testLanguages(): void
    {
        $languages = [
            new Language(['languageId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Language(['languageId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'languages' => [
                    [
                        'languageId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'languageId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->languages();
        $this->assertEquals($languages, $result);
    }

    public function testLanguageCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'languageCount' => 710
            ]
        ])));

        $result = $this->client->languageCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testLocation(): void
    {
        $location = new Location(['locationId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'location' => [
                    'locationId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->location('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($location, $result);
    }

    public function testLocations(): void
    {
        $locations = [
            new Location(['locationId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Location(['locationId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'locations' => [
                    [
                        'locationId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'locationId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->locations();
        $this->assertEquals($locations, $result);
    }

    public function testLocationCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'locationCount' => 710
            ]
        ])));

        $result = $this->client->locationCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testPrice(): void
    {
        $price = new Price(['priceId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'price' => [
                    'priceId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->price('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($price, $result);
    }

    public function testPrices(): void
    {
        $prices = [
            new Price(['priceId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Price(['priceId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'prices' => [
                    [
                        'priceId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'priceId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->prices();
        $this->assertEquals($prices, $result);
    }

    public function testPriceCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'priceCount' => 710
            ]
        ])));

        $result = $this->client->priceCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testPublication(): void
    {
        $publication = new Publication(['publicationId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'publication' => [
                    'publicationId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->publication('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($publication, $result);
    }

    public function testPublications(): void
    {
        $publications = [
            new Publication(['publicationId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Publication(['publicationId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'publications' => [
                    [
                        'publicationId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'publicationId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->publications();
        $this->assertEquals($publications, $result);
    }

    public function testPublicationCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'publicationCount' => 710
            ]
        ])));

        $result = $this->client->publicationCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testPublisher(): void
    {
        $publisher = new Publisher(['publisherId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'publisher' => [
                    'publisherId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->publisher('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($publisher, $result);
    }

    public function testPublishers(): void
    {
        $publishers = [
            new Publisher(['publisherId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Publisher(['publisherId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'publishers' => [
                    [
                        'publisherId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'publisherId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->publishers();
        $this->assertEquals($publishers, $result);
    }

    public function testPublisherCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'publisherCount' => 710
            ]
        ])));

        $result = $this->client->publisherCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testReference(): void
    {
        $reference = new Reference(['referenceId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'reference' => [
                    'referenceId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->reference('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($reference, $result);
    }

    public function testReferences(): void
    {
        $references = [
            new Reference(['referenceId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Reference(['referenceId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'references' => [
                    [
                        'referenceId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'referenceId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->references();
        $this->assertEquals($references, $result);
    }

    public function testReferenceCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'referenceCount' => 710
            ]
        ])));

        $result = $this->client->referenceCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testSeries(): void
    {
        $series = new Series(['seriesId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'series' => [
                    'seriesId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->series('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($series, $result);
    }

    public function testSerieses(): void
    {
        $serieses = [
            new Series(['seriesId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Series(['seriesId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'serieses' => [
                    [
                        'seriesId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'seriesId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->serieses();
        $this->assertEquals($serieses, $result);
    }

    public function testSeriesCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'seriesCount' => 710
            ]
        ])));

        $result = $this->client->seriesCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testSubject(): void
    {
        $subject = new Subject(['subjectId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'subject' => [
                    'subjectId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->subject('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($subject, $result);
    }

    public function testSubjects(): void
    {
        $subjects = [
            new Subject(['subjectId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Subject(['subjectId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'subjects' => [
                    [
                        'subjectId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'subjectId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->subjects();
        $this->assertEquals($subjects, $result);
    }

    public function testSubjectCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'subjectCount' => 710
            ]
        ])));

        $result = $this->client->subjectCount();
        $this->assertSame($expectedCount, $result);
    }

    public function testWork(): void
    {
        $work = new Work(['workId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'work' => [
                    'workId' => '9afc6760-f556-46a1-a912-39ea5ebc921b'
                ]
            ]
        ])));

        $result = $this->client->work('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($work, $result);
    }

    public function testWorks(): void
    {
        $works = [
            new Work(['workId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new Work(['workId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'works' => [
                    [
                        'workId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'
                    ],
                    [
                        'workId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'
                    ]
                ]
            ]
        ])));

        $result = $this->client->works();
        $this->assertEquals($works, $result);
    }

    public function testWorkByDoi(): void
    {
        $work = new Work([
            'workId' => '9afc6760-f556-46a1-a912-39ea5ebc921b',
            'doi' => 'https://doi.org/10.00000/00000000'
        ]);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'workByDoi' => [
                    'workId' => '9afc6760-f556-46a1-a912-39ea5ebc921b',
                    'doi' => 'https://doi.org/10.00000/00000000'
                ]
            ]
        ])));

        $result = $this->client->workByDoi('https://doi.org/10.00000/00000000');
        $this->assertEquals($work, $result);
    }

    public function testWorkCount(): void
    {
        $expectedCount = 710;

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'workCount' => 710
            ]
        ])));

        $result = $this->client->workCount();
        $this->assertSame($expectedCount, $result);
    }
}
