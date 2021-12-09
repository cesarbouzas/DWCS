<!DOCTYPE html>
<land="es"> 
<html>
    <head>
        <title>
            PRacticas cons funciones string
        </title>
        
    </head>
<body>
    <h1>Practicas con String</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" >
    <p><labael>Cadena </labael><input type="text" name="cadena" id="cadena"/></p>
    <p><labael>Caracter </labael><input type="text" name="caracter" id="caracter"/></p>
    <p><label>Subcadena1 (vieja) </label><input type="text" name="subcadena1" id="subcadena1"></p>
    <p><label>Subcadena2 (nueva)</label><input type="text" name="subcadena2" id="subcadena2"></p>
    
    <input type="submit" value="calcular">
    </form>

    
    <?php
    $cadena=trim($_POST["cadena"]);
    $caracter=trim($_POST["caracter"]);
    $sub_cadena1=trim($_POST["subcadena1"]);
    $sub_cadena2=trim($_POST["subcadena2"]);
    contarCaracteres($cadena);
    trocearCadena($cadena,$caracter);
    remplazarCadena($sub_cadena1,$sub_cadena2,$cadena);
    ponerMayuscualasMinusculas($cadena);
    
function contarCaracteres($cadena){
    if($cadena !=""){
        echo"<h2>1-Funcion strlen()</h2>";
            echo "<h3>Esta funcion devuelve la longitud de la cadena enviada</h3>"; 
            echo "<p>La cadena $cadena introducida tiene una longitud de :".strlen($cadena)."<p>";
    }
}
function trocearCadena($cadena,$caracter){
    if($cadena!=""&& $caracter!=""){
        echo"<h2>2-Funcion strstr()</h2>";
            echo "<h3>Esta funcion devuelve la cadena desde un caracter hasta el final de la cadena</h3>"; 
            echo "<p>La cadena $cadena introducida , se parte en el trozo desde $caracter :".strstr($cadena,$caracter)."<p>";
    }

}
function remplazarCadena($sub_cadena1,$sub_cadena2,$cadena){
    if($cadena!=""&& $sub_cadena1!="" && $sub_cadena2!=""){
        echo"<h2>3-Funcion str_remplace(vieja,nueva,todacadenainial)</h2>";
            echo "<h3>3.1Esta funcion remplaza la subcadena2 por otra subcadena1 </h3>"; 
            echo "<p>Dentro cadena $cadena introducida ,se remplaza la $sub_cadena1 ,por cadena $sub_cadena2:".str_replace($sub_cadena1,$sub_cadena2,$cadena)."<p>";
            echo"<h3>3.2 Con la subcadena nueva como array(\"a\",\"e\",\"i\",\"o\",\"u\") tambien funcionaria</h3>";
            $arrar=['a','e','i','o','u'];echo str_replace($arrar,"",$cadena);
        }

}
function ponerMayuscualasMinusculas($cadena){
    if($cadena!=""){
    echo"<h2>4-Funciones strtoupper y strtolower </h2>";
            echo "<h3>Pasa un string a mayusculas y minusculas</h3>"; 
            echo "<p>En mayusculas ->".strtoupper($cadena). " y en minusculas ->".strtolower($cadena);  
            echo "<p>ucfirst pone el primer caracter en mayusculas ".ucfirst($cadena);
            echo "<p>ucwords pone el primer caracter de cada plaba en mayusculas".ucwords($cadena);
        }
    }



?>
</body>


</html>