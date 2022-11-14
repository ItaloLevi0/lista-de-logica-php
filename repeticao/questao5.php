<?php
$numeros = [23,356,42,54, 70];
$num_par = 0;
$num_impar = 0;
$soma = 0;
$soma_par = 0;


for ($i = 0; $i <= count($numeros) && $numeros[$i] > 0; $i++) {
    $soma += $numeros[$i];

    if ($numeros[$i]%2 === 0) {
        $num_par++;
        $soma_par += $numeros[$i];
    }else{
        $num_impar++;
    }
}

$mediapar = $soma_par/$num_par;
$media = $soma/count($numeros);

echo "Média dos numeros pares: $mediapar";
echo "Média de todos os números: $media";
echo "Números pares: $num_par";
echo "Números ímpares: $num_impar";
