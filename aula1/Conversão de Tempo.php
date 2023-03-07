<?php
$segundos = intval(fgets(STDIN));

$horas = intval($segundos / 3600);
$minutos = intval(($segundos % 3600) / 60);
$segundos = $segundos % 60;

echo $horas . ":" . $minutos . ":" . $segundos . "\n";
?>
