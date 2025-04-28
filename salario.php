<?php
 
$salarioBruto = 7500.00;
 
 
if ($salarioBruto <= 3036.00) {
    $aliquota = 0;
} elseif ($salarioBruto <= 3533.31) {
    $aliquota = 7.5;
} elseif ($salarioBruto <= 4688.85) {
    $aliquota = 15;
} elseif ($salarioBruto <= 5830.85) {
    $aliquota = 22.5;
} else {
    $aliquota = 27.5;
}
 
$valorDesconto = ($salarioBruto * $aliquota) / 100;
 
$salarioLiquido = $salarioBruto - $valorDesconto;
 
echo "Salário bruto: R$ " . number_format($salarioBruto, 2, ',', '.') . "<br>";
echo "Porcentagem de desconto: " . $aliquota . "%<br>";
echo "Valor do desconto: R$ " . number_format($valorDesconto, 2, ',', '.') . "<br>";
echo "Salário líquido a receber: R$ " . number_format($salarioLiquido, 2, ',', '.');
?>
 
