<?php

namespace ThothApi\GraphQL\Definition;

final class ObjectTypeDefinition
{
    private string $name;

    private array $fields;

    public function __construct(string $name, array $fields)
    {
        $this->name = $name;
        $this->fields = $fields;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFields(): array
    {
        return $this->fields;
    }
}
