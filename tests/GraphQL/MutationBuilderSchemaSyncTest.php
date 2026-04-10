<?php

namespace ThothApi\Tests\GraphQL;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\MutationBuilder;

final class MutationBuilderSchemaSyncTest extends TestCase
{
    public function testBuildAdditionalResourceMutations(): void
    {
        $this->assertMutation(
            'createAdditionalResource',
            'workId: "c53fa7ab-0ae0-44fd-ad28-1d5b8a5e3859", title: "Resource title", description: "Resource description", attribution: "John Doe", resourceType: OTHER, doi: "https:\/\/doi.org\/10.00000\/00000000", handle: "https:\/\/hdl.handle.net\/123", url: "https:\/\/example.com", date: "2026-04-10", resourceOrdinal: 2',
            'workResourceId',
            [
                'workId' => 'c53fa7ab-0ae0-44fd-ad28-1d5b8a5e3859',
                'title' => 'Resource title',
                'description' => 'Resource description',
                'attribution' => 'John Doe',
                'resourceType' => 'OTHER',
                'doi' => 'https://doi.org/10.00000/00000000',
                'handle' => 'https://hdl.handle.net/123',
                'url' => 'https://example.com',
                'date' => '2026-04-10',
                'resourceOrdinal' => 2,
            ],
            'markupFormat: HTML',
            true,
            ['markupFormat' => 'HTML']
        );

        $this->assertMutation(
            'updateAdditionalResource',
            'additionalResourceId: "6f02b20c-e94e-46ff-a3f7-87f9e20bf9fd", workId: "c53fa7ab-0ae0-44fd-ad28-1d5b8a5e3859", title: "Resource title", description: "Resource description", attribution: "John Doe", resourceType: OTHER, doi: "https:\/\/doi.org\/10.00000\/00000000", handle: "https:\/\/hdl.handle.net\/123", url: "https:\/\/example.com", date: "2026-04-10", resourceOrdinal: 2',
            'workResourceId',
            [
                'additionalResourceId' => '6f02b20c-e94e-46ff-a3f7-87f9e20bf9fd',
                'workId' => 'c53fa7ab-0ae0-44fd-ad28-1d5b8a5e3859',
                'title' => 'Resource title',
                'description' => 'Resource description',
                'attribution' => 'John Doe',
                'resourceType' => 'OTHER',
                'doi' => 'https://doi.org/10.00000/00000000',
                'handle' => 'https://hdl.handle.net/123',
                'url' => 'https://example.com',
                'date' => '2026-04-10',
                'resourceOrdinal' => 2,
            ],
            'markupFormat: HTML',
            true,
            ['markupFormat' => 'HTML']
        );

        $this->assertMutation(
            'deleteAdditionalResource',
            'additionalResourceId: "6f02b20c-e94e-46ff-a3f7-87f9e20bf9fd"',
            'workResourceId',
            ['additionalResourceId' => '6f02b20c-e94e-46ff-a3f7-87f9e20bf9fd'],
            '',
            false
        );
    }

    public function testBuildMarkupMutations(): void
    {
        $this->assertMutation(
            'createAbstract',
            'workId: "b0a17dad-4ef0-4429-89e4-a3ddd9c4f72a", content: "Abstract text", localeCode: EN_GB, abstractType: LONG, canonical: true',
            'abstractId',
            [
                'workId' => 'b0a17dad-4ef0-4429-89e4-a3ddd9c4f72a',
                'content' => 'Abstract text',
                'localeCode' => 'EN_GB',
                'abstractType' => 'LONG',
                'canonical' => true,
            ],
            'markupFormat: HTML',
            true,
            ['markupFormat' => 'HTML']
        );

        $this->assertMutation(
            'createAward',
            'workId: "b0a17dad-4ef0-4429-89e4-a3ddd9c4f72a", title: "Award title", url: "https:\/\/example.com\/award", category: "Prize", year: 2026, jury: "Jury", country: GB, prizeStatement: "Winner", role: AUTHOR, awardOrdinal: 1',
            'awardId',
            [
                'workId' => 'b0a17dad-4ef0-4429-89e4-a3ddd9c4f72a',
                'title' => 'Award title',
                'url' => 'https://example.com/award',
                'category' => 'Prize',
                'year' => 2026,
                'jury' => 'Jury',
                'country' => 'GB',
                'prizeStatement' => 'Winner',
                'role' => 'AUTHOR',
                'awardOrdinal' => 1,
            ],
            'markupFormat: HTML',
            true,
            ['markupFormat' => 'HTML']
        );

        $this->assertMutation(
            'createBiography',
            'contributionId: "7b865707-f8ec-4c14-a580-f4a9767f2dd5", content: "Biography text", canonical: true, localeCode: EN_GB',
            'biographyId',
            [
                'contributionId' => '7b865707-f8ec-4c14-a580-f4a9767f2dd5',
                'content' => 'Biography text',
                'canonical' => true,
                'localeCode' => 'EN_GB',
            ],
            'markupFormat: HTML',
            true,
            ['markupFormat' => 'HTML']
        );

        $this->assertMutation(
            'createBookReview',
            'workId: "b0a17dad-4ef0-4429-89e4-a3ddd9c4f72a", title: "Review title", authorName: "John Doe", reviewerOrcid: "https:\/\/orcid.org\/0000-0000-0000-0000", reviewerInstitutionId: "77af8f4c-0ea0-44de-bbfa-c68cc2fc60fb", url: "https:\/\/example.com\/review", doi: "https:\/\/doi.org\/10.00000\/11111111", reviewDate: "2026-04-10", journalName: "Journal", journalVolume: "4", journalNumber: "2", journalIssn: "1234-5678", pageRange: "10-12", text: "Review text", reviewOrdinal: 3',
            'bookReviewId',
            [
                'workId' => 'b0a17dad-4ef0-4429-89e4-a3ddd9c4f72a',
                'title' => 'Review title',
                'authorName' => 'John Doe',
                'reviewerOrcid' => 'https://orcid.org/0000-0000-0000-0000',
                'reviewerInstitutionId' => '77af8f4c-0ea0-44de-bbfa-c68cc2fc60fb',
                'url' => 'https://example.com/review',
                'doi' => 'https://doi.org/10.00000/11111111',
                'reviewDate' => '2026-04-10',
                'journalName' => 'Journal',
                'journalVolume' => '4',
                'journalNumber' => '2',
                'journalIssn' => '1234-5678',
                'pageRange' => '10-12',
                'text' => 'Review text',
                'reviewOrdinal' => 3,
            ],
            'markupFormat: HTML',
            true,
            ['markupFormat' => 'HTML']
        );

        $this->assertMutation(
            'createEndorsement',
            'workId: "b0a17dad-4ef0-4429-89e4-a3ddd9c4f72a", authorName: "Jane Doe", authorRole: "Editor", authorOrcid: "https:\/\/orcid.org\/0000-0000-0000-0001", authorInstitutionId: "77af8f4c-0ea0-44de-bbfa-c68cc2fc60fb", url: "https:\/\/example.com\/endorsement", text: "Endorsement text", endorsementOrdinal: 1',
            'endorsementId',
            [
                'workId' => 'b0a17dad-4ef0-4429-89e4-a3ddd9c4f72a',
                'authorName' => 'Jane Doe',
                'authorRole' => 'Editor',
                'authorOrcid' => 'https://orcid.org/0000-0000-0000-0001',
                'authorInstitutionId' => '77af8f4c-0ea0-44de-bbfa-c68cc2fc60fb',
                'url' => 'https://example.com/endorsement',
                'text' => 'Endorsement text',
                'endorsementOrdinal' => 1,
            ],
            'markupFormat: HTML',
            true,
            ['markupFormat' => 'HTML']
        );

        $this->assertMutation(
            'createTitle',
            'workId: "b0a17dad-4ef0-4429-89e4-a3ddd9c4f72a", localeCode: EN_GB, fullTitle: "Full title", title: "Title", subtitle: "Subtitle", canonical: true',
            'titleId',
            [
                'workId' => 'b0a17dad-4ef0-4429-89e4-a3ddd9c4f72a',
                'localeCode' => 'EN_GB',
                'fullTitle' => 'Full title',
                'title' => 'Title',
                'subtitle' => 'Subtitle',
                'canonical' => true,
            ],
            'markupFormat: HTML',
            true,
            ['markupFormat' => 'HTML']
        );
    }

    public function testBuildContactAndFeaturedVideoMutations(): void
    {
        $this->assertMutation(
            'createContact',
            'publisherId: "f70cac7c-b6c2-4af6-833b-910bb8bb1741", contactType: SUPPORT, email: "support@example.com"',
            'contactId',
            [
                'publisherId' => 'f70cac7c-b6c2-4af6-833b-910bb8bb1741',
                'contactType' => 'SUPPORT',
                'email' => 'support@example.com',
            ]
        );

        $this->assertMutation(
            'updateContact',
            'contactId: "d83d440f-190f-4695-b752-3080c5d4ea40", publisherId: "f70cac7c-b6c2-4af6-833b-910bb8bb1741", contactType: SUPPORT, email: "support@example.com"',
            'contactId',
            [
                'contactId' => 'd83d440f-190f-4695-b752-3080c5d4ea40',
                'publisherId' => 'f70cac7c-b6c2-4af6-833b-910bb8bb1741',
                'contactType' => 'SUPPORT',
                'email' => 'support@example.com',
            ]
        );

        $this->assertMutation(
            'deleteContact',
            'contactId: "d83d440f-190f-4695-b752-3080c5d4ea40"',
            'contactId',
            ['contactId' => 'd83d440f-190f-4695-b752-3080c5d4ea40'],
            '',
            false
        );

        $this->assertMutation(
            'createWorkFeaturedVideo',
            'workId: "b0a17dad-4ef0-4429-89e4-a3ddd9c4f72a", title: "Featured video", url: "https:\/\/example.com\/video", width: 1920, height: 1080',
            'workFeaturedVideoId',
            [
                'workId' => 'b0a17dad-4ef0-4429-89e4-a3ddd9c4f72a',
                'title' => 'Featured video',
                'url' => 'https://example.com/video',
                'width' => 1920,
                'height' => 1080,
            ]
        );
    }

    public function testBuildMoveMutations(): void
    {
        $cases = [
            ['moveAffiliation', 'affiliationId', 'affiliationId'],
            ['moveContribution', 'contributionId', 'contributionId'],
            ['moveIssue', 'issueId', 'issueId'],
            ['moveReference', 'referenceId', 'referenceId'],
            ['moveAdditionalResource', 'additionalResourceId', 'workResourceId'],
            ['moveAward', 'awardId', 'awardId'],
            ['moveEndorsement', 'endorsementId', 'endorsementId'],
            ['moveBookReview', 'bookReviewId', 'bookReviewId'],
            ['moveSubject', 'subjectId', 'subjectId'],
            ['moveWorkRelation', 'workRelationId', 'workRelationId'],
        ];

        foreach ($cases as $case) {
            $this->assertMutation(
                $case[0],
                $case[1] . ': "6b4060ff-a89b-4bdc-b722-2b87ef9d057a", newOrdinal: 4',
                $case[2],
                [
                    $case[1] => '6b4060ff-a89b-4bdc-b722-2b87ef9d057a',
                    'newOrdinal' => 4,
                ],
                '',
                false
            );
        }
    }

    public function testBuildUploadMutations(): void
    {
        $common = [
            'declaredMimeType' => 'application/pdf',
            'declaredExtension' => 'pdf',
            'declaredSha256' => 'abc123',
        ];

        $this->assertMutation(
            'initPublicationFileUpload',
            'publicationId: "f70cac7c-b6c2-4af6-833b-910bb8bb1741", declaredMimeType: "application\/pdf", declaredExtension: "pdf", declaredSha256: "abc123"',
            'fileUploadId',
            ['publicationId' => 'f70cac7c-b6c2-4af6-833b-910bb8bb1741'] + $common
        );

        $this->assertMutation(
            'initFrontcoverFileUpload',
            'workId: "f70cac7c-b6c2-4af6-833b-910bb8bb1741", declaredMimeType: "application\/pdf", declaredExtension: "pdf", declaredSha256: "abc123"',
            'fileUploadId',
            ['workId' => 'f70cac7c-b6c2-4af6-833b-910bb8bb1741'] + $common
        );

        $this->assertMutation(
            'initAdditionalResourceFileUpload',
            'additionalResourceId: "f70cac7c-b6c2-4af6-833b-910bb8bb1741", declaredMimeType: "application\/pdf", declaredExtension: "pdf", declaredSha256: "abc123"',
            'fileUploadId',
            ['additionalResourceId' => 'f70cac7c-b6c2-4af6-833b-910bb8bb1741'] + $common
        );

        $this->assertMutation(
            'initWorkFeaturedVideoFileUpload',
            'workFeaturedVideoId: "f70cac7c-b6c2-4af6-833b-910bb8bb1741", declaredMimeType: "application\/pdf", declaredExtension: "pdf", declaredSha256: "abc123"',
            'fileUploadId',
            ['workFeaturedVideoId' => 'f70cac7c-b6c2-4af6-833b-910bb8bb1741'] + $common
        );

        $this->assertMutation(
            'completeFileUpload',
            'fileUploadId: "f70cac7c-b6c2-4af6-833b-910bb8bb1741"',
            'fileId',
            ['fileUploadId' => 'f70cac7c-b6c2-4af6-833b-910bb8bb1741']
        );
    }

    private function assertMutation(
        string $mutationName,
        string $data,
        string $returnValue,
        array $input,
        string $extraArgs = '',
        bool $nested = true,
        array $extraInput = []
    ): void {
        $args = [$nested ? 'data: {' . $data . '}' : $data];
        if ($extraArgs !== '') {
            $args[] = $extraArgs;
        }

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                %s
            ) {
                {$returnValue}
            }
        }
        GQL;

        $expectedMutation = sprintf($expectedMutation, implode(",\n                ", $args));
        $mutation = MutationBuilder::build($mutationName, $input, $extraArgs === '' ? ($nested ? [] : false) : $extraInput);

        $this->assertSame($expectedMutation, $mutation);
    }
}
