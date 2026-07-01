<?php

namespace ThothApi\Tests\GraphQL;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Queries\WorksQuery;
use ThothApi\GraphQL\SchemaSelection;

final class SchemaSelectionTest extends TestCase
{
    public function testItBuildsScalarSelectionForSchema(): void
    {
        $selection = SchemaSelection::for('Work');

        $this->assertContains('workId', $selection);
        $this->assertContains('fullTitle', $selection);
        $this->assertNotContains('imprint', $selection);
    }

    public function testItBuildsNestedSelectionForSchema(): void
    {
        $selection = SchemaSelection::for('Work', 2);

        $this->assertArrayHasKey('imprint', $selection);
        $this->assertContains('imprintId', $selection['imprint']);
        $this->assertContains('imprintName', $selection['imprint']);
        $this->assertNotContains('publisher', $selection['imprint']);
    }

    public function testItBuildsSelectionAcceptedByGeneratedQueries(): void
    {
        $query = WorksQuery::operation(['limit' => 1], SchemaSelection::for('Work', 2))->toGraphQL();

        $this->assertStringContainsString('works(limit: $limit) {', $query);
        $this->assertStringContainsString('fullTitle', $query);
        $this->assertStringContainsString('imprint {', $query);
        $this->assertStringContainsString('imprintId', $query);
    }

    public function testItRejectsInvalidDepth(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Depth must be greater than zero.');

        SchemaSelection::for('Work', 0);
    }
}
