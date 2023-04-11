<?php

// Leitura dos valores de entrada a, b e c
fscanf(STDIN, "%f %f %f", $a, $b, $c);

// Cálculo do delta
$delta = pow($b, 2) - 4 * $a * $c;

// Verifica se a equação é impossível de calcular ou se há apenas uma raiz real
if ($a == 0 || $delta < 0) {
    echo "Impossivel calcular\n"; // Imprime mensagem de erro
} else {
    // Cálculo das duas raízes
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);

    // Imprime as raízes com 5 casas decimais
    printf("R1 = %.5f\n", $x1);
    printf("R2 = %.5f\n", $x2);
}
?>
