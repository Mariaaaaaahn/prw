<?php

// lê os dados de entrada
list($codigo1, $num1, $valor1) = explode(' ', trim(fgets(STDIN)));
list($codigo2, $num2, $valor2) = explode(' ', trim(fgets(STDIN)));

// calcula o valor total a ser pago
$valorTotal = ($num1 * $valor1) + ($num2 * $valor2);

// exibe o resultado
echo "VALOR A PAGAR: R$ " . number_format($valorTotal, 2, '.', '') . "\n";

?>
