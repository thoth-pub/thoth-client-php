<?php

namespace ThothClient\Tests\GraphQL\Model;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Model\Issue;

final class IssueTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $issueId = '58d488a8-24c8-4efd-870b-0d62fc78a197';
        $workId = 'd6dba809-eb49-4211-a9d3-05b3c2acfecf';
        $seriesId = 'f09f7a9e-147b-444b-af1f-480dbd8a181e';
        $issueOrdinal = 1;

        $issue = new Issue();
        $issue->setIssueId($issueId);
        $issue->setWorkId($workId);
        $issue->setSeriesId($seriesId);
        $issue->setIssueOrdinal($issueOrdinal);

        $this->assertSame($issueId, $issue->getIssueId());
        $this->assertSame($workId, $issue->getWorkId());
        $this->assertSame($seriesId, $issue->getSeriesId());
        $this->assertSame($issueOrdinal, $issue->getIssueOrdinal());
    }
}
