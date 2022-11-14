<?php
$numeros = [10, -39, 20, 12];
$soma = 0;
$numPositivo = 0;

for ($i = 0; $i < count($numeros); $i++) {
    $soma += $numeros[$i];

    if ($numeros[$i] > 0) {
        $numPositivo++;
    }
}

$numNegativo = count($numeros) - $numPositivo;
$porcentagemNegativos = ($numNegativo/count($numeros)) * 100;
$porcentagemPositivos = ($numPositivo/count($numeros)) * 100;

$media = $soma/count($numeros);
echo "Média: $media<br>";
echo "Números positivos: $numPositivo<br>";
echo "Números negativos: $numNegativo<br>";
echo "Porcentagem de números negativos: $porcentagemNegativos<br>";
echo "Porcentagem de números positivos: $porcentagemPositivos<br>";
