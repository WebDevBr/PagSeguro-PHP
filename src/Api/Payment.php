<?php

namespace WebDevBr\PagSeguro\Api;

class Payment extends Api
{
    public function getUrl()
    {
        return 'https://ws.pagseguro.uol.com.br/v2/checkout/';
    }

    public function getMethod()
    {
        return 'post';
    }

    protected function getDataValidation()
    {
        if (empty($this->data->offsetGet('email'))) {
            throw new \Exception("Please enter a valide email address");
        }
        if (empty($this->data->offsetGet('token'))) {
            throw new \Exception("Please enter a valide token");
        }
    }
}
