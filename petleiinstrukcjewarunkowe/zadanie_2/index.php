<!-- // Za pomocą pętli for wypisz na ekranie dowolne znaki,
tak aby układały się w 2 wiersze po 10 znaków. -->
<?php
function generateRandomString($length = 10) { // lenght wynosi 10 jeżeli nic nie podasz, albo tą liczbę którą podasz
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // string wszystkich znaków
    $charactersLength = strlen($characters);
    $randomString = ''; // pusty string i leci pętla tyle ile podałam albo 10 razy jeżeli nie podam

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }

    return $randomString;
}

echo (generateRandomString(1));

    for ($x = 0; $x < 2; $x++) { 
        for ($y = 0; $y <10; $y++) {
            echo (generateRandomString(1));
            


        } echo "<br>";
    }
