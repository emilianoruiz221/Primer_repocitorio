<?php
/* cbtis 89 
  programa que almacena los precios de 5 alticulos
  emiliano ruiz rosales
  3°a programacion matutino
  */





$arraynumeros = array(-4, 8, 17, -11, -3, 1, 20, -30, 21, 50, -73, -7, -10, -8);
$arraypositivo = array();
$arraynegativo = array();



for ($i=0; $i <count($arraynumeros); $i++) {

  if ( $arraynumeros[$i] >= 0) {
  
    $arraypositivo[] = $arraynumeros[$i] ;
  }
  else {
      $arraynegativo[] = $arraynumeros[$i] ;
  }
}


  echo " numeros positivos </P>";
 /*ciclo que va a mostra el valor de array positivo*/
for ($i=0; $i <count($arraypositivo) ; $i++) { 
  echo $arraypositivo[$i];
  echo "<br>"; 
}
  echo " numeros Negativos </P> ";
/*ciclo que va a mostra el valor de array negativo*/
for ($i=0; $i <count($arraynegativo) ; $i++) { 
  echo $arraynegativo[$i] ;
  echo "<br>"; 
}


echo "valores guardados en los array";
echo "<br>";
echo "array positivos";echo "<br>";

var_dump($arraypositivo); 
echo "<br>";
echo "array Negativos";echo "<br>";

var_dump($arraynegativo);




?>