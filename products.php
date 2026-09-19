<?php
// products.php - Bertindak sebagai Data Layer

// Membuat multidimensional array untuk menyimpan data produk
$katalogProduk = [
    [
        "id" => "PROD-01",
        "nama" => "Laptop LOQ",
        "kategori" => "Elektronik",
        "harga" => 7500000,
        "stok" => 5,
        "deskripsi" => "Laptop handal untuk programming."
    ],
    [
        "id" => "PROD-02",
        "nama" => "Mouse Wireless",
        "kategori" => "Aksesoris",
        "harga" => 125000,
        "stok" => 2, // Stok sengaja diset < 3 agar masuk kategori kritis
        "deskripsi" => "Mouse tanpa kabel 2.4GHz."
    ],
    [
        "id" => "PROD-03",
        "nama" => "Kursi Ergonomis",
        "kategori" => "Furniture",
        "harga" => 1500000,
        "stok" => 10,
        "deskripsi" => "Kursi nyaman untuk kerja seharian."
    ]
];
?>