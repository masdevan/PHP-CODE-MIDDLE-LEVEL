<?php
$username = "masdevan";
$password = "anjaymabar";
if($username == "masdevan" AND $password == "anjaymabar"){
    echo "Username dan Pasword Benar, Hak Akses Diberikan!";
} else if($username == "masdevan" AND $password != "anjaymabar"){
    echo "Username Benar, Password Salah, Silahkan Coba Lagi";
} else if($username != "masdevan" AND $password == "anjaymabar"){
    echo "Password Benar Username Salah, Silahkan Masukkan Kembali!";
} else {
    echo "Semuanya Salah, Silahkan Ulangi!";
}
?>

<br/>
<br/>

<?php
$user = "masdevan";
$pw = "anjaymabar";
if($user == "masdevan"){
    if($pw == "anjaymabar"){
        echo "Input Yang Anda Masukkan Sesuai, Hak Akses diberikan!";
    } else {
    echo "Username Benar, Password Salah, Silahkan Ulangi!";
    }
} else if($pw == "anjaymabar") {
    if($user == "masdevan"){
        echo "Input Yang Anda Masukkan Sesuai, Hak Akses diberikan!";
    } else {
        echo "Password Benar, Username Salah, Silahkan Ulangi!";
    }
} else {
    echo "Nama dan Password Tidak Sesuai!";
}
?>