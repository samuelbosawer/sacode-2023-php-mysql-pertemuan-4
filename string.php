<?php 
// TIPE DATANG STRING
$title = "KELAS PHP SACODE";
$nama_depan = 'Samuel';
$nama_belakang = 'Bosawer';
$alamat = 'Sentani';
$hoby = "Photografer";

var_dump($title)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIPE DATA STRING</title>
</head>
<body>
    <h2> <?= $title ?>  </h2>
    <p> Nama saya <?= $nama_depan  .' '. $nama_belakang?>, saya tinggal di <?= $alamat?>, hoby saya <?= $hoby ?> </p>
</body>
</html>

