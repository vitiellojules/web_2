<?php
// Inicializar contador
$contador = 0;

// Loop para ler os números e contar quantos estão entre 100 e 200
while (true) {
    $numero = intval(readline("Digite um número (0 para encerrar): "));
    
    if ($numero == 0) {
        break; // Encerrar o loop se 0 for lido
    }
    
    if ($numero >= 100 && $numero <= 200) {
        $contador++;
    }
}

// Imprimir o resultado
echo "Foram digitados $contador números entre 100 e 200.\n";
?>