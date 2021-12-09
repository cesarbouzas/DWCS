<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
<?php
//Este ejemplo coniste en trasnformar un numero entero en un cadena 

$real=3.1416;
$cadenaReal=(string)$real;
echo  "<p>El número se trasnforma en la caneda : $cadenaReal</p>";
echo "<p> como ahora es un string puedo ver posiciones , en la dos está :".$cadenaReal[2]."</p>";

echo"<br>";
//El siguiente enejemplo trasnforma un numero entero en bolleasno


$boleanoReal=(boolean)$real;

echo "<p>El número real=$real se trasnforma en boleano como ".$boleanoReal."</p>";

echo "<p> El valor real=$real se trasnformar en entero =".(integer)$real."</p>"; 

echo "<p> Si hacemos \$real-3=".($real-=3)."</p>";

echo "<p>Tambien lo podenomos pasar  ";
$resultado=(boolean)((integer)$real);
$resultado2=(boolean)((integer)$real);
if($resultado){
    echo "true";
}else{
    echo "false";
}

echo"<br>";

if($resultado2){
    echo "resultado 2 es true";

}else{
    echo"resultado 2 es false";
}

?>



    
</body>
</html>