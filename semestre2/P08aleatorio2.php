<?php
/* cbtis 89 
  programa que detecta la aleatoriedad
  emiliano ruiz rosales
  3°a programacion matutino
  */
$num=rand(1,10);

  if ($num<=6) 
  	{echo "<br>";
 echo "<p> la califucacion es :", $num;
 echo "<p> el alumno reprovo ";}

 elseif ($num>6) 
 	{echo "<br>";
 		echo "<p> la calificacion es :", $num;
 	echo "<p> el alumno aprovo ";}