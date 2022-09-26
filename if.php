<?php
//iff
// $a=1;
// $b=1;
// if ($a==$b) {
//     echo "benar";
// }else {
//     echo "salah";
// }

//switch
$a=30;
switch ($a) {
    case '1':
        echo "Senin";
        break;
    case '2':
        echo "selasa";
        break;
    case '3':
        echo "rabo";
        break;
    case '4':
        echo "kamis";
        break;
    case '5':
        echo "jumat";
        break;
    case '6':
        echo "sabtu";
        break;
    case '7':
        echo "minggu";
        break;
    
    default:
        echo "Hari ga ada";
        break;
}
?>