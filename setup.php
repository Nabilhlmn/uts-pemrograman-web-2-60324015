<?php
require_once 'config/database.php';

// Buat tabel jika belum ada
$sql = "CREATE TABLE IF NOT EXISTS kategori (
    id_kategori INT AUTO_INCREMENT PRIMARY KEY,
    kode_kategori VARCHAR(10) NOT NULL UNIQUE,
    nama_kategori VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    status ENUM('Aktif', 'Nonaktif') DEFAULT 'Aktif',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel kategori berhasil dibuat atau sudah ada.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert data contoh jika tabel kosong
$result = $conn->query("SELECT COUNT(*) as count FROM kategori");
$row = $result->fetch_assoc();
if ($row['count'] == 0) {
    $insert_sql = "INSERT INTO kategori (kode_kategori, nama_kategori, deskripsi, status) VALUES
    ('FIK', 'Fiksi', 'Kategori untuk buku fiksi', 'Aktif'),
    ('NON', 'Non-Fiksi', 'Kategori untuk buku non-fiksi', 'Aktif'),
    ('EDU', 'Pendidikan', 'Buku pendidikan', 'Aktif')";
    
    if ($conn->query($insert_sql) === TRUE) {
        echo "Data contoh berhasil ditambahkan.<br>";
    } else {
        echo "Error inserting data: " . $conn->error . "<br>";
    }
} else {
    echo "Data sudah ada di tabel.<br>";
}

$conn->close();
echo "Setup selesai. <a href='index.php'>Ke halaman utama</a>";
?>