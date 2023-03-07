<?php

$valor = (int) fgets(STDIN);

$a = (int) ($valor / 100);
$b = $valor % 100;

$c = (int) ($b / 50);
$d = $b % 50;

$e = (int) ($d / 20);
$f = $d % 20;

$g = (int) ($f / 10);
$h = $f % 10;

$i = (int) ($h / 5);
$j = $h % 5;

$k = (int) ($j / 2);
$l = $j % 2;

echo "$valor\n";
echo "$a nota(s) de R\$ 100,00\n";
echo "$c nota(s) de R\$ 50,00\n";
echo "$e nota(s) de R\$ 20,00\n";
echo "$g nota(s) de R\$ 10,00\n";
echo "$i nota(s) de R\$ 5,00\n";
echo "$k nota(s) de R\$ 2,00\n";
echo "$l nota(s) de R\$ 1,00\n";

?>
