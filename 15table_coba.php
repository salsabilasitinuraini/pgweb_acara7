<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota", "Ayla");
$colors = array("red", "yellow", "blue", "green"); 

echo "<table border='1'>";
for($i=0; $i<count($cars); $i++) { 
    echo "<tr><td> $cars[$i] </td><td> $colors[$i] </td></tr>";
}
echo "</table>";
?>

</body>
</html>
