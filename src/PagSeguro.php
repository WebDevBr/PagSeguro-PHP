<?php

namespace WebDevBr\PagSeguro;

class PagSeguro
{
    public function __call($method, $params) {
        return $this->build($method, $params);
    }

    public static function __callStatic($method, $params) {
        return self::build($method, $params);
    }

    protected static function build($method, $params)
    {
        $class = "WebDevBr\PagSeguro\Api\\".ucfirst($method);
        $api = new $class;

        if (isset($params[0])) {
            $api->setData($params[0]);
        }

        $request = new Request;

        if ($api->getMethod() == 'get') {
            $body = $request->get($api->getUrl());
        }

        if ($api->getMethod() == 'post') {
            $body = $request->post($api->getUrl(), $api->getData());
        }

        return $body;
    }
}
