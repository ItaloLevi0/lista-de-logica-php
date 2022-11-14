<?php
$valorA = false;
$valorB = false;

if ($valorA && $valorB) {
    echo "Ambos são verdadeiros";
} 
elseif (!$valorA && $valorB) {
    echo "valor A é falso";
} 
elseif ($valorA && !$valorB){
    echo "valor B é falso";
} 
elseif (!$valorA && !$valorB) {
    echo "Ambos são falsos";
}