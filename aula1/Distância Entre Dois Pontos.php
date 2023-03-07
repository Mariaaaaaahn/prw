<?php

list($x1, $y1) = sscanf(fgets(STDIN), "%f %f");
list($x2, $y2) = sscanf(fgets(STDIN), "%f %f");

$distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

echo number_format($distancia, 4, ".", "") . "\n";
?>
