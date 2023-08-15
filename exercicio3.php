<!DOCTYPE html>
<html>
<head>
    <title> Numero  Par ou Ímpar em PHP</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    if ($numero % 2 == 0) {
        echo "O número $numero é par.";
    } else {
        echo "O número $numero é ímpar.";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numero">Digite um número:</label>
    <input type="number" id="numero" name="numero">
    <input type="submit" value="Verificar">
</form>