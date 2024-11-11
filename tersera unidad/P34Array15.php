<?php

$arraydatos = ["Karla","Rosales","Ernandes"];

$string = implode( "", $arraydatos);
echo "cadena de texto <br>";
echo $string;
echo "<br>","<br>";

$cadena = "tersero de programacion amtutuino";
$array = explode(" ", $cadena );

$longitud = count ($array);
echo "<br>";
echo "arrego con datos de tipo string  <br>";

for ($i=0; $i < $longitud ; $i++) { 
	echo $array[$i];
	echo "<br>";

}







?>