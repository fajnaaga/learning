<?php
/* function gra(gracz1, gracz2) {...}
Funkcja jest wersją gry kamień, papier, nożyce.
Jako argumenty wpisujemy: "kamien" lub "nozyce" lub "papier" (nie stosujemy polskich znaków)
Funkcja zwraca wynik: gracz 1, gracz 2, remis.
Zakładamy wprowadzenie jedynie poprawnych argumentów. */
$gracz1 = $_GET["gracz1"];
$gracz2 = $_GET["gracz2"];


function gra($gracz1, $gracz2) {
    if ($gracz1 == $gracz2) {
        echo "remis";
    } else {
        if ($gracz1 == "kamień" && $gracz2 == "papier") {
            echo "wygrał gracz2"; }
        elseif ($gracz1 == "kamień" && $gracz2 == "nożyce") {
            echo "wygrał gracz1";    
            }
            elseif ($gracz1 == "papier" && $gracz2 == "kamień") {
                echo "wygrał gracz1";
            }
            elseif ($gracz1 == "nożyce" && $gracz2 == "papier") {
                echo "wygrał gracz1";
            }
            elseif ($gracz1 == "papier" && $gracz2 == "nożyce") {
                echo "wygrał gracz2";
            }
            elseif ($gracz1 == "nożyce" && $gracz2 == "kamień") {
                echo "wygrał gracz2";
            }
    }

}
gra($gracz1, $gracz2);
