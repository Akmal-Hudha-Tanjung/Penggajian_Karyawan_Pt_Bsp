-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2022 pada 07.47
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penggajian_karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_gaji`
--

CREATE TABLE `tb_data_gaji` (
  `no_gaji` int(5) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `gaji_pokok` varchar(50) NOT NULL,
  `tj_transport` varchar(50) NOT NULL,
  `uang_makan` varchar(50) NOT NULL,
  `total_gaji` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal_gaji` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_gaji`
--

INSERT INTO `tb_data_gaji` (`no_gaji`, `nama_karyawan`, `jabatan`, `gaji_pokok`, `tj_transport`, `uang_makan`, `total_gaji`, `foto`, `tanggal_gaji`) VALUES
(6, 'Akmal Hudha Tanjung', 'karyawan', '2000000', '300000', '200000', '2500000', 'bukti transfer.jpg', '2022-01-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_karyawan`
--

CREATE TABLE `tb_data_karyawan` (
  `no_karyawan` int(5) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_karyawan`
--

INSERT INTO `tb_data_karyawan` (`no_karyawan`, `nik`, `nama_karyawan`, `alamat`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `no_hp`, `pendidikan`, `profil`) VALUES
(15, '123456', 'Akmal Hudha Tanjung', 'Kisaran', 'Laki - Laki', '2000-02-11', 'Tanjung Balai', '0895626732196', 'SMA', 'Akmal Hudha Tanjung.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', 'admin', 'admin@gmail.com', 'admin', 1, 'admin'),
('akmal', '12345', 'akmal@gmail.com', 'Akmal Hudha Tanjung', 2, 'Karyawan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_data_gaji`
--
ALTER TABLE `tb_data_gaji`
  ADD PRIMARY KEY (`no_gaji`),
  ADD KEY `nama_karyawan` (`nama_karyawan`),
  ADD KEY `total_gaji` (`total_gaji`);

--
-- Indeks untuk tabel `tb_data_karyawan`
--
ALTER TABLE `tb_data_karyawan`
  ADD PRIMARY KEY (`no_karyawan`),
  ADD KEY `nama_karyawan` (`nama_karyawan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_data_gaji`
--
ALTER TABLE `tb_data_gaji`
  MODIFY `no_gaji` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_data_karyawan`
--
ALTER TABLE `tb_data_karyawan`
  MODIFY `no_karyawan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_data_gaji`
--
ALTER TABLE `tb_data_gaji`
  ADD CONSTRAINT `tb_data_gaji_ibfk_1` FOREIGN KEY (`nama_karyawan`) REFERENCES `tb_data_karyawan` (`nama_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
