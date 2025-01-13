<?php
// Wyświetl liczby z przedziału <0..100> bez podzielnych przez 3.
for ($i = 0; $i <= 100; $i++) {
    if ($i % 3 !== 0) {
        echo $i . "\n";
    }

}
?>

