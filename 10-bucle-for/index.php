<?php

// $resultado = 0;
// for ($i=0; $i <= 100 ; $i++) { 
//     $resultado = $resultado + $i;
// }

// echo "<h1> el resultado es : $resultado </h1>";

if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

echo "<h2>tabla de multiplicar del numero $numero </h2>";

;
for ($contador = 0; $contador <= 10; $contador ++) {
    echo "$numero x $contador = " . ($numero * $contador) . "<br>";
    $contador++;
}