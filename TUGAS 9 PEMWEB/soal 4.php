<?php
// Meminta input dari user
echo "Masukkan sebuah angka: ";
$angka = (int)readline();

// Menampilkan faktor dari angka
echo "Faktor dari $angka adalah:\n";
for ($i = 1; $i <= $angka; $i++) {
    if ($angka % $i == 0) {
        echo $i . "\n";
    }
}
?>
