<!-- Sprawdzający wiek.
Mniej niż 11: dziecko;
Między 11 i 17: nastolatek;
18 i więcej: dorosły; -->

<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
    </head>


    <div class="form-wrapper">
        <?php

        if (isset($_POST['number'])) { 
            $age = $_POST['number'];

            switch(TRUE) {
                case ($age < 11):
                    echo "Osoba to dziecko.";
                    break;
                case ($age > 11) && ($age < 17):
                    echo "Osoba to nastolatek.";
                    break;
                case ($age > 18):
                    echo "Osoba to dorosły.";
                    break;
            }
        } else {
            echo "Proszę podać wiek.";
        }

        echo '<a class="back-button" href="/php_learning/instrukcje_warunkowe/zadanie_5/index.html">Powrót do formularza</a>';

        ?>
    </div>

</html>