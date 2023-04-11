
<php
$op = readline(); // Lê a operação desejada (soma ou média)
$M[12][12] = array(); // Declara uma matriz 12x12

for ($i = 0; $i < 12; $i++) { // Loop pelas linhas da matriz
    for ($j = 0; $j < 12; $j++) { // Loop pelas colunas da matriz
        $valor = readline(); // Lê um valor para cada posição da matriz
        $M[$i][$j] = $valor; // Atribui o valor à posição da matriz
    }
}
$S = $M[5][7] + $M[6][7] + $M[4][8] + $M[5][8] + $M[6][8] + $M[7][8] + $M[3][9] + $M[4][9] + $M[5][9] + $M[6][9] + $M[7][9] + $M[8][9] + $M[2][10] +$M[3][10] + $M[4][10] + $M[5][10] + $M[6][10] + $M[7][10] + $M[8][10] + $M[9][10] + $M[1][11] + $M[2][11] + $M[3][11] + $M[4][11] + $M[5][11] + $M[6][11] + $M[7][11] + $M[8][11] + $M[9][11] + $M[10][11]; // Calcula a soma dos elementos desejados
$M = $S/30; // Calcula a média dos elementos desejados

switch($op){
    case 'S':
        $S = number_format($S, 1, ".", ""); // Formata a soma com 1 casa decimal
        echo "$S\n"; // Imprime a soma
        break;
    case 'M':
        $M = number_format($S, 1, ".", ""); // Formata a média com 1 casa decimal
        echo "$M\n"; // Imprime a média
        break;
}
?>