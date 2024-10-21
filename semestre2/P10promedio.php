
<?php
/* cbtis 89 
  programa que marca el promedio
  emiliano ruiz rosales
  3°a programacion matutino
  */
$num=rand(1,10);

$nombre1;$nombre2;$nombre3;$cal3;$cal1;$cal2;
$cal2=7.2;
$cal1=9.4;
$cal3=10;

$nombre1 = "roberto guadalupe";
$nombre2 = "pablito clavo un clavito en el la punta de un palito ";
$nombre3 = "miguel hidalgo";

echo " <p> el estudiante es :",$nombre2,"la calificacion es :",$cal1;

if ($cal1>6) {
	echo "<br>";
	echo "<p> la calificacion es :",$cal1;
	echo "<p> el estudiante esta reprobado  ";}

 elseif ($cal2<6)
 	{echo "<br>";
echo "<p> la calificacion es :",$cal1;
echo "<p> el alumno esta reprobado";}

echo " <p> el estudiante es :",$nombre1, "la calificacion es :",$cal2;

if ($cal16>6) {
	echo "<br>";
	echo "<p> la calificacion es :",$cal2;
	echo "<p> el estudiante esta reprobado  ";}

 elseif ($cal2<6)
 	{echo "<br>";
echo "<p> la calificacion es :",$cal2;
echo "<p> el alumno esta reprobado";}

echo " <p> el estudiante es :",$nombre3, "la calificacion es :",$cal3;

if ($cal1<6) {
	echo "<br>";
	echo "<p> la calificacion es :",$cal3;
	echo "<p> el estudiante esta reprobado  ";}

 elseif ($cal2>6)
 	{echo "<br>";
echo "<p> la calificacion es :",$cal3;
echo "el alumno estra reprobado";}