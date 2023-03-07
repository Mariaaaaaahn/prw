<?php

$tempo = intval(fgets(STDIN));
$velocidadeMedia = intval(fgets(STDIN));

$distancia = $tempo * $velocidadeMedia;
$litros = $distancia / 12;

echo number_format($litros, 3, '.', '') . "\n";

?>
