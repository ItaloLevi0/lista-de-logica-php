<?php
$peso = $_GET["peso"];
$altura = $_GET["altura"];

$imc = $peso / ($altura ** 2);


if ($imc < 18.5) {
    echo "Abaixo do peso";
}

if ($imc >= 18.5 && $imc < 25) {
    echo "Peso normal";
}

if ($imc >= 25 && $imc <= 30) {
    echo "Acima do peso";
}

if ($imc > 30) {
    echo "Obeso";
}