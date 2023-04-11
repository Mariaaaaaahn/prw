<?php
// Lê a entrada com o código do produto e a quantidade comprada
$input = readline();
[$productCode, $quantity] = explode(" ", $input);

// Seleciona o preço do produto baseado no código
switch ($productCode) {
    case 1:
        $price = 4.00;
        break;
    case 2:
        $price = 4.50;
        break;
    case 3:
        $price = 5.00;
        break;
    case 4:
        $price = 2.00;
        break;
    case 5:
        $price = 1.50;
        break;
    default:
        echo "Invalid product code\n";
        exit;
}

// Calcula o total da compra e formata para exibição
$total = $price * $quantity;
$totalFormatted = number_format($total, 2, ".", "");

// Exibe o total da compra formatado
echo "Total: R$ $totalFormatted\n";
?>