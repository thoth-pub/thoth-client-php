<?php

declare(strict_types=1);

final class AccessorMethodsBuilder
{
    public function code(array $fields): string
    {
        return implode("\n\n", array_map([$this, 'fieldCode'], $fields));
    }

    private function fieldCode(array $field): string
    {
        $methodName = studly($field['name']);
        $fieldName = exportPhpValue($field['name']);
        $phpDocType = phpDocType($field['type']);

        return <<<PHP
    /**
     * @return {$phpDocType}
     */
    public function get{$methodName}()
    {
        return \$this->get({$fieldName});
    }

    /**
     * @param {$phpDocType} \$value
     */
    public function set{$methodName}(\$value): self
    {
        \$this->set({$fieldName}, \$value);
        return \$this;
    }

    public function has{$methodName}(): bool
    {
        return \$this->has({$fieldName});
    }

    public function unset{$methodName}(): self
    {
        \$this->remove({$fieldName});
        return \$this;
    }
PHP;
    }
}
