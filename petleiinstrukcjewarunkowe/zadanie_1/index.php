<html> 
    <head>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<?php // Za pomocą pętli for stwórz tabelę w HTML składająca się z 2 wierszy i 10 kolumn.
echo "<table>";
echo "<tr>"; 
echo "<th>a</th>"; 
echo "<th>b</th>"; 
echo "<th>c</th>"; 
echo "<th>d</th>"; 
echo "<th>e</th>"; 
echo "<th>f</th>"; 
echo "<th>g</th>"; 
echo "<th>h</th>"; 
echo "<th>i</th>"; 
echo "<th>l</th>";  
echo "</tr>";
for ($x = 0; $x < 2; $x++) { 
    echo "<tr>"; 
    for ($y = 0; $y < 10; $y++ ) {
        echo "<td>kolumna" . ($y+1) ."</td>"; 
    }
    echo "</tr>";
  }

echo "</table>";
?>
</body>