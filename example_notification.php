<?php

include 'vendor/autoload.php';

$pagseguro = new WebDevBr\PagSeguro\PagSeguro;

$body = $pagseguro->notifications([
    'notificationCode'=>'49E41C-8A1B1E1B1E01-0994CF1FBC5D-CD5BC9',
    'email'=>'suporte@lojamodelo.com.br',
    'token'=>'95112EE828D94278BD394E91C4388F20',
]);

var_dump($body);

//Gambiarra para passar para array, não vejo motivo pra isso, porém... vai saber
var_dump(json_decode(json_encode($body), true));
