<?php
$valorA = $_GET["A"];
$valorB = $_GET["B"];
$valorC;

if ($valorA === $valorB) {
    $valorC = $valorA + $valorB;
    echo "$valorA + $valorB = $valorC";
} else {
    $valorC = $valorA * $valorB;
    echo "$valorA * $valorB = $valorC";
}