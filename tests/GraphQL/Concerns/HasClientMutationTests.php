<?php

namespace ThothApi\Tests\GraphQL\Concerns;

use GuzzleHttp\Psr7\Response;
use ThothApi\GraphQL\Models\Affiliation;
use ThothApi\GraphQL\Models\Contribution;
use ThothApi\GraphQL\Models\Contributor;
use ThothApi\GraphQL\Models\Funding;
use ThothApi\GraphQL\Models\Imprint;
use ThothApi\GraphQL\Models\Institution;
use ThothApi\GraphQL\Models\Issue;
use ThothApi\GraphQL\Models\Language;
use ThothApi\GraphQL\Models\Location;
use ThothApi\GraphQL\Models\Price;
use ThothApi\GraphQL\Models\Publication;
use ThothApi\GraphQL\Models\Publisher;
use ThothApi\GraphQL\Models\Reference;
use ThothApi\GraphQL\Models\Series;
use ThothApi\GraphQL\Models\Subject;
use ThothApi\GraphQL\Models\Work;
use ThothApi\GraphQL\Models\WorkRelation;

trait HasClientMutationTests
{
    public function testCreateAffiliation(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createAffiliation' => [
                    'affiliationId' => 'e435b256-681c-4118-a3b5-bba22cb6fe7f'
                ]
            ]
        ])));

        $affiliation = new Affiliation();
        $result = $this->client->createAffiliation($affiliation);
        $this->assertSame('e435b256-681c-4118-a3b5-bba22cb6fe7f', $result);
    }

    public function testUpdateAffiliation(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateAffiliation' => [
                    'affiliationId' => 'e435b256-681c-4118-a3b5-bba22cb6fe7f'
                ]
            ]
        ])));

        $affiliation = new Affiliation();
        $result = $this->client->updateAffiliation($affiliation);
        $this->assertSame('e435b256-681c-4118-a3b5-bba22cb6fe7f', $result);
    }

    public function testDeleteAffiliation(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteAffiliation' => [
                    'affiliationId' => 'e435b256-681c-4118-a3b5-bba22cb6fe7f'
                ]
            ]
        ])));

        $result = $this->client->deleteAffiliation('e435b256-681c-4118-a3b5-bba22cb6fe7f');
        $this->assertSame('e435b256-681c-4118-a3b5-bba22cb6fe7f', $result);
    }

    public function testCreateContribution(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createContribution' => [
                    'contributionId' => '5448ca99-ae7d-4347-9170-b8ffa067ebbf'
                ]
            ]
        ])));

        $contribution = new Contribution();
        $result = $this->client->createContribution($contribution);
        $this->assertSame('5448ca99-ae7d-4347-9170-b8ffa067ebbf', $result);
    }

    public function testUpdateContribution(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateContribution' => [
                    'contributionId' => '5448ca99-ae7d-4347-9170-b8ffa067ebbf'
                ]
            ]
        ])));

        $contribution = new Contribution();
        $result = $this->client->updateContribution($contribution);
        $this->assertSame('5448ca99-ae7d-4347-9170-b8ffa067ebbf', $result);
    }

    public function testDeleteContribution(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteContribution' => [
                    'contributionId' => '5448ca99-ae7d-4347-9170-b8ffa067ebbf'
                ]
            ]
        ])));

        $result = $this->client->deleteContribution('5448ca99-ae7d-4347-9170-b8ffa067ebbf');
        $this->assertSame('5448ca99-ae7d-4347-9170-b8ffa067ebbf', $result);
    }

    public function testCreateContributor(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createContributor' => [
                    'contributorId' => '2724eca4-0d31-44ba-bbf4-19061a9637ce'
                ]
            ]
        ])));

        $contributor = new Contributor();
        $result = $this->client->createContributor($contributor);
        $this->assertSame('2724eca4-0d31-44ba-bbf4-19061a9637ce', $result);
    }

    public function testUpdateContributor(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateContributor' => [
                    'contributorId' => '2724eca4-0d31-44ba-bbf4-19061a9637ce'
                ]
            ]
        ])));

        $contributor = new Contributor();
        $result = $this->client->updateContributor($contributor);
        $this->assertSame('2724eca4-0d31-44ba-bbf4-19061a9637ce', $result);
    }

    public function testDeleteContributor(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteContributor' => [
                    'contributorId' => '2724eca4-0d31-44ba-bbf4-19061a9637ce'
                ]
            ]
        ])));

        $result = $this->client->deleteContributor('2724eca4-0d31-44ba-bbf4-19061a9637ce');
        $this->assertSame('2724eca4-0d31-44ba-bbf4-19061a9637ce', $result);
    }

    public function testCreateFunding(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createFunding' => [
                    'fundingId' => 'bba5f263-3442-4a4e-8b2b-752a238b9c03'
                ]
            ]
        ])));

        $funding = new Funding();
        $result = $this->client->createFunding($funding);
        $this->assertSame('bba5f263-3442-4a4e-8b2b-752a238b9c03', $result);
    }

    public function testUpdateFunding(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateFunding' => [
                    'fundingId' => 'bba5f263-3442-4a4e-8b2b-752a238b9c03'
                ]
            ]
        ])));

        $funding = new Funding();
        $result = $this->client->updateFunding($funding);
        $this->assertSame('bba5f263-3442-4a4e-8b2b-752a238b9c03', $result);
    }

    public function testDeleteFunding(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteFunding' => [
                    'fundingId' => 'bba5f263-3442-4a4e-8b2b-752a238b9c03'
                ]
            ]
        ])));

        $result = $this->client->deleteFunding('bba5f263-3442-4a4e-8b2b-752a238b9c03');
        $this->assertSame('bba5f263-3442-4a4e-8b2b-752a238b9c03', $result);
    }

    public function testCreateImprint(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createImprint' => [
                    'imprintId' => '7485750d-c8cf-4a7e-9a6c-c080b932dbd9'
                ]
            ]
        ])));

        $imprint = new Imprint();
        $result = $this->client->createImprint($imprint);
        $this->assertSame('7485750d-c8cf-4a7e-9a6c-c080b932dbd9', $result);
    }

    public function testUpdateImprint(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateImprint' => [
                    'imprintId' => '7485750d-c8cf-4a7e-9a6c-c080b932dbd9'
                ]
            ]
        ])));

        $imprint = new Imprint();
        $result = $this->client->updateImprint($imprint);
        $this->assertSame('7485750d-c8cf-4a7e-9a6c-c080b932dbd9', $result);
    }

    public function testDeleteImprint(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteImprint' => [
                    'imprintId' => '7485750d-c8cf-4a7e-9a6c-c080b932dbd9'
                ]
            ]
        ])));

        $result = $this->client->deleteImprint('7485750d-c8cf-4a7e-9a6c-c080b932dbd9');
        $this->assertSame('7485750d-c8cf-4a7e-9a6c-c080b932dbd9', $result);
    }

    public function testCreateInstitution(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createInstitution' => [
                    'institutionId' => 'a71debc6-0172-4cf5-b4c4-f932915ffce3'
                ]
            ]
        ])));

        $institution = new Institution();
        $result = $this->client->createInstitution($institution);
        $this->assertSame('a71debc6-0172-4cf5-b4c4-f932915ffce3', $result);
    }

    public function testUpdateInstitution(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateInstitution' => [
                    'institutionId' => 'a71debc6-0172-4cf5-b4c4-f932915ffce3'
                ]
            ]
        ])));

        $institution = new Institution();
        $result = $this->client->updateInstitution($institution);
        $this->assertSame('a71debc6-0172-4cf5-b4c4-f932915ffce3', $result);
    }

    public function testDeleteInstitution(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteInstitution' => [
                    'institutionId' => 'a71debc6-0172-4cf5-b4c4-f932915ffce3'
                ]
            ]
        ])));

        $result = $this->client->deleteInstitution('a71debc6-0172-4cf5-b4c4-f932915ffce3');
        $this->assertSame('a71debc6-0172-4cf5-b4c4-f932915ffce3', $result);
    }

    public function testCreateIssue(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createIssue' => [
                    'issueId' => 'df439ff0-a8ed-4972-aada-956fb0bb27ce'
                ]
            ]
        ])));

        $issue = new Issue();
        $result = $this->client->createIssue($issue);
        $this->assertSame('df439ff0-a8ed-4972-aada-956fb0bb27ce', $result);
    }

    public function testUpdateIssue(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateIssue' => [
                    'issueId' => 'df439ff0-a8ed-4972-aada-956fb0bb27ce'
                ]
            ]
        ])));

        $issue = new Issue();
        $result = $this->client->updateIssue($issue);
        $this->assertSame('df439ff0-a8ed-4972-aada-956fb0bb27ce', $result);
    }

    public function testDeleteIssue(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteIssue' => [
                    'issueId' => 'df439ff0-a8ed-4972-aada-956fb0bb27ce'
                ]
            ]
        ])));

        $result = $this->client->deleteIssue('df439ff0-a8ed-4972-aada-956fb0bb27ce');
        $this->assertSame('df439ff0-a8ed-4972-aada-956fb0bb27ce', $result);
    }

    public function testCreateLanguage(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createLanguage' => [
                    'languageId' => '1584d8e2-b856-4519-a507-c2399af11af5'
                ]
            ]
        ])));

        $language = new Language();
        $result = $this->client->createLanguage($language);
        $this->assertSame('1584d8e2-b856-4519-a507-c2399af11af5', $result);
    }

    public function testUpdateLanguage(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateLanguage' => [
                    'languageId' => '1584d8e2-b856-4519-a507-c2399af11af5'
                ]
            ]
        ])));

        $language = new Language();
        $result = $this->client->updateLanguage($language);
        $this->assertSame('1584d8e2-b856-4519-a507-c2399af11af5', $result);
    }

    public function testDeleteLanguage(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteLanguage' => [
                    'languageId' => '1584d8e2-b856-4519-a507-c2399af11af5'
                ]
            ]
        ])));

        $result = $this->client->deleteLanguage('1584d8e2-b856-4519-a507-c2399af11af5');
        $this->assertSame('1584d8e2-b856-4519-a507-c2399af11af5', $result);
    }

    public function testCreateLocation(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createLocation' => [
                    'locationId' => 'c45e9a4a-80e1-46c2-8845-61bf4263255e'
                ]
            ]
        ])));

        $location = new Location();
        $result = $this->client->createLocation($location);
        $this->assertSame('c45e9a4a-80e1-46c2-8845-61bf4263255e', $result);
    }

    public function testUpdateLocation(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateLocation' => [
                    'locationId' => 'c45e9a4a-80e1-46c2-8845-61bf4263255e'
                ]
            ]
        ])));

        $location = new Location();
        $result = $this->client->updateLocation($location);
        $this->assertSame('c45e9a4a-80e1-46c2-8845-61bf4263255e', $result);
    }

    public function testDeleteLocation(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteLocation' => [
                    'locationId' => 'c45e9a4a-80e1-46c2-8845-61bf4263255e'
                ]
            ]
        ])));

        $result = $this->client->deleteLocation('c45e9a4a-80e1-46c2-8845-61bf4263255e');
        $this->assertSame('c45e9a4a-80e1-46c2-8845-61bf4263255e', $result);
    }

    public function testCreatePrice(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createPrice' => [
                    'priceId' => '38e96434-88a3-4f1c-9c39-b9160000c61a'
                ]
            ]
        ])));

        $price = new Price();
        $result = $this->client->createPrice($price);
        $this->assertSame('38e96434-88a3-4f1c-9c39-b9160000c61a', $result);
    }

    public function testUpdatePrice(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updatePrice' => [
                    'priceId' => '38e96434-88a3-4f1c-9c39-b9160000c61a'
                ]
            ]
        ])));

        $price = new Price();
        $result = $this->client->updatePrice($price);
        $this->assertSame('38e96434-88a3-4f1c-9c39-b9160000c61a', $result);
    }

    public function testDeletePrice(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deletePrice' => [
                    'priceId' => '38e96434-88a3-4f1c-9c39-b9160000c61a'
                ]
            ]
        ])));

        $result = $this->client->deletePrice('38e96434-88a3-4f1c-9c39-b9160000c61a');
        $this->assertSame('38e96434-88a3-4f1c-9c39-b9160000c61a', $result);
    }

    public function testCreatePublication(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createPublication' => [
                    'publicationId' => '01fec4e9-fbff-4c2e-9752-a0562a506e4d'
                ]
            ]
        ])));

        $publication = new Publication();
        $result = $this->client->createPublication($publication);
        $this->assertSame('01fec4e9-fbff-4c2e-9752-a0562a506e4d', $result);
    }

    public function testUpdatePublication(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updatePublication' => [
                    'publicationId' => '01fec4e9-fbff-4c2e-9752-a0562a506e4d'
                ]
            ]
        ])));

        $publication = new Publication();
        $result = $this->client->updatePublication($publication);
        $this->assertSame('01fec4e9-fbff-4c2e-9752-a0562a506e4d', $result);
    }

    public function testDeletePublication(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deletePublication' => [
                    'publicationId' => '01fec4e9-fbff-4c2e-9752-a0562a506e4d'
                ]
            ]
        ])));

        $result = $this->client->deletePublication('01fec4e9-fbff-4c2e-9752-a0562a506e4d');
        $this->assertSame('01fec4e9-fbff-4c2e-9752-a0562a506e4d', $result);
    }

    public function testCreatePublisher(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createPublisher' => [
                    'publisherId' => 'a77ef552-856c-4585-9d35-fd58d2190b1b'
                ]
            ]
        ])));

        $publisher = new Publisher();
        $result = $this->client->createPublisher($publisher);
        $this->assertSame('a77ef552-856c-4585-9d35-fd58d2190b1b', $result);
    }

    public function testUpdatePublisher(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updatePublisher' => [
                    'publisherId' => 'a77ef552-856c-4585-9d35-fd58d2190b1b'
                ]
            ]
        ])));

        $publisher = new Publisher();
        $result = $this->client->updatePublisher($publisher);
        $this->assertSame('a77ef552-856c-4585-9d35-fd58d2190b1b', $result);
    }

    public function testDeletePublisher(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deletePublisher' => [
                    'publisherId' => 'a77ef552-856c-4585-9d35-fd58d2190b1b'
                ]
            ]
        ])));

        $result = $this->client->deletePublisher('a77ef552-856c-4585-9d35-fd58d2190b1b');
        $this->assertSame('a77ef552-856c-4585-9d35-fd58d2190b1b', $result);
    }

    public function testCreateReference(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createReference' => [
                    'referenceId' => '6b4060ff-a89b-4bdc-b722-2b87ef9d057a'
                ]
            ]
        ])));

        $reference = new Reference();
        $result = $this->client->createReference($reference);
        $this->assertSame('6b4060ff-a89b-4bdc-b722-2b87ef9d057a', $result);
    }

    public function testUpdateReference(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateReference' => [
                    'referenceId' => '6b4060ff-a89b-4bdc-b722-2b87ef9d057a'
                ]
            ]
        ])));

        $reference = new Reference();
        $result = $this->client->updateReference($reference);
        $this->assertSame('6b4060ff-a89b-4bdc-b722-2b87ef9d057a', $result);
    }

    public function testDeleteReference(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteReference' => [
                    'referenceId' => '6b4060ff-a89b-4bdc-b722-2b87ef9d057a'
                ]
            ]
        ])));

        $result = $this->client->deleteReference('6b4060ff-a89b-4bdc-b722-2b87ef9d057a');
        $this->assertSame('6b4060ff-a89b-4bdc-b722-2b87ef9d057a', $result);
    }

    public function testCreateSeries(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createSeries' => [
                    'seriesId' => 'dc4ed0f7-89a4-4760-aad3-adec7294706d'
                ]
            ]
        ])));

        $series = new Series();
        $result = $this->client->createSeries($series);
        $this->assertSame('dc4ed0f7-89a4-4760-aad3-adec7294706d', $result);
    }

    public function testUpdateSeries(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateSeries' => [
                    'seriesId' => 'dc4ed0f7-89a4-4760-aad3-adec7294706d'
                ]
            ]
        ])));

        $series = new Series();
        $result = $this->client->updateSeries($series);
        $this->assertSame('dc4ed0f7-89a4-4760-aad3-adec7294706d', $result);
    }

    public function testDeleteSeries(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteSeries' => [
                    'seriesId' => 'dc4ed0f7-89a4-4760-aad3-adec7294706d'
                ]
            ]
        ])));

        $result = $this->client->deleteSeries('dc4ed0f7-89a4-4760-aad3-adec7294706d');
        $this->assertSame('dc4ed0f7-89a4-4760-aad3-adec7294706d', $result);
    }

    public function testCreateSubject(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createSubject' => [
                    'subjectId' => 'e7ab386e-186a-4b1c-aa6f-e974b8a1e3cd'
                ]
            ]
        ])));

        $subject = new Subject();
        $result = $this->client->createSubject($subject);
        $this->assertSame('e7ab386e-186a-4b1c-aa6f-e974b8a1e3cd', $result);
    }

    public function testUpdateSubject(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateSubject' => [
                    'subjectId' => 'e7ab386e-186a-4b1c-aa6f-e974b8a1e3cd'
                ]
            ]
        ])));

        $subject = new Subject();
        $result = $this->client->updateSubject($subject);
        $this->assertSame('e7ab386e-186a-4b1c-aa6f-e974b8a1e3cd', $result);
    }

    public function testDeleteSubject(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteSubject' => [
                    'subjectId' => 'e7ab386e-186a-4b1c-aa6f-e974b8a1e3cd'
                ]
            ]
        ])));

        $result = $this->client->deleteSubject('e7ab386e-186a-4b1c-aa6f-e974b8a1e3cd');
        $this->assertSame('e7ab386e-186a-4b1c-aa6f-e974b8a1e3cd', $result);
    }

    public function testCreateWork(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createWork' => [
                    'workId' => 'd81bab71-d9fe-456b-9951-2308b91db2b4'
                ]
            ]
        ])));

        $work = new Work();
        $result = $this->client->createWork($work);
        $this->assertSame('d81bab71-d9fe-456b-9951-2308b91db2b4', $result);
    }

    public function testUpdateWork(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateWork' => [
                    'workId' => 'd81bab71-d9fe-456b-9951-2308b91db2b4'
                ]
            ]
        ])));

        $work = new Work();
        $result = $this->client->updateWork($work);
        $this->assertSame('d81bab71-d9fe-456b-9951-2308b91db2b4', $result);
    }

    public function testDeleteWork(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteWork' => [
                    'workId' => 'd81bab71-d9fe-456b-9951-2308b91db2b4'
                ]
            ]
        ])));

        $result = $this->client->deleteWork('d81bab71-d9fe-456b-9951-2308b91db2b4');
        $this->assertSame('d81bab71-d9fe-456b-9951-2308b91db2b4', $result);
    }

    public function testCreateWorkRelation(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'createWorkRelation' => [
                    'workRelationId' => '64019725-3e50-41de-a785-e4e5ddc4620a'
                ]
            ]
        ])));

        $workRelation = new WorkRelation();
        $result = $this->client->createWorkRelation($workRelation);
        $this->assertSame('64019725-3e50-41de-a785-e4e5ddc4620a', $result);
    }

    public function testUpdateWorkRelation(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'updateWorkRelation' => [
                    'workRelationId' => '64019725-3e50-41de-a785-e4e5ddc4620a'
                ]
            ]
        ])));

        $workRelation = new WorkRelation();
        $result = $this->client->updateWorkRelation($workRelation);
        $this->assertSame('64019725-3e50-41de-a785-e4e5ddc4620a', $result);
    }

    public function testDeleteWorkRelation(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'deleteWorkRelation' => [
                    'workRelationId' => '64019725-3e50-41de-a785-e4e5ddc4620a'
                ]
            ]
        ])));

        $result = $this->client->deleteWorkRelation('64019725-3e50-41de-a785-e4e5ddc4620a');
        $this->assertSame('64019725-3e50-41de-a785-e4e5ddc4620a', $result);
    }
}
