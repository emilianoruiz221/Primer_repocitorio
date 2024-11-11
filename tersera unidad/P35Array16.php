<?php

$array1 = array (10,20,30,40,50);
$array2 = array (3,7,6,15,10);

$arraysuma = array ();
$arrayresta = array ();
$arraymulti = array ();
$arraydibi = array ();

 $longitud = count ($array1);

 for ($i=0; $i <$longitud ; $i++) { 
  $arraysuma[$i] = $array1[$i] + $array2[$i];
  $arrayresta[$i] = $array1[$i] - $array2[$i];
  $arraymulti[$i] = $array1[$i] * $array2[$i];
  $arraydibi[$i] = $array1[$i] / $array2[$i];

echo ("la suma de dos arreglos <br>");
for ($i=0; $i <$longitud ; $i++) { 
 echo $array1[$i]. "+" .$array2[$i]."  =  ".$arraysuma[$i];
 echo "<br>";

}
echo "<br>";

echo ("la resta de dos arreglos <br>");
for ($i=0; $i <$longitud ; $i++) { 
 echo $array1[$i]. "-" .$array2[$i]."  =  ".$arrayresta[$i];
 echo "<br>";

 }
echo "<br>";

echo ("la multi de dos arreglos <br>");
for ($i=0; $i <$longitud ; $i++) { 
 echo $array1[$i]. "*" .$array2[$i]."  =  ".$arraymulti[$i];
 echo "<br>";
}

echo "<br>";

echo ("la multi de dos arreglos <br>");
for ($i=0; $i <$longitud ; $i++) { 
 echo $array1[$i]. "/" .$array2[$i]."=".$arraymulti[$i];
 echo "<br>";
}

}

?>