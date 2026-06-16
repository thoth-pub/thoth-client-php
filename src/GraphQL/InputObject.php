<?php

namespace ThothApi\GraphQL;

class InputObject
{
    private array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getAllData(): array
    {
        return $this->data;
    }

    protected function get(string $field)
    {
        return $this->data[$field] ?? null;
    }

    protected function set(string $field, $value): self
    {
        $this->data[$field] = $value;
        return $this;
    }

    protected function has(string $field): bool
    {
        return array_key_exists($field, $this->data);
    }

    protected function remove(string $field): self
    {
        unset($this->data[$field]);
        return $this;
    }
}
