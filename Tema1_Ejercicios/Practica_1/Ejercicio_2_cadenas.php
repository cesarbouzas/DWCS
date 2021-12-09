<?php
//Ejecrcicio 2 boletin 1

$cadena1=readline("Introduce la cadena 1 : ");//asignamos por teclado las 3 cadenas pedidas
$cadena2=readline("Introduce la cadena 2 : ");
$cadena3=readline("Introduce la cadena 3 : ");

$cadenaTotal=$cadena1."\n".$cadena2."\n".$cadena3."\n";//Concatenamos las cadenas
echo $cadenaTotal; //Imprimimos las cadenas
echo "La cadena total tiene ".strlen($cadenaTotal)." caracteres";//utilizamos strlen para contar la cadena resultante.
?>