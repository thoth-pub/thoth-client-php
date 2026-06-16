<?php

declare(strict_types=1);

interface TypeClassBuilder
{
    public function className(array $type): string;

    public function code(array $type, string $namespacePart): string;
}
