<?php

namespace ThothApi\GraphQL\Operation;

final class VariableFormatter
{
    public function formatDefinitions(array $arguments, array $schemaArguments): string
    {
        $formatted = [];

        foreach ($arguments as $name => $value) {
            if ($value === null) {
                continue;
            }

            Identifier::assert((string) $name);
            if (isset($schemaArguments[$name])) {
                $formatted[] = '$' . $name . ': ' . $schemaArguments[$name]->toGraphQL();
            }
        }

        return implode(', ', $formatted);
    }

    public function formatArguments(array $arguments): string
    {
        $formatted = [];

        foreach ($arguments as $name => $value) {
            if ($value === null) {
                continue;
            }

            Identifier::assert((string) $name);
            $formatted[] = $name . ': $' . $name;
        }

        return implode(', ', $formatted);
    }
}
