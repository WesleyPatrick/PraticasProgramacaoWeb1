<?php
$pastas = [
    "bsn" => [
        "3a Fase" => ["desenvWeb", "bancoDados 1", "engSoft 1"],
        "4a Fase" => ["bancoDados 2", "engSoft 2"]
    ]
];

function imprimirArvore($pastas, $nivel = 0)
{
    foreach ($pastas as $key => $value) {
        echo str_repeat("&nbsp;&nbsp;", $nivel) . "- " . $key . "<br>";
        if (is_array($value)) {
            imprimirArvore($value, $nivel + 1);
        }
    }
}

imprimirArvore($pastas);
