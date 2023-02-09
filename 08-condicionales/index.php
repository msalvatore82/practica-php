<?php

$color =  "rojo";

if ($color == "rojo") {
    echo "el color es rojo";
} else {
    echo "el color no es rojo";
}

echo "<br>";


$year = "2019";

if ($year < 2019) {
    echo "anterior 2019";
} else {
    echo "posterio 2019";
}

echo "<br>";

$nombre = "David extramadura";
$ciudad = "Madrdi";
$continente = "america";
$edad = 49;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
    echo "<h2> $nombre es mayor de edad </h2>";
    if ($continente == "europa") {
        echo "<h2> y es de $ciudad </h2>";
    } else {
        echo "no es europep";
    }
} else {
    echo "<h2> $nombre NO es mayor de edad </h2>";
}

echo "<br>";

$numero = 0;

if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

echo "<h2>tabla de multiplicar del numero $numero </h2>";

$contador = 0;
while ($contador <= 10) {
    echo "$numero x $contador = " . ($numero * $contador) . "<br>";
    $contador++;
}
