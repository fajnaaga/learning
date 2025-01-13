<?php
// Z przedziału <0..1000> wyświetl liczby podzielne przez 3 i 7.
for ($x = 0 ; $x <= 1000; $x++) {
    if (($x % 3 == 0) && ($x % 7 == 0)) { 
        echo $x; echo '<br>';
        
    }
}

