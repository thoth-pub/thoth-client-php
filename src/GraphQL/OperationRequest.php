<?php

namespace ThothApi\GraphQL;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\Operation\Identifier;
use ThothApi\GraphQL\Operation\SelectionFormatter;
use ThothApi\GraphQL\Operation\VariableFormatter;
use ThothApi\GraphQL\Operation\VariableNormalizer;

final class OperationRequest
{
    private string $operationType;

    private FieldDefinition $field;

    private array $arguments;

    private array $selection;

    public function __construct(string $operationType, FieldDefinition $field, array $arguments = [], array $selection = [])
    {
        if (!in_array($operationType, ['query', 'mutation'], true)) {
            throw new \InvalidArgumentException('Operation type must be query or mutation.');
        }

        $this->operationType = $operationType;
        $this->field = $field;
        $this->arguments = $arguments;
        $this->selection = $selection;
    }

    public static function enum(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public function getField(): FieldDefinition
    {
        return $this->field;
    }

    public function getSelection(): array
    {
        return $this->selection;
    }

    public function getVariables(): array
    {
        return (new VariableNormalizer($this->field))->normalize($this->arguments, $this->getSchemaArgumentsByName());
    }

    public function toGraphQL(): string
    {
        Identifier::assert($this->field->getName());
        $this->getVariables();
        $variableFormatter = new VariableFormatter();
        $variableDefinitions = $variableFormatter->formatDefinitions($this->arguments, $this->getSchemaArgumentsByName());
        $arguments = $variableFormatter->formatArguments($this->arguments);
        $fieldLine = $this->field->getName() . ($arguments === '' ? '' : '(' . $arguments . ')');
        $selection = (new SelectionFormatter())->format($this->selection, $this->field->getType());

        if ($selection !== '') {
            $fieldLine .= " {\n" . $selection . "\n    }";
        }

        return $this->operationType . ($variableDefinitions === '' ? '' : ' (' . $variableDefinitions . ')')
            . " {\n    " . $fieldLine . "\n}";
    }

    private function getSchemaArgumentsByName(): array
    {
        $arguments = [];

        foreach ($this->field->getArguments() as $argument) {
            $arguments[$argument->getName()] = $argument->getType();
        }

        return $arguments;
    }
}
