<?php
$iva=false;
$precio=1000;
//calcularIva(); produce error por ser definida en condicional
if($iva){
    function calcularPrecio(){
        global $precio;
        echo" El precio con Iva es =".$precio*1.21;
    }
}else{
    function calcularPrecio(){
        global $precio;
        echo"El precio no tiene Iva es=".$precio;
    }
}
//calcularPrecio();

echo"\n";
calcularPrecio();

?>
