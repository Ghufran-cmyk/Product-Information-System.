<?php
// functions.php - Bertindak sebagai Processing Layer

// 1. Fungsi untuk mengalkulasi total nilai aset gudang (Harga x Stok)
function hitungTotalNilaiStok($arrayProduk) {
    $totalNilai = 0;
    foreach ($arrayProduk as $item) {
        $totalNilai += ($item['harga'] * $item['stok']);
    }
    return $totalNilai;
}

// 2. Fungsi logika conditional untuk menyaring warna baris jika stok kritis (< 3)
function tentukanWarnaBaris($stok) {
    if ($stok < 3) {
        return "background-color: #ffcccc;"; // Warna merah muda untuk stok kritis
    } else {
        return ""; // Standar/tanpa warna khusus jika stok aman
    }
}
?>