

<?php
/* 

   emiliano ruiz rosales
   3°A Programación Matutino

⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣶⣶⣶⣦⠀⠀
⠀⠀⣠⣤⣤⣄⣀⣾⣿⠟⠛⠻⢿⣷⠀
⢰⣿⡿⠛⠙⠻⣿⣿⠁⠀⠀ ⠀⣶⢿⡇
⢿⣿⣇⠀⠀⠀⠈⠏⠀⠀⠀ CBTIS 89
⠀⠻⣿⣷⣦⣤⣀⠀⠀⠀ ⠀⣾⡿⠃⠀
⠀⠀⠀⠀⠉⠉⠻⣿⣄⣴⣿⠟⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣿⡿⠟⠁⠀⠀⠀

 */


$Compras = array(800, 2700, 1900, 150, 7600, 1000);
$Descuentos = array();
$Total = array();
$Porcentaje = array();


for ($i = 0; $i < count($Compras); $i++) {
    
    if ($Compras[$i] <= 300) {
        $Descuentos[$i] = 0;
        $Porcentaje[$i] = "0%";
    } elseif ($Compras[$i] > 300 && $Compras[$i] <= 1000) {
        $Descuentos[$i] = $Compras[$i] * 0.10;
        $Porcentaje[$i] = "10%";
    } elseif ($Compras[$i] > 1000 && $Compras[$i] <= 2500) {
        $Descuentos[$i] = $Compras[$i] * 0.15;
        $Porcentaje[$i] = "15%";
    } elseif ($Compras[$i] > 2500 && $Compras[$i] <= 5000) {
        $Descuentos[$i] = $Compras[$i] * 0.20;
        $Porcentaje[$i] = "20%";
    } else {
        $Descuentos[$i] = $Compras[$i] * 0.25;
        $Porcentaje[$i] = "25%";
    }
    
    
    $Total[$i] = $Compras[$i] - $Descuentos[$i];
}


echo "<h3>Resumen de Compras y Descuentos</h3>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Compra</th><th>Descuento</th><th>Total</th><th>Porcentaje</th></tr>";

for ($i = 0; $i < count($Compras); $i++) {
    echo "<tr>";
    echo "<td>".$Compras[$i]."</td>";
    echo "<td>".$Descuentos[$i]."</td>";
    echo "<td>".$Total[$i]."</td>";
    echo "<td>".$Porcentaje[$i]."</td>";
    echo "</tr>";
}

echo "</table>";



?>
