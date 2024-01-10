<?php
$nama = "Andi Saputra";
$umur = 16;
$hobi = "Membuat Koding";
$tanggallahir = 6;
$bulan = "Agustus";
$tahun = "2005";

echo "halo nama saya " . $nama . "umur " . " " . $umur . " hobi saya " . $hobi . " tanggal lahir saya " . " " . $tanggallahir . " " . $bulan . " " . $tahun;

echo "<br/>";
echo "<br/>";
echo "Tipe data<br/>";

var_dump($nama);
echo "<br/>";
var_dump($umur);
echo "<br/>";
var_dump($hobi);
echo "<br/>";
var_dump($tanggallahir);
echo "<br/>";
var_dump($bulan);
echo "<br/>";
var_dump($tahun);

echo "<br/><br/>";
echo "Array Learning : <br/><br/>";
$arrayObject = array("Andri","Joko","Sukma","Rina","Sari");
echo $arrayObject[0] . "<br/>";
echo $arrayObject[1] . "<br/>";
echo $arrayObject[2] . "<br/>";
echo $arrayObject[3] . "<br/>";
echo $arrayObject[4] . "<br/>";
echo "<br/>";

$objectArray = ["Andri","Joko","Sukma","Rina","Sari"];
echo $objectArray[0] . "<br/>";
echo $objectArray[1] . "<br/>";
echo $objectArray[2] . "<br/>";
echo $objectArray[3] . "<br/>";
echo $objectArray[4] . "<br/>";
echo "<br/>";
?>