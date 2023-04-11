<?php
    // Lê a quantidade de elementos do array
    $n = readline();
    
    // Lê a linha seguinte e converte cada elemento em um inteiro, atribuindo-os ao array X
    $X = array_map('intval', explode(' ', trim(fgets(STDIN))));

    // Encontra o menor valor do array X
    $minValue = min($X);

    // Encontra o índice do primeiro elemento do array X que possui o valor mínimo encontrado
    $minIndex = array_search($minValue, $X);

    // Imprime a mensagem com o menor valor encontrado
    echo "Menor valor: $minValue\n";

    // Imprime a mensagem com o índice do menor valor encontrado
    echo "Posicao: $minIndex\n";
?>
