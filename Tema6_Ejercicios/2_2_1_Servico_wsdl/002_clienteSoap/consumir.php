<?php

$a=$_POST["a"];
$b=$_POST["b"];
$nombre=$_POST["nombre"];
$url='https://dawcbs.000webhostapp.com/2_2_Creaccion_servicio/001_servidorSoap/servidor.php';
$uri='https://dawcbs.000webhostapp.com/2_2_Creacion_servicio/001_servidorSoap';
$paramSaludo=['nombre'=>$nombre];
$param=['a'=>$a,'b'=>$b];
try{
    $cliente=new SoapClient(null,['location'=>$url,"uri"=>$uri,'trace'=>true]);
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
header('Location:' . getenv('HTTP_REFERER'));
?>