<?php

$preco = 90;
$pagamento = 4;
$desconto;
$valorPagar;
$juros;

if($pagamento === 1) {
    $desconto = $preco * 0.1;
    $valorPagar = $preco - $desconto;
    echo"Total a pagar: R$ $valorPagar";
}

if($pagamento === 2) {
    $desconto = $preco * 0.15;
    $valorPagar = $preco - $desconto;
    echo"Total a pagar: R$ $valorPagar";
}

if($pagamento === 3) {
    $valorPagar = $preco / 2;
    echo "Total a pagar: duas vezes de R$ $valorPagar";
}

if($pagamento === 4) {
    $juros = $preco * 0.1;
    $valorPagar = ($preco/2) + $juros;
    echo "Total a pagar: duas vezes de R$ $valorPagar";
}