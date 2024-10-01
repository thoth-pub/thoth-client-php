<?php

namespace ThothClient\Tests\GraphQL\Model;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Model\Funding;

final class FundingTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $fundingId = '8cb6588f-5f12-47ea-907e-698c625e0216';
        $workId = '8cb6588f-5f12-47ea-907e-698c625e0216';
        $institutionId = '62f1f908-ea49-4c7c-ae44-bed666ac2f6e';
        $program = 'Mauris sit amet lorem semper';
        $projectName = 'Arcu. Vivamus sit amet';
        $projectShortName = 'AVsa';
        $grantNumber = '1 R01 CA 123456-01A1';
        $jurisdiction = 'Canada';

        $funding = new Funding();
        $funding->setFundingId($fundingId);
        $funding->setWorkId($workId);
        $funding->setInstitutionId($institutionId);
        $funding->setProgram($program);
        $funding->setProjectName($projectName);
        $funding->setProjectShortName($projectShortName);
        $funding->setGrantNumber($grantNumber);
        $funding->setJurisdiction($jurisdiction);

        $this->assertSame($fundingId, $funding->getFundingId());
        $this->assertSame($workId, $funding->getWorkId());
        $this->assertSame($institutionId, $funding->getInstitutionId());
        $this->assertSame($program, $funding->getProgram());
        $this->assertSame($projectName, $funding->getProjectName());
        $this->assertSame($projectShortName, $funding->getProjectShortName());
        $this->assertSame($grantNumber, $funding->getGrantNumber());
        $this->assertSame($jurisdiction, $funding->getJurisdiction());
    }
}
