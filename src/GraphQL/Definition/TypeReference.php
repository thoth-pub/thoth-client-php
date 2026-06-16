<?php

namespace ThothApi\GraphQL\Definition;

final class TypeReference
{
    private string $kind;

    private ?string $name;

    private ?self $ofType;

    public function __construct(string $kind, ?string $name = null, ?self $ofType = null)
    {
        $this->kind = $kind;
        $this->name = $name;
        $this->ofType = $ofType;
    }

    public static function named(string $name): self
    {
        return new self('NAMED', $name);
    }

    public static function listOf(self $ofType): self
    {
        return new self('LIST', null, $ofType);
    }

    public static function nonNull(self $ofType): self
    {
        return new self('NON_NULL', null, $ofType);
    }

    public static function fromIntrospection(array $type): self
    {
        if (isset($type['ofType']) && is_array($type['ofType'])) {
            return new self($type['kind'], $type['name'] ?? null, self::fromIntrospection($type['ofType']));
        }

        if ($type['kind'] === 'LIST' || $type['kind'] === 'NON_NULL') {
            return new self($type['kind'], $type['name'] ?? null);
        }

        return self::named($type['name']);
    }

    public function getKind(): string
    {
        return $this->kind;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getOfType(): ?self
    {
        return $this->ofType;
    }

    public function toGraphQL(): string
    {
        if ($this->kind === 'NON_NULL') {
            return ($this->ofType ? $this->ofType->toGraphQL() : '') . '!';
        }

        if ($this->kind === 'LIST') {
            return '[' . ($this->ofType ? $this->ofType->toGraphQL() : '') . ']';
        }

        return (string) $this->name;
    }

    public function baseName(): ?string
    {
        if ($this->name !== null) {
            return $this->name;
        }

        return $this->ofType ? $this->ofType->baseName() : null;
    }
}
