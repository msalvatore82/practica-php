<?php


if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {
        for ($i = $numero1; $i <= $numero2; $i++) {
            if ($i % 2 != 0) {
                echo "<h1>buzz: $i</h1>";
            } elseif ($i % 5 != 0) {
                echo "<h1>multiplos de 5 de 5 $i</h1>";
            } else {
                echo "<h1>fizzbuzz $i</h1>";
            }
        }
    } else {
        echo "<h1> el numero 1 debe ser menos al numero 2 </h1>";
    }
} else {
    echo "<h1> los parametros no exiten </h1>";
}
