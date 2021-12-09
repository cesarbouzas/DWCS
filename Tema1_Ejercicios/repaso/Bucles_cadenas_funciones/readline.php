


<?php
//crear una tabla de varias dimensiones asociativas que guarde de cada persona su nombre su profesion y su edad .

$personas["Nombre"]=["nombre"=>"","profesion"=>"","edad"=>""];
do{
$persona=leerPersona();
$personas=anadirElementoArray($persona,$personas);
$op=leerDato("Para parar pulsa tecla n :");
}while($op !="n");
mostrarPersonas($personas);

function anadirElementoArray($elem,$arr){
    foreach($arr as $valor){
        $nom=$elem["Nombre"];
        $arr[$nom]=$elem;
    }
    print_r($arr);
} 
function leerDato($txt){

    $valor=readline($txt);
        return $valor;
}

function leerPersona(){
    $nombre=leerDato("Introduce Nombre :");
    $profesion=leerDato("Introduce Profesion :");
    $edad=leerDato("Introduce Edad :");
    $persona=["Nombre"=>$nombre,"Profesion"=>$profesion,"Edad"=>$edad];
    return $persona;

}

function mostrarPersonas($per){
foreach($per as $key=>$valor){
      echo"La persona".$key."tiene alamecenado";
        foreach($valor as $key2=>$valor2){
                echo $key2."=".$valor2;
      }

    }
}
?>

