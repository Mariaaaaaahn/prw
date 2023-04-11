<?php
// Loop enquanto conseguir ler duas linhas do console
while (($num = fgets(STDIN)) !== false && ($cutoff = fgets(STDIN)) !== false) {
    // Converte as entradas de string para float
    $num = floatval($num);
    $cutoff = floatval($cutoff);

    // Verifica se a diferença entre o número e sua parte inteira é maior ou igual ao limite
    if ($num - floor($num) >= $cutoff) {
        // Se for, arredonda para cima e imprime o resultado
        echo ceil($num) . PHP_EOL;
    } else {
        // Caso contrário, arredonda para baixo e imprime o resultado
        echo floor($num) . PHP_EOL;
    }
}
