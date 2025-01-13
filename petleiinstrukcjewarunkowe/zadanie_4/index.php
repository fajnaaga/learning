<html>
    <head> <link rel="stylesheet" href="style.css">
        </head>
    </html>
    
<?php
// Napisz skrypt, który dla zmiennej $n=10 i $n>0 będzie ją zmniejszał o 1 i wypisywał:
// wartości kwadratów zmiennej $n; następnie wartości kwadratów zmiennej $n dla $n parzystych.
for ($n = 10; $n > 0;  $n--) { $x = pow($n, 2);
echo '<br>';
echo $x;
}

for ($n = 10; $n >0; $n-- ) {
if (($n % 2 ) == 0) {
$x = pow($n,2 );
pow($x,2);
echo '<br>';
echo $x;

}

}
?>