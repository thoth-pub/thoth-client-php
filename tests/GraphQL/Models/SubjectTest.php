<?php

namespace ThothApi\Tests\GraphQL\Models;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Models\Subject;

final class SubjectTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $subjectId = '9ffc03b9-d6e2-43e9-a9bb-d89b78e29d3b';
        $workId = '40ee65cd-b1ab-47ee-bc32-efca41747f57';
        $subjectType = Subject::SUBJECT_TYPE_BIC;
        $subjectCode = 'Foo';
        $subjectOrdinal = 1;

        $subject = new Subject();
        $subject->setSubjectId($subjectId);
        $subject->setWorkId($workId);
        $subject->setSubjectType($subjectType);
        $subject->setSubjectCode($subjectCode);
        $subject->setSubjectOrdinal($subjectOrdinal);

        $this->assertSame($subjectId, $subject->getSubjectId());
        $this->assertSame($workId, $subject->getWorkId());
        $this->assertSame($subjectType, $subject->getSubjectType());
        $this->assertSame($subjectCode, $subject->getSubjectCode());
        $this->assertSame($subjectOrdinal, $subject->getSubjectOrdinal());
    }
}
