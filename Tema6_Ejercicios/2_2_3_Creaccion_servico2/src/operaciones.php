<?php
Class Operaciones{
/**
 *@soap
 *@param float $a
 *@param float $b
 *@return float
 */

 function suma($a,$b){
     return $a+$b;
 }
/** 
*@soap
*@param float $a
*@param float $b
*@ return float 
*/
function resta($a,$b){
    return ($a-$b);
}
/**
 * @soap
 * @param string $texto
 * @return string
 */
function saludar($texto){
    return ("Hola $texto");
}


}