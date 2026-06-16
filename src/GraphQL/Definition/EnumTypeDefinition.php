<?php

namespace ThothApi\GraphQL\Definition;

final class EnumTypeDefinition
{
    private string $name;

    private array $values;

    public function __construct(string $name, array $values)
    {
        $this->name = $name;
        $this->values = $values;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValues(): array
    {
        return $this->values;
    }
}
