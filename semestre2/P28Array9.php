<?php
/* cbtis 89 
  emiliano ruiz rosales
  3°a programacion matutino
  */
  $equipo = array ("playeras"=>"100","camisas"=>"250","pantalon de mesclilla"=>"300","vermudas"=>"200");

  echo "** Tienda de ropa **","<br>","<br>";

  foreach($equipo as $pocicion=>$jugador)
    {echo " La tienda de ropa" . $jugador . "tiene un costo de " . $pocicion ;
  echo "<br>","<br>";
}

?>