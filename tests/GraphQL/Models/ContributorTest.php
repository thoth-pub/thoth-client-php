<?php

namespace ThothClient\Tests\GraphQL\Models;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Models\Contributor;

final class ContributorTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $contributorId = '4d59262b-6ce8-481c-be39-b6b03ef9db2d';
        $firstName = 'Shad';
        $lastName = 'Maynard';
        $fullName = 'Shad Maynard';
        $orcid = 'https://orcid.org/0000-0000-0000-0000';
        $website = 'https://www.shadmaynard.com/';

        $contributor = new Contributor();
        $contributor->setContributorId($contributorId);
        $contributor->setFirstName($firstName);
        $contributor->setLastName($lastName);
        $contributor->setFullName($fullName);
        $contributor->setOrcid($orcid);
        $contributor->setWebsite($website);

        $this->assertSame($contributorId, $contributor->getContributorId());
        $this->assertSame($firstName, $contributor->getFirstName());
        $this->assertSame($lastName, $contributor->getLastName());
        $this->assertSame($fullName, $contributor->getFullName());
        $this->assertSame($orcid, $contributor->getOrcid());
        $this->assertSame($website, $contributor->getWebsite());
    }
}
