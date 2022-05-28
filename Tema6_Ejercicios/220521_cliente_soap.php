<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
<?php
$clienteSoap=new SoapClient("https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl");
$parametros=["es","2019"];
$titulos=$clienteSoap->wstitulosuni($parametros);
foreach($titulos as $k->$v){
    foreach ($v as $vv->$vv){
       var_dump($vv);
    }
}
?>
</pre>
</body>
</html>
<?php
