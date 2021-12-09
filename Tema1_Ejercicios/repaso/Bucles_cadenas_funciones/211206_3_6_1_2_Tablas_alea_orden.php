<!DOCTYPE html>
<lang="es">
    <html>
<head>
    <title>
        Ejercicio 3.6.1.2
    </title>
</head>
<body>
<h1>Ejercicio 3.6.1.2 Tablas Alatorias y orden</h1>
<p> Cree una tabla con 10 valores al azar entre 1 y 100 .La funcion rand($min,$max) lo permite .
    Ordene esta tabla de mayor a menor e introduzca todos los valores en una cadena de caracteres 
    separadors por ; muestre la cadena</P>

<?php

$tabla=crearTablaAleatoria(1,100,10);
$cadena=implode(";",$tabla);
echo "<p>La cadena sin ordenar es =$cadena</p>";
$tablaMayorMenor=ordenarMayorMenorTabla($tabla);
$cadena=implode(";",$tablaMayorMenor);
echo "<p>La cadena ordenada es =$cadena</p>";






function crearTablaAleatoria($min,$max,$num){
for($i=0;$i<=$num;$i++){
    $tab[$i]=rand($min,$max);
}
return $tab;
}

function ordenarMayorMenorTabla($tab){
    rsort($tab);
    return $tab;
}
 


?>

</body>




    </html>