<?php
/* cbtis 89 
  emiliano ruiz rosales
  3°a programacion matutino
  */
$datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }

?>