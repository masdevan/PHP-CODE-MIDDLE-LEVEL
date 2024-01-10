<?php
$a = 10;
echo $a;
echo "<br/><br/>";
?>

<?php
echo "belajar Foreach <br/>";
 $newArray = array(
    "nama" => "Andi",
    "umur" => "13",
    "Pekerjaan" => "Developer",
 );
 foreach($newArray as $key => $value){
    echo $key . ":" . $value . "<br/>";
 }
?>