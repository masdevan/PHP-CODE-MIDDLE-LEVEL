<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Php</title>
</head>
<body>

<table border="2">
    <tr>
        <td>
            Contoh
        </td>
        <td>
            Contoh
        </td>
        <td>
            Contoh
        </td>
        <td>
            Contoh
        </td>
        <td>
            Contoh
        </td>
    </tr>
    <tr>
        <td>
            Contoh
        </td>
        <td>
            Contoh
        </td>
        <td>
            Contoh
        </td>
        <td>
            Contoh
        </td>
        <td>
            Contoh
        </td>
    </tr>
</table>
    
</body>
</html>


<?php
$data = [
["Devan", "Gallant", "Andre", "Tegar", "Dana"],
[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31],
["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
[2005, 2006, 2007, 2008, 2009, 2010]
];

$sapa = "Halo Selamat Pagi";

print_r($sapa . " Nama Saya, " . $data[0][0] . ", " . "Tanggal Lahir Saya, " . $data[2][1] . " " . $data[1][25] . " " . $data[3][11] . " " . $data[4][1]);
?>