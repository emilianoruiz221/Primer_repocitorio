<?php
/* cbtis 89 
  programa que almacena datos en un arreglo 
  y posterior mente los imprime
  emiliano ruiz rosales
  3°a programacion matutino
  */

  $frutas = array ("25"=>"mansana","40"=>"mango",
"35"=>"limon","20"=>"naranja");
  echo "** seleccion nacional **","<br>","<br>";
  
  foreach ($frutas as $precio => $fruta) 
  	{echo "el kilo de ". $fruta ."cuesta" . $precio;

  	echo "<br>","<br>";
  }
?>