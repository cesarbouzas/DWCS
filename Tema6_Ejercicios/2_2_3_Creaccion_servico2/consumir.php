<?php
$url="http://localhost/unidad6/servidorSoap/servicio.wsdl";
try{
    $cliente=new SoapClient($url);
}catch(SoapFault $ex){
    die("Error en el cliente :".$ex->getMessage());
}
var_dump(($cliente->__getFunctions()));
echo "<br>";
echo $cliente->suma(20,40);
echo "<br>";
$para=['a'=>12,'b'=>45];
echo $cliente->__soapCall('suma',$para);
