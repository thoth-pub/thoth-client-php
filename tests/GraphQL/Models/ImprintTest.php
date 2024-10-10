<?php

namespace ThothApi\Tests\GraphQL\Models;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Models\Imprint;

final class ImprintTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $imprintId = '750355d8-44a8-43ff-ae29-1e6ae05510cb';
        $publisherId = 'eac9c4ab-ed52-4482-8181-e03398904269';
        $imprintName = 'FooBar';
        $imprintUrl = 'https://foo.bar/';
        $crossmarkDoi = 'https://doi.org/10.5555/12345678';

        $imprint = new Imprint();
        $imprint->setImprintId($imprintId);
        $imprint->setPublisherId($publisherId);
        $imprint->setImprintName($imprintName);
        $imprint->setImprintUrl($imprintUrl);
        $imprint->setCrossmarkDoi($crossmarkDoi);

        $this->assertSame($imprintId, $imprint->getImprintId());
        $this->assertSame($publisherId, $imprint->getPublisherId());
        $this->assertSame($imprintName, $imprint->getImprintName());
        $this->assertSame($imprintUrl, $imprint->getImprintUrl());
        $this->assertSame($crossmarkDoi, $imprint->getCrossmarkDoi());
    }
}
