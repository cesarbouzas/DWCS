<!DOCTYPE html>
<html lang="es">
<head>
    <?php  require "validar.php"?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo version Cesar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <fieldset>
        <legend>Formulario Validacion</legend>
        <form method="POST" action='<?php echo $_SERVER['PHP_SELF'];?>'>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="" name="nombre" id="nombre" value='<?php echo isset($_POST["nombre"])?$_POST["nombre"]:""?>' required/>
        <span id="errorNombre" name="errorNombre" class='<?php echo (!isset($_POST["Enviar"])||validarNombre($_POST["nombre"]))?"d-none":"input-group form-group text-danger";?>'>
        Debes introducir 5 caracteres.
        </span>
         <div>
        <button type="submit" class="btn btn-primary" name="Enviar" value="" >Enviar</button>
    
        </div>    
    </form>
        
      
    </fieldset>
    </div>
</body>
</html>