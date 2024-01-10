<table border="2">
      <tr>
        <td><strong>No</strong></td>
        <td><strong>NAMA</strong></td>
        <td><strong>IPA</strong></td>
        <td><strong>IPS</strong></td>
        <td><strong>MATEMATIKA</strong></td>
        <td><strong>WEB</strong></td>
        <td><strong>RATA-RATA</strong></td>
        <td><strong>KETERANGAN</strong></td>
        </tr>
<!--[ PHP SCRIPTER ]-->
    <?php
    $isArray = [
        ["NO" => 1, "NAMA" => "Andi", "IPA" => 90, "IPS" => 88, "MATEMATIKA" => 78, "WEB" => 90,],
        ["NO" => 2, "NAMA" => "Joni", "IPA" => 88, "IPS" => 66, "MATEMATIKA" => 66, "WEB" => 88,],
        ["NO" => 3, "NAMA" => "Budi", "IPA" => 45, "IPS" => 77, "MATEMATIKA" => 64, "WEB" => 78,],
        ["NO" => 4, "NAMA" => "Ari", "IPA" => 33, "IPS" => 89, "MATEMATIKA" => 99, "WEB" => 66,],
        ["NO" => 5, "NAMA" => "Luki", "IPA" => 89, "IPS" => 34, "MATEMATIKA" => 43, "WEB" => 55,],
        ["NO" => 6, "NAMA" => "Sofi", "IPA" => 78, "IPS" => 80, "MATEMATIKA" => 56, "WEB" => 88,],
        ["NO" => 7, "NAMA" => "Toni", "IPA" => 67, "IPS" => 76, "MATEMATIKA" => 89, "WEB" => 99,],
        ["NO" => 8, "NAMA" => "Diki", "IPA" => 99, "IPS" => 78, "MATEMATIKA" => 91, "WEB" => 67,],
        ["NO" => 9, "NAMA" => "Umi", "IPA" => 20, "IPS" => 33, "MATEMATIKA" => 92, "WEB" => 63,],
        ["NO" => 10, "NAMA" => "Siti", "IPA" => 45, "IPS" => 25, "MATEMATIKA" => 97, "WEB" => 45,],
    ];

    foreach($isArray as $value){
        $totalSiswa1 = $value['IPA'] + $value['IPS'] + $value['MATEMATIKA'] + $value['WEB'];
        $rataRata = $totalSiswa1 / 4;
        $rataRataSub = number_format($rataRata, 2);
        $status = ($rataRataSub >= 70) ? "LULUS" : "TIDAK LULUS";

        global $fullRata;
        $fullRata += $rataRataSub / 10;

        global $getIpa;
        global $getIps;
        global $getMatematika;
        global $getWeb;

        $getIpa += $value['IPA'];
        $getNewIpa = $getIpa / 10;
        $formatIpa = number_format($getNewIpa, 2);

        $getIps += $value['IPS'];
        $getNewIps = $getIps / 10;
        $formatIps = number_format($getNewIps, 2);

        $getMatematika += $value['IPS'];
        $getNewMatematika = $getMatematika / 10;
        $formatMatematika = number_format($getNewMatematika, 2);

        $getWeb += $value['IPS'];
        $getNewWeb = $getWeb / 10;
        $formatWeb = number_format($getNewWeb, 2);
        
        echo "
        <tr>
        <td><span>{$value['NO']}</span></td>
        <td><span>{$value['NAMA']}</span></td>
        <td><span>{$value['IPA']}</span></td>
        <td><span>{$value['IPS']}</span></td>
        <td><span>{$value['MATEMATIKA']}</span></td>
        <td><span>{$value['WEB']}</span></td>
        <td><span>$rataRataSub</span></td>
        <td><span>$status</span></td>
        </tr>
        ";
    }

    echo "
    <tr>
    <td><strong>Rata Rata : </strong></td>
    <td><span></span></td>
    <td><span>$formatIpa</span></td>
    <td><span>$formatIps</span></td>
    <td><span>$formatMatematika</span></td>
    <td><span>$formatWeb</span></td>
    <td><span>$fullRata</span></td>
    <td><span></span></td>
    </tr>
    <tr>
    <td><strong>Jumlah : </strong></td>
    <td><span></span></td>
    <td><span>99</span></td>
    <td><span>97</span></td>
    <td><span>99</span></td>
    <td><span>99</span></td>
    <td><span>86.50</span></td>
    <td><span></span></td>
    </tr>
    ";
    ?>
</table>