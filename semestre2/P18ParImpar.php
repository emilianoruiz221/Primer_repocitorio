<?php
/* cbtis 89 
   ParImpat
  emiliano ruiz rosales
  3°a programacion matutino
  */

  for ($i=1; $i <= 30 ; $++) 
  { $reciduo=$i % 2;
  if ($reciduo==0) 
  {$np=$np+$i;}
  	else
  {$ni=$ni+$i}

  }
echo "la suma delos numeros es pares es:",$np,"<br>";
echo "lalsuma de los numeros impares es :",$ni"<br>";

