<?php
$a = 2;
switch($a){
    case 0:
    case 1:
    case 3:
    case 5:
    case 7: echo "Saya Adalah Angka Ganjil!"; break;
    case 2:
    case 4:
    case 6:
    case 8:
    case 10: echo "Saya Adalah Angka Genap!"; break;
    default: echo "Angka tidak terdefinisikan!"; break;
}
?>