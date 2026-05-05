-- Buat database jika belum ada
CREATE DATABASE IF NOT EXISTS uts_perpustakaan_60324015;

USE uts_perpustakaan_60324015;

-- Buat tabel kategori
CREATE TABLE IF NOT EXISTS kategori (
    id_kategori INT AUTO_INCREMENT PRIMARY KEY,
    kode_kategori VARCHAR(10) NOT NULL UNIQUE,
    nama_kategori VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    status ENUM('Aktif', 'Nonaktif') DEFAULT 'Aktif',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert data contoh
INSERT INTO kategori (kode_kategori, nama_kategori, deskripsi, status) VALUES
('FIK', 'Fiksi', 'Kategori untuk buku fiksi', 'Aktif'),
('NON', 'Non-Fiksi', 'Kategori untuk buku non-fiksi', 'Aktif'),
('EDU', 'Pendidikan', 'Buku pendidikan', 'Aktif');
