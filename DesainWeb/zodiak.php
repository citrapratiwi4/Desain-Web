<?php
// Deklarasi variabel untuk horoskop
$zodiak_info = [
    "Aries" => ["tanggal_awal" => "03-21", "tanggal_akhir" => "04-19", "kesehatan" => "Baik", "asmara" => "Menarik", "keuangan" => "Stabil", "karier" => "Meningkat"],
    "Taurus" => ["tanggal_awal" => "04-20", "tanggal_akhir" => "05-20", "kesehatan" => "Perlu perhatian", "asmara" => "Romantis", "keuangan" => "Cukup", "karier" => "Tetap"],
    "Gemini" => ["tanggal_awal" => "05-21", "tanggal_akhir" => "06-20", "kesehatan" => "Cukup baik", "asmara" => "Dinamis", "keuangan" => "Baik", "karier" => "Berhasil"],
    "Cancer" => ["tanggal_awal" => "06-21", "tanggal_akhir" => "07-22", "kesehatan" => "Prima", "asmara" => "Harmonis", "keuangan" => "Lebih baik", "karier" => "Naik"],
    "Leo" => ["tanggal_awal" => "07-23", "tanggal_akhir" => "08-22", "kesehatan" => "Sempurna", "asmara" => "Menggairahkan", "keuangan" => "Sejahtera", "karier" => "Sukses"],
    "Virgo" => ["tanggal_awal" => "08-23", "tanggal_akhir" => "09-22", "kesehatan" => "Perlu istirahat", "asmara" => "Menantang", "keuangan" => "Cukup stabil", "karier" => "Berprestasi"],
    "Libra" => ["tanggal_awal" => "09-23", "tanggal_akhir" => "10-22", "kesehatan" => "Baik", "asmara" => "Harmonis", "keuangan" => "Stabil", "karier" => "Bergerak maju"],
    "Scorpio" => ["tanggal_awal" => "10-23", "tanggal_akhir" => "11-21", "kesehatan" => "Fit", "asmara" => "Intens", "keuangan" => "Melimpah", "karier" => "Progresif"],
    "Sagittarius" => ["tanggal_awal" => "11-22", "tanggal_akhir" => "12-21", "kesehatan" => "Bugar", "asmara" => "Petualangan", "keuangan" => "Berlimpah", "karier" => "Cepat naik"],
    "Capricorn" => ["tanggal_awal" => "12-22", "tanggal_akhir" => "01-19", "kesehatan" => "Bagus", "asmara" => "Teguh", "keuangan" => "Kuat", "karier" => "Stabil"],
    "Aquarius" => ["tanggal_awal" => "01-20", "tanggal_akhir" => "02-18", "kesehatan" => "Sehat", "asmara" => "Menyenangkan", "keuangan" => "Baik", "karier" => "Berkembang"],
    "Pisces" => ["tanggal_awal" => "02-19", "tanggal_akhir" => "03-20", "kesehatan" => "Fit", "asmara" => "Penuh cinta", "keuangan" => "Stabil", "karier" => "Progresif"]
];

// Input tanggal dan bulan
$tanggal = 15; // contoh input
$bulan = 5; // contoh input

// Konversi input tanggal dan bulan ke format MM-DD
$input_tanggal = sprintf("%02d-%02d", $bulan, $tanggal);

// Inisialisasi variabel zodiak
$zodiak = "Tidak ditemukan";

// Cari zodiak berdasarkan tanggal dan bulan
foreach ($zodiak_info as $nama_zodiak => $info) {
    if (($input_tanggal >= $info["tanggal_awal"]) && ($input_tanggal <= $info["tanggal_akhir"])) {
        $zodiak = $nama_zodiak;
        $kesehatan = $info["kesehatan"];
        $asmara = $info["asmara"];
        $keuangan = $info["keuangan"];
        $karier = $info["karier"];
        break;
    }
}

// Output hasil
if ($zodiak != "Tidak ditemukan") {
    echo "Zodiak: " . $zodiak . "\n";
    echo "Kesehatan: " . $kesehatan . "\n";
    echo "Asmara: " . $asmara . "\n";
    echo "Keuangan: " . $keuangan . "\n";
    echo "Karier: " . $karier . "\n";
} else {
    echo "Zodiak tidak ditemukan untuk tanggal dan bulan yang diberikan.\n";
}
?>
