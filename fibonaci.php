<?php
//fibo
// $angka1 = 0;
// $angka2 = 1;

// for ($i=0; $i < 20; $i++) { 
//     $fibo=$angka1+$angka2;
//     echo $fibo. ",";
//     $angka1 = $angka2;
//     $angka2 = $fibo;
// }
//prima
for ($i=1; $i <= 200; $i++) { 
    $a = 0;
    for ($j=1; $j <= $i; $j++) { 
        if ($i % $j == 0) {
            $a++;
        }  
    }
        if ($a == 2) {
            echo $i."<br>";
    }
}

?>