<?php
$altura[] = [100, 150, 156, 148, 190, 170, 178, 169, 188, 169, 156, 190, 185, 186, 167];
$maiorAltura = 0;
$menorAltura = 999;

for ($i = 0; $i <= count($altura); $i++) {
    if ($altura[$i] > $maiorAltura) {
        $maiorAltura = $altura[$i];
        
    }
    if ($altura[$i] < $menorAltura) {
        $menorAltura = $altura[$i];
        
    }
}

echo "Esta é a maior altura $maiorAltura[$i]";
echo "Esta é a menor altura $menorAltura[$i]";
