<?php

// lê os valores de entrada
list($a, $b, $c) = explode(' ', trim(fgets(STDIN)));

// encontra o maior valor
$maiorAB = ($a + $b + abs($a - $b)) / 2;
$maiorABC = ($maiorAB + $c + abs($maiorAB - $c)) / 2;

// exibe o resultado
echo $maiorABC . " eh o maior\n";

?>
