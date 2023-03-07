<?php
$numero = intval(fgets(STDIN));
$horas = intval(fgets(STDIN));
$valor = floatval(fgets(STDIN));

$salario = $valor * $horas;

echo "NUMBER = " . $numero . "\n";
echo "SALARY = U$ " . number_format($salario, 2, ".", "") . "\n";
?>