<?php

namespace ThothClient\Tests\GraphQL;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\MutationBuilder;

final class MutationBuilderTest extends TestCase
{
    public function testInvalidMutation(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Mutation \'foo\' not found.');

        $mutation = MutationBuilder::build('foo', []);
    }

    public function testBuildCreateAffiliationMutation(): void
    {
        $mutationName = 'createAffiliation';
        $data = 'contributionId: "c6f1380f-e4e5-4638-aab8-ee550cee449e", ' .
            'institutionId: "730095c4-99d3-4f4f-af3b-e189e2364bac", ' .
            'affiliationOrdinal: 1';
        $returnValue = 'affiliationId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createAffiliation', [
            'contributionId' => 'c6f1380f-e4e5-4638-aab8-ee550cee449e',
            'institutionId' => '730095c4-99d3-4f4f-af3b-e189e2364bac',
            'affiliationOrdinal' => 1,
            'position' => null
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateAffiliationMutation(): void
    {
        $mutationName = 'updateAffiliation';
        $data = 'affiliationId: "c3f76bf8-bf27-447c-9934-97340e65ed12", ' .
            'contributionId: "c6f1380f-e4e5-4638-aab8-ee550cee449e", ' .
            'institutionId: "730095c4-99d3-4f4f-af3b-e189e2364bac", ' .
            'affiliationOrdinal: 1, ' .
            'position: "Foobar"';
        $returnValue = 'affiliationId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateAffiliation', [
            'affiliationId' => 'c3f76bf8-bf27-447c-9934-97340e65ed12',
            'contributionId' => 'c6f1380f-e4e5-4638-aab8-ee550cee449e',
            'institutionId' => '730095c4-99d3-4f4f-af3b-e189e2364bac',
            'affiliationOrdinal' => 1,
            'position' => 'Foobar'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteAffiliationMutation(): void
    {
        $mutationName = 'deleteAffiliation';
        $data = 'affiliationId: "c3f76bf8-bf27-447c-9934-97340e65ed12"';
        $returnValue = 'affiliationId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteAffiliation',
            ['affiliationId' => 'c3f76bf8-bf27-447c-9934-97340e65ed12'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateContributionMutation(): void
    {
        $mutationName = 'createContribution';
        $data = 'workId: "c53fa7ab-0ae0-44fd-ad28-1d5b8a5e3859", ' .
            'contributorId: "8b8e429d-a03c-42a7-a861-842841fae9e0", ' .
            'contributionType: AUTHOR, ' .
            'mainContribution: true, ' .
            'contributionOrdinal: 1, ' .
            'firstName: "John", ' .
            'lastName: "Doe", ' .
            'fullName: "John Doe", ' .
            'biography: "Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae."';
        $returnValue = 'contributionId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createContribution', [
            'workId' => 'c53fa7ab-0ae0-44fd-ad28-1d5b8a5e3859',
            'contributorId' => '8b8e429d-a03c-42a7-a861-842841fae9e0',
            'contributionType' => 'AUTHOR',
            'mainContribution' => true,
            'contributionOrdinal' => 1,
            'firstName' => 'John',
            'lastName' => 'Doe',
            'fullName' => 'John Doe',
            'biography' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.',
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateContributionMutation(): void
    {
        $mutationName = 'updateContribution';
        $data = 'contributionId: "f7645045-7424-4912-af34-13b915ec76bc", ' .
            'workId: "c53fa7ab-0ae0-44fd-ad28-1d5b8a5e3859", ' .
            'contributorId: "8b8e429d-a03c-42a7-a861-842841fae9e0", ' .
            'contributionType: AUTHOR, ' .
            'mainContribution: true, ' .
            'contributionOrdinal: 1, ' .
            'firstName: "John", ' .
            'lastName: "Doe", ' .
            'fullName: "John Doe", ' .
            'biography: "Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae."';
        $returnValue = 'contributionId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateContribution', [
            'contributionId' => 'f7645045-7424-4912-af34-13b915ec76bc',
            'workId' => 'c53fa7ab-0ae0-44fd-ad28-1d5b8a5e3859',
            'contributorId' => '8b8e429d-a03c-42a7-a861-842841fae9e0',
            'contributionType' => 'AUTHOR',
            'mainContribution' => true,
            'contributionOrdinal' => 1,
            'firstName' => 'John',
            'lastName' => 'Doe',
            'fullName' => 'John Doe',
            'biography' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.',
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteContributionMutation(): void
    {
        $mutationName = 'deleteContribution';
        $data = 'contributionId: "f7645045-7424-4912-af34-13b915ec76bc"';
        $returnValue = 'contributionId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteContribution',
            ['contributionId' => 'f7645045-7424-4912-af34-13b915ec76bc'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateContributorMutation(): void
    {
        $mutationName = 'createContributor';
        $data = 'firstName: "Mary", ' .
            'lastName: "Sue", ' .
            'fullName: "Mary Sue", ' .
            'orcid: "https:\/\/orcid.org\/0000-0000-0000-0000", ' .
            'website: "https:\/\/www.marysue.com\/"';
        $returnValue = 'contributorId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createContributor', [
            'firstName' => 'Mary',
            'lastName' => 'Sue',
            'fullName' => 'Mary Sue',
            'orcid' => 'https://orcid.org/0000-0000-0000-0000',
            'website' => 'https://www.marysue.com/'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateContributorMutation(): void
    {
        $mutationName = 'updateContributor';
        $data = 'contributorId: "bcd08ad4-53bc-47a9-a780-b9f770cf38bf", ' .
            'firstName: "Mary", ' .
            'lastName: "Sue", ' .
            'fullName: "Mary Sue", ' .
            'orcid: "https:\/\/orcid.org\/0000-0000-0000-0000", ' .
            'website: "https:\/\/www.marysue.com\/"';
        $returnValue = 'contributorId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateContributor', [
            'contributorId' => 'bcd08ad4-53bc-47a9-a780-b9f770cf38bf',
            'firstName' => 'Mary',
            'lastName' => 'Sue',
            'fullName' => 'Mary Sue',
            'orcid' => 'https://orcid.org/0000-0000-0000-0000',
            'website' => 'https://www.marysue.com/'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteContributorMutation(): void
    {
        $mutationName = 'deleteContributor';
        $data = 'contributorId: "bcd08ad4-53bc-47a9-a780-b9f770cf38bf"';
        $returnValue = 'contributorId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteContributor',
            ['contributorId' => 'bcd08ad4-53bc-47a9-a780-b9f770cf38bf'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateFundingMutation(): void
    {
        $mutationName = 'createFunding';
        $data = 'workId: "1891ec7a-e9b3-4d77-b0cc-c17130d9c7d1", ' .
            'institutionId: "d322dbb8-1168-40fd-a111-70a0ac1bbaa8", ' .
            'program: "FSE", ' .
            'projectName: "Marine Renewable Energy as Alien", ' .
            'projectShortname: "Alien Energy", ' .
            'grantNumber: "0602-02551B", ' .
            'jurisdiction: "DK"';
        $returnValue = 'fundingId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createFunding', [
            'workId' => '1891ec7a-e9b3-4d77-b0cc-c17130d9c7d1',
            'institutionId' => 'd322dbb8-1168-40fd-a111-70a0ac1bbaa8',
            'program' => 'FSE',
            'projectName' => 'Marine Renewable Energy as Alien',
            'projectShortname' => 'Alien Energy',
            'grantNumber' => '0602-02551B',
            'jurisdiction' => 'DK'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateFundingMutation(): void
    {
        $mutationName = 'updateFunding';
        $data = 'fundingId: "faa6e266-3b32-4465-b355-22c6721fe788", ' .
            'workId: "1891ec7a-e9b3-4d77-b0cc-c17130d9c7d1", ' .
            'institutionId: "d322dbb8-1168-40fd-a111-70a0ac1bbaa8", ' .
            'program: "FSE", ' .
            'projectName: "Marine Renewable Energy as Alien", ' .
            'projectShortname: "Alien Energy", ' .
            'grantNumber: "0602-02551B", ' .
            'jurisdiction: "DK"';
        $returnValue = 'fundingId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateFunding', [
            'fundingId' => 'faa6e266-3b32-4465-b355-22c6721fe788',
            'workId' => '1891ec7a-e9b3-4d77-b0cc-c17130d9c7d1',
            'institutionId' => 'd322dbb8-1168-40fd-a111-70a0ac1bbaa8',
            'program' => 'FSE',
            'projectName' => 'Marine Renewable Energy as Alien',
            'projectShortname' => 'Alien Energy',
            'grantNumber' => '0602-02551B',
            'jurisdiction' => 'DK'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteFundingMutation(): void
    {
        $mutationName = 'deleteFunding';
        $data = 'fundingId: "bcd08ad4-53bc-47a9-a780-b9f770cf38bf"';
        $returnValue = 'fundingId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteFunding',
            ['fundingId' => 'bcd08ad4-53bc-47a9-a780-b9f770cf38bf'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateImprintMutation(): void
    {
        $mutationName = 'createImprint';
        $data = 'publisherId: "eac9c4ab-ed52-4482-8181-e03398904269", ' .
            'imprintName: "FooBar", ' .
            'imprintUrl: "https:\/\/foo.bar\/", ' .
            'crossmarkDoi: "https:\/\/doi.org\/10.5555\/12345678"';
        $returnValue = 'imprintId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createImprint', [
            'publisherId' => 'eac9c4ab-ed52-4482-8181-e03398904269',
            'imprintName' => 'FooBar',
            'imprintUrl' => 'https://foo.bar/',
            'crossmarkDoi' => 'https://doi.org/10.5555/12345678'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateImprintMutation(): void
    {
        $mutationName = 'updateImprint';
        $data = 'imprintId: "6791d262-ac0b-4518-9c93-9d5f63d270eb", ' .
            'publisherId: "eac9c4ab-ed52-4482-8181-e03398904269", ' .
            'imprintName: "FooBar", ' .
            'imprintUrl: "https:\/\/foo.bar\/", ' .
            'crossmarkDoi: "https:\/\/doi.org\/10.5555\/12345678"';
        $returnValue = 'imprintId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateImprint', [
            'imprintId' => '6791d262-ac0b-4518-9c93-9d5f63d270eb',
            'publisherId' => 'eac9c4ab-ed52-4482-8181-e03398904269',
            'imprintName' => 'FooBar',
            'imprintUrl' => 'https://foo.bar/',
            'crossmarkDoi' => 'https://doi.org/10.5555/12345678'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteImprintMutation(): void
    {
        $mutationName = 'deleteImprint';
        $data = 'imprintId: "6791d262-ac0b-4518-9c93-9d5f63d270eb"';
        $returnValue = 'imprintId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteImprint',
            ['imprintId' => '6791d262-ac0b-4518-9c93-9d5f63d270eb'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateInstitutionMutation(): void
    {
        $mutationName = 'createInstitution';
        $data = 'institutionName: "FooBar", ' .
            'institutionDoi: "https:\/\/doi.org\/10.55555\/100000001", ' .
            'countryCode: IOT, ' .
            'ror: "https:\/\/ror.org\/012x3z456"';
        $returnValue = 'institutionId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createInstitution', [
            'institutionName' => 'FooBar',
            'countryCode' => 'IOT',
            'institutionDoi' => 'https://doi.org/10.55555/100000001',
            'ror' => 'https://ror.org/012x3z456'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateInstitutionMutation(): void
    {
        $mutationName = 'updateInstitution';
        $data = 'institutionId: "a89dc5c9-dc51-4a3e-860d-ba9285c3bd1d", ' .
            'institutionName: "FooBar", ' .
            'institutionDoi: "https:\/\/doi.org\/10.55555\/100000001", ' .
            'countryCode: IOT, ' .
            'ror: "https:\/\/ror.org\/012x3z456"';
        $returnValue = 'institutionId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateInstitution', [
            'institutionId' => 'a89dc5c9-dc51-4a3e-860d-ba9285c3bd1d',
            'institutionName' => 'FooBar',
            'countryCode' => 'IOT',
            'institutionDoi' => 'https://doi.org/10.55555/100000001',
            'ror' => 'https://ror.org/012x3z456'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteInstitutionMutation(): void
    {
        $mutationName = 'deleteInstitution';
        $data = 'institutionId: "a89dc5c9-dc51-4a3e-860d-ba9285c3bd1d"';
        $returnValue = 'institutionId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteInstitution',
            ['institutionId' => 'a89dc5c9-dc51-4a3e-860d-ba9285c3bd1d'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateIssueMutation(): void
    {
        $mutationName = 'createIssue';
        $data = 'seriesId: "d0818cf4-a22a-4d1d-845e-a6f46650a294", ' .
            'workId: "89b9e3f2-82d1-4c15-9a4f-f28332addabf", ' .
            'issueOrdinal: 10';
        $returnValue = 'issueId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createIssue', [
            'seriesId' => 'd0818cf4-a22a-4d1d-845e-a6f46650a294',
            'workId' => '89b9e3f2-82d1-4c15-9a4f-f28332addabf',
            'issueOrdinal' => 10
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateIssueMutation(): void
    {
        $mutationName = 'updateIssue';
        $data = 'issueId: "0c02c522-07a3-4c89-95c6-b5f4cdea31a3", ' .
            'seriesId: "d0818cf4-a22a-4d1d-845e-a6f46650a294", ' .
            'workId: "89b9e3f2-82d1-4c15-9a4f-f28332addabf", ' .
            'issueOrdinal: 10';
        $returnValue = 'issueId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateIssue', [
            'issueId' => '0c02c522-07a3-4c89-95c6-b5f4cdea31a3',
            'seriesId' => 'd0818cf4-a22a-4d1d-845e-a6f46650a294',
            'workId' => '89b9e3f2-82d1-4c15-9a4f-f28332addabf',
            'issueOrdinal' => 10
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteIssueMutation(): void
    {
        $mutationName = 'deleteIssue';
        $data = 'issueId: "0c02c522-07a3-4c89-95c6-b5f4cdea31a3"';
        $returnValue = 'issueId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteIssue',
            ['issueId' => '0c02c522-07a3-4c89-95c6-b5f4cdea31a3'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateLanguageMutation(): void
    {
        $mutationName = 'createLanguage';
        $data = 'workId: "dcff2c6a-a81d-4af5-a08b-cef22928911b", ' .
            'languageCode: AAR, ' .
            'languageRelation: ORIGINAL, ' .
            'mainLanguage: true';
        $returnValue = 'languageId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createLanguage', [
            'workId' => 'dcff2c6a-a81d-4af5-a08b-cef22928911b',
            'languageCode' => 'AAR',
            'languageRelation' => 'ORIGINAL',
            'mainLanguage' => true
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateLanguageMutation(): void
    {
        $mutationName = 'updateLanguage';
        $data = 'languageId: "c5fe1926-d702-468b-b98e-984e1b49acf9", ' .
            'workId: "dcff2c6a-a81d-4af5-a08b-cef22928911b", ' .
            'languageCode: AAR, ' .
            'languageRelation: ORIGINAL, ' .
            'mainLanguage: true';
        $returnValue = 'languageId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateLanguage', [
            'languageId' => 'c5fe1926-d702-468b-b98e-984e1b49acf9',
            'workId' => 'dcff2c6a-a81d-4af5-a08b-cef22928911b',
            'languageCode' => 'AAR',
            'languageRelation' => 'ORIGINAL',
            'mainLanguage' => true
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteLanguageMutation(): void
    {
        $mutationName = 'deleteLanguage';
        $data = 'languageId: "c5fe1926-d702-468b-b98e-984e1b49acf9"';
        $returnValue = 'languageId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteLanguage',
            ['languageId' => 'c5fe1926-d702-468b-b98e-984e1b49acf9'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateLocationMutation(): void
    {
        $mutationName = 'createLocation';
        $data = 'publicationId: "7b27a854-7bc5-47aa-aa84-cacd8724b290", ' .
            'locationPlatform: PROJECT_MUSE, ' .
            'canonical: false, ' .
            'landingPage: "https:\/\/foo.bar", ' .
            'fullTextUrl: "https:\/\/foo.bar\/baz\/qux"';
        $returnValue = 'locationId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createLocation', [
            'publicationId' => '7b27a854-7bc5-47aa-aa84-cacd8724b290',
            'locationPlatform' => 'PROJECT_MUSE',
            'canonical' => false,
            'fullTextUrl' => 'https://foo.bar/baz/qux',
            'landingPage' => 'https://foo.bar'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateLocationMutation(): void
    {
        $mutationName = 'updateLocation';
        $data = 'locationId: "fd0b0ad5-b1ac-4340-bd8f-81c42b71921a", ' .
            'publicationId: "7b27a854-7bc5-47aa-aa84-cacd8724b290", ' .
            'locationPlatform: PROJECT_MUSE, ' .
            'canonical: false, ' .
            'landingPage: "https:\/\/foo.bar", ' .
            'fullTextUrl: "https:\/\/foo.bar\/baz\/qux"';
        $returnValue = 'locationId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateLocation', [
            'locationId' => 'fd0b0ad5-b1ac-4340-bd8f-81c42b71921a',
            'publicationId' => '7b27a854-7bc5-47aa-aa84-cacd8724b290',
            'locationPlatform' => 'PROJECT_MUSE',
            'canonical' => false,
            'fullTextUrl' => 'https://foo.bar/baz/qux',
            'landingPage' => 'https://foo.bar'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteLocationMutation(): void
    {
        $mutationName = 'deleteLocation';
        $data = 'locationId: "fd0b0ad5-b1ac-4340-bd8f-81c42b71921a"';
        $returnValue = 'locationId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteLocation',
            ['locationId' => 'fd0b0ad5-b1ac-4340-bd8f-81c42b71921a'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreatePriceMutation(): void
    {
        $mutationName = 'createPrice';
        $data = 'publicationId: "a635e1b6-1994-4f05-b0eb-337612950205", ' .
            'currencyCode: BWP, ' .
            'unitPrice: 1.5';
        $returnValue = 'priceId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createPrice', [
            'publicationId' => 'a635e1b6-1994-4f05-b0eb-337612950205',
            'currencyCode' => 'BWP',
            'unitPrice' => 1.5
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdatePriceMutation(): void
    {
        $mutationName = 'updatePrice';
        $data = 'priceId: "3a5bf0d0-adc7-4787-af24-3a4f3c49098c", ' .
            'publicationId: "a635e1b6-1994-4f05-b0eb-337612950205", ' .
            'currencyCode: BWP, ' .
            'unitPrice: 1.5';
        $returnValue = 'priceId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updatePrice', [
            'priceId' => '3a5bf0d0-adc7-4787-af24-3a4f3c49098c',
            'publicationId' => 'a635e1b6-1994-4f05-b0eb-337612950205',
            'currencyCode' => 'BWP',
            'unitPrice' => 1.5
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeletePriceMutation(): void
    {
        $mutationName = 'deletePrice';
        $data = 'priceId: "3a5bf0d0-adc7-4787-af24-3a4f3c49098c"';
        $returnValue = 'priceId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deletePrice',
            ['priceId' => '3a5bf0d0-adc7-4787-af24-3a4f3c49098c'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreatePublicationMutation(): void
    {
        $mutationName = 'createPublication';
        $data = 'publicationType: PAPERBACK, ' .
            'workId: "c67656e3-7c36-4ef5-b3d9-decc76c7b215", ' .
            'depthMm: 1.5, ' .
            'depthIn: 1.5, ' .
            'widthMm: 1.5, ' .
            'widthIn: 1.5, ' .
            'heightMm: 1.5, ' .
            'heightIn: 1.5, ' .
            'weightG: 1.5, ' .
            'weightOz: 1.5, ' .
            'isbn: "987-6-54321-234-5"';
        $returnValue = 'publicationId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createPublication', [
            'publicationType' => 'PAPERBACK',
            'workId' => 'c67656e3-7c36-4ef5-b3d9-decc76c7b215',
            'depthMm' => 1.5,
            'depthIn' => 1.5,
            'heightMm' => 1.5,
            'heightIn' => 1.5,
            'isbn' => '987-6-54321-234-5',
            'weightG' => 1.5,
            'weightOz' => 1.5,
            'widthMm' => 1.5,
            'widthIn' => 1.5
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdatePublicationMutation(): void
    {
        $mutationName = 'updatePublication';
        $data = 'publicationId: "3a5bf0d0-adc7-4787-af24-3a4f3c49098c", ' .
            'publicationType: PAPERBACK, ' .
            'workId: "c67656e3-7c36-4ef5-b3d9-decc76c7b215", ' .
            'depthMm: 1.5, ' .
            'depthIn: 1.5, ' .
            'widthMm: 1.5, ' .
            'widthIn: 1.5, ' .
            'heightMm: 1.5, ' .
            'heightIn: 1.5, ' .
            'weightG: 1.5, ' .
            'weightOz: 1.5, ' .
            'isbn: "987-6-54321-234-5"';
        $returnValue = 'publicationId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updatePublication', [
            'publicationId' => '3a5bf0d0-adc7-4787-af24-3a4f3c49098c',
            'publicationType' => 'PAPERBACK',
            'workId' => 'c67656e3-7c36-4ef5-b3d9-decc76c7b215',
            'depthIn' => 1.5,
            'depthMm' => 1.5,
            'heightIn' => 1.5,
            'heightMm' => 1.5,
            'isbn' => '987-6-54321-234-5',
            'weightG' => 1.5,
            'weightOz' => 1.5,
            'widthIn' => 1.5,
            'widthMm' => 1.5
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeletePublicationMutation(): void
    {
        $mutationName = 'deletePublication';
        $data = 'publicationId: "3a5bf0d0-adc7-4787-af24-3a4f3c49098c"';
        $returnValue = 'publicationId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deletePublication',
            ['publicationId' => '3a5bf0d0-adc7-4787-af24-3a4f3c49098c'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreatePublisherMutation(): void
    {
        $mutationName = 'createPublisher';
        $data = 'publisherName: "FooBar", ' .
            'publisherShortname: "Foo", ' .
            'publisherUrl: "https:\/\/foo.bar\/"';
        $returnValue = 'publisherId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createPublisher', [
            'publisherName' => 'FooBar',
            'publisherShortname' => 'Foo',
            'publisherUrl' => 'https://foo.bar/'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdatePublisherMutation(): void
    {
        $mutationName = 'updatePublisher';
        $data = 'publisherId: "17b0b443-61cb-4ffa-9da7-9de4c2ae591e", ' .
            'publisherName: "FooBar", ' .
            'publisherShortname: "Foo", ' .
            'publisherUrl: "https:\/\/foo.bar\/"';
        $returnValue = 'publisherId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updatePublisher', [
            'publisherId' => '17b0b443-61cb-4ffa-9da7-9de4c2ae591e',
            'publisherName' => 'FooBar',
            'publisherShortname' => 'Foo',
            'publisherUrl' => 'https://foo.bar/'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeletePublisherMutation(): void
    {
        $mutationName = 'deletePublisher';
        $data = 'publisherId: "17b0b443-61cb-4ffa-9da7-9de4c2ae591e"';
        $returnValue = 'publisherId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deletePublisher',
            ['publisherId' => '17b0b443-61cb-4ffa-9da7-9de4c2ae591e'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateReferenceMutation(): void
    {
        $mutationName = 'createReference';
        $data = 'workId: "14f9c7e8-bebe-4e25-90f2-e2f77a2501aa", ' .
            'referenceOrdinal: 10, ' .
            'doi: "https:\/\/doi.org\/10.1016\/j.joule.2017.07.005", ' .
            'unstructuredCitation: "Jacobson, M., et al. 2017. 100% clean and renewable wind, water, ' .
                'and sunlight all-sector energy roadmaps for 139 countries of the world. ' .
                'Joule, 1, 1-14, http:\/\/dx.doi.org\/10.1016\/j.joule.2017.07.005", ' .
            'issn: "2542-4351", ' .
            'journalTitle: "Joule", ' .
            'articleTitle: "100% Clean and Renewable Wind, Water, and Sunlight All-Sector Energy ' .
                'Roadmaps for 139 Countries of the World", ' .
            'edition: 10, ' .
            'author: "Jacobson, Mark Z.; Delucchi, Mark A.; Bauer, Zack A.F.;", ' .
            'volume: "1", ' .
            'issue: "1", ' .
            'firstPage: "108", ' .
            'url: "https:\/\/linkinghub.elsevier.com\/retrieve\/pii\/S2542435117300120", ' .
            'publicationDate: "2017-09-01"';
        $returnValue = 'referenceId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createReference', [
            'workId' => '14f9c7e8-bebe-4e25-90f2-e2f77a2501aa',
            'referenceOrdinal' => 10,
            'articleTitle' => '100% Clean and Renewable Wind, Water, and Sunlight All-Sector Energy ' .
                'Roadmaps for 139 Countries of the World',
            'author' => 'Jacobson, Mark Z.; Delucchi, Mark A.; Bauer, Zack A.F.;',
            'componentNumber' => '',
            'doi' => 'https://doi.org/10.1016/j.joule.2017.07.005',
            'edition' => 10,
            'firstPage' => '108',
            'isbn' => '',
            'issn' => '2542-4351',
            'issue' => '1',
            'journalTitle' => 'Joule',
            'publicationDate' => '2017-09-01',
            'retrievalDate' => '',
            'seriesTitle' => '',
            'standardDesignator' => '',
            'standardsBodyAcronym' => '',
            'standardsBodyName' => '',
            'unstructuredCitation' => 'Jacobson, M., et al. 2017. 100% clean and renewable wind, water, ' .
                'and sunlight all-sector energy roadmaps for 139 countries of the world. ' .
                'Joule, 1, 1-14, http://dx.doi.org/10.1016/j.joule.2017.07.005',
            'url' => 'https://linkinghub.elsevier.com/retrieve/pii/S2542435117300120',
            'volume' => '1',
            'volumeTitle' => ''
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateReferenceMutation(): void
    {
        $mutationName = 'updateReference';
        $data = 'referenceId: "b09470b5-bc1f-4754-8ce5-016b37c50224", ' .
            'workId: "14f9c7e8-bebe-4e25-90f2-e2f77a2501aa", ' .
            'referenceOrdinal: 10, ' .
            'doi: "https:\/\/doi.org\/10.1016\/j.joule.2017.07.005", ' .
            'unstructuredCitation: "Jacobson, M., et al. 2017. 100% clean and renewable wind, water, ' .
                'and sunlight all-sector energy roadmaps for 139 countries of the world. ' .
                'Joule, 1, 1-14, http:\/\/dx.doi.org\/10.1016\/j.joule.2017.07.005", ' .
            'issn: "2542-4351", ' .
            'journalTitle: "Joule", ' .
            'articleTitle: "100% Clean and Renewable Wind, Water, and Sunlight All-Sector Energy ' .
                'Roadmaps for 139 Countries of the World", ' .
            'edition: 10, ' .
            'author: "Jacobson, Mark Z.; Delucchi, Mark A.; Bauer, Zack A.F.;", ' .
            'volume: "1", ' .
            'issue: "1", ' .
            'firstPage: "108", ' .
            'url: "https:\/\/linkinghub.elsevier.com\/retrieve\/pii\/S2542435117300120", ' .
            'publicationDate: "2017-09-01"';
        $returnValue = 'referenceId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateReference', [
            'referenceId' => 'b09470b5-bc1f-4754-8ce5-016b37c50224',
            'workId' => '14f9c7e8-bebe-4e25-90f2-e2f77a2501aa',
            'referenceOrdinal' => 10,
            'articleTitle' => '100% Clean and Renewable Wind, Water, and Sunlight All-Sector Energy ' .
                'Roadmaps for 139 Countries of the World',
            'author' => 'Jacobson, Mark Z.; Delucchi, Mark A.; Bauer, Zack A.F.;',
            'doi' => 'https://doi.org/10.1016/j.joule.2017.07.005',
            'edition' => 10,
            'firstPage' => '108',
            'issn' => '2542-4351',
            'issue' => '1',
            'journalTitle' => 'Joule',
            'publicationDate' => '2017-09-01',
            'unstructuredCitation' => 'Jacobson, M., et al. 2017. 100% clean and renewable wind, water, ' .
                'and sunlight all-sector energy roadmaps for 139 countries of the world. ' .
                'Joule, 1, 1-14, http://dx.doi.org/10.1016/j.joule.2017.07.005',
            'url' => 'https://linkinghub.elsevier.com/retrieve/pii/S2542435117300120',
            'volume' => '1',
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteReferenceMutation(): void
    {
        $mutationName = 'deleteReference';
        $data = 'referenceId: "b09470b5-bc1f-4754-8ce5-016b37c50224"';
        $returnValue = 'referenceId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteReference',
            ['referenceId' => 'b09470b5-bc1f-4754-8ce5-016b37c50224'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateSeriesMutation(): void
    {
        $mutationName = 'createSeries';
        $data = 'imprintId: "c2a4eca1-9bb4-479f-98ad-09abc9756745", ' .
            'seriesType: JOURNAL, ' .
            'seriesName: "Foobar", ' .
            'issnPrint: "2515-0758", ' .
            'issnDigital: "2515-0766", ' .
            'seriesUrl: "http:\/\/foo.bar\/", ' .
            'seriesDescription: "Sed nunc dui, semper eu semper vel, bibendum in nulla.", ' .
            'seriesCfpUrl: "http:\/\/foo.bar\/baz\/cfp"';
        $returnValue = 'seriesId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createSeries', [
            'seriesType' => 'JOURNAL',
            'seriesName' => 'Foobar',
            'imprintId' => 'c2a4eca1-9bb4-479f-98ad-09abc9756745',
            'seriesUrl' => 'http://foo.bar/',
            'seriesDescription' => 'Sed nunc dui, semper eu semper vel, bibendum in nulla.',
            'seriesCfpUrl' => 'http://foo.bar/baz/cfp',
            'issnPrint' => '2515-0758',
            'issnDigital' => '2515-0766'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateSeriesMutation(): void
    {
        $mutationName = 'updateSeries';
        $data = 'seriesId: "1368d4f8-04c7-4a60-92b6-b2d14d31b6a6", ' .
            'imprintId: "c2a4eca1-9bb4-479f-98ad-09abc9756745", ' .
            'seriesType: JOURNAL, ' .
            'seriesName: "Foobar", ' .
            'issnPrint: "2515-0758", ' .
            'issnDigital: "2515-0766", ' .
            'seriesUrl: "http:\/\/foo.bar\/", ' .
            'seriesDescription: "Sed nunc dui, semper eu semper vel, bibendum in nulla.", ' .
            'seriesCfpUrl: "http:\/\/foo.bar\/baz\/cfp"';
        $returnValue = 'seriesId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateSeries', [
            'seriesId' => '1368d4f8-04c7-4a60-92b6-b2d14d31b6a6',
            'seriesType' => 'JOURNAL',
            'seriesName' => 'Foobar',
            'imprintId' => 'c2a4eca1-9bb4-479f-98ad-09abc9756745',
            'seriesUrl' => 'http://foo.bar/',
            'seriesDescription' => 'Sed nunc dui, semper eu semper vel, bibendum in nulla.',
            'seriesCfpUrl' => 'http://foo.bar/baz/cfp',
            'issnPrint' => '2515-0758',
            'issnDigital' => '2515-0766'
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteSeriesMutation(): void
    {
        $mutationName = 'deleteSeries';
        $data = 'seriesId: "1368d4f8-04c7-4a60-92b6-b2d14d31b6a6"';
        $returnValue = 'seriesId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteSeries',
            ['seriesId' => '1368d4f8-04c7-4a60-92b6-b2d14d31b6a6'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateSubjectMutation(): void
    {
        $mutationName = 'createSubject';
        $data = 'workId: "885cb751-044d-48e8-93c8-cf3c549484ac", ' .
            'subjectType: BIC, ' .
            'subjectCode: "1D", ' .
            'subjectOrdinal: 10';
        $returnValue = 'subjectId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createSubject', [
            'workId' => '885cb751-044d-48e8-93c8-cf3c549484ac',
            'subjectType' => 'BIC',
            'subjectCode' => '1D',
            'subjectOrdinal' => 10
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateSubjectMutation(): void
    {
        $mutationName = 'updateSubject';
        $data = 'subjectId: "e4535b01-722a-46d8-b1e4-1687a33838d0", ' .
            'workId: "885cb751-044d-48e8-93c8-cf3c549484ac", ' .
            'subjectType: BIC, ' .
            'subjectCode: "1D", ' .
            'subjectOrdinal: 10';
        $returnValue = 'subjectId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateSubject', [
            'subjectId' => 'e4535b01-722a-46d8-b1e4-1687a33838d0',
            'workId' => '885cb751-044d-48e8-93c8-cf3c549484ac',
            'subjectType' => 'BIC',
            'subjectCode' => '1D',
            'subjectOrdinal' => 10
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteSubjectMutation(): void
    {
        $mutationName = 'deleteSubject';
        $data = 'subjectId: "e4535b01-722a-46d8-b1e4-1687a33838d0"';
        $returnValue = 'subjectId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteSubject',
            ['subjectId' => 'e4535b01-722a-46d8-b1e4-1687a33838d0'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateWorkMutation(): void
    {
        $mutationName = 'createWork';
        $data = 'workType: BOOK_CHAPTER, ' .
            'workStatus: FORTHCOMING, ' .
            'fullTitle: "Lorem ipsum: Neque porro quisquam est", ' .
            'title: "Lorem ipsum", ' .
            'subtitle: "Neque porro quisquam est", ' .
            'reference: "foo", ' .
            'edition: 10, ' .
            'imprintId: "dd0410c9-d5f9-43c9-8289-adfd9fc8bded", ' .
            'doi: "https:\/\/doi.org\/10.00000\/00000000", ' .
            'publicationDate: "2020-01-01", ' .
            'withdrawnDate: "2020-12-12", ' .
            'place: "Earth, Milky Way", ' .
            'pageCount: 10, ' .
            'pageBreakdown: "0", ' .
            'imageCount: 10, ' .
            'tableCount: 10, ' .
            'audioCount: 10, ' .
            'videoCount: 10, ' .
            'license: "https:\/\/creativecommons.org\/licenses\/by-nc\/4.0\/", ' .
            'copyrightHolder: "John Doe", ' .
            'landingPage: "https:\/\/foo.bar\/lorem-ipsum\/", ' .
            'lccn: "2014471418", ' .
            'oclc: "1086518639", ' .
            'shortAbstract: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra ut finibus suscipit", ' .
            'longAbstract: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra nulla ut finibus suscipit. Etiam dictum cursus dolor, in fringilla felis placerat sed. Fusce aliquam orci ut sapie lobortis, id cursus dolor dapibus. Nunc vitae ligula nec ex ornare pretium. Donec et purus ac ipsumfinibus faucibus. Fusce at ipsum velit.", ' .
            'generalNote: "Sed nunc dui, semper eu semper vel, bibendum in nulla.", ' .
            'bibliographyNote: "Phasellus ac gravida odio. Mauris nec sodales odio", ' .
            'toc: "0. Introduction\n1. Lorem ipsum dolor sit amet\n2. Nullam viverra ut finibus suscipit\n3. Etiam dictum cursus dolor\n4. Conclusions", ' .
            'coverUrl: "https:\/\/foo.bar\/baz\/qux", ' .
            'coverCaption: "foobar", ' .
            'firstPage: "1", ' .
            'lastPage: "326", ' .
            'pageInterval: "1-326"';
        $returnValue = 'workId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createWork', [
            'workType' => 'BOOK_CHAPTER',
            'workStatus' => 'FORTHCOMING',
            'fullTitle' => 'Lorem ipsum: Neque porro quisquam est',
            'title' => 'Lorem ipsum',
            'imprintId' => 'dd0410c9-d5f9-43c9-8289-adfd9fc8bded',
            'withdrawnDate' => '2020-12-12',
            'videoCount' => 10,
            'toc' => "0. Introduction\n1. Lorem ipsum dolor sit amet\n2. Nullam viverra ut finibus suscipit\n3. Etiam dictum cursus dolor\n4. Conclusions",
            'tableCount' => 10,
            'subtitle' => 'Neque porro quisquam est',
            'shortAbstract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra ut finibus suscipit',
            'reference' => 'foo',
            'publicationDate' => '2020-01-01',
            'place' => 'Earth, Milky Way',
            'pageInterval' => '1-326',
            'pageCount' => 10,
            'pageBreakdown' => '0',
            'oclc' => '1086518639',
            'longAbstract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra nulla ut finibus suscipit. Etiam dictum cursus dolor, in fringilla felis placerat sed. Fusce aliquam orci ut sapie lobortis, id cursus dolor dapibus. Nunc vitae ligula nec ex ornare pretium. Donec et purus ac ipsumfinibus faucibus. Fusce at ipsum velit.',
            'license' => 'https://creativecommons.org/licenses/by-nc/4.0/',
            'lccn' => '2014471418',
            'lastPage' => '326',
            'landingPage' => 'https://foo.bar/lorem-ipsum/',
            'imageCount' => 10,
            'generalNote' => 'Sed nunc dui, semper eu semper vel, bibendum in nulla.',
            'firstPage' => '1',
            'edition' => 10,
            'doi' => 'https://doi.org/10.00000/00000000',
            'coverUrl' => 'https://foo.bar/baz/qux',
            'coverCaption' => 'foobar',
            'copyrightHolder' => 'John Doe',
            'bibliographyNote' => 'Phasellus ac gravida odio. Mauris nec sodales odio',
            'audioCount' => 10
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateWorkMutation(): void
    {
        $mutationName = 'updateWork';
        $data = 'workId: "de7387a8-dd91-44ec-87c5-f8dba3f82b99", ' .
            'workType: BOOK_CHAPTER, ' .
            'workStatus: FORTHCOMING, ' .
            'fullTitle: "Lorem ipsum: Neque porro quisquam est", ' .
            'title: "Lorem ipsum", ' .
            'subtitle: "Neque porro quisquam est", ' .
            'reference: "foo", ' .
            'edition: 10, ' .
            'imprintId: "dd0410c9-d5f9-43c9-8289-adfd9fc8bded", ' .
            'doi: "https:\/\/doi.org\/10.00000\/00000000", ' .
            'publicationDate: "2020-01-01", ' .
            'withdrawnDate: "2020-12-12", ' .
            'place: "Earth, Milky Way", ' .
            'pageCount: 10, ' .
            'pageBreakdown: "0", ' .
            'imageCount: 10, ' .
            'tableCount: 10, ' .
            'audioCount: 10, ' .
            'videoCount: 10, ' .
            'license: "https:\/\/creativecommons.org\/licenses\/by-nc\/4.0\/", ' .
            'copyrightHolder: "John Doe", ' .
            'landingPage: "https:\/\/foo.bar\/lorem-ipsum\/", ' .
            'lccn: "2014471418", ' .
            'oclc: "1086518639", ' .
            'shortAbstract: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra ut finibus suscipit", ' .
            'longAbstract: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra nulla ut finibus suscipit. Etiam dictum cursus dolor, in fringilla felis placerat sed. Fusce aliquam orci ut sapie lobortis, id cursus dolor dapibus. Nunc vitae ligula nec ex ornare pretium. Donec et purus ac ipsumfinibus faucibus. Fusce at ipsum velit.", ' .
            'generalNote: "Sed nunc dui, semper eu semper vel, bibendum in nulla.", ' .
            'bibliographyNote: "Phasellus ac gravida odio. Mauris nec sodales odio", ' .
            'toc: "0. Introduction\n1. Lorem ipsum dolor sit amet\n2. Nullam viverra ut finibus suscipit\n3. Etiam dictum cursus dolor\n4. Conclusions", ' .
            'coverUrl: "https:\/\/foo.bar\/baz\/qux", ' .
            'coverCaption: "foobar", ' .
            'firstPage: "1", ' .
            'lastPage: "326", ' .
            'pageInterval: "1-326"';
        $returnValue = 'workId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateWork', [
            'workId' => 'de7387a8-dd91-44ec-87c5-f8dba3f82b99',
            'workType' => 'BOOK_CHAPTER',
            'workStatus' => 'FORTHCOMING',
            'fullTitle' => 'Lorem ipsum: Neque porro quisquam est',
            'title' => 'Lorem ipsum',
            'imprintId' => 'dd0410c9-d5f9-43c9-8289-adfd9fc8bded',
            'withdrawnDate' => '2020-12-12',
            'videoCount' => 10,
            'toc' => "0. Introduction\n1. Lorem ipsum dolor sit amet\n2. Nullam viverra ut finibus suscipit\n3. Etiam dictum cursus dolor\n4. Conclusions",
            'tableCount' => 10,
            'subtitle' => 'Neque porro quisquam est',
            'shortAbstract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra ut finibus suscipit',
            'reference' => 'foo',
            'publicationDate' => '2020-01-01',
            'place' => 'Earth, Milky Way',
            'pageInterval' => '1-326',
            'pageCount' => 10,
            'pageBreakdown' => '0',
            'oclc' => '1086518639',
            'longAbstract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra nulla ut finibus suscipit. Etiam dictum cursus dolor, in fringilla felis placerat sed. Fusce aliquam orci ut sapie lobortis, id cursus dolor dapibus. Nunc vitae ligula nec ex ornare pretium. Donec et purus ac ipsumfinibus faucibus. Fusce at ipsum velit.',
            'license' => 'https://creativecommons.org/licenses/by-nc/4.0/',
            'lccn' => '2014471418',
            'lastPage' => '326',
            'landingPage' => 'https://foo.bar/lorem-ipsum/',
            'imageCount' => 10,
            'generalNote' => 'Sed nunc dui, semper eu semper vel, bibendum in nulla.',
            'firstPage' => '1',
            'edition' => 10,
            'doi' => 'https://doi.org/10.00000/00000000',
            'coverUrl' => 'https://foo.bar/baz/qux',
            'coverCaption' => 'foobar',
            'copyrightHolder' => 'John Doe',
            'bibliographyNote' => 'Phasellus ac gravida odio. Mauris nec sodales odio',
            'audioCount' => 10
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteWorkMutation(): void
    {
        $mutationName = 'deleteWork';
        $data = 'workId: "de7387a8-dd91-44ec-87c5-f8dba3f82b99"';
        $returnValue = 'workId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteWork',
            ['workId' => 'de7387a8-dd91-44ec-87c5-f8dba3f82b99'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildCreateWorkRelationMutation(): void
    {
        $mutationName = 'createWorkRelation';
        $data = 'relatorWorkId: "2d4c0f2d-2618-4d29-b5e9-2a2ea0d57c06", ' .
            'relatedWorkId: "51caff7d-d70a-460f-b242-b3c8fd140abc", ' .
            'relationType: REPLACES, ' .
            'relationOrdinal: 10';
        $returnValue = 'workRelationId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('createWorkRelation', [
            'relatorWorkId' => '2d4c0f2d-2618-4d29-b5e9-2a2ea0d57c06',
            'relatedWorkId' => '51caff7d-d70a-460f-b242-b3c8fd140abc',
            'relationType' => 'REPLACES',
            'relationOrdinal' => 10
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildUpdateWorkRelationMutation(): void
    {
        $mutationName = 'updateWorkRelation';
        $data = 'workRelationId: "ed68c8bd-db8c-48b1-ad6e-c3ffedc36055", ' .
            'relatorWorkId: "2d4c0f2d-2618-4d29-b5e9-2a2ea0d57c06", ' .
            'relatedWorkId: "51caff7d-d70a-460f-b242-b3c8fd140abc", ' .
            'relationType: REPLACES, ' .
            'relationOrdinal: 10';
        $returnValue = 'workRelationId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                data: {{$data}}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build('updateWorkRelation', [
            'workRelationId' => 'ed68c8bd-db8c-48b1-ad6e-c3ffedc36055',
            'relatorWorkId' => '2d4c0f2d-2618-4d29-b5e9-2a2ea0d57c06',
            'relatedWorkId' => '51caff7d-d70a-460f-b242-b3c8fd140abc',
            'relationType' => 'REPLACES',
            'relationOrdinal' => 10
        ]);

        $this->assertSame($expectedMutation, $mutation);
    }

    public function testBuildDeleteWorkRelationMutation(): void
    {
        $mutationName = 'deleteWorkRelation';
        $data = 'workRelationId: "ed68c8bd-db8c-48b1-ad6e-c3ffedc36055"';
        $returnValue = 'workRelationId';

        $expectedMutation = <<<GQL
        mutation {
            {$mutationName}(
                {$data}
            ) {
                {$returnValue}
            }
        }
        GQL;

        $mutation = MutationBuilder::build(
            'deleteWorkRelation',
            ['workRelationId' => 'ed68c8bd-db8c-48b1-ad6e-c3ffedc36055'],
            false
        );

        $this->assertSame($expectedMutation, $mutation);
    }
}
