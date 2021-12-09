<!DOCTYPE html>
<html lang="es">

<link href="css/cesar.css" type="text/css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <title>Tarea Unidad 2</title>
</head>



<body>
    <?php
    
    $nombre=$_POST["nombre"];
    $tel=$_POST["tel"];
    $agenda=array(array());
    
    if(estaVacio($nombre)){
        header("location:index_agenda.php?mensaje=1");
    }
    if(!estaVacio($tel)){
        array_push($agenda,Array($nombre,$tel));
        mostrarAgenda($agenda);
        }
    ?>
    <form method ="post" action='<?php $_SERVER["PHP_SELF"]?>' >
        <header>Agenda</header>
        <fieldset>
            <legend>Datos Agenda</legend>

           
               
            

        </fieldset>
        <fieldset>
            <legend>Nuevo Contacto</legend>

            </br><label for="nombre">Nombre </label><input type="text" id="nombre" name="nombre">
            </br>
            </br><label for="tel">Teléfono </label><input type="number" id="tel" name="tel">
            </br>
            </br> <input type="submit" value="Añadir Contacto"><input type="reset" value="Limpiar Campos">
        </fieldset>
        <fieldset>
            <legend>vaciar agenda</legend>
            <button>Vaciar Agenda</button>
            
        </fieldset>
    </form>

</body>
<?php


function estaVacio($var){

if($var!=""){
    
    return false;
    

}else{
    
    return true;
}

}
function mostrarAgenda($arr){
    
    foreach($arr as $valor){
        echo "<p> $valor[0]:$valor[1]</p>";
    }
}

function estaEnAgenda($arr, $txt){
    foreach($arr as $valor){
        if($valor[0]==$txt){
            return true;
        }else{
            return false;
        }
    }

}



?>

</html>
