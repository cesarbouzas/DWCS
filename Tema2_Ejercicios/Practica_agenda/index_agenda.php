<!DOCTYPE html>
<html lang="en">

<link href="css/cesar.css" type="text/css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <title>Tarea Unidad 2</title>
</head>



<body>

    <form action="agenda.php" method="post">
        <header>Agenda</header>

        <fieldset>
            <legend>Nuevo Contacto</legend>

            </br><label for="nombre">Nombre </label><input type="text" id="nombre" name="nombre">
                <?php if(isset($_GET['mensaje']) && $_GET['mensaje']=='1'){
                echo"<span style='color:#ff0000'>nombre vacio</span>";
                }?>
            </br>
            </br><label for="tel">Teléfono </label><input type="number" id="tel" name="tel">
            </br>
            </br> <input type="submit" value="Añadir Contacto"><input type="reset" value="Limpiar Campos">
        </fieldset>



    </form>

</body>

</html>