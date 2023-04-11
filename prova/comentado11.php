<?php

// leitura dos valores de entrada em uma única linha
$x = explode(' ', fgets(STDIN));

// atribuição dos valores lidos às variáveis $A, $B, $C e $D, convertendo-os para float
$A = floatval($x[0]);
$B = floatval($x[1]);
$C = floatval($x[2]);
$D = floatval($x[3]);

// verificação das condições para aceitação dos valores
if ($B > $C && $D > $A && ($C + $D) > ($A + $B) && $C >= 0 && $D >= 0 && $A % 2 == 0) {
    echo "Valores aceitos\n"; // se as condições forem satisfeitas, exibe a mensagem "Valores aceitos"
} else {
    echo "Valores nao aceitos\n"; // caso contrário, exibe a mensagem "Valores nao aceitos"
}

?>




