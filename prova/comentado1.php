<?php
// loop infinito
while (true) {
    // lê dois valores a partir do console: um inteiro e uma string
    fscanf(STDIN, "%d %s", $D, $N);

    // verifica se o valor do inteiro é zero e o valor da string é "0", se for, sai do loop
    if ($D == 0 && $N == '0') {
        break;
    }

    // substitui todas as ocorrências do valor do inteiro na string pelo caractere vazio
    $N = str_replace($D, '', $N);

    // remove os zeros à esquerda da string
    $N = ltrim($N, '0');

    // se a string ficar vazia, substitui pelo valor "0"
    if ($N == '') {
        $N = '0';
    }

    // imprime a string resultante
    echo "$N\n";
}
?>
