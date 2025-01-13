<?php
echo "<br>";
$year = $_POST['year'];
// echo $year;
if ($year > 1582) {
    if ($year % 400 == 0) {
        print ("Luty w $year jest przestępny ma 29 dni.");
    } else {
        if ($year % 100 == 0) {
        print ("Luty w $year nie jest przestępny ma 28 dni.");
        } else {
            if ($year % 4 == 0) {
                print ("Luty w $year jest przestępny i ma 29 dni.");
            } else {
                print ("Luty w $year nie jest przestępny ma 28 dni.");
            }
        }
    }
} else {
    print("Luty w $year nie jest przestępny ma 28 dni. ");

}
