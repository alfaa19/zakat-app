-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2022 pada 15.36
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakatfitrah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar_zakat`
--

CREATE TABLE `bayar_zakat` (
  `id_zakat` int(11) NOT NULL,
  `nama_kk` varchar(50) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL,
  `jenis_bayar` varchar(20) NOT NULL,
  `jumlah_tanggunganyangdibayar` int(11) NOT NULL,
  `bayar_beras` decimal(10,1) NOT NULL,
  `bayar_uang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bayar_zakat`
--

INSERT INTO `bayar_zakat` (`id_zakat`, `nama_kk`, `jumlah_tanggungan`, `jenis_bayar`, `jumlah_tanggunganyangdibayar`, `bayar_beras`, `bayar_uang`) VALUES
(1, 'Yayat Ruhiyat', 5, 'Beras', 5, '12.5', 0),
(2, 'Winarti', 1, 'Beras', 1, '2.5', 0),
(3, 'Agus', 6, 'Uang', 6, '0.0', 180000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `distribusi_warga`
--

CREATE TABLE `distribusi_warga` (
  `id_distribusi_warga` int(11) NOT NULL,
  `nama_muzakki` varchar(30) NOT NULL,
  `jumlah_tanggungan` int(2) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `distribusi_warga`
--

INSERT INTO `distribusi_warga` (`id_distribusi_warga`, `nama_muzakki`, `jumlah_tanggungan`, `keterangan`) VALUES
(2, 'Dudung', 7, 'Warga Tetap'),
(3, 'Toni', 2, 'Warga Tetap'),
(4, 'Winarti', 1, 'Warga Kontrakan'),
(6, 'Ajang', 4, 'Warga Kontrakan'),
(7, 'Santi', 1, 'Warga Kontrakan'),
(8, 'Siti', 2, 'Warga Tetap'),
(9, 'Sanjaya', 4, 'Warga Kontrakan'),
(10, 'Ita', 3, 'Warga Tetap'),
(11, 'Agus', 6, 'Warga Tetap'),
(12, 'Aep', 7, 'Warga Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_mustahik`
--

CREATE TABLE `kategori_mustahik` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `jumlah_hak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_mustahik`
--

INSERT INTO `kategori_mustahik` (`id_kategori`, `nama_kategori`, `jumlah_hak`) VALUES
(1, 'Amil', 10),
(2, 'Fakir I', 21),
(3, 'Fakir II', 16),
(4, 'Miskin I', 8),
(5, 'Miskin II', 6),
(6, 'Fisabilillah (Ustad)', 3),
(7, 'Fisabilillah (Santri)', 3),
(8, 'Mampu', 4),
(10, 'Mualaf', 4),
(11, 'Ibnu Sabil', 4),
(12, 'Lainnya', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mustahik_lainnya`
--

CREATE TABLE `mustahik_lainnya` (
  `id_mustahiklainnya` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mustahik_lainnya`
--

INSERT INTO `mustahik_lainnya` (`id_mustahiklainnya`, `nama`, `id_kategori`) VALUES
(1, 'Yani', 10),
(3, 'Faridah Hanifah ', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mustahik_warga`
--

CREATE TABLE `mustahik_warga` (
  `id_mustahikwarga` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mustahik_warga`
--

INSERT INTO `mustahik_warga` (`id_mustahikwarga`, `nama`, `id_kategori`) VALUES
(1, 'Yayat Ruhiyat', 3),
(2, 'Ati Suryati', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `muzakki`
--

CREATE TABLE `muzakki` (
  `id_muzakki` int(11) NOT NULL,
  `nama_muzakki` varchar(30) NOT NULL,
  `jumlah_tanggungan` int(2) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `muzakki`
--

INSERT INTO `muzakki` (`id_muzakki`, `nama_muzakki`, `jumlah_tanggungan`, `keterangan`) VALUES
(1, 'Yayat Ruhiyat', 5, 'Warga Tetap'),
(2, 'Dudung', 7, 'Warga Tetap'),
(3, 'Toni', 2, 'Warga Tetap'),
(4, 'Winarti', 1, 'Warga Kontrakan'),
(5, 'Ati Suryati', 2, 'Warga Tetap'),
(6, 'Ajang', 4, 'Warga Kontrakan'),
(7, 'Santi', 1, 'Warga Kontrakan'),
(8, 'Siti', 2, 'Warga Tetap'),
(9, 'Sanjaya', 4, 'Warga Kontrakan'),
(10, 'Ita', 3, 'Warga Tetap'),
(11, 'Agus', 6, 'Warga Tetap'),
(12, 'Aep', 7, 'Warga Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_muzakki`
--

CREATE TABLE `pembayaran_muzakki` (
  `id_pembayaran_muzakki` int(11) NOT NULL,
  `nama_muzakki` varchar(30) NOT NULL,
  `jumlah_tanggungan` int(2) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran_muzakki`
--

INSERT INTO `pembayaran_muzakki` (`id_pembayaran_muzakki`, `nama_muzakki`, `jumlah_tanggungan`, `keterangan`) VALUES
(2, 'Dudung', 7, 'Warga Tetap'),
(3, 'Toni', 2, 'Warga Tetap'),
(5, 'Ati Suryati', 2, 'Warga Tetap'),
(6, 'Ajang', 4, 'Warga Kontrakan'),
(7, 'Santi', 1, 'Warga Kontrakan'),
(8, 'Siti', 2, 'Warga Tetap'),
(9, 'Sanjaya', 4, 'Warga Kontrakan'),
(10, 'Ita', 3, 'Warga Tetap'),
(12, 'Aep', 7, 'Warga Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `no_hp`, `alamat`, `username`, `password`, `hak_akses`) VALUES
(1, 'Faridah Hanifah', '085321764076', 'Tasikmalaya', 'hanifah02', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(5, 'Muhammad Haikal Purnama', '085432675348', 'Tasikmalaya', 'haikal09', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bayar_zakat`
--
ALTER TABLE `bayar_zakat`
  ADD PRIMARY KEY (`id_zakat`);

--
-- Indeks untuk tabel `distribusi_warga`
--
ALTER TABLE `distribusi_warga`
  ADD PRIMARY KEY (`id_distribusi_warga`);

--
-- Indeks untuk tabel `kategori_mustahik`
--
ALTER TABLE `kategori_mustahik`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `mustahik_lainnya`
--
ALTER TABLE `mustahik_lainnya`
  ADD PRIMARY KEY (`id_mustahiklainnya`);

--
-- Indeks untuk tabel `mustahik_warga`
--
ALTER TABLE `mustahik_warga`
  ADD PRIMARY KEY (`id_mustahikwarga`);

--
-- Indeks untuk tabel `muzakki`
--
ALTER TABLE `muzakki`
  ADD PRIMARY KEY (`id_muzakki`);

--
-- Indeks untuk tabel `pembayaran_muzakki`
--
ALTER TABLE `pembayaran_muzakki`
  ADD PRIMARY KEY (`id_pembayaran_muzakki`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bayar_zakat`
--
ALTER TABLE `bayar_zakat`
  MODIFY `id_zakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `distribusi_warga`
--
ALTER TABLE `distribusi_warga`
  MODIFY `id_distribusi_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kategori_mustahik`
--
ALTER TABLE `kategori_mustahik`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `mustahik_lainnya`
--
ALTER TABLE `mustahik_lainnya`
  MODIFY `id_mustahiklainnya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mustahik_warga`
--
ALTER TABLE `mustahik_warga`
  MODIFY `id_mustahikwarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `muzakki`
--
ALTER TABLE `muzakki`
  MODIFY `id_muzakki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_muzakki`
--
ALTER TABLE `pembayaran_muzakki`
  MODIFY `id_pembayaran_muzakki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
