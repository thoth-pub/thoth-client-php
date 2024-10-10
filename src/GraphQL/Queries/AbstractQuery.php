<?php

namespace ThothApi\GraphQL\Queries;

abstract class AbstractQuery
{
    abstract protected function getFieldsFragment(): string;

    protected function buildQuery(string $queryBody): string
    {
        $fragment = $this->getFieldsFragment();
        return <<<GQL
        {$queryBody}
        {$fragment}
        GQL;
    }
}
