<?php
$iva=true;
$precio=1000;
function calcularPrecioConIva(){
    $precio=$GLOBALS["precio"];
    $precioIva=$precio*1.21;
    echo "el precio es ".$precioIva;
}
function calcularPrecio(){
$iva=$GLOBALS["iva"];
$precio=$GLOBALS["precio"];
    if($iva){
    calcularPrecioConIva();
}else{
    echo "El precio no tiene iva :".$precio;
}
}
CalcularPrecio();
echo "\v";
$iva=false;
CalcularPrecio();
echo"\n";

?>