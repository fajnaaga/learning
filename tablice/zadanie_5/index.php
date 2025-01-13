<?php

// Definiujemy tablicę z liczbami, z których będziemy liczyć liczby parzyste i nieparzyste
$array = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 5, 4);

// Tablice do przechowywania unikalnych liczb parzystych i nieparzystych
$liczbaparzystych = []; // Tablica przechowująca liczby parzyste
$liczbanieparzystych = []; // Tablica przechowująca liczby nieparzyste

// Pętla przechodząca przez wszystkie liczby w tablicy $array
foreach ($array as $number) { 
    // Sprawdzamy, czy liczba jest parzysta (reszta z dzielenia przez 2 jest równa 0) 
    // i czy jeszcze nie została dodana do tablicy liczb parzystych
    if ($number % 2 == 0 && !in_array($number, $liczbaparzystych)) { 
        // Dodajemy liczbę do tablicy liczb parzystych, jeśli spełnia powyższe warunki
        $liczbaparzystych[] = $number; 
    } 
    // Sprawdzamy, czy liczba jest nieparzysta (reszta z dzielenia przez 2 jest różna od 0) 
    // i czy jeszcze nie została dodana do tablicy liczb nieparzystych
    elseif ($number % 2 != 0 && !in_array($number, $liczbanieparzystych)) { 
        // Dodajemy liczbę do tablicy liczb nieparzystych, jeśli spełnia powyższe warunki
        $liczbanieparzystych[] = $number; 
    }
}

// Wyświetlamy wynik, czyli liczbę unikalnych liczb parzystych i nieparzystych
echo "Ilość liczb parzystych wynosi:" . count($liczbaparzystych) . " a liczba nieparzystych wynosi: " . count($liczbanieparzystych);
?>
