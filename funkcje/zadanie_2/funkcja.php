<?php 
// function suma_liczb(n) {...}
// Funkcja oblicza sumę liczb od 1 do podanej wartości liczby n. //

function suma_liczb($number_1) {
    $result = 0;
    // while ($current_number <= $number_1) {
    //     if ($number_1 <= 1) {
    //         exit;
    //     }
    //     $result += $current_number;
    //     $current_number++;
    // }
    for ($x = 1; $x <= $number_1; $x++) {
        if ($number_1 <= 1) {
            exit;
        }
        $result += $x;
    }
    return $result;
}

if (isset($_POST['number_1'])) {
    $number_1 = $_POST['number_1'];
// wyświetl wynik działania funkcji
    echo suma_liczb($number_1);

}

