<?php

require "../src/operaciones.php";
//use SoapServer
//use SoapFault?
$uri ="http://localhost/UD06/projectEVA06/serversoap";
$param = ['uri' => $uri];

try {
    $server = new SoapServer(null, $param);
    $server->setClass('Operaciones');
    $server->handle();
} catch (SoapFault $ex) {
    die("error en soap server: " .$ex->getMessage());
}