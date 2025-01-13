<?php

echo "<br>";
$password = $_POST['password'];

// echo strlen($password);

if (strlen($password) <5) { // jeżeli (długość zmiennej (string) password jest mniejsza od 5)
    print "Hasło jest bardzo słabe."; // to wyświetla to co w cudzysłowie
} elseif ((strlen($password) >=5 ) && (strlen($password) <=8)) { // lub jeżeli(długo)
    print "Hasło jest słabe."; } 
elseif ((strlen($password) >=9 ) && (strlen($password) <=11)) {
    print "Hasło jest silne."; 
} else {
    print("Hasło jest bardzo silne.");

} 
    echo '<a class="back-button" href="/php_learning/instrukcje_warunkowe/zadanie_6/index.html">Powrót do formularza</a>';
