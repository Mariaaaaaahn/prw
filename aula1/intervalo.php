<?php

$valor = floatval(fgets(STDIN));


if ($valor >= 0 && $valor <= 25) {
    echo "Intervalo [0,25]\n";
} elseif ($valor > 25 && $valor <= 50) {
    echo "Intervalo (25,50]\n";
} elseif ($valor > 50 && $valor <= 75) {
    echo "Intervalo (50,75]\n";
} elseif ($valor > 75 && $valor <= 100) {
    echo "Intervalo (75,100]\n";
} else {
    echo "Fora de intervalo\n";
}
?>
