-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2021 pada 18.57
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_barang_masuk` int(11) NOT NULL,
  `id_barang` int(191) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `qty` int(191) NOT NULL,
  `tanggal_kadaluwarsa` date NOT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` int(191) DEFAULT NULL,
  `modify_date` date DEFAULT NULL,
  `modify_by` int(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_barang_masuk`, `id_barang`, `tanggal_masuk`, `qty`, `tanggal_kadaluwarsa`, `created_date`, `created_by`, `modify_date`, `modify_by`) VALUES
(1, 3, '2021-05-18', 12, '2021-05-31', '2021-05-18', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_barang`
--

CREATE TABLE `stok_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(191) NOT NULL,
  `nama_barang` varchar(191) NOT NULL,
  `kategori` varchar(191) NOT NULL,
  `qty` int(191) NOT NULL,
  `satuan` enum('strip','botol','tablet') NOT NULL,
  `created_by` varchar(191) DEFAULT NULL,
  `modify_by` varchar(191) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `modify_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_barang`
--

INSERT INTO `stok_barang` (`id_barang`, `kode_barang`, `nama_barang`, `kategori`, `qty`, `satuan`, `created_by`, `modify_by`, `created_date`, `modify_date`) VALUES
(3, 'KB1', 'obat', 'keras', 12, 'strip', '1', NULL, '2021-05-18', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role` enum('admin_gudang','manager') NOT NULL,
  `namaLengkap` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `created_date` date DEFAULT NULL,
  `modify_date` date DEFAULT NULL,
  `created_by` varchar(191) DEFAULT NULL,
  `modify_by` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `namaLengkap`, `email`, `created_date`, `modify_date`, `created_by`, `modify_by`) VALUES
(1, 'admin', '$2y$10$wpUawWt8eCOmOyKwPe38HOqDMx5x5ab3RamNvO5JRYYcRPARVPWGC', 'admin_gudang', 'M. Bagas Setia', 'setiapermanabagas@gmail.com', '2021-05-18', '2021-05-18', '1', '1'),
(3, 'bagassetia', '$2y$10$qtEFCi3tiOFERjOKTtkUS.6tGZbizQ1TuBweyUVfDTC6kR6S8ZsB.', 'admin_gudang', 'M. Bagas Setia Permana', 'bagassetia271@gmail.com', '2021-05-18', NULL, '1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indeks untuk tabel `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `stok_barang`
--
ALTER TABLE `stok_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
