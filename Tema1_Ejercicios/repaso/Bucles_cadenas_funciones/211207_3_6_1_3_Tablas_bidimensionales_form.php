 <?php
 if(isset($_POST["personas"])){
     $personas=unserialize($_POST["personas"]);
 }else{
     $personas;
    }
 ?>

<!DOCTYPE html>
<lang="es">
    <html>
        <head>
            <title>Ejercicio 3.6.1.3 tablas bidimensionales</title>
        </head>
        <body>

        <form name="form1" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"> 
    
        <?php ocultarFormulario($personas);?>
          
        <p><label>Nombre </label><input type="text" id="nombre" name="nombre"></p>     
        <p><label>Profesion </label><input type="text" id="profesion" name="profesion"></p>
        <p><label>Edad </label><input type="number" id="edad" name="edad"></p>
        <p><input type="submit" value="Enviar">       
        </form>
<?php
//c3_crear una tabla de varias dimensiones asociativas que guarde de cada persona su nombre su profesion y su edad .


$persona;

$persona=leerPersona();

$personas=anadirElementoArray($persona,$personas);

mostrarPersonas($personas);






//Funciona
function anadirElementoArray($elem,$arr){
 
    $i=count($arr);echo $i;
    $nom=$elem["Nombre"];
    $arr=array($nom=>$elem);
    $i=count($arr);echo $i;
    return $arr;
}

//Funciona
function leerPersona(){
    $nombre=trim($_POST["nombre"]);
    $profesion=trim($_POST["profesion"]);
    $edad=trim($_POST["edad"]);
    $per=array("Nombre"=>$nombre,"Profesion"=>$profesion,"Edad"=>$edad);
    return $per;

}

function mostrarPersonas($per){
    
    echo"<table>";
    foreach($per as $key=>$valor){
        echo"<tr><td>$key</td>";
        foreach($valor as $key2=>$Valor2){
            echo"<td>$key2</td><td>$Valor2</td>"; 
        }
        echo"</tr>";    
    }
    echo"</table>";

    }

function ocultarFormulario($personas){
if(count($personas)>0){
    echo '<input type="hidden" name="personas" value="<?php echo serialize($personas);?>">';
    }
}
?>        
    







</body>

    </html>
