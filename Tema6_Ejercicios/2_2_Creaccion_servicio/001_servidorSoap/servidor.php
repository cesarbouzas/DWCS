<?php
class Operaciones{
public function resta($a,$b){
    return $a-$b;
}
public  function suma($a,$b){
    return $a+$b;
}
public function saludo($nombre){
    return "hola $nombre";
}
}
$uri='http://localhost/Tema6_ejercicios/2_2_Creacion_servicio/001_servidorSoap';
$parametros=['uri'=>$uri];
try{
$server=new SoapServer(NULL,$parametros);
$server->setClass('Operaciones');
$server->handle();
}catch(SoapFault $f){
    die("error en server: ".$f->getMessage());
}

//Se crea un servicio con tres funciones suma,resta y saludo
//Para añadir estas funciones a nuetro servidorSopa hemos utilizado server->setClass('nombreClase')
//en el caso de no hacerlo asi deberiamos añadirlas con $server->addFunction('nombre') anets de server->handle()
//El metodo hadle es el encargado de recoger y procesar las peticiones recogiendo los datos post recibidos por HTTP
//Para conusimir el servicio parasamos ahora a la carpete clienteSoap


?>