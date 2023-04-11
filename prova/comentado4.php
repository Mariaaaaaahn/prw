<?php

$X = []; // Cria um array vazio para armazenar os valores

for ($i = 0; $i < 10; $i++) { // Loop 10 vezes
    $x = intval(fgets(STDIN)); // Lê um número inteiro do console e o converte para inteiro
    if ($x <= 0) { // Verifica se o número é menor ou igual a zero
        $x = 1; // Se for, substitui por 1
    }
    $X[] = $x; // Adiciona o número ao array
}

foreach ($X as $key => $value) { // Loop pelos valores do array
    echo "X[$key] = $value\n"; // Imprime o índice e o valor do array no console
} 

?>
