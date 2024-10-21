<?php

/* cbtis 89 
  programa que detecta la aleatoriedad
  emiliano ruiz rosales
  3°a programacion matutino
  */

  $num=rand(1,100);

  if ($num<=50) 
  	{echo "<br>";
 echo "<p> el numero aleatorio es :", $num;
 echo "<p> el numero menor a 50 ";}

 elseif ($num>50) 
 	{echo "<br>";
 		echo "<p> el numero aleatorio es :", $num;
 	echo "<p> el numero mayor a 50 ";
 }
 ?>