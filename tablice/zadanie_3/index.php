<?php
$tablica = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4);
// Oblicz średnią arytmetyczną elementów tablicy.
$tablica_suma = 0; 
$tablica_elementy = count($tablica);
foreach ($tablica as $value) { 
    $tablica_suma += $value;
}
$sredniaary = $tablica_suma / $tablica_elementy;
echo $sredniaary;