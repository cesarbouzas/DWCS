<?php
$url='http://localhost/Tema6_ejercicios/2_2_Creacion_servicio/001_servidorSoap/servidor.php';
$uri='http://localhost/Tema6_ejercicios/2_2_Creacion_servicio/001_servidorSoap';
$paramSaludo=["texto"=>"Manolo"];
$param=["a"=>"51","b"=>"29"];
try{
    $cliente=new SoapClient(NULL,['location'=>$url,"url"=>$url,'trace'=>true]);
}catch(SoapFault $f){
    echo "Error:".$f->getMessage();
}

$saludo=$cliente->__soapCall('saludo',$paramSaludo);
$suma=$cliente->__soapCall('suma',$param);
$resta=$cliente->__soapCall('resta',$param);
echo $saludo." La suma es :$suma y la resta :$resta";

//este servicio no incluye WSDL
//El metodo mágico soaCall basicamnete se pasa el nombre del metodo y los paramteros 
// Otra opcion podria ser para cada metodo llmar a su ejecuion , por ejemploclinte->suma($param)
//si exite WSDL ya no necesitas el resto de opciones en el constrctor.







?>