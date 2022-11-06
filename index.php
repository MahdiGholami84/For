<html>
<head><title></title></head>
<body>
<table border="2">
    <?php
    $a = 10;
    for ($x = 1; $x <= $a; $x++) {
        echo "<tr>";
        for ($y = 1; $y <= $a; $y++) {
            echo "<td>";
            echo $x * $y . "</br>";
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
