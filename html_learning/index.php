<!-- https://www.w3schools.com/html/tryit.asp?filename=tryhtml_css_fonts -->

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/php_learning/html_learning/css/styles.css">

  </head>
  <body>

  <h2>HTML Table</h2>

<table>
  <tbody>
    <tr>
      <th>Person</th>
      <th>Contact</th>
      <th>Country</th>
  </tr>
  <tr>
    <td class="font-color-green">Agata Krajewska</td>
    <td>123</td>
    <td>Poland</td>
  </tr>
  <tr>
    <td>Katarzyna Sosnecka</td>
    <td class="font-color-green">776</td>
    <td>Germany</td>
  </tr>
  <tr class="font-color-green">
    <td>Kacper Piskorski</td>
    <td>123</td>
    <td>Poland</td>
  </tr>
  <tr>
    <td>Antoni Cesarz</td>
    <td>777</td>
    <td>UK</td>
  </tr>

</tbody></table>

    <h1>This is a heading</h1>
    <p>This is a paragraph.</p>

  <table class="font-color-red">
<?php
// pętle i instrukcje warunkowe
// Za pomocą pętli for stwórz tabelę w HTML składająca się z 2 wierszy i 10 kolumn 
for ($x = 0; $x <= 1; $x++) {
  echo "zmienna" . $x;
  echo "<tr>"; 
  for ($y = 0; $y <= 9; $y++) {
    
    echo "<td><strong>";
    echo "column";
    echo $y + 1;
    echo "</strong></td>"; 

  }
  echo "</tr>";

}
?>
</table>
  </body>

</html>


