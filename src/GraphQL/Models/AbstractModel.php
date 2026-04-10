<?php

namespace ThothApi\GraphQL\Models;

abstract class AbstractModel
{
    public $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function getAllData()
    {
        return $this->data;
    }

    public function getData($key)
    {
        return $this->data[$key] ?? null;
    }

    public function setData($key, $value)
    {
        if ($value !== null) {
            $this->data[$key] = $value;
            return;
        }

        if (array_key_exists($key, $this->data)) {
            unset($this->data[$key]);
        }
    }

    public function __call(string $name, array $arguments)
    {
        if (preg_match('/^(get|set|is)(.+)$/', $name, $matches) !== 1) {
            throw new \BadMethodCallException("Method '{$name}' does not exist.");
        }

        $field = lcfirst($matches[2]);
        if ($matches[1] === 'set') {
            $this->setData($field, $arguments[0] ?? null);
            return;
        }

        return $this->getData($field);
    }
}
