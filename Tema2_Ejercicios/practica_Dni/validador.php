<!DOCTYPE html>
<html lang="es">
<head></head>

<body>

<?php
/*************Zona de ejecución principal**************** */
$listaDni=array("34896415X","11111111A");

$numeroDni=$_POST["dni"];
$edad=$_POST["edad"];
$fNac=$_POST["fNac"];
$numeroDni=strtoupper($numeroDni);
echo"<h1>Práctica 2</h1>";
echo"<h2>Apartado 2.1 Comprobar el DNI introducido. </h2>";
if(comprobarDNI($numeroDni)){
    echo "<p>El DNI introducido ".$numeroDni." es válido.</p>";
}else{
    echo "<p>El DNI introducido". $numeroDni." es inválido</p>";
}

/// en clase se habla de usar expresiones regulares
$patron="/[0-9]{8}[A-Z]{1}/";

echo "<p> Con patrones el resultado es ";
if(preg_match($patron,$numeroDni)){
    echo " Dni válido</p>";
}else{
    echo " Dni inválido</p>";
}

/******************************************** */
echo "<h2>Aparatado 2.2 Comprobar si existe el DNI en un array. </h2>";
if(existeDni($numeroDni,$listaDni)){
    echo "El DNI ".$numeroDni." existe dentro del Array :";
    imprimeArray($listaDni);
}else{
    echo "El DNI ".$numeroDni." no existe dentro del Array";
    imprimeArray($listaDni);
}
/******************************************** */
echo "<h2>Aparatado 2.3 Añdadir el DNI en un array. </h2>";
if(existeDni($numeroDni,$listaDni)){
     echo "Dni no insertado ya existe!!";
}else{
    if(comprobarDni($numeroDni)){
        $listaDni=addValorArray($listaDni,$numeroDni);
        echo "El Dni ".$numeroDni." insertado";
        imprimeArray($listaDni);
    }else{
        echo "Dni no insertado formato Inválido";
    }
}
/******************************************** */
echo "<h2>Aparatado 2.4 Edad </h2>";
echo "Estamos en el ".date("Y");
echo " y dices que tines ".$edad."<br>";
if($edad==calcularEdad($fNac)){
echo "La sinceridad es un punto";

}else{
    echo "Es una tonteria mentir en la edad , cuando introduces tu fecha de nacimiento".$fNac;
};



/******zona de funciones **/

function calcularEdad($fecha){
    $arrayFecha=explode("-",$fecha);
        $año=$arrayFecha[0];
        $mes=$arrayFecha[1];
        $dia=$arrayFecha[2];
        $dias=date("d")-$dia;
        $meses=date("m")-$mes;
        $años=date("Y")-$año;
    if($dias<0||$meses<0){
        $años--;
    }
    return $años;
}






function addValorArray($array,$valor){
array_push($array,$valor);
return $array;
}






function existeDni($valor,$array){
    if(comprobarDni($valor)){
    $r=false;
        foreach ($array as $v){
            if($v==$valor){
                $r=true;
                break;
            }
        }   
    }
    return $r;

}

function imprimeArray($array){
    echo "<table>";
    echo"<th><td>ID</td><td>nº DNI</td></th>";
    foreach($array as $key=>$valor){
    
        echo "<tr><td>".$key."</td><td>".$valor."</td><tr>";
    }
    echo"</table>";

}




function comprobarDni($valor){

if(comprobarLongitudDni($valor)&&comprobarNumerosDni($valor)&&comprobarLetraDni($valor)){
    return true;
}else{
    return false;

}
}

function comprobarLongitudDni($valor){
    
    
    if(strlen($valor)==9){
        return true;
    }else{
        return false;
    }
}

function comprobarNumerosDni($valor){
    $numero=substr($valor,0,8);
    if(is_numeric($numero)){
        return true;
    }else{
        return false;
    }
  
}
function comprobarLetraDni($valor){
    $letra=substr($valor,8,9 );
    if(is_string($letra)){
        return true;

    }else{
         return false;
    }
}
  
?>
</body>
</html>