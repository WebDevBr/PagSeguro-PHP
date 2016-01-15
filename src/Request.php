<?php

namespace WebDevBr\PagSeguro;

use WebDevBr\PagSeguro\Api\Api;
use GuzzleHttp\Client;

class Request
{
    public function get($url)
    {
        $client = new Client;

        $response = $client->request('GET', $url);
        $body = $response->getBody();

        return new \SimpleXMLElement($body);
    }

    public function post($url, $data)
    {
        $client = new Client;

        $response = $client->request('POST', $url, [
            'headers' => ['Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8'],
            'body' => http_build_query($data)
        ]);
        $body = $response->getBody();
        $body = new \SimpleXMLElement($body);

        if (!empty($body->code)) {
            return [
                'https://pagseguro.uol.com.br/v2/checkout/payment.html?code='.$body->code,
                $body->code
            ];
        }

        return $body;
    }
}
