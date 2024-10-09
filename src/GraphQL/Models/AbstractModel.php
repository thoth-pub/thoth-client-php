<?php

namespace ThothClient\GraphQL\Models;

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
}
