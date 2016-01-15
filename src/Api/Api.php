<?php

namespace WebDevBr\PagSeguro\Api;

abstract class Api
{
    protected $data = null;

    abstract public function getUrl();
    abstract public function getMethod();
    abstract protected function getDataValidation();

    public function getData()
    {
        if (is_null($this->data)) {
            throw new \Exception("Undefined data, please, use setData() method before!");
        }

        $this->getDataValidation();

        return $this->data;
    }

    public function setData($data)
    {
        if (is_array($data)) {
            $data = new \ArrayObject($data);
        }

        if ($data instanceof \ArrayObject) {
            $this->data = $data;
            return $this;
        }

        throw new \InvalidArgumentException("Data must is a array or instance of ArrayObject");
    }
}
