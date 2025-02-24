<?php

echo "CUADRADO <br>";
echo " un lado mide 10 <br>";
$Lado = 10;
$area = $Lado * $Lado;
$perimetro = $Lado * 4;
echo "Area: $area <br>";
echo "Perimetro: $perimetro <br><br>";

echo "RECTANGULO <br>";
echo "La base mide 10 y la altura mide 15 <br>";
$base = 10; $altura = 15;
$area = $base * $altura;
$perimetro = $base + $altura + $base + $altura;
echo "Area: $area <br>";
echo "Perimetro: $perimetro<br><br>";

echo "TRIANGULO <br>";
echo "La base mide 10 y la altura mide 15 <br>";
$base = 10; $altura = 15;
$area = ($base * $altura)/2;
$perimetro = $base + $altura + $altura;
echo "Area: $area <br>";
echo "Perimetro: $perimetro<br><br>";

echo "CIRCULO <br>";
echo "El radio mide 10 <br>";
$radio = 10; $pi = 3.14;
$area = ($pi * $radio) * ($pi * $radio);
$perimetro = ($pi * $radio) * 2;
echo "Area: $area <br>";
echo "Perimetro: $perimetro<br><br>";

echo "ROMBO <br>";
echo "Un lado mide 10, la Diagonal M 16 y la diagonal m 12 <br>";
$lado = 10; $D = 16; $d = 12;
$area = $lado * 4;
$perimetro = ($D * $d)/2;
echo "Area: $area <br>";
echo "Perimetro: $perimetro<br><br>";

echo "ROMBOIDE <br>";
echo "La base mide 5, la altura mide 3 y su lado 3.5 <br>";
$base2= 5; $altura2 = 3; $lado2 = 3.5;
$area = $base2 * $altura2;
$perimetro = $base2+$base2+$lado2+$lado2;
echo "Area: $area <br>";
echo "Perimetro: $perimetro<br><br>";

echo "TRAPECIO <br>";
echo "La altura mide 4, la Base M 8, la base m 6 y el lado 5 <br>";
$altura3 = 4; $B = 8; $b = 6; $l = 5;
$area = (($B + $b) / 2) * $altura3;
$perimetro = $B + $b + $l + $l;
echo "Area: $area <br>";
echo "Perimetro: $perimetro<br><br>";

echo "CUBO <br>";
echo "El lado mide 10 <br>";
$lado4 = 3;
$area = 6 * ($lado4 * $lado4);
$volumen = $lado4 * $lado4 * $lado4;
echo "Area: $area <br>";
echo "Volumen: $volumen<br><br>";

echo "PRISMA RECTANGULAR <br>";
echo "Cada lado de la base miden 5 y 3, la altura es de 8 <br>";
$a = 5; $b = 3; $h = 8;
$area = 2 * ($a * $b + $a * $h + $b* $h);
$volumen = $a * $b * $h;
echo "Area: $area <br>";
echo "Volumen: $volumen<br><br>";

echo "PIRAMIDE CUADRANGULAR <br>";
echo "La base mide 5 x 5, y la altura es de 7 <br>";
$base5 = 5; $altura5 = 7;
$area = ($base5 * $base5 )+(($base5 * $altura5)/2)*4;
$volumen = (($base5 * $base5) * $altura5) / 3;
echo "Area: $area <br>";
echo "Volumen: $volumen<br><br>";

echo "ESFERA <br>";
echo "El radio mide 5 <br>";
$r = 5; $pi = 3.14;
$area = 4 * $pi * ($r * $r);
$volumen = (4/3)* $pi *($r * $r * $r);
echo "Area: $area <br>";
echo "Volumen: $volumen<br><br>";

?>