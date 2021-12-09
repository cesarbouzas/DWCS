<?php
$iva=true;
$precio=1000;
function calcularPrecio($iva,$precio){
    if($iva){
        printf("El precio es :%0.2f",$precio*1.21);
        echo"\n";

    }else{
        printf("El precio es :%0.2f",$precio);
        echo"\n";
    }
}
calcularPrecio($iva,$precio);
calcularPrecio(false,1000);
$iva=false;
calcularPrecio($iva,$precio);


?>