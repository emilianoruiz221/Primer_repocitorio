<?php
/* cbtis 89 
  programa que almacena los precios de 5 alticulos
  emiliano ruiz rosales
  3°a programacion matutino
  */

$nombre = array ("Paco","mari","lalo","rosi","paty","beto");

$edad = array (17,30,71,12,58);
$grupo1 = array();
$grupo2 = array();
$grupo3 = array();

for ($i=0; $i <count($nombre); $i++) {

if ($edad[$i]< 18){
  $grupo1[] = 1
  $grupo2[] = 0
  $grupo3[] = 0
}elseif ($edad[$i]< 50) {
  $grupo1[] = 0
  $grupo2[] = 1
  $grupo3[] = 0
}else {
  $grupo1[] = 0
  $grupo2[] = 0
  $grupo3[] = 1
}

} 

echo "<p>nombre_____edad____grupo1___grupo2____grupo3 <br>";
 for ($i=0; $i <count($nombre); $i++) {
  echo "<p>$nombre_____$edad____$grupo1___$grupo2____$grupo3 <br>";
 }

?>