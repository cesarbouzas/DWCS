<?php
//Utilizamos en autoload composer
require '../vendor/autoload.php';
use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;
$generator=new Generator();
$generator->generate(
    new Config([
        'inputFile'=>"https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl",
        'outputDir'=>'../src',
        'namespaceName'=>'Clases'
    ])
    );

    ?>