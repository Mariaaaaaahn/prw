<?php
    // Lê a linha de entrada que contém o número da linha que será somada
    $l = intval(trim(fgets(STDIN)));
    // Lê a linha de entrada que contém o tipo de operação: 'S' para soma ou 'M' para média
    $t = strval(trim(fgets(STDIN)));
    // Cria uma matriz vazia de 12x12
    $M = array();
    // Inicializa a variável de soma como zero
    $sum = 0;
    // Lê os valores da matriz linha por linha
    for ($i = 0; $i < 12; $i++) {
        for ($j = 0; $j < 12; $j++) {
            // Lê o valor de cada posição da matriz
            $valor = floatval(trim(fgets(STDIN)));
            // Armazena o valor na matriz
            $M[$i][$j] = $valor;
        }
    }
    // Soma os valores da linha escolhida
    for ($a = 0; $a < 12; $a++) {
        $sum += $M[$l][$a];
    }
    // Verifica se a operação é de soma ou média e imprime o resultado formatado
    if ($t == 'S') {
        echo number_format($sum, 1, '.', '') . "\n";
    } else if ($t == 'M') {
        echo number_format($sum/12, 1, '.', '') . "\n";
    }
?>
