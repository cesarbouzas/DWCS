<!DOCTYPE html>
<lang="es">
    <html>
        <head>
            <title>Ejercicio 3.6.1.1</title>
        </head>
    <body>
    <h1>Enunciado 3.6.1.1 (fácil)</h1>
    <p>Cree una tabla que contenga los nùmeros del 1 al 10 y otra con los números del 11 al 20.
        A continuación , cree una tabla con la suma de las dos primeras tablas y muestre sus valores.
        Para crear las tablas utilice Bucles</p>
        <table>
        
            <?php
        $tabla1=crearTabla(1,10);
        $tabla2=crearTabla(11,20);
        $resultado=sumarTablas($tabla1,$tabla2);
        mostrarTabla($resultado);




        function crearTabla($min,$max){
            
            for($i=0;$i<=($max-$min);$i++){
                $tabla[$i]=$min+$i;
            }
            return $tabla;
        }
        function mostrarTabla($tabla){
            
            foreach($tabla as $valor){
                echo "<tr><td>$valor</td></tr>";
            }
        }
        function sumarTablas($t1,$t2){
            
            if(count($t1)==count($t2)){
                $i=0;
                foreach($t1 as $valor){
                      $resul[$i]=$t1[$i]+$t2[$i];  
                    $i++;
                }
            }
            return $resul;

        }

?>
        
        </table>
    </body>


    </html>