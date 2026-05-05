*Nama : Muhammad Nbail Hilman*

*NIM  : 60324015*

Sistem Manajemen Kategori Buku 
Aplikasi web berbasis PHP yang memungkinkan pengelolaan kategori buku perpustakaan dengan fitur CRUD (Create, Read, Update, Delete).

*Fitur Utama:*

1. Tampilkan Daftar: Menampilkan semua kategori dalam tabel dengan status badge (hijau untuk Aktif, merah untuk Nonaktif)
2. Tambah Kategori: Form untuk menambah kategori baru dengan validasi (kode unik, nama wajib, max 255 karakter deskripsi)
3. Edit Kategori: Mengubah data kategori existing
4. Hapus Kategori: Menghapus kategori dengan konfirmasi JavaScript

*Cara instalasi dan menjalankan sistem*
Setup sistem
- XAMPP
- Browser
- internet (untuk cdn Bootstrap)

Cara instalasi
1. Letakan file aplikasi di C:\xampp\htdocs\web_uts\
2. Buka file `config/database.php` dan sesuaikan dengan data Anda:
```php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');  // Default XAMPP
define('DB_NAME', 'uts_perpustakaan_[NIM]');  // Ganti [NIM] dengan NIM Anda

Cara menjalankan
1. Pastikan XAMPP (Apache dan MySQL) sedang berjalan.
2. Akses http://localhost/web_uts/index.php untuk melihat daftar kategori.
3. Gunakan tombol "Tambah Kategori" untuk menambah data baru.
4. Tombol pensil untuk "edit" data kategori buku
5. Tombol sampah untuk "menghapus" kategori buku

*Struktur File*
├── config/
│   └── database.php
├── index.php
├── create.php
├── edit.php
├── delete.php
├── uts_perpustakaan_60324015.sql
└── README.md



Link Repository : https://github.com/Nabilhlmn/uts-pemrograman-web-2-60324015

