<?php
// Deklarasi variabel
$jumlah_detik = 10000;
$detik_per_pulsa = 45;
$harga_per_pulsa = 30;

// Hitung jumlah pulsa yang dibutuhkan
$jumlah_pulsa = ceil($jumlah_detik / $detik_per_pulsa);

// Hitung total biaya
$total_bayar = $jumlah_pulsa * $harga_per_pulsa;

// Hitung jam, menit, dan detik dari jumlah detik
$jam = floor($jumlah_detik / 3600);
$menit = floor(($jumlah_detik % 3600) / 60);
$detik = $jumlah_detik % 60;

// Output hasil
echo "Jam: " . $jam . "\n";
echo "Menit: " . $menit . "\n";
echo "Detik: " . $detik . "\n";
echo "Total bayar: " . $total_bayar . " rupiah\n";
?>
