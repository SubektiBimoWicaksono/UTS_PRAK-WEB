-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2023 pada 10.33
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_subektibimowicaksono`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_donasi`
--

CREATE TABLE `data_donasi` (
  `id_donatur` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` char(10) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kategori_donasi` varchar(50) DEFAULT NULL,
  `tanggal_donasi` date DEFAULT NULL,
  `jumlah_donasi` int(50) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_donasi`
--

INSERT INTO `data_donasi` (`id_donatur`, `nama`, `jk`, `alamat`, `kategori_donasi`, `tanggal_donasi`, `jumlah_donasi`, `pesan`) VALUES
(121344, 'Wahyu', 'Laki-Laki', 'Mejayan', 'beasiswa dan pendidikan', '0000-00-00', 2147483647, 'Bismillah Membantu'),
(1213242, 'Wahyu Bagas', 'Laki-Laki', 'Wonoayu', 'beasiswa dan pendidikan', '2023-04-15', 2147483647, 'Sekolah yang pinter'),
(43535353, 'Muhammad Rafi', 'Laki-Laki', 'Sukoharjo', 'beasiswa dan pendidikan', '2023-04-12', 2147483647, 'Bismillah Mmembantu'),
(2147483647, 'Subekti Bimo W', 'Laki-Laki', 'Magetan', 'beasiswa dan pendidikan', '2023-04-15', 2147483647, 'Semoga berguna dan dapat membantu semuanya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_donasi`
--
ALTER TABLE `data_donasi`
  ADD PRIMARY KEY (`id_donatur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
