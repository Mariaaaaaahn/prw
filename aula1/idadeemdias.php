<?php
$idadeDias = intval(fgets(STDIN));
$anos = floor($idadeDias / 365);
$meses = floor(($idadeDias % 365) / 30);
$dias = ($idadeDias % 365) % 30;

echo "$anos ano(s)\n$meses mes(es)\n$dias dia(s)\n";
?>
