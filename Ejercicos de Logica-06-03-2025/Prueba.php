<?php
$frutas =  ["Manzana", "Platano", "Cereza"];
echo "Segunda fruta: $frutas[1]"   . "<br>";

$numeros = [10, 20, 30];
echo "Primer número: $numeros[0]"  . "<br>";

$frutas[] = "Toronja";
$numeros[] = 5;
echo "Frutas después de agregar Toronja: " .implode(", ", $frutas) . "<br>";
echo "Números después de agregar 5: " . implode(", ", $numeros) . "<br>";

?>