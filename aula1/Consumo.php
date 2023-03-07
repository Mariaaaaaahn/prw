<?php


$x = intval(trim(fgets(STDIN)));
$y = floatval(trim(fgets(STDIN)));


$consumoMedio = $x / $y;


echo number_format($consumoMedio, 3, '.', '') . " km/l\n";

?>
