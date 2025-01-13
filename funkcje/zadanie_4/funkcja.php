<?php
/* function trojkat(a, b, c) {...}
Sprawdza, czy z odcinków o podanej długości można utworzyć trójkąt.
W wyniku zwraca true lub false */
$a = $_GET["odcinek1"];
$b = $_GET["odcinek2"];
$c = $_GET["odcinek3"];
function czyMoznaUtworzycTrojkat($a, $b, $c) {
    if ($a <= 0 || $b <= 0 || $c <= 0) {
        return false; // Odcinki muszą mieć dodatnią długość
    }

    return ($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a);
}

// Przykłady użycia:
echo czyMoznaUtworzycTrojkat($a, $b, $c) ? "Tak" : "Nie";


