<?php

/*********Ejercicio 3 boletin 1 sobre las matrices indexadas , asociativas y multidemnesioonales *************/
//ejecucion por terminal.
$cont=0;

/***************************Array INDEXADO**********************************/

$indexado=array(0,1,2,3,4,5,6,7,8,9);//creaccion de una matriz indexada podria sustituir array() por [].
foreach($indexado as $i){//mediante la funcion foreach recorremos arrays pasando por referencia cada elemento a la variable indicada.
    echo $indexado[$cont++];
}

echo " Es la matriz 1  y tiene " .$cont." elementos.\n";


/***************************Array ASOCIATIVO**********************************/

$asociativo=array("apellido1"=>"bouzas","apellido2"=>"soto");//Creaccion de una matriz asociativa mediante el operador =>
$cont=0;
foreach($asociativo as $i){
    $cont++;
}
print_r($asociativo,false);//mediante la fuincion print_r mostramos la matriz sin necesidad de conocer las llaves de cada uno de los elementos
echo "\n Es la matriz 2  y tiene " .$cont." elementos.\n";
$cont=0;
echo"(\n";
/**********************Array MULTIDIMENSIONAL******************************* */

$multidimensional=array(array(0,1,2),array(0,1,2),array(0,1,2));//Una matriz multidimensional es un array donde cada elememnto vuelve a ser otro array

foreach($multidimensional as $i){//anidando dos foreach recorremos el array multidemnsional 
    foreach($i as $j){
        $cont++;
    echo $j;
    }
echo"\n";
}

echo ") Es la matriz 3  y tiene " .$cont." elementos.\n";
?>