<?php

namespace ThothApi\GraphQL\Definition;

final class ArgumentDefinition
{
    private string $name;

    private TypeReference $type;

    private ?string $description;

    private ?string $defaultValue;

    public function __construct(
        string $name,
        TypeReference $type,
        ?string $description = null,
        ?string $defaultValue = null
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->description = $description;
        $this->defaultValue = $defaultValue;
    }

    public static function fromIntrospection(array $argument): self
    {
        return new self(
            $argument['name'],
            TypeReference::fromIntrospection($argument['type']),
            $argument['description'] ?? null,
            $argument['defaultValue'] ?? null
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }
}
