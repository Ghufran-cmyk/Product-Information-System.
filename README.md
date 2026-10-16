Product Information System.

## Deskripsi Proyek
Proyek ini adalah rancangan cetak biru (*blueprint*) sistem manajemen data informasi produk siap pakai. Proyek ini mengimplementasikan konsep pemrosesan *Server-Side*, manajemen data kolektif, dan desain modular (pemisahan *file*).

## Struktur Arsitektur Konseptual
Proyek ini dibagi menjadi 3 komponen utama:
1. **Data Layer (`products.php`)**: Penampung *multidimensional array* yang menyimpan data komoditas produk (ID, Nama, Kategori, Harga, Stok, Deskripsi).
2. **Processing Layer (`functions.php`)**: Memuat fungsi kalkulasi matematika (`hitungTotalNilaiStok`) dan logika *conditional* untuk menandai baris jika stok kritis (kurang dari 3).
3. **Presentation Layer (`index.php`)**: Merajut seluruh komponen menggunakan `require_once` dan merender data ke dalam *layout* tabel HTML via perulangan `foreach`.

## Cara Menjalankan Aplikasi Lokal
1. Buka terminal di dalam folder proyek.
2. Jalankan perintah server bawaan PHP: `php -S localhost:8000`
3. Buka *browser* dan akses alamat: `http://localhost:8000/index.php`

---
**Dikembangkan oleh:**
* **Nama:** Ghufran Fadlurrahman
* **NIM:** 250180106
