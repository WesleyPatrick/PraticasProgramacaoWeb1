<?php

$salario1 = 1000;
$salario2 = 2000;

$salario2 = $salario1;

++$salario2;

$salario1 += $salario1 * 0.1;

echo nl2br("valor salario1: $salario1 \n valor salario2: $salario2");

if ($salario1 > $salario2) {
    echo "O valor do salario 1 é maior";
} elseif ($salario2 > $salario1) {
    echo "o valor do salario 2 é maior";
} else {
    echo nl2br("os salarios são iguais \n");
}
