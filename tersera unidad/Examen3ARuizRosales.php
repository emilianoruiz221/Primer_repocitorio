<?php
/* cbtis 89 
  emiliano ruiz rosales
  progama que almasena el nombre de cuatro articulos en un arregro llamado $productos y en otro arreglo multidimeniona llamado $precios almacena los precios correspondientes de 3 meses ,esto se hase por medio defilas y columnas.
  3°a programacion matutino
  */

$precios = array(array(500,600,550),array(800,700,600),array(400,200,300),array(500,200,500));


$productos = array("Vestido","pantalon","cinturon","camisas");
$subtotal = array();

 



echo "<p>productos____subtotal___promedio <br>";

 for ($i=0; $i <count($subtotal); $i++) {

  echo "<p>$productos[$i]_____$subtotal[$i]____$promedio[$i] <br>";
 }

echo "precios";
echo "<br>";
for ($x=0; $x<4; $x++) { 
   for ($y=0; $y<3; $y++) 
   {echo $precios[$x][$y]." ";}
echo "<br>";
}

?>