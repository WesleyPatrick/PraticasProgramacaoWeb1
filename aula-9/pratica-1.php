<?php

$notas = [9, 6.5, 8, 10, 4];
$faltas = [0, 1, 1, 0, 0, 0, 0, 0, 1, 0];

function calcularFrequencia($faltas)
{
    $totalAulas = count($faltas);
    $totalFaltas = array_sum($faltas);
    $frequencia = (($totalAulas - $totalFaltas) / $totalAulas) * 100;
    return $frequencia;
}

function verificarAprovacaoNota($media)
{
    return $media >= 7 ? "Aprovado" : "Reprovado";
}

function calcularMedia($notas)
{
    $soma = array_sum($notas);
    $media = $soma / count($notas);
    return $media;
}

function verificarAprovacaoFrequencia($frequencia)
{
    return $frequencia > 70 ? "Aprovado" : "Reprovado";
}

$media = calcularMedia($notas);
$statusNota = verificarAprovacaoNota($media);
$frequencia = calcularFrequencia($faltas);
$statusFrequencia = verificarAprovacaoFrequencia($frequencia);


echo "Média: " . number_format($media, 2) . "<br>";
echo "Frequência: " . number_format($frequencia, 2) . "%<br>";
echo "Aprovação por Nota: " . $statusNota . "<br>";
echo "Aprovação por Frequência: " . $statusFrequencia . "<br>";
