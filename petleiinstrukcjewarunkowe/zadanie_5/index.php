<?php
// Za pomocą pętli for, while i do… while napisz skrypt,
// który wypisze ilość iteracji pętli dla zmiennej $i<=10.
// Tam gdzie to możliwe zastosuj $i++, ++$i, $i--, --$i. to samo tylko pętla WHILE
$iteracje = 0;
for($i = 10; $i > 0; $i--) {
    $iteracje++;
}
echo 'Liczba iteracji pierwszej pętli (FOR): ' . $iteracje;
echo '<br>';

// to samo tylko pętla WHILE

$iteracje_2 = 0;
$x= 1;
while($x <10) {
    $x++;
    $iteracje_2++;
}
echo 'Liczba iteracji drugiej pętli (WHILE): ' . $iteracje_2;
echo '<br>';

// jeszcze raz to samo tylko pętle DO WHILE

$iteracje_3 = 0;
$y = 1;

do {
    $y++;
    $iteracje_3++;
} while ($y <= 10);

echo 'Liczba iteracji trzeciej pętli (DO WHILE): ' . $iteracje_3;
