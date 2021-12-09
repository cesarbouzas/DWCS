<?php
/*Observe las dos tablas
(6,25,35,61) y (12,24,46)
calcula S resultante de multimplicar cada elemento de la tabla 1 por el valor de la tabla 2 
y sumar todos los resutados
*/

$tabla1=[6,25,35,61];
$tabla2=array(12,24,46);
echo multiplicarTablas($tabla1,$tabla2);
echo"\n";

function multiplicarTablas($t1,$t2){
    $suma=0;
foreach($t1 as $key1=>$valor1){
    foreach($t2 as $key2=>$valor2){
        $tamano1=count($t1);
        $tamano2=count($t2);
            if(($key1<($tamano1-1)) || ($key2<($tamano2-1))){
                //echo("key1=$key1  y   key2=$key2------>");
                $suma+=$valor1*$valor2;
                 echo $valor1. "x" .$valor2."+";
            }else{
                //echo("key1=$key1  y   key2=$key2------->");
                $suma+=$valor1*$valor2;
                echo $valor1. "x" .$valor2."=";   
        }    
    }   
}
return $suma;
}
?>