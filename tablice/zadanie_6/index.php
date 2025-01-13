<?php
// Przykładowa tablica:
// $tablica = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4);
// Ollicz sumę liczb parzystych i nieparzystych w tablicy. //

// Definicja tablicy z liczbami
$tablica = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4);

// Inicjalizacja zmiennych do przechowywania sumy liczb parzystych i nieparzystych
$suma_parzystych = 0;
$suma_nieparzystych = 0;

// Pętla foreach do przechodzenia po wszystkich elementach tablicy
foreach ($tablica as $number) {
    // Sprawdzenie, czy liczba jest parzysta (reszta z dzielenia przez 2 wynosi 0)
    if ($number % 2 == 0) {
        // Dodanie liczby parzystej do sumy liczb parzystych
        $suma_parzystych += $number;
        // Alternatywnie, można użyć: $suma_parzystych = $suma_parzystych + $number;
    } else {
        // Jeśli liczba jest nieparzysta, dodajemy ją do sumy liczb nieparzystych
        $suma_nieparzystych += $number;
    }
}

// Wyświetlenie wyników: suma liczb parzystych i suma liczb nieparzystych
echo "Suma liczb parzystych w tablicy wynosi: " . $suma_parzystych . ' a liczb nieparzystych wynosi: ' . $suma_nieparzystych;
