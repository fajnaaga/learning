<?php 
// Przykładowa tablica:
$tablica = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4);
// Wyświetl elementy tablicy w pętli for oraz foreach
for ($x=0; $x < count($tablica); $x++) {
    echo $tablica[$x];
    echo "<br>";
}