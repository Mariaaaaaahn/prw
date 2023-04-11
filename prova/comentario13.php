<?php
// Ler número do funcionário, horas trabalhadas e valor recebido por hora
$numero = intval(fgets(STDIN));
$horas = intval(fgets(STDIN));
$valor = floatval(fgets(STDIN));

// Calcular o salário do funcionário
$salario = $valor * $horas;

// Imprimir o número do funcionário e o salário formatado em dólares
echo "NUMBER = " . $numero . "\n";
echo "SALARY = U$ " . number_format($salario, 2, ".", "") . "\n";
?>