<?php
// Napisz skrypt sumujący wszystkie liczby nieparzyste z przedziału od 0 do 10. Użyj instrukcji continue.//
$suma = 0;
for ($x = 0; $x <= 10; $x++) {
    if ($x % 2 == 0) {
        continue;
    } 
    $suma = $suma + $x; 

} 
echo "Suma wszystkich liczb nieparzystych równa się " . $suma ;