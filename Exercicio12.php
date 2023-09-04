<?php
// Ler a palavra do usuário
$palavra = readline("Digite uma palavra: ");

// Imprimir a palavra repetida conforme o padrão
for ($i = 1; $i <= 4; $i++) {
    echo str_repeat("$palavra ", $i) . "\n";
}
?>