<?php

namespace ThothClient\Tests\GraphQL\Model;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Model\Contribution;

final class ContributionTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $contributionId = 'dff64b2e-f416-41c1-9884-be3f05cd216b';
        $contributorId = 'fc6484de-0bf9-416d-90a0-2914399a92bc';
        $workId = '0ab6f141-f7c0-419e-92c7-9e719bc90ab0';
        $contributionType = Contribution::CONTRIBUTION_TYPE_AUTHOR;
        $mainContribution = true;
        $biography = 'purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam';
        $firstName = 'Cassady';
        $lastName = 'Browning';
        $fullName = 'Cassady Browning';
        $contributionOrdinal = 1;

        $contribution = new Contribution();
        $contribution->setContributionId($contributionId);
        $contribution->setContributorId($contributorId);
        $contribution->setWorkId($workId);
        $contribution->setContributionType($contributionType);
        $contribution->setMainContribution($mainContribution);
        $contribution->setBiography($biography);
        $contribution->setFirstName($firstName);
        $contribution->setLastName($lastName);
        $contribution->setFullName($fullName);
        $contribution->setContributionOrdinal($contributionOrdinal);

        $this->assertSame($contributionId, $contribution->getContributionId());
        $this->assertSame($contributorId, $contribution->getContributorId());
        $this->assertSame($workId, $contribution->getWorkId());
        $this->assertSame($contributionType, $contribution->getContributionType());
        $this->assertSame($mainContribution, $contribution->getMainContribution());
        $this->assertSame($biography, $contribution->getBiography());
        $this->assertSame($firstName, $contribution->getFirstName());
        $this->assertSame($lastName, $contribution->getLastName());
        $this->assertSame($fullName, $contribution->getFullName());
        $this->assertSame($contributionOrdinal, $contribution->getContributionOrdinal());
    }
}
