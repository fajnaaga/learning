<!-- Napisz program informujący czy liczba jest większa, mniejsza czy równa zero.
Wykorzystaj tylko jedną, podstawową instrukcję warunkową. -->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
$number=$_POST["quantity"];
    if ($number > 0 ){
        echo "$number is greater than 0"; 
    }
    if ($number < 0 ){
        echo "$number is less than 0";
    }
    if ($number == 0 ){
        echo "$number is 0";
    }
echo "<br>";

echo '<a href="index.html">Return</a>';
}