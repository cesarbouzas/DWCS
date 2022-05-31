<?php

require '../vendor/autoload.php';
$url ="http://localhost/unidad6/servidorSoap/servidor.wsdl";
try{
    $server=new SoapServer($url);
    $server->setClass('Clases\Operaciones');
    $server->handle();
}catch(SoapFault $f){
    die("error en server :".$f->getMessage());
};
?>