<?php
/* cbtis 89 
  progra array
  emiliano ruiz rosales
  3°a programacion matutino
  */

 $nombre = "Emiliano";
 $array =  array(1,2,3,"casa",$nombre);

 $longitud = count($array);

 for ($i=0;$i<$longitud; $i++)
{
 	echo $array[$i];
 	echo "<br>";

 }
?>