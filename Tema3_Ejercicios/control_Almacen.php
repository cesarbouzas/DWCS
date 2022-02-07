<?php

$con_bd=@mysqli_connect('localhost','admin','1234');
if(!$con_bd){
    echo('Error número '.mysqli_connect_errno.'al establecer la conexión'.mysqli_connect_error().'/n');

}else{
    echo("Conexion establecida con exito .\n");
    
}



if(mysqli_query($con_bd,'DROP DATABASE almacenes')===TRUE){
    echo("Se borró correctamente a BD llamada alamacenes.\n");
}else{

    echo('Error en el borrado de la BD :'. mysqli_error($con_bd)."\n");
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
    echo("Se creo correctamente las tabla alamacen.\n");
}else{

    echo('Error en la creaccion de la tabla alamacen'. mysqli_error($con_bd)."\n");
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
    echo("Se creo correctamente las tabla caja.\n");
}else{

    echo('Error en la creaccion de la tabla caja:'. mysqli_error($con_bd)."\n");
}


$muchotema="INSERT INTO almacen(lugar,capacidad) VALUES 
('Ernesto che guevara, A Coruña',35),/*almacen1*/
('Fernando wirtz,A Coruña',4),/*almacen 2*/
('casa dios , BILBAO',1),/*almacen 3*/
('poligono sabon,A Coruña',100),/*almacen 4*/
('poligono sabon,A Coruña',10),/*almacen 5*/
('tres cruces , Verin',999)";/*almacen 6*/




if(mysqli_query($con_bd,$muchotema)===TRUE){
    echo("Introducimos alamecenes correctamente.\n");
}else{

    echo('Error en la introduccion los almacenes:'. mysqli_error($con_bd)."\n");
}

$muchotema="INSERT INTO caja(contenido,valor,almacen) VALUES 
('llaves coche de cesar',200,1),
('libro sql',12,2),
('libro Nodejs',26,2),
('libro despliegue roollo',999,2),
('libro de DIW',19.99,2),
('Santo grial con la salvacion para el Covid',0,3),
('freno de mano',45,4),
('caja de cambio',189,4),
('horquilla delantera',23,5),
('horquilla trasera',149,5),
('Libro del SQL',12,2)";


if(mysqli_query($con_bd,$muchotema)===TRUE){
    echo("Se añadio correctamente el contenido en las cajas.\n");
}else{

    echo('Error en la introduccion del contenido en las cajas '. mysqli_error($con_bd)."\n");
}

$muchotema="SELECT a.codigo, a.lugar,a.capacidad, count(c.numreferencia) AS articulos FROM almacen AS a JOIN caja AS c ON a.codigo=c.almacen GROUP BY a.lugar HAVING a.capacidad<=count(c.numreferencia)";

if(mysqli_query($con_bd,$muchotema)===TRUE){
echo("Consulta realizada correctamente\n");
}else{

echo('Error en la consulta'. mysqli_error($con_bd)."\n");
}






?>