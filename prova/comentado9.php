<?php

// Inicializa uma variável de contagem de números pares
$count = 0;

// Faz um loop para ler 5 números
for ($i = 0; $i < 5; $i++) {
    // Lê um número da entrada padrão
    fscanf(STDIN, "%d", $num);

    // Verifica se o número é par
    if ($num % 2 == 0) {
        // Incrementa a variável de contagem de números pares
        $count++;
    }
}

// Imprime o resultado da contagem de números pares
echo "$count valores pares\n";
?>
