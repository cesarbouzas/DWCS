<?php
$con_bd=@mysqli_connect('localhost','admin','21212121');
if(!$con_bd){
    echo('Erro numero '.mysqli_connect_errno.'al establecerla conexion'.mysqli_connect_error().'.<br/>');

}else{
    echo("conexion establecida con exito <br/>");
    
}
// creaccion de una base de datos
if(mysqli_query($con_bd,'CREATE DATABASE almacenes')===TRUE){
    echo('Se creo correctamente a BD llamada alamacenes.</br>');
}else{

    echo('Error en la creaccion de la BD :'. mysqli_error($con_bd).'<br/>');
}


$muchotema="CREATE TABLE almacen (codigo int(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    lugar varchar(100),
                                    capacidad int(5));";

$muchotema="CREATE TABLE  caja (numreferencia char(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                   contenido varchar(100),
                                    valor int(5),
                                    almacen int(4) UNSIGNED,
                                    FOREIGN KEY(almacen) REFERENCES almacen  
                                    );";





if(mysqli_query($con_bd,$muchotema)===TRUE){
    echo('Se creo correctamente las tablas.</br>');
}else{

    echo('Error en la creaccion de la tabla'. mysqli_error($con_bd).'<br/>');
}






?>