<?php
$nama = "Eka Yuniar";
$nama1 = "Eka";
$nama2 = "Yuniar";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>

<body>
    <h4>
        <!-- Versi Lengkap -->
        Selamat Datang <?php echo "Nama saya $nama1";  ?>
    </h4>
    <h4>
        <!-- Versi Shortcut -->
        Selamat Datang <?= "Nama Saya $nama2"; ?>
    </h4>
    <h4>
        <!-- Versi html di dalam php -->
        <?= "<h4>Selamat Datang Nama saya $nama1</h4>"; ?>
    </h4>
</body>

</html>