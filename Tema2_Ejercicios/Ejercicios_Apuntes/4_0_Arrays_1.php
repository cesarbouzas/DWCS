<!doctype html>
<html lang="es">

<head>
    <title>Ejercicio</title>
</head>

<body>
    <table>
        <tr>

            <td>Clave</td>
            <td>Valor</td>
        </tr>

        <?php
    
        foreach($_SERVER as $key=>$value){
            echo "<tr>";
            echo "<td>"+$key+"</td>";
            echo "<td>"+$value+"</td>";
            echo "</tr>";
        }
     ?>

    </table>
</body>

</html>