<?php
// Ler os três números do usuário
$lado1 = floatval(readline("Digite o tamanho do primeiro lado: "));
$lado2 = floatval(readline("Digite o tamanho do segundo lado: "));
$lado3 = floatval(readline("Digite o tamanho do terceiro lado: "));

// Verificar a classificação do triângulo
if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "O triângulo é equilátero (todos os lados iguais).\n";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "O triângulo é isósceles (dois lados iguais).\n";
    } else {
        echo "O triângulo é escaleno (todos os lados diferentes).\n";
    }
} else {
    echo "Não é possível formar um triângulo com esses lados.\n";
}
?>