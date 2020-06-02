-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 14.10
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_naivebayes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_training`
--

CREATE TABLE `tbl_training` (
  `id_training` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pkh` varchar(10) NOT NULL,
  `jml_tanggungan` int(10) NOT NULL,
  `kepala_rt` varchar(20) NOT NULL,
  `kondisi_rumah` varchar(50) NOT NULL,
  `jml_penghasilan` varchar(10) NOT NULL,
  `status_rumah` varchar(20) NOT NULL,
  `status_kelayakan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_training`
--

INSERT INTO `tbl_training` (`id_training`, `nama`, `pkh`, `jml_tanggungan`, `kepala_rt`, `kondisi_rumah`, `jml_penghasilan`, `status_rumah`, `status_kelayakan`) VALUES
(1, 'Watiem', 'non', 1, 'perempuan', 'batu permanen', '1000000', 'milik sendiri', 'layak'),
(2, 'Tugimin', 'non', 4, 'Laki-laki', 'bambu anyam', '1600000', 'milik Sendiri', 'layak'),
(3, 'Samino', 'non', 3, 'Laki-laki', 'batu permanen', '3000000', 'milik Sendiri', 'tidak Layak'),
(4, 'Mesman K', 'non', 2, 'laki-laki', 'batu permanen', '1600000', 'milik Sendiri', 'tidak Layak'),
(5, 'Arianto', '1', 2, 'laki-laki', 'papan', '1000000', 'milik sendiri', 'layak'),
(6, 'Asani', 'non', 3, 'laki-laki', 'batu permanen', '1600000', 'milik sendiri', 'tidak layak'),
(7, 'Sumiyadi', 'non', 3, 'laki-laki', 'bambu anyam', '1000000', 'milik sendiri', 'layak'),
(8, 'Ponidi', '1', 5, 'laki-laki', 'bambu anyam', '1600000', 'milik sendiri', 'layak'),
(9, 'Jabar Damanik', '1', 9, 'laki-laki', 'batu permanen', '1600000', 'milik sendiri', 'layak'),
(10, 'Safruddin', 'non', 4, 'laki-laki', 'batu permanen', '3000000', 'milik sendiri', 'tidak layak'),
(11, 'Boniem', 'non', 1, 'perempuan', 'batu permanen', '1000000', 'milik sendiri', 'layak'),
(12, 'Ponimen B', 'non', 0, 'laki-laki', 'batu permanen', '1000000', 'sewa', 'layak'),
(13, 'Nuriatik', 'non', 1, 'perempuan', 'batu permanen', '1000000', 'milik sendiri', 'layak'),
(14, 'Sadam Husein', 'non', 2, 'laki-laki', 'batu permanen', '3000000', 'milik sendiri', 'Tidak layak'),
(15, 'Siti', 'non', 2, 'perempuan', 'batu permanen', '3000000', 'milik sendiri', 'Tidak layak'),
(16, 'Suroso', 'non', 2, 'laki-laki', 'batu permanen', '1600000', 'milik sendiri', 'layak'),
(17, 'Mesdi', 'non', 1, 'laki-laki', 'papan', '1000000', 'milik sendiri', 'layak'),
(18, 'Mulyadi', 'non', 3, 'laki-laki', 'batu permanen', '1000000', 'sewa', 'layak'),
(19986, 'Jafar', 'non', 2, 'laki-laki', 'batu permanen', '1000000', 'milik sendiri', 'Tidak layak');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_training`
--
ALTER TABLE `tbl_training`
  ADD PRIMARY KEY (`id_training`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_training`
--
ALTER TABLE `tbl_training`
  MODIFY `id_training` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
