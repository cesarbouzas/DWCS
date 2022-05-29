<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">

        .encontrado{
            background:blue;
        }

        .pares{
            margin: auto;
            border:0ch;
            background: green;
        }
        .impares{

            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: small;
            background: grey;
            margin:auto;
        }
        .vpares{
            margin: auto;
            border:0ch;
            background: brown;
        }
        .vimpares{

            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: small;
            background: grey;
            margin:auto;
        }
    </style>


</head>
<body>
    <div id=contenedorFunciones>
        <h2>Fucniones de Servicio</h1>
    
    <?php
$client = new SoapClient('https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl');
$funcionesServicio=$client->__getFunctions();
$variablesServicio=$client->__getTypes();


foreach($funcionesServicio as $key=>$valor){
     
    if($key%2==0){
    echo "<p class='pares'>Funcion nº=$key->$valor</p>";
    }
    else if($valor=="wstitulosuniResponse wstitulosuni(wstitulosuni \$parameters)"){
        echo "<p class='encontrado'>Funcion nº=$key->$valor</p>";
     }else{
        echo "<p class='impares'>Funcion nº=$key->$valor</p>";
        }
    
}
    echo"<h2>Variables de Servicio</h2>";



?>
</div>
<div id=contendorVariables>
<?php
foreach($variablesServicio as $key=>$valor){
    if($valor=="struct wstitulosuni { string plengua; string pcurso; }"){
        echo "<p class='encontrado'>Variable nº=$key->$valor</p>";
    }else{
        if($key%2==0){
            echo "<p class='vpares'>Variable nº=$key->$valor</p>";
        }else{
            echo "<p class='vimpares'>Variable nº=$key->$valor</p>";
        }
    }
}
?>
</div>
<h2>Utilizacion del Servicio</h2>
<p>wstitulosuni(plengua,pcursro)</p>
<div>
<?php
$parametros=[
    "plengua"=>"es",
    "pcurso"=>"2019",
];
$arrayCursos=$client->wstitulosuni($parametros);
foreach($arrayCursos as $key=>$curso)
    {
        foreach ($curso as $key2=>$valor){
            print_r($valor);
        }
    }
?>
</div>
</body>
</html>
