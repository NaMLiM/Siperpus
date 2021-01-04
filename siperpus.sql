-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2021 pada 13.51
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `NAMA_ADMIN` varchar(1024) DEFAULT NULL,
  `USERNAME` varchar(1024) DEFAULT NULL,
  `PASSWORD` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NAMA_ADMIN`, `USERNAME`, `PASSWORD`) VALUES
(1, 'Nafiul Anam', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `ID_ANGGOTA` bigint(16) NOT NULL,
  `NAMA_ANGGOTA` varchar(1024) DEFAULT NULL,
  `NOHP_ANGGOTA` varchar(1024) DEFAULT NULL,
  `USERNAME_ANGGOTA` varchar(1024) DEFAULT NULL,
  `PASSWORD_ANGGOTA` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`ID_ANGGOTA`, `NAMA_ANGGOTA`, `NOHP_ANGGOTA`, `USERNAME_ANGGOTA`, `PASSWORD_ANGGOTA`) VALUES
(1, 'Nafiul Anam', '082337604942', 'namlim', 'yeet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ID_BUKU` int(11) NOT NULL,
  `NAMA_BUKU` varchar(1024) DEFAULT NULL,
  `PENULIS_BUKU` varchar(1024) DEFAULT NULL,
  `STOK_BUKU` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`ID_BUKU`, `NAMA_BUKU`, `PENULIS_BUKU`, `STOK_BUKU`) VALUES
(1, 'Harry Potter', 'J.K. Rowling', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `ID_PEMINJAMAN` int(11) NOT NULL,
  `ID_BUKU` int(11) DEFAULT NULL,
  `ID_ANGGOTA` bigint(16) DEFAULT NULL,
  `WAKTU_PEMINJAMAN` date DEFAULT NULL,
  `BATAS_PENGEMBALIAN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`ID_ANGGOTA`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ID_BUKU`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`ID_PEMINJAMAN`),
  ADD KEY `FK_PEMINJAM_RELATIONS_BUKU` (`ID_BUKU`),
  ADD KEY `FK_PEMINJAM_RELATIONS_ANGGOTA` (`ID_ANGGOTA`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `ID_PEMINJAMAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `FK_PEMINJAM_RELATIONS_BUKU` FOREIGN KEY (`ID_BUKU`) REFERENCES `buku` (`ID_BUKU`),
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`ID_ANGGOTA`) REFERENCES `anggota` (`ID_ANGGOTA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
