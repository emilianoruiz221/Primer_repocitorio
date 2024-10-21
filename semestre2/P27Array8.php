<?php
/* cbtis 89 
  emiliano ruiz rosales
  3°a programacion matutino
  */
$datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2),array(3, 3, 3),array(4, 4, 4),,array(5, 5, 5),array(5, 5, 5),array(6, 6, 6   ),array(7, 7, 7),array(8, 8, 8),array(9, 9, 9),array(10, 10, 10),array(12, 12, 12),array(13, 13, 13));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }

   $numero= range(1,100);

   for ($i=0; $i< count($numero);$i++){
    if ($numero[$i]% 2 ==0) {
      echo $numero[$i]."\n";
    }
   }

?>