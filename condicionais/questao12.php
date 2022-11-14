<?php
$numeroAluno = 2;
$nota1 =100;
$nota2 =100;
$nota3 = 100;
$me =100;
$ma = ($nota1 + ($nota2*2) + ($nota3*3) + $me) / 7;

echo "Aluno número $numeroAluno <br>";
echo"Notas: <br>Nota 1: $nota1, <br>Nota 2: $nota2, <br>Nota 3: $nota3, <br>ME: $me <br>";

if ($ma >= 90) {
    echo "Media de aproveitamento: $ma, APROVADO com conceito A";
}

if ($ma >= 75 && $ma < 90) {
    echo "Media de aproveitamento: $ma, APROVADO com conceito B";
}

if ($ma >= 60 && $ma < 75) {
    echo "Media de aproveitamento: $ma, APROVADO com conceito C";
}

if ($ma >= 40 && $ma < 60) {
    echo "Media de aproveitamento: $ma, APROVADO com conceito D";
}

if ($ma < 40) {
    echo "Media de aproveitamento: $ma, APROVADO com conceito E";
}
