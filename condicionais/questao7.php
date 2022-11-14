<?php
$numero = $_GET["numero"];

if ($numero %2 === 0) {
    $resultado = $numero + 5;
    echo "$numero + 5 = $resultado";
}else {
    $resultado = $numero + 8;
    echo "$numero + 8 = $resultado";
}