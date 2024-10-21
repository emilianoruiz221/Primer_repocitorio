<?php
  /* cbtis 89 
  programa que suma dos numeros enteros
  emiliano ruiz rosales
  3°a programacion matutino
  */

$articulo1;
$articulo2;
$articulo3;
$suma;
$descuento;
$articulo1= 2000;
$articulo2= 1000;
$articulo3= 758;

$suma=$articulo1+$articulo2+$articulo3;


echo " <p> el primer numero es ",$articulo1;
echo "<br>";
echo " <p> el segundo numero es ",$articulo2;
echo "<br>";
echo " <p> el tercer numero es ",$articulo3;
echo "<br>";
echo " <p> la sum del total de productos es :", $suma;

if ($suma<=1000) 
{echo "<br>";
$descuento=$suma*0.05;
echo "<p> el descuento es :",$descuento;}

elseif 
($suma>=1000 && $suma<2500)
{echo "<br>";
$descuento=$suma*0.1;
echo " <p> el descuento es :",$descuento;}

elseif ($suma>=2500) 
{echo "<br>";
$descuento=	$suma*0.2;
echo " <p> el descuento es :", $descuento;}










?>