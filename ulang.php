<?php
// for
// for ($i=0; $i < 10; $i++) { 
//     echo "Angka".$i;
//     echo "<br>";
// }

//while
// $a=0;
// while ($a <= 10) {
//     echo "while". $a;
//     echo "<br>";
//     $a++;
// }

//dowhile (dieksekusi baru di ada hasil)
// $a=11;
// do {
//     echo "dowhile";
// } while ($a <= 10);

//foreach (digunakan untuk data array)
$a=array("budi","tono","rini","susi");
foreach ($a as $key => $value) {
    echo $value;
    echo "<br>";
}
?>