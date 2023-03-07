<?php

list($a, $b, $c) = explode(' ', trim(fgets(STDIN)));


$areaTriangulo = ($a * $c) / 2;
$areaCirculo = 3.14159 * pow($c, 2);
$areaTrapezio = (($a + $b) * $c) / 2;
$areaQuadrado = pow($b, 2);
$areaRetangulo = $a * $b;


echo "TRIANGULO: " . number_format($areaTriangulo, 3, '.', '') . "\n";
echo "CIRCULO: " . number_format($areaCirculo, 3, '.', '') . "\n";
echo "TRAPEZIO: " . number_format($areaTrapezio, 3, '.', '') . "\n";
echo "QUADRADO: " . number_format($areaQuadrado, 3, '.', '') . "\n";
echo "RETANGULO: " . number_format($areaRetangulo, 3, '.', '') . "\n";

?>
