<!-- Napisz program sprawdzający czy liczba jest z przedziału <1,10> lub <17,21> -->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
$number=$_POST["quantity"];
    if (($number >= 1) && ($number <= 10)) {
      echo "$number is between 1 and 10";
    } elseif (($number >= 17) && ($number <= 21)) {
      echo "$number is between 17 and 21";
    } else {
      echo "$number is neither from 1 to 10 nor from 17 to 21";

    }
}