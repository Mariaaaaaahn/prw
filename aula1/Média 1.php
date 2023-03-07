<?php


$a = floatval(trim(fgets(STDIN)));
$b = floatval(trim(fgets(STDIN)));


$media = (3.5 * $a + 7.5 * $b) / 11;


echo "MEDIA = " . number_format($media, 5, '.', '') . "\n";

?>
