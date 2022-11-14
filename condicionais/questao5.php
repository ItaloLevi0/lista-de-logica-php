<?php
$numero = $_GET["numero"];
if ($numero > 0) {
    $resultado = $numero * 2;
    echo "o dobro de $numero é $resultado";
} else {
    $resultado = $numero * 3;
    echo "o triplo de $numero é $resultado";
}