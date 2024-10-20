<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$a = 28;       // Integer
$b = 21.67;    // Float
$c = "hai!"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//Untuk memverifikasi tipe dari suatu objek di PHP, gunakan fungsi var_dump():
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>
    
<p>Perhatikan bahwa ketika tipe Boolean dikonversi menjadi string, nilainya berubah menjadi "1", dan saat NULL dikonversi menjadi string, ia berubah menjadi string kosong "".</p>
    
</body>
</html>
