<?php
// Criar uma matriz 5x5
$matriz = array(
    array(1, 2, 3, 4, 5),
    array(6, 7, 8, 9, 10),
    array(11, 12, 13, 14, 15),
    array(16, 17, 18, 19, 20),
    array(21, 22, 23, 24, 25)
);

// Imprimir os elementos da diagonal principal
echo "Elementos da diagonal principal:\n";
for ($i = 0; $i < 5; $i++) {
    echo $matriz[$i][$i] . "\n";
}
?>

?>