<?php
$nome = readline();
$salarioFixo = floatval(readline());
$totalVendas = floatval(readline());

$salarioTotal = $salarioFixo + $totalVendas * 0.15;

echo "TOTAL = R$ " . number_format($salarioTotal, 2, ".", "") . "\n";
?>
