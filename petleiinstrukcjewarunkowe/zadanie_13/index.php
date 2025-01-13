<html> 
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</html>
<?php 
// Napisz skrypt, który za pomocą znaków * (gwiazdki) narysuje kwadrat. Wnętrze kwadratu to kropki // 
echo "<table>"; 
for ($x=1; $x <=10; $x++) {
    echo "<tr>";
    for ($y=1; $y <=10; $y++) {
        if ($x == 1 || $x == 10) {
            echo "<td>*</td>";
        } else {
            if ($y==1 || $y == 10) {
                echo "<td>*</td>";
            } else {
                echo "<td>.</td>";
            }
        }
    } 
    echo "</tr>";

}
echo "</table>";
