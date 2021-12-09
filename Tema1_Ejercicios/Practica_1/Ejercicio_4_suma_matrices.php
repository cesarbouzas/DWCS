<?php

$m1=[[]];
$m2=[[]];
$s=[[]];
echo"Suma de matrices 3x3\n";
echo "******Matriz 1*****\n";
for($i=0;$i<=2;$i++){
    for($j=0;$j<=2;$j++){
        $m1[$i][$j]=readline("Introduce el elemnto ($i,$j) :");
    }
}


echo "******Matriz 2*****\n";
for($i=0;$i<=2;$i++){
    for($j=0;$j<=2;$j++){
        $m2[$i][$j]=readline("Introduce el elemnto ($i,$j) :");
    }
}

echo "******Matriz SUMA*****\n";
echo"{";
for($i=0;$i<=2;$i++){
    echo"(";
    for($j=0;$j<=2;$j++){
        $s[$i][$j]=$m1[$i][$j]+$m2[$i][$j];
            if($j!=2){    
                echo $s[$i][$j].",";
            }else{
                echo $s[$i][$j];
    }
    }
    echo")\n";
}
echo"}\n";










?>