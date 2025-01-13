<?php

$number1 = $_GET["number1"]; // deklaruje zmienną 1 
$number2 = $_GET["number2"]; // deklaruje zmienną 2
$number3 = $_GET["number3"]; // deklaruje zmienną 3
    $array = [$number1, $number2, $number3]; // tworze tablice i wrzucam trzy zmienne do tablicy
$is_equal = FALSE; // tworze nową zmienną i ustalam jej wartość na fałsz i sprawdzam na samym dole kodu

$array2 = []; // tworzymy pustą tablice
foreach ($array as $value) { // w pętli foreach wykonujemy zadanie dla każdej z wartości, porównujemy liczby
    if (in_array($value, $array2)) { // jeżeli value jest w array2
    $is_equal = TRUE; // to wtedy zwraca prawde
    
    } else { // wykonuje się wtedy gdy jest fałsz
$array2[] = $value; // wkładamy zmienną do tablicy, a konkretnie element tablicy array
    }

}

if ($is_equal == TRUE) { // jeśli is_equal jest równe true
    print "Liczby są takie same"; // wyświetla się, że liczby są takie same
}
else { // wykonuje się gdy if jest fałszywy
    print "Liczby są różne."; 
}
