<html>
    <head>

    </head>
        <body>
            <form method="GET" action="/php_learning/petleiinstrukcjewarunkowe/zadanie_9/index.php">
                <label for="number">Podaj dowoloną liczbę całkowitą</label>
                <input type="number" id="number" name="number">
                <input type="number" id="number_2" name="number_2">
                <input type="submit" value="Submit">
            </form>
        </body>
</html> 
<!-- Wprowadzamy dowolną liczbę całkowitą.
Zadaniem jest wyświetlenie kolejnych 20-tu liczb podzielnych przez n.
Uwaga:
Jeśli wprowadzona liczba nie jest podzielna przez n należy wyznaczyć kolejną, 
najbliższą liczbę podzielną przez n..
<?php


$x = $_GET["number"];
$n = $_GET["number_2"];
$y = znajdz_najblizsza_podzielna_liczbe($x);
$ilosc_liczb = 0;

while ($ilosc_liczb < 20) {
    if ($x % $n == 0) {
        $ilosc_liczb++;
        echo $x;
        echo "\n";
    }
    $x++;
}
function znajdz_najblizsza_podzielna_liczbe($x) {
    if ($x % $n == 0 ) {
        return $x;
    } else {
        $podzielna = FALSE;
        do {
            $x++;
            if ($x % $n == 0) {
                $podzielna = TRUE;

            }
        } while ($podzielna == FALSE);
        return $x;
    }
    
}
