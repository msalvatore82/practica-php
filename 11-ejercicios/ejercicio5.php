<?php


if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {
        for ($i = $numero1; $i <= $numero2; $i++) {
            echo "<h1>sus numeros son: $i</h1>";
        }
    } else {
        echo "<h1> el numero 1 debe ser menos al numero 2 </h1>";
    }
} else {
    echo "<h1> los parametros no exiten </h1>";
}
