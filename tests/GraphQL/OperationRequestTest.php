<?php

namespace ThothApi\Tests\GraphQL;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Definition\ArgumentDefinition;
use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\Definition\TypeReference;
use ThothApi\GraphQL\Enums\Direction;
use ThothApi\GraphQL\Enums\WorkField;
use ThothApi\GraphQL\Enums\WorkStatus;
use ThothApi\GraphQL\Enums\WorkType;
use ThothApi\GraphQL\OperationRequest;

final class OperationRequestTest extends TestCase
{
    public function testItBuildsAQueryWithVariablesAndSelection(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition(
                'books',
                TypeReference::nonNull(TypeReference::listOf(TypeReference::nonNull(TypeReference::named('Work')))),
                [
                    new ArgumentDefinition('limit', TypeReference::named('Int')),
                    new ArgumentDefinition('order', TypeReference::named('WorkOrderBy')),
                ]
            ),
            [
                'limit' => 1,
                'order' => [
                    'field' => OperationRequest::enum('PUBLICATION_DATE'),
                    'direction' => OperationRequest::enum('ASC'),
                ],
            ],
            ['workId', 'fullTitle']
        );

        $expected = <<<GQL
        query (\$limit: Int, \$order: WorkOrderBy) {
            books(limit: \$limit, order: \$order) {
                workId
                fullTitle
            }
        }
        GQL;

        $this->assertSame($expected, $operation->toGraphQL());
        $this->assertSame([
            'limit' => 1,
            'order' => [
                'field' => 'PUBLICATION_DATE',
                'direction' => 'ASC',
            ],
        ], $operation->getVariables());
    }

    public function testItBuildsAMutationWithInputDataAndSelection(): void
    {
        $operation = new OperationRequest(
            'mutation',
            new FieldDefinition(
                'createPublisher',
                TypeReference::nonNull(TypeReference::named('Publisher')),
                [
                    new ArgumentDefinition('data', TypeReference::nonNull(TypeReference::named('NewPublisher'))),
                ]
            ),
            [
                'data' => [
                    'publisherName' => 'ACME Press',
                    'publisherUrl' => 'https://example.test',
                ],
            ],
            ['publisherId']
        );

        $expected = <<<GQL
        mutation (\$data: NewPublisher!) {
            createPublisher(data: \$data) {
                publisherId
            }
        }
        GQL;

        $this->assertSame($expected, $operation->toGraphQL());
        $this->assertSame([
            'data' => [
                'publisherName' => 'ACME Press',
                'publisherUrl' => 'https://example.test',
            ],
        ], $operation->getVariables());
    }

    public function testItRejectsInvalidSelectionFields(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition('books', TypeReference::named('Work')),
            [],
            ['workId } malicious {']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid GraphQL identifier');

        $operation->toGraphQL();
    }

    public function testItRejectsUnknownSelectionFields(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition('books', TypeReference::named('Work')),
            [],
            ['workId', 'unknownField']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Unknown GraphQL field 'unknownField' for 'Work'.");

        $operation->toGraphQL();
    }

    public function testItRejectsUnknownNestedSelectionFields(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition('books', TypeReference::named('Work')),
            [],
            [
                'workId',
                'imprint' => [
                    'unknownField',
                ],
            ]
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Unknown GraphQL field 'unknownField' for 'Imprint'.");

        $operation->toGraphQL();
    }

    public function testItRejectsInvalidOperationFields(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition('books } malicious {', TypeReference::named('Work')),
            [],
            ['workId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid GraphQL identifier');

        $operation->toGraphQL();
    }

    public function testItRejectsInvalidInputFields(): void
    {
        $operation = new OperationRequest(
            'mutation',
            new FieldDefinition(
                'createPublisher',
                TypeReference::named('Publisher'),
                [
                    new ArgumentDefinition('data', TypeReference::named('NewPublisher')),
                ]
            ),
            [
                'data' => [
                    'publisherName } malicious {' => 'ACME Press',
                ],
            ],
            ['publisherId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid GraphQL identifier');

        $operation->toGraphQL();
    }

    public function testItRejectsUnknownInputFields(): void
    {
        $operation = new OperationRequest(
            'mutation',
            new FieldDefinition(
                'createPublisher',
                TypeReference::named('Publisher'),
                [
                    new ArgumentDefinition('data', TypeReference::named('NewPublisher')),
                ]
            ),
            [
                'data' => [
                    'publisherName' => 'ACME Press',
                    'unknownField' => 'value',
                ],
            ],
            ['publisherId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Unknown GraphQL input field 'unknownField' for 'NewPublisher'.");

        $operation->toGraphQL();
    }

    public function testItRejectsMissingRequiredInputFields(): void
    {
        $operation = new OperationRequest(
            'mutation',
            new FieldDefinition(
                'createPublisher',
                TypeReference::named('Publisher'),
                [
                    new ArgumentDefinition('data', TypeReference::named('NewPublisher')),
                ]
            ),
            [
                'data' => [
                    'publisherUrl' => 'https://example.test',
                ],
            ],
            ['publisherId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Missing required GraphQL input field 'publisherName' for 'NewPublisher'.");

        $operation->toGraphQL();
    }

    public function testItRejectsMissingRequiredOperationArguments(): void
    {
        $operation = new OperationRequest(
            'mutation',
            new FieldDefinition(
                'createPublisher',
                TypeReference::named('Publisher'),
                [
                    new ArgumentDefinition('data', TypeReference::nonNull(TypeReference::named('NewPublisher'))),
                ]
            ),
            [],
            ['publisherId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Missing required GraphQL argument 'data'.");

        $operation->toGraphQL();
    }

    public function testItRejectsUnknownOperationArguments(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition(
                'books',
                TypeReference::named('Work'),
                [
                    new ArgumentDefinition('limit', TypeReference::named('Int')),
                ]
            ),
            ['unknownArgument' => 1],
            ['workId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Unknown GraphQL argument 'unknownArgument' for 'books'.");

        $operation->toGraphQL();
    }

    public function testItRejectsInvalidEnumValues(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition(
                'books',
                TypeReference::named('Work'),
                [
                    new ArgumentDefinition('order', TypeReference::named('WorkOrderBy')),
                ]
            ),
            [
                'order' => [
                    'field' => OperationRequest::enum('FULL_TITLE) malicious'),
                ],
            ],
            ['workId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid GraphQL identifier');

        $operation->toGraphQL();
    }

    public function testItRejectsUnknownEnumValues(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition(
                'books',
                TypeReference::named('Work'),
                [
                    new ArgumentDefinition(
                        'workTypes',
                        TypeReference::listOf(TypeReference::nonNull(TypeReference::named('WorkType')))
                    ),
                ]
            ),
            [
                'workTypes' => [
                    \ThothApi\GraphQL\Enums\WorkType::value('NOT_A_WORK_TYPE'),
                ],
            ],
            ['workId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Invalid GraphQL enum value 'NOT_A_WORK_TYPE' for 'WorkType'.");

        $operation->toGraphQL();
    }

    public function testItRejectsInvalidScalarVariableTypes(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition(
                'books',
                TypeReference::named('Work'),
                [
                    new ArgumentDefinition('limit', TypeReference::named('Int')),
                ]
            ),
            ['limit' => '1'],
            ['workId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Invalid GraphQL value for 'Int'; expected int.");

        $operation->toGraphQL();
    }

    public function testItRejectsInvalidListVariableTypes(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition(
                'books',
                TypeReference::named('Work'),
                [
                    new ArgumentDefinition(
                        'workTypes',
                        TypeReference::listOf(TypeReference::nonNull(TypeReference::named('WorkType')))
                    ),
                ]
            ),
            ['workTypes' => WorkType::MONOGRAPH],
            ['workId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Invalid GraphQL value for '[WorkType!]'; expected list.");

        $operation->toGraphQL();
    }

    public function testItFormatsGeneratedEnumConstantsFromInputSchema(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition(
                'books',
                TypeReference::named('Work'),
                [
                    new ArgumentDefinition('order', TypeReference::named('WorkOrderBy')),
                ]
            ),
            [
                'order' => [
                    'field' => WorkField::PUBLICATION_DATE,
                    'direction' => Direction::DESC,
                ],
            ],
            ['workId']
        );

        $this->assertStringContainsString('books(order: $order)', $operation->toGraphQL());
        $this->assertSame([
            'order' => [
                'field' => 'PUBLICATION_DATE',
                'direction' => 'DESC',
            ],
        ], $operation->getVariables());
    }

    public function testItFormatsGeneratedEnumConstantsFromInputLists(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition(
                'books',
                TypeReference::named('Work'),
                [
                    new ArgumentDefinition(
                        'workTypes',
                        TypeReference::listOf(TypeReference::nonNull(TypeReference::named('WorkType')))
                    ),
                ]
            ),
            [
                'workTypes' => [
                    WorkType::MONOGRAPH,
                    WorkType::EDITED_BOOK,
                ],
            ],
            ['workId']
        );

        $this->assertStringContainsString('books(workTypes: $workTypes)', $operation->toGraphQL());
        $this->assertSame([
            'workTypes' => [
                'MONOGRAPH',
                'EDITED_BOOK',
            ],
        ], $operation->getVariables());
    }

    public function testItKeepsStringValuesQuotedWhenSchemaTypeIsString(): void
    {
        $operation = new OperationRequest(
            'mutation',
            new FieldDefinition(
                'createWork',
                TypeReference::named('Work'),
                [
                    new ArgumentDefinition('data', TypeReference::named('NewWork')),
                ]
            ),
            [
                'data' => [
                    'workType' => WorkType::MONOGRAPH,
                    'workStatus' => WorkStatus::ACTIVE,
                    'imprintId' => '71faf1c3-900a-4b8c-bca7-4f927699fb90',
                    'reference' => 'MONOGRAPH',
                ],
            ],
            ['workId']
        );

        $this->assertStringContainsString('createWork(data: $data)', $operation->toGraphQL());
        $this->assertSame([
            'data' => [
                'workType' => 'MONOGRAPH',
                'workStatus' => 'ACTIVE',
                'imprintId' => '71faf1c3-900a-4b8c-bca7-4f927699fb90',
                'reference' => 'MONOGRAPH',
            ],
        ], $operation->getVariables());
    }
}
