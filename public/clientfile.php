<?php

$url = "http://localhost/UD06/projectEVA06/serversoap/serverfile.php";
$uri = "http://localhost/UD06/projectEVA06/serversoap";
//$param1 =['cod' => "3DSNG"];
$param2 = ['a' => 2, 'b' => 3];

try {
    $cliente = new SoapClient(null, ['location' => $url, 'uri' => $uri, 'trace' => true]);
    echo "Ciente soap creado <br>";
    
} catch (SoapFault $ex) {
    echo "Error en el cliente Soap " .$ex->getMessage();
}

//$result1 = $cliente->__soapCall("getPVP", $param1);
$result2 = $cliente->__soapCall("suma", $param2);

//echo $result1;
echo $result2;



