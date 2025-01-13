<?php
/* Za pomocą pętli for, while i do… while napisz skrypt,
który będzie zwiększał zmienną $i od 1 do 100 o 2, a następnie zmniejszał ją do 1 o 4. */
// $i = 1;  
// while ($i < 100) {
//     echo $i;
//     echo "<br>";
//     $i = $i +2;

// }
// while ($i > 1 ) {
//     echo $i;
//     echo "<br>";
//     $i = $i -4;

// }

// $i = 1;

// do {
//     echo $i;
//     $i = $i+2;

// } while ($i < 100);

// do {
// echo $i; 
// echo "<br>";
// $i = $i - 4;
// } while ($i >= 1);

$i = 1;
for ($x = 1; $x <= 50; $x++) { // Tworzę pętle for która poleci 50 razy! ;) 
    echo $i;
    $i+= 2; 
    echo "<br>";
}


for ($x=1; $x <=25; $x++) {
    $i = $i - 4;
    echo $i;
    echo "<br>";
}