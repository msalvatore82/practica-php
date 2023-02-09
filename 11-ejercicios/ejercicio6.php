<?php
echo "<table border='1'> <tr>";

echo "<tr>"; 

for ($cabacera = 1; $cabacera <= 20; $cabacera++) {
    echo "<td> Tabla del $cabacera </td>";
}
echo "</tr>";

echo "<tr>";

for ($i=1; $i <= 20; $i++) { 
    echo "<td> ";

       for ($x=1; $x  <= 10 ; $x++) { 
        echo "$i x $x = ".($i*$x). '<br>';
       }

    echo "</td>";
        }

echo "</tr>";

echo "</table>";
