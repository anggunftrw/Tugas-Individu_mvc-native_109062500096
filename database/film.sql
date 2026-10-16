CREATE DATABASE IF NOT EXISTS film
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE film;

CREATE TABLE IF NOT EXISTS film (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(150) NOT NULL,
    genre VARCHAR(50) NOT NULL,
    tahun_rilis INT NOT NULL,
    sutradara VARCHAR(100) NOT NULL,
    durasi INT NOT NULL,
    rating DECIMAL(3,1) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO film (judul, genre, tahun_rilis, sutradara, durasi, rating) VALUES
('Laskar Pelangi', 'Drama', 2008, 'Riri Riza', 120, 8.1),
('Pengabdi Setan', 'Horror', 2017, 'Joko Anwar', 107, 7.2),
('Dilan 1990', 'Romance', 2018, 'Fajar Bustomi', 110, 7.5);