<?php

include 'vendor/autoload.php';

$pagseguro = new WebDevBr\PagSeguro\PagSeguro;

$body = $pagseguro->payment([
    'email'=>'suporte@lojamodelo.com.br',
    'token'=>'95112EE828D94278BD394E91C',
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
    'senderEmail'=>'erik_af@hotmail.com',
    'shippingType'=>'1',
    'shippingAddressStreet'=>'Av. Brig. Faria Lima',
    'shippingAddressNumber'=>'1384',
    'shippingAddressComplement'=>'5o andar',
    'shippingAddressDistrict'=>'Jardim Paulistano',
    'shippingAddressPostalCode'=>'01452002',
    'shippingAddressCity'=>'Sao Paulo',
    'shippingAddressState'=>'SP',
    'shippingAddressCountry'=>'BRA'
]);

var_dump($body);
