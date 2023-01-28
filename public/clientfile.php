<?php

$url = "http://localhost/UD06/TAREVA06/serverfile.php";
$uri = "http://localhost/UD06/TAREVA06";

//test para getPVP()
$param1 =['cod' => "ACERAX3950"];

try {
    $cliente = new SoapClient(null, ["location" => $url, "uri" => $uri, "trace" => true]);
    echo "Ciente soap creado <br>";
} catch (SoapFault $ex) {
    echo "Error en el cliente Soap " .$ex->getMessage();
}

$pvp= $cliente->__soapCall("getPVP", $param1);
$familias = $cliente->getFamilias();


echo "El precio es de: " .$pvp;
echo "<br>";
print_r($familias);




