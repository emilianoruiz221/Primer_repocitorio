<?php

/* cbtis 89 
  emiliano ruiz rosales
  3°a programacion matutino
  */


  echo "la tabla del 7";
   echo "<br>","<br>";
   $tabla=7;
   $valor= 10;
  $inicio=1;
  while ($inicio<=$valor) {
    $resultado=$tabla*$inicio;
    echo $tabla,"X",$valor,"=",$resultado;
    echo "<br>","<br>";
    $inicio++;
  }