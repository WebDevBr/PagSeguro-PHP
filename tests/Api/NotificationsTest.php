<?php

namespace WebDevBr\PagSeguro\Api;

class NotificationsTest extends \PHPUnit_Framework_TestCase
{
    private $url = "https://ws.pagseguro.uol.com.br/v2/transactions/notifications/766B9C-AD4B044B04DA-77742F5FA653-E1AB24?email=suporte@lojamodelo.com.br&token=95112EE828D94278BD394E91C4388F20";

    public function testNotificationUrl()
    {
        $p = (new Notifications)->setData([
            'notificationCode'=>'766B9C-AD4B044B04DA-77742F5FA653-E1AB24',
            'email'=>'suporte@lojamodelo.com.br',
            'token'=>'95112EE828D94278BD394E91C4388F20',
        ]);
        $this->assertEquals($this->url, $p->getUrl());
    }

    public function testNotificationRequestMethod()
    {
        $this->assertEquals('get', (new Notifications)->getMethod());
    }
}
