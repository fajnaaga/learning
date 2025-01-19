<?php
// Create function "greeting" to display "Hello $name" text, where $name is a argument
// Stworz funkcje "greeting" która wyświetli tekst "Hello $name", gdzie $name jest argumentem

//// Deklaracja funkcji
// Krok 1: słowo kluczowe function
// Krok 2: nazwa funkcji
// Krok 3: nawiasy okrągłe po nazwie funkcji, bez spacji!
// Krok 4: dodanie spacji, otwarcie nawiasu klamrowego
//  { - tutaj funkcja się zaczyna
//  } - tutaj funkcja się kończy
// Krok 5: dodanie logiki funkcji wewnątrz nawiasów klamrowych

// Wywołanie funkcji
// Aby uruchomić logikę funkcji, musisz ją wywołać
// Krok 1: wprowadzić nazwę funkcji
// Krok 2: nawiasy okrągłe po nazwie funkcji, bez spacji!
// Krok 3: średnik na końcu

// Argumenty funkcji - deklaracja
// Krok 1: przejść do środka nawiasów okrągłych po nazwie funkcji
// Krok 2: wprowadzić nazwę argumentów funkcji
// Krok 3: nowe argumenty dodajemy po przecinku
// Krok 4: argumenty są dla nas dostępne wewnątrz funkcji

// Argumenty funkcji - wywołanie
// Krok 1: przejść do środka nawiasów okrągłych po nazwie funkcji
// Krok 2: przekazanie wartości do argumentów funkcji
// Krok 3: nowa wartość po przecinku 
function greeting($name) {
    echo 'Hello '. $name;
}
greeting('Piotrek'); 
greeting('Kasia');