<html> 
    <head>

    </head>
        <body>
            <form action="index.php" method="GET">
                <input type="number" id="html" name="szachownica"  min=0>
                <input type="number" id="html2" name="szachownica2"  min=0>
                <input type="submit" value="click here">
            </form> 
        </body>
</html>
<?php
// Napisz skrypt wyświetlający szachownicę.
// XOXOXOXO
// OXOXOXOX
// XOXOXOXO
// OXOXOXOX
// XOXOXOXO
// OXOXOXOX
// XOXOXOXO
// OXOXOXOX
// Napisz skrypt wyświetlający szachownicę
$rozmiar = 8; // Rozmiar szachownicy
$rozmiar = $_GET["szachownica"];
$rozmiar2 = $_GET["szachownica2"];
for ($i = 0; $i < $rozmiar; $i++) {
    for ($j = 0; $j < $rozmiar2; $j++) {
        // Sprawdź, czy suma indeksów jest parzysta
        if (($i + $j) % 2 == 0) {
            echo "X";
        } else {
            echo "O";
        }
    }
    echo "<br>"; // Nowa linia po każdej kolumnie
}

?>
