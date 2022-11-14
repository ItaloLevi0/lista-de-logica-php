<?php
$nome = "sandra";
$sexo = "f";
$estadoCivil = "casada";

if($sexo == "f" && $estadoCivil == "casada") {
    echo "<script>let tempo = prompt('Quanto anos de casada?'); document.write(tempo >2 ? 'Ok': 'Esperar mais')</script>";
}