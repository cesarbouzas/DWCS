<?php
$natural=1;
$decimal=3.1416;
$cadena="esto es una cadena";
$boleano=true;
$nulo=null;
$nulos=0;
$matriz=array(1,2,3,4,5,6,array(0.14589,0,3));
$tipo=gettype($natural);

printf("la variable natural es %s \n",$tipo);
$tipo=gettype($decimal);
printf("la variable decimal es %s \n",$tipo);
$tipo=gettype($cadena);
printf("la variable cedena es %s \n",$tipo);
$tipo=gettype($bolenao);
printf("la variable boleano es %s \n",$tipo);
$tipo=gettype($nulo);
printf("la variable nulo es %s \n",$tipo);
$tipo=gettype($matriz);
printf("la variable matriz es %s \n",$tipo);
$tipo=gettype($tipo);
printf("la variable tipo es %s \n",$tipo);
$tipo=gettype($matriz[6]);
printf("la posicion 6 de la matriz es %s  \n",$tipo);
settype($matriz[6][0],"float");
$tipo=gettype($matriz[6][0]);
printf("la posicion 6.1 de la matriz es %s %+.2f \n",$tipo,$matriz[6][0]);

if(is_scalar($natural)){

    echo "es escalar";
}else{

    echo "no es escalar";
}
echo "\n";
if(is_bool($matriz)){
    echo " es boleano\n";
}else {

    echo "no es bolenao\n";
}
$a=$b="3.1416";//asignamos  a dos variables la misma cadena de texto.
if(settype($a,"float")){
 print "realizado el cambio de la variable \$a de ".gettype($b)." a ".gettype($a)."con valor $a";

}else{
 echo "error en el cambio";

}
echo"\n";
if(isset($nulos)){
echo "esta definida";
}else{
    echo "no esta definida";

}
echo "\n";
if(empty($nulos)){
    echo"la variable \$nulos esta vacia";
}else {
      echo "la variable \$nulos no esta vacia";  
}
echo "\n";
define("PI",3.1416,true);
print "el valor de de pi en minusculas es ".pi." el mismo que para PI ".PI;
?>