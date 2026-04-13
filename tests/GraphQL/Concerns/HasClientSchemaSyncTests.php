<?php

namespace ThothApi\Tests\GraphQL\Concerns;

use GuzzleHttp\Psr7\Response;
use ThothApi\GraphQL\Models\AbstractText;
use ThothApi\GraphQL\Models\AdditionalResource;
use ThothApi\GraphQL\Models\Award;
use ThothApi\GraphQL\Models\Biography;
use ThothApi\GraphQL\Models\BookReview;
use ThothApi\GraphQL\Models\Contact;
use ThothApi\GraphQL\Models\Endorsement;
use ThothApi\GraphQL\Models\File;
use ThothApi\GraphQL\Models\FileUploadResponse;
use ThothApi\GraphQL\Models\Me;
use ThothApi\GraphQL\Models\Title;
use ThothApi\GraphQL\Models\WorkFeaturedVideo;

trait HasClientSchemaSyncTests
{
    public function testAdditionalResource(): void
    {
        $expected = new AdditionalResource(['workResourceId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);
        $this->appendGraphQlResponse('additionalResource', ['workResourceId' => '9afc6760-f556-46a1-a912-39ea5ebc921b']);

        $result = $this->client->additionalResource('9afc6760-f556-46a1-a912-39ea5ebc921b');
        $this->assertEquals($expected, $result);
    }

    public function testAdditionalResources(): void
    {
        $expected = [
            new AdditionalResource(['workResourceId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2']),
            new AdditionalResource(['workResourceId' => '0472b0af-acf6-4f27-bee3-d3414466ccec']),
        ];
        $this->appendGraphQlResponse('additionalResources', [
            ['workResourceId' => '7608e91a-7e51-467a-9bab-67d1eee68ab2'],
            ['workResourceId' => '0472b0af-acf6-4f27-bee3-d3414466ccec'],
        ]);

        $result = $this->client->additionalResources();
        $this->assertEquals($expected, $result);
    }

    public function testAdditionalResourceCount(): void
    {
        $this->appendGraphQlResponse('additionalResourceCount', 12);
        $this->assertSame(12, $this->client->additionalResourceCount());
    }

    public function testAbstract(): void
    {
        $expected = new AbstractText(['abstractId' => '7b256755-3546-49ad-8199-6e98d1a66792']);
        $this->appendGraphQlResponse('abstract', ['abstractId' => '7b256755-3546-49ad-8199-6e98d1a66792']);

        $result = $this->client->abstract('7b256755-3546-49ad-8199-6e98d1a66792', 'HTML');
        $this->assertEquals($expected, $result);
    }

    public function testAbstracts(): void
    {
        $expected = [
            new AbstractText(['abstractId' => 'c8cba422-728e-4e94-8f4d-b4c1ba8f7416']),
            new AbstractText(['abstractId' => '0cf7d5c4-c8e0-4787-8130-f6b7133ec2f1']),
        ];
        $this->appendGraphQlResponse('abstracts', [
            ['abstractId' => 'c8cba422-728e-4e94-8f4d-b4c1ba8f7416'],
            ['abstractId' => '0cf7d5c4-c8e0-4787-8130-f6b7133ec2f1'],
        ]);

        $result = $this->client->abstracts();
        $this->assertEquals($expected, $result);
    }

    public function testAward(): void
    {
        $expected = new Award(['awardId' => '348f8f66-9bd5-43f5-beb7-f08a6656d1a2']);
        $this->appendGraphQlResponse('award', ['awardId' => '348f8f66-9bd5-43f5-beb7-f08a6656d1a2']);

        $result = $this->client->award('348f8f66-9bd5-43f5-beb7-f08a6656d1a2');
        $this->assertEquals($expected, $result);
    }

    public function testAwards(): void
    {
        $expected = [
            new Award(['awardId' => 'e9572168-7795-4a72-a139-ad1c0f1143af']),
            new Award(['awardId' => '6b8b30aa-0ad8-4dab-b9f1-725cfaf2f804']),
        ];
        $this->appendGraphQlResponse('awards', [
            ['awardId' => 'e9572168-7795-4a72-a139-ad1c0f1143af'],
            ['awardId' => '6b8b30aa-0ad8-4dab-b9f1-725cfaf2f804'],
        ]);

        $result = $this->client->awards();
        $this->assertEquals($expected, $result);
    }

    public function testAwardCount(): void
    {
        $this->appendGraphQlResponse('awardCount', 5);
        $this->assertSame(5, $this->client->awardCount());
    }

    public function testBiography(): void
    {
        $expected = new Biography(['biographyId' => '6d8ddf35-e112-48b2-87c6-3ef5888c03e7']);
        $this->appendGraphQlResponse('biography', ['biographyId' => '6d8ddf35-e112-48b2-87c6-3ef5888c03e7']);

        $result = $this->client->biography('6d8ddf35-e112-48b2-87c6-3ef5888c03e7', 'HTML');
        $this->assertEquals($expected, $result);
    }

    public function testBiographies(): void
    {
        $expected = [
            new Biography(['biographyId' => 'ed51ceb4-d77e-4f6e-bf1a-8277c1f5f0df']),
            new Biography(['biographyId' => '2d8a97c3-6b6e-440f-9c6e-b8c5ee5bf1cb']),
        ];
        $this->appendGraphQlResponse('biographies', [
            ['biographyId' => 'ed51ceb4-d77e-4f6e-bf1a-8277c1f5f0df'],
            ['biographyId' => '2d8a97c3-6b6e-440f-9c6e-b8c5ee5bf1cb'],
        ]);

        $result = $this->client->biographies();
        $this->assertEquals($expected, $result);
    }

    public function testBookReview(): void
    {
        $expected = new BookReview(['bookReviewId' => 'a465c5d1-5ef0-493c-b2b3-a8084144f35c']);
        $this->appendGraphQlResponse('bookReview', ['bookReviewId' => 'a465c5d1-5ef0-493c-b2b3-a8084144f35c']);

        $result = $this->client->bookReview('a465c5d1-5ef0-493c-b2b3-a8084144f35c');
        $this->assertEquals($expected, $result);
    }

    public function testBookReviews(): void
    {
        $expected = [
            new BookReview(['bookReviewId' => '728d3048-b0db-444e-bd46-26ab6b66e7cf']),
            new BookReview(['bookReviewId' => '83b8dfe7-8394-49f1-b5f0-c833e86d9d5b']),
        ];
        $this->appendGraphQlResponse('bookReviews', [
            ['bookReviewId' => '728d3048-b0db-444e-bd46-26ab6b66e7cf'],
            ['bookReviewId' => '83b8dfe7-8394-49f1-b5f0-c833e86d9d5b'],
        ]);

        $result = $this->client->bookReviews();
        $this->assertEquals($expected, $result);
    }

    public function testBookReviewCount(): void
    {
        $this->appendGraphQlResponse('bookReviewCount', 8);
        $this->assertSame(8, $this->client->bookReviewCount());
    }

    public function testContact(): void
    {
        $expected = new Contact(['contactId' => 'd4122dc0-f3fc-45ce-81a4-fe45e8da837b']);
        $this->appendGraphQlResponse('contact', ['contactId' => 'd4122dc0-f3fc-45ce-81a4-fe45e8da837b']);

        $result = $this->client->contact('d4122dc0-f3fc-45ce-81a4-fe45e8da837b');
        $this->assertEquals($expected, $result);
    }

    public function testContacts(): void
    {
        $expected = [
            new Contact(['contactId' => 'f74cc2d0-4888-4629-a31b-ac8527d4f374']),
            new Contact(['contactId' => '67c2ab2c-e1c5-452a-8bb4-7fd3bf7f2394']),
        ];
        $this->appendGraphQlResponse('contacts', [
            ['contactId' => 'f74cc2d0-4888-4629-a31b-ac8527d4f374'],
            ['contactId' => '67c2ab2c-e1c5-452a-8bb4-7fd3bf7f2394'],
        ]);

        $result = $this->client->contacts();
        $this->assertEquals($expected, $result);
    }

    public function testContactCount(): void
    {
        $this->appendGraphQlResponse('contactCount', 4);
        $this->assertSame(4, $this->client->contactCount());
    }

    public function testEndorsement(): void
    {
        $expected = new Endorsement(['endorsementId' => '0b13c4ca-6db2-4f4a-ad98-784ec0f5f8f6']);
        $this->appendGraphQlResponse('endorsement', ['endorsementId' => '0b13c4ca-6db2-4f4a-ad98-784ec0f5f8f6']);

        $result = $this->client->endorsement('0b13c4ca-6db2-4f4a-ad98-784ec0f5f8f6');
        $this->assertEquals($expected, $result);
    }

    public function testEndorsements(): void
    {
        $expected = [
            new Endorsement(['endorsementId' => '1bb5729c-2fb1-4e0b-b9eb-d78c646c2048']),
            new Endorsement(['endorsementId' => 'f2248af2-4650-4f4b-b5e7-b702a05629a7']),
        ];
        $this->appendGraphQlResponse('endorsements', [
            ['endorsementId' => '1bb5729c-2fb1-4e0b-b9eb-d78c646c2048'],
            ['endorsementId' => 'f2248af2-4650-4f4b-b5e7-b702a05629a7'],
        ]);

        $result = $this->client->endorsements();
        $this->assertEquals($expected, $result);
    }

    public function testEndorsementCount(): void
    {
        $this->appendGraphQlResponse('endorsementCount', 7);
        $this->assertSame(7, $this->client->endorsementCount());
    }

    public function testFile(): void
    {
        $expected = new File(['fileId' => '0a2cde56-a535-4f7a-ac6b-3fc12942d1c9']);
        $this->appendGraphQlResponse('file', ['fileId' => '0a2cde56-a535-4f7a-ac6b-3fc12942d1c9']);

        $result = $this->client->file('0a2cde56-a535-4f7a-ac6b-3fc12942d1c9');
        $this->assertEquals($expected, $result);
    }

    public function testMe(): void
    {
        $expected = new Me(['userId' => '3a3d425f-35ed-49fd-a0f9-4b13d68ab71b']);
        $this->appendGraphQlResponse('me', ['userId' => '3a3d425f-35ed-49fd-a0f9-4b13d68ab71b']);

        $result = $this->client->setToken('token')->me();
        $this->assertEquals($expected, $result);
    }

    public function testTitle(): void
    {
        $expected = new Title(['titleId' => '11595f9d-536e-422a-8184-4b01df1158f5']);
        $this->appendGraphQlResponse('title', ['titleId' => '11595f9d-536e-422a-8184-4b01df1158f5']);

        $result = $this->client->title('11595f9d-536e-422a-8184-4b01df1158f5', 'HTML');
        $this->assertEquals($expected, $result);
    }

    public function testTitles(): void
    {
        $expected = [
            new Title(['titleId' => '194fb8a9-ec22-414d-a4ce-a2216755b5b0']),
            new Title(['titleId' => '204291c6-6ecb-4b9b-b61d-c789336f281d']),
        ];
        $this->appendGraphQlResponse('titles', [
            ['titleId' => '194fb8a9-ec22-414d-a4ce-a2216755b5b0'],
            ['titleId' => '204291c6-6ecb-4b9b-b61d-c789336f281d'],
        ]);

        $result = $this->client->titles();
        $this->assertEquals($expected, $result);
    }

    public function testWorkFeaturedVideo(): void
    {
        $expected = new WorkFeaturedVideo(['workFeaturedVideoId' => 'ce185b34-0678-4332-b805-271db0feec4c']);
        $this->appendGraphQlResponse('workFeaturedVideo', ['workFeaturedVideoId' => 'ce185b34-0678-4332-b805-271db0feec4c']);

        $result = $this->client->workFeaturedVideo('ce185b34-0678-4332-b805-271db0feec4c');
        $this->assertEquals($expected, $result);
    }

    public function testWorkFeaturedVideos(): void
    {
        $expected = [
            new WorkFeaturedVideo(['workFeaturedVideoId' => 'b44e6137-bd54-46d3-a5de-d377ef205022']),
            new WorkFeaturedVideo(['workFeaturedVideoId' => 'd865ba29-1f2c-42b8-b6c0-35f96a86091a']),
        ];
        $this->appendGraphQlResponse('workFeaturedVideos', [
            ['workFeaturedVideoId' => 'b44e6137-bd54-46d3-a5de-d377ef205022'],
            ['workFeaturedVideoId' => 'd865ba29-1f2c-42b8-b6c0-35f96a86091a'],
        ]);

        $result = $this->client->workFeaturedVideos();
        $this->assertEquals($expected, $result);
    }

    public function testWorkFeaturedVideoCount(): void
    {
        $this->appendGraphQlResponse('workFeaturedVideoCount', 2);
        $this->assertSame(2, $this->client->workFeaturedVideoCount());
    }

    public function testAdditionalSchemaMutations(): void
    {
        $cases = [
            ['createAdditionalResource', new AdditionalResource(), 'createAdditionalResource', 'workResourceId'],
            ['updateAdditionalResource', new AdditionalResource(), 'updateAdditionalResource', 'workResourceId'],
            ['deleteAdditionalResource', '6df7310c-8d9e-4b25-afb9-3ef670051c5a', 'deleteAdditionalResource', 'workResourceId'],
            ['createAbstract', new AbstractText(), 'createAbstract', 'abstractId'],
            ['updateAbstract', new AbstractText(), 'updateAbstract', 'abstractId'],
            ['deleteAbstract', 'c17f97cd-6c31-4e25-a870-9df7559c61ad', 'deleteAbstract', 'abstractId'],
            ['createAward', new Award(), 'createAward', 'awardId'],
            ['updateAward', new Award(), 'updateAward', 'awardId'],
            ['deleteAward', '1da2c824-1cdd-4a20-8d18-979743f2576d', 'deleteAward', 'awardId'],
            ['createBiography', new Biography(), 'createBiography', 'biographyId'],
            ['updateBiography', new Biography(), 'updateBiography', 'biographyId'],
            ['deleteBiography', '403d31d1-8e7a-4b36-a3d2-72cdc4f9d2a4', 'deleteBiography', 'biographyId'],
            ['createBookReview', new BookReview(), 'createBookReview', 'bookReviewId'],
            ['updateBookReview', new BookReview(), 'updateBookReview', 'bookReviewId'],
            ['deleteBookReview', '5db50f30-9783-4ff6-9c85-521662fdd1d2', 'deleteBookReview', 'bookReviewId'],
            ['createContact', new Contact(), 'createContact', 'contactId'],
            ['updateContact', new Contact(), 'updateContact', 'contactId'],
            ['deleteContact', '52e6f1dd-2811-497a-a0fd-7fdc439c0ab4', 'deleteContact', 'contactId'],
            ['createEndorsement', new Endorsement(), 'createEndorsement', 'endorsementId'],
            ['updateEndorsement', new Endorsement(), 'updateEndorsement', 'endorsementId'],
            ['deleteEndorsement', 'a2d18be6-b877-4b68-b6e9-bf1c0b74d89c', 'deleteEndorsement', 'endorsementId'],
            ['createTitle', new Title(), 'createTitle', 'titleId'],
            ['updateTitle', new Title(), 'updateTitle', 'titleId'],
            ['deleteTitle', '2581af59-2c28-4576-a823-cd90cacf9f7f', 'deleteTitle', 'titleId'],
            ['createWorkFeaturedVideo', new WorkFeaturedVideo(), 'createWorkFeaturedVideo', 'workFeaturedVideoId'],
            ['updateWorkFeaturedVideo', new WorkFeaturedVideo(), 'updateWorkFeaturedVideo', 'workFeaturedVideoId'],
            ['deleteWorkFeaturedVideo', 'e3733ec2-2bc2-456b-af8c-43a83df87f5d', 'deleteWorkFeaturedVideo', 'workFeaturedVideoId'],
        ];

        foreach ($cases as $case) {
            $this->appendGraphQlResponse($case[2], [$case[3] => '5d065ca7-e93d-4830-a94c-0b18cac0d738']);
            $result = is_string($case[1])
                ? $this->client->{$case[0]}($case[1])
                : $this->client->{$case[0]}($case[1]);

            $this->assertSame('5d065ca7-e93d-4830-a94c-0b18cac0d738', $result);
        }
    }

    public function testMoveMutations(): void
    {
        $cases = [
            ['moveAffiliation', 'moveAffiliation', 'affiliationId'],
            ['moveContribution', 'moveContribution', 'contributionId'],
            ['moveIssue', 'moveIssue', 'issueId'],
            ['moveReference', 'moveReference', 'referenceId'],
            ['moveAdditionalResource', 'moveAdditionalResource', 'workResourceId'],
            ['moveAward', 'moveAward', 'awardId'],
            ['moveEndorsement', 'moveEndorsement', 'endorsementId'],
            ['moveBookReview', 'moveBookReview', 'bookReviewId'],
            ['moveSubject', 'moveSubject', 'subjectId'],
            ['moveWorkRelation', 'moveWorkRelation', 'workRelationId'],
        ];

        foreach ($cases as $case) {
            $this->appendGraphQlResponse($case[1], [$case[2] => 'a6ef3310-3f0a-4814-b66f-75c0a0850ed1']);
            $result = $this->client->{$case[0]}('8ad22885-ea80-4bfc-b562-a4e3f8c9fe25', 2);
            $this->assertSame('a6ef3310-3f0a-4814-b66f-75c0a0850ed1', $result);
        }
    }

    public function testFileUploadMutations(): void
    {
        $payload = [
            'declaredMimeType' => 'application/pdf',
            'declaredExtension' => 'pdf',
            'declaredSha256' => 'abc123',
        ];

        $this->appendGraphQlResponse('initPublicationFileUpload', ['fileUploadId' => '805f6199-48e8-4c30-aeec-7c4bcc6cf515']);
        $this->assertEquals(
            new FileUploadResponse(['fileUploadId' => '805f6199-48e8-4c30-aeec-7c4bcc6cf515']),
            $this->client->initPublicationFileUpload(['publicationId' => '22851a6f-b1b8-4631-90b4-fcf70dce8472'] + $payload)
        );

        $this->appendGraphQlResponse('initFrontcoverFileUpload', ['fileUploadId' => '33ea7c51-54e4-4e77-a9e2-666aeb277cfa']);
        $this->assertEquals(
            new FileUploadResponse(['fileUploadId' => '33ea7c51-54e4-4e77-a9e2-666aeb277cfa']),
            $this->client->initFrontcoverFileUpload(['workId' => 'f3505088-fb35-4c64-9b64-0cdd4964d3db'] + $payload)
        );

        $this->appendGraphQlResponse('initAdditionalResourceFileUpload', ['fileUploadId' => '63f8edbf-3e4d-44fe-b83d-725fdb7152f4']);
        $this->assertEquals(
            new FileUploadResponse(['fileUploadId' => '63f8edbf-3e4d-44fe-b83d-725fdb7152f4']),
            $this->client->initAdditionalResourceFileUpload(['additionalResourceId' => '4fadb13b-fda1-4ce1-aa17-cf1902652f66'] + $payload)
        );

        $this->appendGraphQlResponse('initWorkFeaturedVideoFileUpload', ['fileUploadId' => '2897df20-c90f-4a0e-a81d-7b0557d7fd07']);
        $this->assertEquals(
            new FileUploadResponse(['fileUploadId' => '2897df20-c90f-4a0e-a81d-7b0557d7fd07']),
            $this->client->initWorkFeaturedVideoFileUpload(['workFeaturedVideoId' => '2b554c7f-0c1d-49c6-8a4f-d9638a115bea'] + $payload)
        );

        $this->appendGraphQlResponse('completeFileUpload', ['fileId' => 'c0b70667-9a9a-4829-9b29-f4792c53c702']);
        $this->assertEquals(
            new File(['fileId' => 'c0b70667-9a9a-4829-9b29-f4792c53c702']),
            $this->client->completeFileUpload(['fileUploadId' => '2897df20-c90f-4a0e-a81d-7b0557d7fd07'])
        );
    }

    private function appendGraphQlResponse(string $field, $data): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                $field => $data,
            ],
        ])));
    }
}
