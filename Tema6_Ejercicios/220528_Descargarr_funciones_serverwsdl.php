<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$client = new SoapClient('https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl');
$funcionesServicio=$client->__getFunctions();
$VariablesServicio=$client->__getTypes();

//var_dump($funcionesServicio);
foreach($funcionesServicio as $key=>$valor){
    echo "<p>Funcion nº=$key->$valor</p>";
};


$pos=array_search("struct\wstitulosuni" ,$VariablesServicio);

echo $VariablesServicio[$pos];
//Funcion nº=32->wstitulosuniResponse wstitulosuni(wstitulosuni $parameters)
//$pos=array_keys($VariablesServicio,"struct \$wstitulosuni");
//print_r($pos);




?>
</body>
</html>
