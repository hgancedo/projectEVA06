<?php

$url = "http://localhost/UD06/projectEVA06/serversoap/serverfile.php";
$uri = "http://localhost/UD06/projectEVA06/serversoap";
$param = ['a' => 2, 'b' => 3];

try {
    $cliente = new SoapClient(null, ['location' => $url, 'uri' => $uri, 'trace' => true]);
    echo "Ciente soap creado <br>";
    
} catch (SoapFault $ex) {
    echo "Error en el cliente Soap " .$ex->getMessage();
}

$result = $cliente->__soapCall('suma', $param);
echo $result;



