<?php

$url = "http://localhost/UD06/projectEVA06/serversoap/serverfile.php";
$uri = "http://localhost/UD06/projectEVA06/serversoap";
$param = ["cod" => "3DSNG"];

try {
    $cliente = new SoapClient(null, ["location" => $url, "uri" => $uri, "trace" => true]);
    echo "Ciente soap creado <br>";
    
} catch (SoapFault $ex) {
    echo "Error en el cliente Soap " .$ex->getMessage();
}

$result = $cliente->__soapCall("getPVP", $param);
echo $result;



