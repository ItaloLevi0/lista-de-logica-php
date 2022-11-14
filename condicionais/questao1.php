<?php
$valorA = $_GET["A"];
$valorB = $_GET["B"];
$valorC = $_GET["C"];

if ($valorA + $valorB < $valorC) {
    echo "A soma de A + B é menor que C";
} else {
    echo "A soma de A + B não é menor que C";
}
