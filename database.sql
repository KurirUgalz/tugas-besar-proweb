CREATE DATABASE IF NOT EXISTS toko_online;
USE toko_online;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100),
    deskripsi TEXT,
    harga DECIMAL(10,2),
    gambar VARCHAR(255),
    kategori VARCHAR(50)
);