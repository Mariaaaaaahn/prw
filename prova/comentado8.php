<?php

// lê o valor de n
$n = intval(fgets(STDIN));

// repete o processo n vezes
while ($n--) {
    // lê os valores de x e y em uma única linha, separados por espaço,
    // e converte-os para inteiros
    list($x, $y) = array_map('intval', explode(" ", fgets(STDIN)));

    // garante que x é menor ou igual a y
    if ($x > $y) {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }

    // inicializa a variável de soma
    $sum = 0;

    // itera de x+1 até y-1
    for ($i = $x + 1; $i < $y; $i++) {
        // se o número é ímpar, adiciona-o à soma
        if ($i % 2 == 1) {
            $sum += $i;
        }
    }

    // exibe o resultado da soma
    echo $sum . "\n";
}

?>
