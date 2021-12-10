<!DOCTYPE html>
<lang="es"></lang>
<html>

<head>
    <title></title>

</head>
<body>
    <h1> Trabajo con fechas </h1>
    <h2> funcion time()</h2>
    <p>Devuleve los segundos desde el inicio de unix en 1 de enero de 1970</p>
    <?php
    echo " Desde el 1 enero de 1970 hasta hoy han pasado :".time(). " sg";
    ?>
    <h2>Funcion Date()</h2>
    <p>Devuelve la fecha en  formato que se ha pasado comoparametro</p>
    <?php
    $fecha_tipo1= "Hoy es _".Date("d-m-Y");
    $fecha_tipo2="En otro fomato ".Date("l-F-Y");
    ?>
    <p>Guardamos las fechas en una variable y las ecribimos en un archivo<p>
        <h3>lo hacemos con escritura fwrite()  y lectura fgets() </h3>

    <?php
    escribirFechaFichero("fechas.txt",'w+',$fecha_tipo1."\n");
    escribirFechaFichero("fechas.txt",'a+',$fecha_tipo2."\n");
    $contenidoFicheroArray=leerFicheroArray("fechas.txt",'r');
    foreach($contenidoFicheroArray as $linea){

                echo $linea."</br>";
    }

 
?>

<h3>lo hacemos con escritura file_put_contents  y lectura mediante file()  </h3>
<?php
    escribirRapido("fechasrapido.txt",$fecha_tipo1."\n".$fecha_tipo2."\n");
    $arrayRapido=leerFicheroTabla("fechasrapido.txt");
    foreach($arrayRapido as $valor){
        echo "$valor.</br>";
    }
    
     $fenac=mktime(0,0,0,7,4,1977);
    echo "mi fecha de nacimiento es de ".strftime("%d-%m-%Y",$fenac)."</br>";
    
    $ahora=time();
    echo $ahora."</br>";
    echo "ahora mismos son las ".strftime("%H:%M:%S-%d-%m-%Y",$ahora)."</br>";
    $sg_año=(365*24*60*60);
    echo "estos tos son los sg de un año ".$sg_año."</br>";
    
    
    $edad=$ahora-$fenac;
    $edad=$edad/$sg_año;
    echo "Mi edad en sg es de :".$edad."</br>";

    
    echo "Tengo Una edad de".$edad."a fecha".strftime("%H:%M:%S-%d-%m-%Y",$ahora)."</br>";
    



    
    function escribirRapido($archivo,$txt){
        file_put_contents($archivo,$txt);
     }
    function escribirFechaFichero($fichero,$op,$fecha){
        $recurso=fopen($fichero,$op);
        if($recurso){
            fwrite($recurso,$fecha);
            fclose($recurso);
        }else{ echo "no se puede hacer operacion con fichero";}
    }
    function leerFicheroArray($fichero,$op){
        $recurso=fopen($fichero,$op);
        if($recurso){
            $i=0;
        while(!feof($recurso)){
           $contenido[$i]=fgets($recurso,4096);
            $i++;
        };
        return $contenido;
    }
    }
        function leerFicheroTabla($fichero){
            $tabla=file($fichero);
            return $tabla;

        }          

    

    ?> 
</body>
</html>


<?php


?>