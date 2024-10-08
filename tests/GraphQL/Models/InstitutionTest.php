<?php

namespace ThothClient\Tests\GraphQL\Models;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Models\Institution;

final class InstitutionTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $institutionId = 'bcf67436-d664-48ba-b6e1-7a0a775a31fc';
        $institutionName = 'FooBar';
        $institutionDoi = 'https://doi.org/10.55555/100000001';
        $countryCode = 'USA';
        $ror = 'https://ror.org/012x3z456';

        $institution = new Institution();
        $institution->setInstitutionId($institutionId);
        $institution->setInstitutionName($institutionName);
        $institution->setInstitutionDoi($institutionDoi);
        $institution->setCountryCode($countryCode);
        $institution->setRor($ror);

        $this->assertSame($institutionId, $institution->getInstitutionId());
        $this->assertSame($institutionName, $institution->getInstitutionName());
        $this->assertSame($institutionDoi, $institution->getInstitutionDoi());
        $this->assertSame($countryCode, $institution->getCountryCode());
        $this->assertSame($ror, $institution->getRor());
    }
}
