<?php
$altura = $_GET["altura"];
$sexo = strtolower($_GET["sexo"]);

if($sexo != "m" && $sexo != "f") {
    echo "Sexo não identificado";
} else {
    if ($sexo == "m") {
        $imc = (72.7 * $altura) -58;
        echo "Imc: ".number_format($imc, 1);
    }

    if ($sexo == "f") {
        $imc = (62.1 * $altura) -44.7;
        echo "Imc: ".number_format($imc, 1);
    }

}