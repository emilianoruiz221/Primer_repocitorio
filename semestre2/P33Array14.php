<?php

 $arraynombres = array("emiliano","lius","sergio","jorge","ceser","eliu",);

echo "datos del arrego ordenados de forma asendentes por medio de ciclo for";
echo "<br>";
sort($arraynombres);
//var_export($arraynombres);
echo "<br>";
echo "<p>";

$longitud=count($arraynombres);

 for ($i=0; $i<$longitud ; $i++) { 
 	echo $arraynombres[$i];
 	echo "<br>";
 	echo "<p>";
 }

echo "posterior mente se agregan cuatro y se eliminan dos ";
echo "<br>";
array_push ($arraynombres, "pancho pantera");
array_push ($arraynombres, "pepito pistola");
array_push ($arraynombres, "german garmendia");
array_push ($arraynombres, "leo sanjuan");

unset($arraynombres[4]);
unset ($arraynombres[8]);

echo "datos del arrego ordenados de forma desendente por medio de ciclo for";
echo "<br>";
rsort($arraynombres);
//var_export($arraynombres);
echo "<br>";
echo "<p>";

$longitud=count($arraynombres);

 for ($i=0; $i<$longitud ; $i++) { 
 	echo $arraynombres[$i];
 	echo "<br>";
 	echo "<p>";
 }
echo "el numeroactual es ",$longitud;
?>