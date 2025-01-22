<?php 
// Create function "isNameLongerThan5" that will take a $name as an argument and return string "Yes" 
//if $name is longer than 5 characters and "No" in other case.
// Stwórz funkcje "isNameLongerThan5", która przyjmie argument $name i zwróci string "Yes" 
//jeśli $name jest dłuższe niż 5 znaków i "No" w przeciwnym przypadku.
function isNameLongerThan5($name) {
    if(strlen($name) > 5) {
        echo "This name is long";
    } elseif(strlen($name) > 3 ) {
        echo "This name is medium.";
    }
     else {
        echo "This name is short.";
     }   
};
isNameLongerThan5("Krzysztof"); 
echo"<br>";
isNameLongerThan5("Bart");


// // Add another condition to the function "isNameLongerThan5" and check if $name is medium ($name > 3)
// Dodaj kolejny warunek do funkcji "isNameLongerThan5" i sprawdź czy $name jest średnie ($name > 3)
