<?php

/* cbtis 89 
  emiliano ruiz rosales
  3°a programacion matutino
  */


  echo "NUMEROS ALEATORIOS";
  echo "<br>","<br>";

  for ($k=; $k<=5 ; $k++) { 
    $valor=rand(1,100);
    $reci=$valor % 2;
    echo "el numero es ",$valor;
    if ($reci==0) {
      echo "es numero par ","<br","<br>";
    }
    else 
     {echo "el numero es impar","<br>"
     
    }
  }
?>