<?php
$numeros = [15, 15, 10, 10,26,27,38,56,68,70,71,80,89,99,100,];
$num0_25 = 0;
$num26_50 = 0;
$num51_75 = 0;
$num76_100 = 0;

$i = 0;

while ($i < count($numeros)) {
    
    if ($numeros[$i] < 0) {
        echo "Foi inserido um número negativo";
        break;
        
    } else if ($numeros[$i] >= 0 && $numeros[$i] <= 25) {
        $num0_25++;
        $i++;
    }else if ($numeros[$i] >= 26 && $numeros[$i] <= 50) {
            $num26_50++;
            $i++;
    }else if ($numeros[$i] >= 51 && $numeros[$i] <= 75) {
            $num51_75++;
            $i++;
    }else if ($numeros[$i] >= 76 && $numeros[$i] <= 100) {
            $num76_100++;
            $i++;
    }
    
}
    

echo "quantidade de numeros entre 0 e 25: $num0_25<br>";
echo "quantidade de numeros entre 26 e 50: $num26_50<br>";
echo"quantidade de numeros entre 51 e 75: $num51_75<br>";
echo "quantidade de numeros entre 76 e 100: $num76_100<br>";