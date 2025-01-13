<?php 
// function silnia(n) {...}
// Funkcja oblicza silnię liczby n.
// Silna to iloczyn kolejnych liczb od 1 do n.//

function silnia($n) {

    $iloczyn = 1;
    for ($x = 1; $x <= $n; $x++) {
        $iloczyn *= $x;
    }
    echo $iloczyn;
}

if (isset($_POST['number_1'])) {
    $number_1 = $_POST['number_1'];
// wyświetl wynik działania funkcji
    echo silnia($number_1);

}

