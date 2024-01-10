<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Devan</title>
</head>
<body>

<?php
echo "<table border='2'>";
echo "<tr><th>No.</th><th>Nama Peserta</th></tr>";
for($i = 1; $i < 101; $i++){
    echo "<tr><td>$i</td><td>Nomor Peserta $i</td></tr>";
}
echo "</table>";
?>

</body>
</html>