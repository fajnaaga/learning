<html> 
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</html>
<?php 
// Napisz skrypt, który za pomocą znaków * (gwiazdki) narysuje kwadrat.
echo "<table>";
for ($x=1; $x <=4; $x++) {
    echo "<br>";
    for ($y=1; $y <=4; $y++) {
        echo "*";
        echo "\n";
    }
} 
echo "</table>";

