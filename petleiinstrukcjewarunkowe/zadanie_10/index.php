<html> 

    <head>
</head?>

        <body>
        <form method="get">
            <label> Number:</label>
            <input type="number" name="number">
            <input type="submit" value="Kilknij mnie!">
        </form>
    </body>

</html>

<?php 
/* Napisz skrypt, który sprawdzi, czy podana liczba jest liczbą pierwszą. */
if (isset($_GET['number'])) {
    $n = $_GET['number'];

    if($n >= 2 ) {
        $is_prime = TRUE;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                $is_prime = FALSE;
            }
        }

        if ($is_prime == TRUE) {
            print "Liczba JEST liczbą pierwszą";
        } else {
        print "Liczba NIE jest liczbą pierwszą";
        }
    } else {
        print "Liczba NIE jest liczbą pierwszą";
    }
    
}