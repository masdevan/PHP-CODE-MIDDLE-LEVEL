<!--[ Tabel bu Nanin ]-->
<table border="2">
    <tr>
        <td rowspan="2" align="center">No</td>
        <td colspan="3" align="center">Pelanggan</td>
        <td colspan="3" align="center">Lap. Futsal</td>
        <tr>
            <td>No. Pelanggan</td>
            <td>Nama Pelanggan</td>
            <td>No. Telp</td>
            <td>Kode Lap.</td>
            <td>Nama Lap.</td>
            <td>Harga</td>
        </tr>
    </tr>
<?php

$myArray = [
    ['No' => '1', 'NPelanggan' => '12456', 'Nama' => 'Galant', 'NoTelp' => '073647827637', 'Klap' => '665', 'NLap' => 'Owi Lover', 'Harga' => '9000'],
    ['No' => '2', 'NPelanggan' => '98987', 'Nama' => 'Devan', 'NoTelp' => '089765432167', 'Klap' => '344', 'NLap' => 'Megawati', 'Harga' => '6000'],
    ['No' => '3', 'NPelanggan' => '98098', 'Nama' => 'Dana', 'NoTelp' => '234325454352', 'Klap' => '123', 'NLap' => 'Puan Chan', 'Harga' => '2000'],
];

foreach($myArray as $value){
        echo '
        <tr>
        <td align="center">' . $value['No'] . '</td>
        <td>' . $value['NPelanggan'] . '</td>
        <td>' . $value['Nama'] . '</td>
        <td>' . $value['NoTelp'] . '</td>
        <td>' . $value['Klap'] . '</td>
        <td>' . $value['NLap'] . '</td>
        <td>' . $value['Harga'] . '</td>
        </tr>
        ';
      }

?>
</table>