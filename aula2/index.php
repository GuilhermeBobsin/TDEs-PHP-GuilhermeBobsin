<?php

$numero1 = 10;
$numero2 = 50;

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$divisao = $numero1 / $numero2;
$multiplicacao = $numero1 * $numero2;

echo "O resultado da soma é $soma<br>";
echo "O resultado da subtração é $subtracao<br>";
echo "O resultado da divisão é $divisao<br>";
echo "O resultado da multiplicação é $multiplicacao<br>";

$nome = "Guilherme";
$sobrenome = "Bobsin";
$nomeCompleto = "$nome $sobrenome";
echo $nomeCompleto . "<br>";

$array = ["Airton", "Pelé", "Renato"];

echo "<pre>";
var_dump($array);

krsort($array);
var_dump($array);

$array = array_flip($array);
var_dump($array);

$dados = [
    "nome" => "Guilherme",
    "idade" => 20,
];

var_dump($dados);

for ($i=1; $i <= 10; $i++) { 
    echo "\n$i";
}

foreach ($array as $key => $value) {
    echo "\nChave: $key, Valor: $value";
}

$count = 0;

do {
    echo "\nExecutou no do while $count";
    $count++;
} while ($count <= 10);

$count = 0;

while($count <= 10) {
    echo "\nExecutou no while $count";
    $count++;
}