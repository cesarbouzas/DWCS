<?php

/******************Operadores Asignacion ********************************/

$anoNac=readline("introduce tu año de nacimiento :");//Asigna el valor de mi año de nacimiento a la varaiable.
$anoActual=date("Y");//Asigna el valor del año actual a la variable.
$aux=0;
$aux+=$anoNac;//ASigna el valor de la suma de aux+anoNac a aux

const ANOCREAPHP=1994;

echo "Nací en el año : $anoNac \n";
echo "Estamos en el año : $anoActual\n";

/******************Operadores Aritmeticos********************************/

$edad=$anoActual-$anoNac;// Operador de aritmetico de resta
$retraso=($anoActual-ANOCREAPHP)*365;//operador aritmetico de multiplicacion

echo"Tengo una edad de : $edad \n";
echo "Llevo un retraso en el esuido desde la creaccion de php de $retraso dias\n";

/*******************Operadores Incremento/decremento**********************/

echo"Como este año es ". $anoActual++." , el proximo será ".$anoActual--." y el pasadado fue " .--$anoActual."\n";
++$anoActual; 



/*******************Operadores de Comparacion*****************************/
 
if($edad>=33){ //Operador de comparacion mayor o  igual que

    echo "soy mayor que Jesucristo cuando murió\n";
}else {

    echo "soy menor que Jesucristo cuando mirió\n";
}
while ($aux<=date("Y")){ // Operador de compararacion menor o igual que
    if(($aux%2)!=0){
    echo "yo he vivido en el año impar ".$aux++;
    }else{
      echo " y en el año par  ".$aux++ ;
    }
}
    echo" \n";


/********************Operadores Logicos************************************/

if($edad<=33||$anoNac>=2000){//Compara mediente el operador lógico or si eres menor que Jesus al morir o si eres milenial entonces eres Joven , en caso contrario eres viejo.
echo "\nEres Joven";

}else{
echo "\nEres viejo";

}

if($edad>24 && $anoNac<2015){//Comprueba si ya estabas vivo en fechas importantes del cine mediante el operador lógico and y tu edad.

    echo "\nHas visto como Skynet de terminator I entra en funcionamiento en 1997 y como Michel j Fox va al futuro en 2015\n";

}


?>
