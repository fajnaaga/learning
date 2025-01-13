<?php
// Napisz skrypt wyświetlający: “1-2-3-5-6-7-8-9”. //
// Użyj dowolnej pętli i instrukcji przerywającej (wykluczono wartość 4). // 
for ($x=1; $x <= 9; $x++) {
    // if ($x != 4) {
    //     echo ($x); 
    // }
    if ($x == 4) {
        continue;

    }
    echo ($x);
    echo "\n"; 
    if ($x == 9) {
        echo "<br>";
        break;
    } 

}
echo "coś";
echo "<br>";
$y = 1; 
while ($y <= 10 ) {
    if ($y == 4 ) {
        $y++;
        continue;
    }
    echo ($y);
    echo "\n";
    $y++;
    if ($y == 10) {
        break;
    }
}
