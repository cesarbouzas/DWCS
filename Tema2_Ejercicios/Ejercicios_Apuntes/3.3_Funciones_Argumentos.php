<?php

$precio=100;
$iva=1.18;

function calculuarPrecioIvaRef(float &$p,float $i=1.21):float{
    return $p*=$i;
} 

calculuarPrecioIvaRef($precio);
echo "el precio con Iva es $precio"."\n";
?>