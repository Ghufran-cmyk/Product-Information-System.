<?php
// index.php - Bertindak sebagai Presentation Layer

// 1. Merajut semua komponen layer menggunakan require_once
require_once 'products.php';
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Produk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h2>Katalog Sistem Informasi Produk</h2>
    
    <!-- Render layout tabel HTML -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // 2. Melakukan perulangan foreach untuk merender data dari array
            foreach ($katalogProduk as $produk) { 
                
                // Memanggil fungsi logika conditional untuk warna baris
                $warnaPeringatan = tentukanWarnaBaris($produk['stok']);
            ?>
            
            <!-- Menerapkan warna baris pada tag <tr> -->
            <tr style="<?php echo $warnaPeringatan; ?>">
                <td><?php echo $produk['id']; ?></td>
                <td><?php echo $produk['nama']; ?></td>
                <td><?php echo $produk['kategori']; ?></td>
                <td>Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></td>
                <td><?php echo $produk['stok']; ?></td>
                <td><?php echo $produk['deskripsi']; ?></td>
            </tr>
            
            <?php 
            } // Akhir dari foreach
            ?>
        </tbody>
    </table>

    <!-- Menampilkan Kalkulasi Total Aset -->
    <div style="background-color: #eef; padding: 15px; border-radius: 5px;">
        <h3>Ringkasan Inventori Gudang</h3>
        <?php $totalAset = hitungTotalNilaiStok($katalogProduk); ?>
        <p>Total Nilai Keseluruhan Aset: <strong>Rp <?php echo number_format($totalAset, 0, ',', '.'); ?></strong></p>
        <p><small><em>* Baris tabel yang berwarna merah muda menandakan status stok sedang kritis (kurang dari 3).</em></small></p>
    </div>

</body>
</html>