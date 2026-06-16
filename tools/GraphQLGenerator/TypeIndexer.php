<?php

declare(strict_types=1);

final class TypeIndexer
{
    public function indexByName(array $schemaTypes): array
    {
        $types = [];

        foreach ($schemaTypes as $type) {
            if (isset($type['name'])) {
                $types[$type['name']] = $type;
            }
        }

        return $types;
    }
}
