<!DOCTYPE html>
<lang="es">
    <html>
        <head>
            <title>
                Banners de imagenes
            </title>
        </head>

<header>
    <h1> banners de la página</h1>
<?php
//Cuando se accede a un páigna php , muestre los banners de forma aleatoria entre tres opciones .
//los elemntos de esos banner son una imagen y un enlace y una descripcion de la imagen.Estos elementos
//se alamcenan en una tabla

$banners[0]=["imagen1","images/imagen1.png","muestra la imagen1"];
$banners[1]=["imagen2","images/imagen2.png","muestra la imagen2"];
$banners[2]=["imagen3","images/imagen3.png","muestra la imagen3"];

$claveAletoria=array_rand($banners);
$bannerActual=$banners[$claveAletoria];
echo "<img id='".$bannerActual[0]."' src='".$bannerActual[1]."' alt='".$bannerActual[2]."'>";
?>


</header>
<body>

</body>
    </html>