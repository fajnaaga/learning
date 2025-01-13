
<html>
    <head>

    </head>
        <body>
            <form method="GET" action="/php_learning/petleiinstrukcjewarunkowe/zadanie_8/index.php">
                <label for="number">Podaj dowoloną liczbę całkowitą</label>
                <input type="number" id="number" name="number">
                <input type="submit" value="Submit">
            </form>
        </body>
</html>            
<?php 
// Wprowadzamy dowolną liczbę całkowitą.
// Zadaniem jest wyświetlenie kolejnych 20-tu liczb podzielnych przez 3.
// Uwaga:
// Jeśli wprowadzona liczba nie jest podzielna przez 3 należy wyznaczyć kolejną,
// najbliższą liczbę podzielną przez 3.
// Wykonaj to zadanie dla dowolnego dzielnika n.

$x = $_GET["number"];
$y = znajdz_najblizsza_podzielna_liczbe($x);
$ilosc_liczb = 0;

while ($ilosc_liczb < 20) {
    if ($x % 3 == 0) {
        $ilosc_liczb++;
        echo $x;
        echo "\n";
    }
    $x++;
}
function znajdz_najblizsza_podzielna_liczbe($x) {
    if ($x % 3 == 0 ) {
        return $x;
    } else {
        $podzielna = FALSE;
        do {
            $x++;
            if ($x % 3 == 0) {
                $podzielna = TRUE;

            }
        } while ($podzielna == FALSE);
        return $x;
    }
    
}

