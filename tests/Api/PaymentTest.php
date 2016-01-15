<?php

namespace WebDevBr\PagSeguro\Api;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
    private $url = 'https://ws.pagseguro.uol.com.br/v2/checkout/';
    private $data = [
        'email'=>'suporte@lojamodelo.com.br',
        'token'=>'95112EE828D94278BD394E91C4388F20',
        'currency'=>'BRL',
        'itemId1'=>'0001',
        'itemDescription1'=>'Notebook Prata',
        'itemAmount1'=>'24300.00',
        'itemQuantity1'=>'1',
        'itemWeight1'=>'1000',
        'itemId2'=>'0002',
        'itemDescription2'=>'Notebook Rosa',
        'itemAmount2'=>'25600.00',
        'itemQuantity2'=>'2',
        'itemWeight2'=>'750',
        'reference'=>'REF1234',
        'senderName'=>'Jose Comprador',
        'senderAreaCode'=>'11',
        'senderPhone'=>'56273440',
        'senderEmail'=>'comprador@uol.com.br',
        'shippingType'=>'1',
        'shippingAddressStreet'=>'Av. Brig. Faria Lima',
        'shippingAddressNumber'=>'1384',
        'shippingAddressComplement'=>'5o andar',
        'shippingAddressDistrict'=>'Jardim Paulistano',
        'shippingAddressPostalCode'=>'01452002',
        'shippingAddressCity'=>'Sao Paulo',
        'shippingAddressState'=>'SP',
        'shippingAddressCountry'=>'BRA'
    ];

    public function testPaymentUrl()
    {
        $this->assertEquals($this->url, (new Payment)->getUrl());
    }

    public function testPaymentDataWithArrayObject()
    {
        $p = new Payment;
        $p->setData(new \ArrayObject($this->data));

        $this->assertInstanceOf('ArrayObject', $p->getData());
    }

    public function testPaymentDataWithArray()
    {
        $p = new Payment;
        $p->setData($this->data);

        $this->assertInstanceOf('ArrayObject', $p->getData());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testPaymentDataAnotherVarType()
    {
        $p = new Payment;
        $p->setData('Erik');

        $this->assertInstanceOf('ArrayObject', $p->getData());
    }

    public function testPaymentRequestMethod()
    {
        $this->assertEquals('post', (new Payment)->getMethod());
    }
}
