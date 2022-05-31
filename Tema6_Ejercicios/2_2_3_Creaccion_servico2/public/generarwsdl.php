<?php
require '../vendor/autoload.php';
use php2wsdl\PHPClass2WSDL;
$class='Clases\\Operaciones';
$uri='https://localhost/servidorSoap/servidorW.php';
$wsdlGenerator=new PHPClass2WSDL($class,$uri);
$wsdlGenerator->generarte(true);
$fichero=$wsdlGenerator->save('../servidorsoap/servicio.wsdl');

?>