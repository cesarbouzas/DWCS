<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
#contenedorFunciones:nth-child(2n)  {
    background:green;
   size: 2px;
    }
</style>


</head>
<body>
    <div id=contenedorFunciones>

    
    <?php
$client = new SoapClient('https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl');
$funcionesServicio=$client->__getFunctions();
$VariablesServicio=$client->__getTypes();

//var_dump($funcionesServicio);
foreach($funcionesServicio as $key=>$valor){
    echo "<p>Funcion nº=$key->$valor</p>";
};
?>
    </div>
    <p>
<div id=contendorVariables></div>
<?php
$pos=array_search("struct\wstitulosuni" ,$VariablesServicio);


echo "La variable de servicio que se espera es =".$VariablesServicio[$pos];

?>
    </p>



</body>
</html>
