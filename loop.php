<?php
// perulangan For
echo "<H3>Latihan For</H3><br>";
for ($i = 0; $i < 4; $i++) {
    echo "Hai saya urutan ke-$i <br>";
};

echo "<br><H3>Latihan While</H3>";

// perulangan while
$a = 0; // initial statement
while ($a < 5) // Kondisi yang bernilai trur
{
    echo "Hai ini baris ke-$a <br>"; // eksekusi
    $a++; // increment
}


echo "<br><H3>Latihan Do While</H3>";
// do while
$b = 0;
do {
    echo "Hai ini baris ke-$b <br>";
    $b++;
} while ($b < 5);
