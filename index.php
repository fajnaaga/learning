<?php

    // To jest komentarz

/*
      linijka pierwsza
      linijka druga
      linijka trzecia
*/
//    0. Baza wiedzy ogólnej z informatyki:
    // o.1 protokoły sieciowe - zbiór reguł,
    // które określają sposób przesyłania danych między aplikacjami
    // 0.2 Najważniejsze protokoły sieciowe:
    // 1. HTTP - to jest protokół sieci WWW 
    // 2. HTTPS - bezpieczniejsza, szyfrowana wersja protokołu http
    // 3. TCP/IP - pokazuje w jaki sposób odbywa się trasmisja danych w sieciach komputerowych
    // działa w trybie klient, serwer.
    // 4. IP - protokół IP jest protokołem komunikacyjnym, warstwy internet modelu w TCP/IP 
    // używany w internecie oraz sieciach lokalnych
    // 5. FTP - służy do przesyłania danych i plików między urządzeniami sieci
    // (między klientem a serwer FTP)
    // 6. SSH - protokół komunikacyjny występujący w sieciach TCP/IP umożliwiające 
    // zdalne połączenie z serwerem 
    // 7. POP3 - protokół internetowy pozwalający na odbiór poczty elektronicznej ze zdalnego serwera 
    // 8. DNS - protokół pozwalający na zmianę nazw domenowych główna jego funkcja polega na tłumaczeniu łatwych
    // do zapamiętania przez człowieka nazw domen, na zrozumiałe dla komputera dane liczbowe.
    // (tłumaczą domeny na nr IP)


//     1. Typy zmiennych

    // 1.2 Integer
    // $int = 3;

    // 1.2 Float
//     $float = 2.5; // float

//     // 1.3 String
//     $string = "string";

//     // 1.4 Array
//     $array = array();
//     $array = array('Małgosia', 'Andrzej', 'Jan');
//     //

//     $array = [];
//     $array = ['Małgosia', 'Andrzej', 'Jan'];

//     print "1. Print elementów tablicy";
//     print "<br>";
//     print "<br>";
//     print "Pierwszy element $array[0]";
//     print "<br>";
//     print "<br>";
//     print "<br>";
//     print "Drugi element $array[1]";

//     // Tablica asocjacyjna (PHP Associative Arrays https://www.w3schools.com/php/php_arrays_associative.asp)
//     $array_2 = ['osoba' => 'Małgosia', 'samochód' => 'skoda', 'zwierze' => 'kot'];

//     $array_2 = [
//         'osoba' => 'Małgosia',
//         'samochód' => 'skoda',
//         'zwierze' => 'kot'
//     ];

//     print "1.2 Print z tablicy asocjacyjnej";
//     print "<br>";
//     print "<br>";
//     print $array_2['zwierze'];

//     // Tablica wielopoziomowa (multidimensional array https://www.w3schools.com/php/php_arrays_multidimensional.asp).
//     $array_3 = [
//         0 => [
//             'zwierze' => 'kot',
//             'osoba' => 'ksiądz'
//         ],
//         1 => [
//             'miejsca' => [
//                 'miasto' => 'Będzin',
//                 'kraj' => 'Polska'
//             ]
//         ],
//     ];

//     print "Print z tablicy wielopoziomowej";
//     print '<br>';
//     print '<br>';
//     print $array_3[1]['miejsca']['miasto'];

//     // 1.5 Object
//     // Programowwanie objektowe
//     // https://www.w3schools.com/php/php_oop_what_is.asp TODO: come back later

//     // 1.6 Resource (odwołanie do zasoby zewnętrznego, pliku, zdjęcia etc).

//     // 1.7 Boolean (typ logiczny) TRUE albo FALSE
//     $bool = TRUE;
//     $bool_2 = FALSE;

//     // 1.8 NULL - po prostu pusta zmienna, w której NIC nie ma - na przykład chwilowo.
//     $var_1 = NULL;
//     $var_2 = 0;

//     print '<br><br>';

//     if ($bool_2 == $var_2) {
//         print "bool_2 równa się var_1";
//     } else {
//         print "bool_2 NIE równa się var_1";
//     }

//     $int_1 = 5;
//     $string_1 = "5";

// print '<br><br>';
// print 'Porównanie z operatorem == ';
// print '<br>';

//     // Porównujemy tylko wartość zmiennych
//     if ($int_1 == $string_1) {
//         print "int_1 równa się string_1";
//     } else {
//         print "int_1 NIE równa się string_1";
//     }

// print '<br><br>';
// print 'Porównanie z operatorem === ';
// print '<br>';

//     // Porównujemy wartość ORAZ rodzaj zmiennych
//     if ($int_1 === $string_1) {
//         print "int_1 równa się string_1";
//     } else {
//         print "int_1 NIE równa się string_1";
//     }

//     print "<br>";
//     print "<br>";
//     print "<br>";


//     // 2. IF statement (https://www.w3schools.com/php/php_if_else.asp)

//     // 2.1 IF
//     $int = 'Święty Mikołaj';
//     if ($int == 5) {
//         print 'warunek spełniony';
//     }

// print "<br>";
// print "<br>";
// print "<br>";
//     // 2.2 IF ELSE

//     if ($int == 5) {
//         print "warunek spełniony";
//     } else {
//         print "nope";
//     }

// print "<br>";
// print "<br>";
// print "<br>";

//     // 2.3 IF ELSEIF ELSE
//     $int = 5;

//     if ($int === "5") {
//         print "int równa się 5";
//     } elseif ($int === 5) {
//         print "int jest integerem równym 5";
//     } else {
//         print "int nie równa się ani 5 ani 6, być może coś innego";
//     }

// print "<br>";
// print "<br>";
// print "<br>";

//     // 2.4 SWITCH
//     $name = 'Marcin';

//     switch ($name) {
//         case 'Jan':
//             print 'name równa się Jan';
//             break;
//         case 'Mateusz':
//             print 'name = Mateusz';
//             break;
//         case 'Marcin':
//             print 'Name = Marcin';
//             break;
//         default:
//             print 'none of above';
//     }

//     // 3. Pętle (loops) (https://www.w3schools.com/php/php_looping.asp)

//     // 3.1 while (https://www.w3schools.com/php/php_looping_while.asp)
//     $i = 1;

// print '<br>';
// print '<br>';

//     while ($i < 6) {
//         echo 'Wesołych świąt! Zmienna wynosi';
//         print $i;
//         print '<br>';
//         $i = $i +2;
//     }


//     // UWAGA !!! : nie stworzyć przypadkiem nieskończonej pętli !!!!


//     // 3.2 do while (https://www.w3schools.com/php/php_looping_do_while.asp)

// print '<br>';

//     $i = 1;

//     do {
//         print 'pętla się wykonała';
//         $i++;
//     } while ($i < 6);



    // 3.3 for loop (https://www.w3schools.com/php/php_looping_for.asp)
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
      }

    // 3.4 foreach loop (https://www.w3schools.com/php/php_looping_foreach.asp)

$array = [
    'owoc_1' => 'jabłko',
    'owoc_2' => 'gruszka',
    'owoc_3' => 'truskawka'
]; 

print '<br>';

foreach ($array as $key => $value) {
    print $key;
    print '<br>';
    print $value;

}

 // 4. Funkcje 

$blabla = 5;
$asd = 12;

function dodaj_zmienne($zmienna_1, $zmienna_2) {
    echo $zmienna_1 + $zmienna_2;
}
    dodaj_zmienne($blabla, $asd);

// 5. Metody POST i GET https://www.w3schools.com/tags/ref_httpmethods.asp
// 5.1 GET:
// - tworzy tablice $_GET
// - dane są widoczne w adresie URL
// - limit do 2 tysięcy znaków

// 5.2 POST:
// - tworzy tablice $_POST
// - dane są przesyłane protokołem http POST nie są widoczne

    