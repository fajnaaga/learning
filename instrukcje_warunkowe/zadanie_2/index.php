<!-- // Zadanie 2 
// Napisz program sprawdź, czy pierwsza jest podzielna przez drugą.  -->

<h2>HTML Forms</h2>

<form method="post" action="page.php">
    <label for="fname"> number_1:</label><br>
    <input type="number" id="fname" name="fname" value=0><br>
    <label for="lname"> number_2:</label><br>
    <input type="number" id="lname" name="lname" value=0><br><br>
    <input type="submit" value="Submit">
</form> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Dane są wysyłane metodą POST (nie przez url) Appends form-data inside the body of the HTTP request (data is not shown in URL)
    // Has no size limitations nie ma limitu rozmiaru możesz wysłać tak dużo jak chcesz
    // Form submissions with POST cannot be bookmarked  nie możesz zapisać tej strony

    // collect value of input field zbierz wartość z inputa
    $number_1 = $_POST['fname'];
    if (empty($number_1)) {
    echo "Number_1 is empty<br>";
    } else {
    echo $number_1 . "<br>";
    }
    $number_2 = $_POST['lname'];
    if (empty($number_2)) {
    echo "Number_2 is empty<br>";
    } else {
    echo $number_2 . "<br>";
    }
    if (($number_2 != 0) && ($number_1 % $number_2 == 0)) { // != wykrzyknik przed = to jest zaprzeczenie 
        echo "Jest podzielna"; 
    } else {
        echo "Nie jest podzielna";
    }

}
?>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

