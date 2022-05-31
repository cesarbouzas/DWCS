<?php
$host="localhost";
$bd="proyecto";
$dsn="mysql:host=$host;dbname=$bd;charset=utf8mb4";
$user="cesar";
$pass="21212121";
$conexProy=new PDO($dsn,$user,$pass);
//para obtener informacion de la conexion getAttribute 
$version=$conexProy->getAttribute(PDO::ATTR_SERVER_VERSION);
echo "Vérsion =$version.\n";
//Devuleve los valores de las colummnas en maysculas
$version=$conexProy->setAttribute(PDO::ATTR_CASE,PDO::CASE_UPPER);
/*
Para controlar los errores endremos el atributo ATTR_ERRMODE
-ERRMODE_SILENT ->modo por defecto , no muestra los errores ideal para produccion
-ERRMODE_WARNING-> ademas de establecer el código de error , emitirá un mensaje E_WARNING es el modo ideal para pruebas
-ERRMODE_EXCEPTION: ademas de establecer el código de error , lanzará una PDOException que podemos capturar en bloque try_catch().
*/

$conexProy->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//Para ejecutar una consulta SQL utilizando PDO se debe direnciar entre las sentencias que devuelven datos de las que no lo hacen

//Consultas de  accion INSERT ,DELETE o UPDATE el metodo exec devuelve el número de registros afectados.

$registros =$conexProy->exec('DELETE FROM stocks WHERE unidades=0');
echo"Se han borrado $registros registros.\n";

//Consultas que devuelven datos como es el caso de SELECT debes usar el metodo QUERY

$resulatdo=$conexProy->query( 'SELECT * FROM stoks');




//Para cerrar la conexion debemos asignar el valor null a la variable que contiene  el objeto
$conexProy=null;
if($conexProy==null) {
    echo"conexion cerada \n";
}
?>