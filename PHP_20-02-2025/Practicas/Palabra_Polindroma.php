<?php
function esPalindromo($texto) {
    $texto = preg_replace("/[^A-Za-z0-9]/", "", strtolower(str_replace(' ', '', $texto)));
    
    return $texto === strrev($texto);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entrada = $_POST['frase'] ?? '';
    $resultado = esPalindromo($entrada) ? "Sí, es un palíndromo" : "No, no es un palíndromo";
} else {
    $resultado = "";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Palíndromos</title>
</head>
<body>
    <h2>Verificador de Palíndromos</h2>
    <form method="post">
        <label for="frase">Introduce una palabra o frase:</label>
        <input type="text" name="frase" id="frase" required>
        <button type="submit">Verificar</button>
    </form>
    <p><?php echo htmlspecialchars($resultado); ?></p>
</body>
</html>
