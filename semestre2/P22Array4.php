<?php
/* cbtis 89 
  programa que almacena datos en un arreglo 
  y posterior mente los imprime
  emiliano ruiz rosales
  3°a programacion matutino
  */

  $equipo = array ("portero"=>"julio","defensa"=>"diego",
"medio"=>"jair","derantero"=>"rafa");
  echo "** seleccion nacional **","<br>","<br>";
  
  foreach ($equipo as $pocicion => $jugador) 
  	{echo "el jugador". $jugador ."es el " . $pocicion;

  	echo "<br>","<br>";
  }
?>