<?php
// Belajar Array
$hari = array("Senin", "Selasa", "Rabu", "Kamis");
$nama_mahasiswa = array(
    [
        'nama' => "Eka Yuniar",
        'nim' => "10510016",
        'alamat' => "Malang",
        'email' => "eka@stimata.ac.id"
    ], [
        'nama' => "Yuniar",
        'nim' => "10510017",
        'alamat' => "Surabaya",
        'email' => "yuniar@stimata.ac.id"
    ]
);
echo $hari[3];
echo "<br>";
var_dump($hari);
echo "<br>";
echo $nama_mahasiswa[0]['nama'];