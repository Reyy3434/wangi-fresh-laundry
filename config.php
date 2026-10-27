<?php
// ============================================================
// FILE INI TEMPAT SEMUA DATA USAHA.
// Cukup edit di sini, tampilan halaman otomatis ikut berubah.
// CATATAN: semua isi di bawah adalah DATA CONTOH (dummy) untuk latihan.
// Ganti dengan data usaha yang sebenarnya jika sudah ada.
// ============================================================

$usaha = [
    'nama'   => 'Wangi Fresh Laundry',
    'kota'   => 'Pamulang',
    'alamat' => 'Jl. Contoh Raya No. 12, Pamulang, Tangerang Selatan',
    'jam'    => 'Setiap hari, 08.00 - 20.00 WIB',
    'wa'     => '628000000000',   // nomor contoh; ganti dengan nomor asli (format 62xxxxxxxxxx)
    'maps'   => 'https://maps.google.com/',  // ganti dengan link Google Maps usaha
    'penulis'=> 'Haqqani Septian Ray',
];

// Daftar layanan (tiap [ ... ] adalah satu kotak layanan)
$layanan = [
    ['judul' => 'Cuci Kiloan',   'isi' => 'Cuci dan lipat pakaian harian dengan deterjen yang cocok untuk kain sehari-hari.'],
    ['judul' => 'Cuci Setrika',  'isi' => 'Pakaian dicuci, dikeringkan, lalu disetrika rapi, siap langsung masuk lemari.'],
    ['judul' => 'Cuci Satuan',   'isi' => 'Untuk selimut, jaket, atau pakaian tertentu yang butuh perawatan lebih hati-hati.'],
];

// Langkah cara pesan
$langkah = [
    'Hubungi kami lewat WhatsApp atau datang langsung ke lokasi.',
    'Cucianmu ditimbang dan dicatat, lalu kami proses sesuai layanan yang dipilih.',
    'Cucian selesai, kamu ambil atau kami antar sesuai ketentuan yang berlaku.',
];

// Fungsi kecil untuk mengamankan teks sebelum ditampilkan di HTML
function e($teks) {
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}
