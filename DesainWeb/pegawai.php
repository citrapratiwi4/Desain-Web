<?php
$jenis_kelamin = 'laki_laki'; // Atau 'perempuan'
$tinggi_badan = 175; // Ganti dengan tinggi badan pelamar
$berat_badan = 65; // Ganti dengan berat badan pelamar
$ipk = 3.5; // Ganti dengan IPK pelamar
$pendidikan = 'S1'; // Atau 'D3'

if ($jenis_kelamin == 'laki_laki' && $tinggi_badan >= 170 && $tinggi_badan <= 179) {
    $berat_ideal = $tinggi_badan - 110;
    if ($berat_badan == $berat_ideal && $ipk >= 3 && $ipk <= 4 && ($pendidikan == 'D3' || $pendidikan == 'S1')) {
        echo "Diterima sebagai pegawai laki-laki.";
    } else {
        echo "Tidak memenuhi syarat untuk penerimaan pegawai laki-laki.";
    }
} elseif ($jenis_kelamin == 'perempuan' && $tinggi_badan >= 160 && $tinggi_badan <= 170) {
    $berat_ideal = $tinggi_badan - 110;
    if ($berat_badan == $berat_ideal && $ipk >= 3 && $ipk <= 4 && ($pendidikan == 'D3' || $pendidikan == 'S1')) {
        echo "Diterima sebagai pegawai perempuan.";
    } else {
        echo "Tidak memenuhi syarat untuk penerimaan pegawai perempuan.";
    }
} else {
    echo "Tidak memenuhi syarat untuk penerimaan pegawai.";
}
?>
