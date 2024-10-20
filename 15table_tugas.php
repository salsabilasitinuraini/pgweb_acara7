<!DOCTYPE html>
<html>
<body>

<?php
$objects = array("TIE POINT 1", "TIE POINT 2", "TIE POINT 3", "TIE POINT 4", "TIE POINT 5", "TIE POINT 6");
$pixels_column = array(4879, 2256, 793, 5311, 4233, 3018);
$pixels_row = array(415, 2298, 1833, 1660, 508, 335);
$photo_x = array(13.94490267, -3.7125821, -13.56119065, 16.85303589, 9.596166429, 1.417047163);
$photo_y = array(9.804856037, -2.87110957, 0.259174018, 1.423774152, 9.178799318, 10.34339495);
$photo_z = array(39.0667, 39.0667, 39.0667, 39.0667, 39.0667, 39.0667);
$ground_x = array(427899.4028, 428108.7959, 427969.2971, 428109.3939, 427891.1869, 427828.9658);
$ground_y = array(9112676.067, 9112187.52, 9112010.685, 9112674.794, 9112561.653, 911228.721);
$ground_z = array(190.2337922, 158.1010152, 158.1010152, 120.5308745, 166.3242661, 43.9019626);

echo "<table border='1'>";
echo "<tr><th>Object</th><th colspan='2'>Pixel</th><th colspan='3'>Coordinates (Photo)</th><th colspan='3'>Coordinates (Ground)</th></tr>";
echo "<tr><th></th><th>Column</th><th>Row</th><th>X</th><th>Y</th><th>Z</th><th>X</th><th>Y</th><th>Z</th></tr>";

for($i=0; $i<count($objects); $i++) {
    echo "<tr>";
    // TIE POINT
    echo "<td rowspan='2'>" . $objects[$i] . "</td>";

    echo "<td>Column</td>";
    echo "<td>" . $pixels_column[$i] . "</td>";
    echo "<td>" . $photo_x[$i] . "</td>";
    echo "<td>" . $photo_y[$i] . "</td>";
    echo "<td>" . $photo_z[$i] . "</td>";
    echo "<td>" . $ground_x[$i] . "</td>";
    echo "<td>" . $ground_y[$i] . "</td>";
    echo "<td>" . $ground_z[$i] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Row</td>";
    echo "<td>" . $pixels_row[$i] . "</td>";
    echo "<td></td><td></td><td></td><td></td><td></td><td></td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
