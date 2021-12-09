<?php

use function PHPSTORM_META\type;

$b=1;
$a=1;
$a+=$a;
$a++;
print '\\\\\\\\\\\\\\\\\\\\\\\\Comillas Simples\\\\\\\\\\\\\\\\\\\\\\\\\\\\ ';
print"\n";
print 'Las comillas simples admiten las secuencias de escape:';
print"\n";
print '1) \\\\ ->\ ';
print"\n";
print '2) \\\' ->\' ';


Print"\\\\\\\\\\\\\\\\\\\\\\\\\\ Comillas dobles \\\\\\\\\\\\\\\\\\\\\\\\\\\\ \n";
print "Las comillas dobles admiten las secuencias de escape:\n";
print "1) \\\\->\ \n";
print "2) \\\"->\" "."\n";
print "3) \\n-> anvece de linea \n";
print "4) \\r->\r  retorno de carro \n";
print "5) \\t-> \t muestra un tabulador horizontal \n";
print "6) \\v->\v muestra un tabulador vertical \n";
print "7) \\f->\f muestra un avance de página \n";
print "8) \\\$->$ muestra el simbolo de dolar\n ";

print "ERROR DE LOS APUNTES NO es valido  \'-> ' \n ";
print "\\\\\\\\\\\\\\\\\\\\\\Heredoc\\\\\\\\\\\\\\\\\\\\\\\\\n";
/*
$a=<<<Cadena
 Esto se trata como si fuera una cadena normal
entre comillas pero con la ventaja que se transcribe literal
con los saltos de linea y   tabuladores horizontales y
              $b                          verticales
retorno de carro     
Cadena;
print "$a";
*/
$matriz1=<<<matriz
$a $b $a
$a $b $a
$b $b $a
matriz;


print "$matriz1";



?>
