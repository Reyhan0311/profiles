-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 28 Bulan Mei 2024 pada 02.28
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `reyhan`
--

CREATE TABLE `reyhan` (
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reyhan`
--

INSERT INTO `reyhan` (`nama`, `intro`, `email`, `nomor_hp`) VALUES
('Reyhan Khidir', 'Nama saya Reyhan Khidir saya anak ke-2 dari 3 bersaudara saya lahir di kota Sukabumi tanggal 11 Maret 2003, Saya mempunyai hobi membaca novel dan kegiatan sehari hari saya kuliah dan mengikuti les bahasa jepang karena saya bercita cita ingin bekerja di negara jepang untuk membahagiakan ke 2 orang tua saya.', 'reyhankhidir256@gmail.com', '085846493948');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
