<?php

namespace ThothApi\GraphQL\Definition;

final class FieldDefinition
{
    private string $name;

    private TypeReference $type;

    private array $arguments;

    private ?string $description;

    public function __construct(
        string $name,
        TypeReference $type,
        array $arguments = [],
        ?string $description = null
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->arguments = $arguments;
        $this->description = $description;
    }

    public static function fromIntrospection(array $field): self
    {
        $arguments = array_map(
            static function (array $argument): ArgumentDefinition {
                return ArgumentDefinition::fromIntrospection($argument);
            },
            $field['args'] ?? []
        );

        return new self(
            $field['name'],
            TypeReference::fromIntrospection($field['type']),
            $arguments,
            $field['description'] ?? null
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): TypeReference
    {
        return $this->type;
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
