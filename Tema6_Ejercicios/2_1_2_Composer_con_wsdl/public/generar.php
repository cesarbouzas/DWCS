<?php
//utilizamos el autoload de composer
require '../vendor/autoload.php'; 

use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

$generator = new Generator();
$generator->generate(
    new Config([
        'inputFile' => "https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl", //wsdl
        'outputDir' => '../src',  //directorio donde vamos a generar las clases
        'namespaceName' => 'Clases'  //namespace que vamos a usar con ellas (lo indicamos en composer)
    ])
);