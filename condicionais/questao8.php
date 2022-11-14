<?php
$valorA = $_GET["A"];
$valorB = $_GET["B"];
$valorC = $_GET["C"];



if ($valorA >= $valorB && $valorA >= $valorC && $valorB >= $valorC) {
    echo "$valorA, $valorB, $valorC";
} 

if ($valorA >= $valorB && $valorA >= $valorC && $valorC >= $valorB) {
    echo "$valorA, $valorC, $valorB";
} 

if ($valorB >= $valorA && $valorB >= $valorC && $valorA >= $valorC) {
    echo "$valorB, $valorA, $valorC";
} 

if ($valorB >= $valorA && $valorB >= $valorC && $valorC >= $valorA) {
    echo "$valorB, $valorC, $valorA";
} 


if ($valorC >= $valorA && $valorC >= $valorB && $valorA >= $valorB) {
    echo "$valorC, $valorA, $valorB";
} 


if ($valorC >= $valorA && $valorC >= $valorB && $valorB >= $valorA) {
    echo "$valorC, $valorB, $valorA";
} 

if ($valorA === $valorB && $valorB === $valorC) {
    echo "$valorA, $valorB, $valorC";
}