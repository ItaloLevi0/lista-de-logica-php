<?php

$a = 5;
$resultado = 1;


for($n = $a; $n >=1; $n--){
    // console.log(n);
    // console.log('x')
    // resultado *= n;
     $resultado *= $n;
    echo "$n x ";
}

echo "= $resultado";