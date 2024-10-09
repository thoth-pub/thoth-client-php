<?php

namespace ThothClient\Tests\GraphQL\Models;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Models\Affiliation;

final class AffiliationTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $affiliation = new Affiliation();
        $affiliation->setAffiliationId('aef9abbd-5570-434e-af90-04ee447625dd');
        $affiliation->setContributionId('9dc580ba-8fd0-4e66-9165-cddbf500d4bd');
        $affiliation->setInstitutionId('d1c90c01-6a8b-4589-a8e2-27a9e8092b5d');
        $affiliation->setAffiliationOrdinal(1);
        $affiliation->setPosition('Senior Professor');

        $this->assertEquals('aef9abbd-5570-434e-af90-04ee447625dd', $affiliation->getAffiliationId());
        $this->assertEquals('9dc580ba-8fd0-4e66-9165-cddbf500d4bd', $affiliation->getContributionId());
        $this->assertEquals('d1c90c01-6a8b-4589-a8e2-27a9e8092b5d', $affiliation->getInstitutionId());
        $this->assertEquals(1, $affiliation->getAffiliationOrdinal());
        $this->assertEquals('Senior Professor', $affiliation->getPosition());
    }
}
