<?php
$con_bd=@mysqli_connect('localhost','admin','21212121');
if(!$con_bd){
    echo('Error número '.mysqli_connect_errno.'al establecer la conexión'.mysqli_connect_error().'/n');

}else{
    echo("Conexion establecida con exito .\n");
    
}
// creaccion de una base de datos
if(mysqli_query($con_bd,'CREATE DATABASE almacenes')===TRUE){
    echo("Se creo correctamente a BD llamada alamacenes.\n");
}else{

    echo('Error en la creacción de la BD :'. mysqli_error($con_bd)."\n");
}

if(mysqli_query($con_bd,'USE almacenes')===TRUE){
    echo("Se cambió la base actual a Alamacenes .\n");
}else{

    echo('Error en el cambio de bases de datos activa :'. mysqli_error($con_bd)."\n");
}


$muchotema="CREATE TABLE almacen (codigo int(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    lugar varchar(100),
                                    capacidad int(5))";


if(mysqli_query($con_bd,$muchotema)===TRUE){
    echo("Se creo correctamente las tablas.\n");
}else{

    echo('Error en la creaccion de la tabla '. mysqli_error($con_bd)."\n");
}





$muchotema="CREATE TABLE  caja (numreferencia int(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                   contenido varchar(100),
                                    valor int(5),
                                    almacen int(4) UNSIGNED,
                                    FOREIGN KEY(almacen) REFERENCES almacen(codigo)
                                                            ON DELETE RESTRICT
                                                            ON UPDATE CASCADE
                                    )";








if(mysqli_query($con_bd,$muchotema)===TRUE){
    echo("Se creo correctamente las tablas.\n");
}else{

    echo('Error en la creaccion de la tabla :'. mysqli_error($con_bd)."\n");
}

$muchotema="INSERT INTO almacenes(lugar ,capacidad)
VALUES('$_POST[lugar]','$_POST[capacidad]')
";







if(mysqli_query($con_bd,$muchotema)===TRUE){
    echo("Se añadio correctamente el contenido.\n");
}else{

    echo('Error en la introduccion del contenido '. mysqli_error($con_bd)."\n");
}







?>