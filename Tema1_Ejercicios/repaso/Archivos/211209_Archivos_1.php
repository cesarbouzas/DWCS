<!DOCTYPE html>
<lang="es"">
<html>
<head>
    <title>
        Prácticas con archivos
    </title>
</head>
<body>
<h1> Prácticas con archivos </h1>
<h2> Operaciones de lecturas</h2>
<h3>file_get_contents</h3>
<p> file_get_contents() devuleve una cadena con el contenido del archivo a la variable indicada</p>
<?php
$nombreArchivo="archivo.txt";

//file_get__contents();
$contenido=file_get_contents($nombreArchivo);
echo $contenido;


?>
<h3>readfile()</h3>
<p> readfile() devuleve el numero de caracteres del archivo y muestra automáticamnete sus contendio</p>

<?php
//readfile();
$n_caracteres=readfile($nombreArchivo);
echo ("<p>el numero de caracteres del archivo $nombreArchivo es de $n_caracteres </p>");
?>
<h3>file()</h3>
<p> file() permite leer el contenido de un archivo , pero devuelve el contenido en un array linea por linea </p>

<?php

$lineasArchivo=file($nombreArchivo);
foreach($lineasArchivo as $nlinea=>$contenidoLinea){
    echo "<br>En el $nombreArchivo en la linea $nlinea está escrito :$contenidoLinea </br>";
}

echo "<h4>Con file() podemos manipular el texto por lineas que son arrays ,Ejemplos:</h4>";


echo "<br>La variable \$contenidoLinea son de tipo :".gettype($contenidoLinea)."</br>";
echo "<br>El archivo tiene :". count($lineasArchivo)." lineas</br>";
echo "<br>La lineas 2 tiene :".strlen($lineasArchivo[1]). "caracteres</br>";
echo "<br>Pasamos la linea 2 todo a minisculas :".strtolower($lineasArchivo[1])."</br>";
echo "<br>Pasamos la linea 2 toda a mayusculas :".strtoupper($lineasArchivo[1])."</br>";
echo "<br>Cambiamos el linea por renglón de la segunda linea ".str_replace("linea","renglón",$lineasArchivo[1])."</br>";

echo "<p>El estado actual array de lineas es :</p>";
echo imprimirArray($lineasArchivo);

echo "<br>Ponemos todo el archivo en mayuscula </br>";
$nuevoTexto=pasarArrayMayusculas($lineasArchivo);

echo "<br>La variable \$nuevoTexto guarda el texto en mayusculas :</br>";

imprimirArray($nuevoTexto); 

echo "<br>La variable \$lineasArchivo sigue guardando el texto original : </br>";
imprimirArray($lineasArchivo);
    


function imprimirArray($a){
    foreach($a as $valor){
        echo "<p>$valor</p>";

    }
}
function pasarArrayMayusculas($a){
        $i=0;    
    foreach($a as $valor){
        $a[$i]=strtoupper($valor);
        $i++;    
        }
    return $a;
}
function ponerPrimeraLetraPalabrasMayusculas($a){
    $j=0;   
foreach($a as $valor){
    $a[$j]=ucwords($valor);
    $j++;
}
return $a ; 
}
?>
<h2> Operaciones Escritura</h2>
<h3>file_put_contents("archivo","contendio")</h3>
<p>Escribe el contendio en el archivo borrando todo, lo crea si aun no existe</p>
<p>Escribo "hola mi primer escrtio digital</p>
<?php 
file_put_contents("file_put_contents.txt","hola mi primer escrito digital");//creo el archivo o lo borro poniendo el texto
readfile("file_put_contents.txt");
echo "<p>Cambio el contendio en el mismo archivo pero con letras mayusculas</p>";
$fpcArray=file("file_put_contents.txt");//meto el contenido del archivo en un array con una fila por linea.
$fpcArray=ponerPrimeraLetraPalabrasMayusculas($fpcArray);//El primer caracter de cada palabra a mayuscula ucwords()
$fpcArray=implode("\n",$fpcArray);//paso el array a lineas de texto con saloto de line
file_put_contents("file_put_contents.txt",$fpcArray);// reescribo el contenido cambiado
readfile("file_put_contents.txt");

?>
<h2>Operaciones Escritura Lectura</h2>
<h3>fopen()</h3>
<p> $recurso=fopen() permite desencadenar la apertura de un acrchivo, dos parametro enl nombre del archivo y el método de apertura </p>
<p> $recurso contiene un objeto que permite maniplar el archivo</p>
<p> r abre el archivo en modo solo lectura</p>
<p> r+ abre el archivo wn modo lectura y escritura</p>
<p> w abre el archivo en modo escritura , lo vacía o lo crea si aún no existe</p>
<p> w+ abre en escritura y lectur , lo vacìa o lo crea si aùn no existe</p>
<p> a abre el archivo en mdodo escritura o lo crea , no modifica el texto existene te</p>
<p> a+ abre el archivo en modo lectura y escri tura o lo crea.
<h3>fclose()</h3>
<p>Cierra el archivo , devuelve true o false en caso de error</p>

<?php 
//fopen();
echo"<p> con file_put_contents  creamos y escribimos en el archivo archivo10.txt con el contendio</p>";
file_put_contents("archivo10.txt","hola cesar\n hola javier");//escribimos rápido con file_put_contents;
$array_Archivo10=file("archivo10.txt");
imprimirArray($array_Archivo10);
?>
<h3>Funcion fgetc($recurso) recorre el archivo caracter por caracter , para elllo debemos crear un bucle para recorrer caracteres</h3>
<p>while(!false=chart(fgetc($recurso))) donde $recurso=fopen("archivo","op") ejecuta mientras no llegue a una ausencias de caracter</p> 
<p> $buffer=fgetc($recurso) vamos almacenaando cada caracter en una variable e imprimiendola hasta llegar al final</p> 
<?php
recorrerCaracteres("archivo10.txt");
?>
<p>El resultado muestra mediante una concatenacion de <\/br></p></br>

<h3>Funcion fgets($recurso)  recorre el  archivo linea por linea por ello necesitamos un bucle para recorrer</h3>
<p>donde $recurso=fopen("archivo","op") ejecuta mientras no llegue al final funcion feof()</p> 
<p> $buffer=fgetc($recurso) vamos almacenaando cada caracter en una variable e imprimiendola hasta llegar al final</p>
<?php
recorrerLineas("archivo10.txt");
?>
<p>El resultado muestra utilizando concatenacion br </p></br>
<p>fgets($recurso,ncaracteres) ,es decir , pdriamos indicarle un tamaño de linea de por ejemplo 3 caracteres(ojo n seria 4)</p>
<?php
recorrerLineasN("archivo10.txt",4);
?>
<h3>Funcion fread()  recorre el  archivo completo y devuelve una cadena completa</h3>
<p>no hace falta ningun bucle , fread(archivo ,lmaxbytex) se encarga de todo</p> 
<p> $contendio=fread($recurso,10000) alamcenamos todo como una cadena</p>
<?php
leerFichero("archivo10.txt",10000);
?>
<h3>Funcion fwrite ($recurso,$txt) escribe la cadena en el archivo indidcado lo crea y si existe lo machaca si esta en modo w </h3>
<p>no hace falta ningun bucle , fwrite() se encarga de todo</p> 

<?php
escribirFichero("archivo11.txt","estoy cansado de los archivos");
leerFichero("archivo11.txt",10000);

?>

<h3> Funcion fwrite en modo a solo añade</h3>
<?php
añadirEnFichero("archivo11.txt"," pero que  muy cansado.....copon");
leerFichero("archivo11.txt","10000");
?>


<?php
function recorrerCaracteres($archivo){
$recurso=fopen($archivo,"r");//creamos el recurso
    if($recurso){
    while(true==($char=fgetc($recurso))){//condicion que se cumple mientras encuentre caracteres
        
        echo $char."<br>"; //vamos imprimeindo esta variable.
    }
    fclose($recurso);//cerramos el recurso 
}else{
    echo ("archivo no se puede abrir");

}
}
function recorrerLineas($archivo){
    $recurso=fopen($archivo,"r");
    if($recurso){
        while(!feof($recurso)){
            $buffer=fgets($recurso);
            echo $buffer."</br>";
        }
    fclose($recurso);
    }else{
        echo "no se puede abrir archivo";
    }
}

function recorrerLineasN($archivo,$n){
    $recurso=fopen($archivo,"r");
    if($recurso){
        while(!feof($recurso)){
            $buffer=fgets($recurso,$n);
            echo $buffer."</br>";
        }
    fclose($recurso);
    }else{
        echo "no se puede abrir archivo";
    }
}


function leerFichero($archivo,$bytes){
    $recurso=fopen($archivo,"r");
    if($recurso){
        $contenido=fread($recurso,$bytes);
        echo $contenido."</br>";

        fclose($contenido);
    }else{
        echo "archivo no se puede abrir";
    }

}
function escribirFichero($archivo,$txt){
    $recurso=fopen($archivo,"w+");
    if($recurso){
        fwrite($recurso,$txt);
    fclose($recurso);
    }
    else{
        echo "no se puede abrir";}
}
function añadirEnFichero($archivo,$txt){
    $recurso=fopen($archivo,"a");
    if($recurso){
        fwrite($recurso,$txt);
    fclose($recurso);
    }
    else{
        echo "no se puede abrir";}
}

?>
</body>
</html>