<?php
/* cbtis 89 
  programa que marca el dinero de un cheque
  emiliano ruiz rosales
  3°a programacion matutino
  */
$Cheque;
$Cheque=5793;

echo "el cheque tiene el valor de",$cheque;
echo "<br>";
 $bimil= floor ($Cheque/1000);
$cheque=floor($Cheque%1000);

 echo "el cheque tiene el balor de ",$bimil;
echo "<br>";
$biqui= floor($Cheque/500);
$cheque=floor($Cheque%500);

echo "el cheque tiene el balor de ",$biqui;
echo "<br>";
$bidos= floor($Cheque/200);
$cheque=floor($Cheque%200);
echo "el cheque tiene el balor de ",$bidos;
echo "<br>";
$bicien= floor($Cheque/100);
$cheque=floor($Cheque%100);
echo "el cheque tiene el balor de ",$bicien;
echo "<br>";
$bicin= floor($Cheque/50);
$cheque=floor($Cheque%50);
echo "el cheque tiene el balor de ",$bicien;
echo "<br>";
$bibei= floor($Cheque/20);
$cheque=floor($Cheque%20);
echo "el cheque tiene el balor de",$bibei;
echo "<br>";
$bidies= floor($Cheque/10);
$cheque=floor($Cheque%10);
echo "el cheque tiene el balor de",$bidies;
echo "<br>";
$bicin= floor($Cheque/5);
$cheque=floor($Cheque%5);
echo "el cheque tiene el balor de",$bicin;
echo "<br>";
$bido= floor($Cheque/2);
$cheque=floor($Cheque%2);
echo "el cheque tiene el balor de",$bido;
echo "<br>";
$biuno= floor($Cheque/1);
$cheque=floor($Cheque%1);

echo "el cheque tiene el balor de",$biuno;
echo "<br>";
?>