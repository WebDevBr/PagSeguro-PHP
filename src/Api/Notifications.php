<?php

namespace WebDevBr\PagSeguro\Api;

class Notifications extends Api
{
    public function getUrl()
    {
        $url = "https://ws.pagseguro.uol.com.br/v2/transactions/notifications/%s?email=%s&token=%s";

        $data = $this->getData();
        return sprintf(
            $url,
            $data->offsetGet('notificationCode'),
            $data->offsetGet('email'),
            $data->offsetGet('token')
        );
    }

    public function getMethod()
    {
        return 'get';
    }

    protected function getDataValidation()
    {
        if (empty($this->data->offsetGet('email'))) {
            throw new \Exception("Please enter a valide email address");
        }
        if (empty($this->data->offsetGet('token'))) {
            throw new \Exception("Please enter a valide token");
        }
        if (empty($this->data->offsetGet('notificationCode'))) {
            throw new \Exception("Please enter a valide notification code");
        }
    }
}
