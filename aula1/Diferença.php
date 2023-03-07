<?php

// lê os quatro valores inteiros
$a = (fgets(STDIN));
$b = (fgets(STDIN));
$c = (fgets(STDIN));
$d = (fgets(STDIN));

// calcula a diferença do produto de A e B pelo produto de C e D
$diferenca = ($a * $b) - ($c * $d);

// imprime o resultado
echo "DIFERENCA = $diferenca\n";

?>
