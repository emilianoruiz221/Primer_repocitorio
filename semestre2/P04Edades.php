<?php

/* cbtis 89 
  progra edades
  emiliano ruiz rosales
  3°a programacion matutino
  */

$edad=15;
$nombre = "Emiliano";
$apellido1 = "Ruiz";
$apellido2 = "Rosales";

echo " <p> tu nomdre es ",$nombre." ".$apellido1." ".$apellido2;
echo "<br> " ;
echo "<p> tienes " , $edad , "años ";

if ($edad >=18) 
{echo "<br>";
 echo " <p> eres mayor de esdas <p> ";}
else
{echo "<br>";
 echo " <p> eres menor de edad <p> " ;}


?>
