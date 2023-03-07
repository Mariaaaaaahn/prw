<?php

$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));
$c = intval(fgets(STDIN));
$d = intval(fgets(STDIN));

$is_accepted = boolval($b > $c) & boolval($d > $a) & boolval(($c + $d) > ($a + $b)) & boolval($c > 0) & boolval($d > 0) & boolval($a % 2 == 0);

echo $is_accepted ? "Valores aceitos\n" : "Valores nao aceitos\n";
?>
