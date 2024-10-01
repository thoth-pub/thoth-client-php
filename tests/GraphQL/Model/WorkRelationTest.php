<?php

namespace ThothClient\Tests\GraphQL\Model;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Model\WorkRelation;

final class WorkRelationTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $workRelationId = 'a0ea02a5-2b45-43f0-af23-749e756f4d83';
        $relatorWorkId = '5aaef26d-5d3f-4833-90f5-b5e8cede080b';
        $relatedWorkId = 'd344344d-90cb-403e-b999-4206d13ebe8c';
        $relationType = WorkRelation::RELATION_TYPE_REPLACES;
        $relationOrdinal = 1;

        $workRelation = new WorkRelation();
        $workRelation->setWorkRelationId($workRelationId);
        $workRelation->setRelatorWorkId($relatorWorkId);
        $workRelation->setRelatedWorkId($relatedWorkId);
        $workRelation->setRelationType($relationType);
        $workRelation->setRelationOrdinal($relationOrdinal);

        $this->assertSame($workRelationId, $workRelation->getWorkRelationId());
        $this->assertSame($relatorWorkId, $workRelation->getRelatorWorkId());
        $this->assertSame($relatedWorkId, $workRelation->getRelatedWorkId());
        $this->assertSame($relationType, $workRelation->getRelationType());
        $this->assertSame($relationOrdinal, $workRelation->getRelationOrdinal());
    }
}
