<?php
/* cbtis 89 
  emiliano ruiz rosales
  3°a programacion matutino
  */


$array_numerico_indexado = array(1, "playera", 2, "pantalon");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <br>";
   }

   array_push($array_numerico_indexado, 3, "sinto");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <br>";
   }
$arraynumerico = array(3,2,1,2,4);

sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

rsort($arraynumerico);
var_export($arraynumerico);

?>