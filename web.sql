-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2020 pada 15.41
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` int(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `no_ktp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama_lengkap`, `username`, `alamat`, `telepon`, `password`, `no_ktp`) VALUES
(2, 'ulfah', 'ulfah', 'palengaan', 98765, '12345', '09876543'),
(3, 'mikamisba', 'mikaa', 'lanipa', 2147483647, 'misba', '9876543323324141551'),
(4, 'muflika rahmadani', 'likaaa', '', 0, 'misba12345', '9876543323324141551'),
(5, '', 'likaaa', '', 0, 'misba12345', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id` int(50) NOT NULL,
  `mobil` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id`, `mobil`, `kota`, `harga`) VALUES
(3, '8', '2', '600.000'),
(4, '9', '3', '450.000'),
(5, '10', '2', '550.000'),
(8, '15', '2', '700.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(50) NOT NULL,
  `merek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `merek`) VALUES
(1, 'Toyota'),
(2, 'Honda'),
(5, 'Suzuki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id` int(50) NOT NULL,
  `kota_asal` varchar(50) NOT NULL,
  `kota_tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id`, `kota_asal`, `kota_tujuan`) VALUES
(2, 'Yogyakarta', 'surabaya'),
(3, 'Yogyakarta', 'Tegal'),
(5, 'Yogyakarta', 'solo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `kursi` int(11) NOT NULL,
  `no_plat` varchar(50) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `merek`, `nama`, `tahun`, `warna`, `kursi`, `no_plat`, `gambar`) VALUES
(8, '2', 'Jazz', '2019', 'Kuning', 4, 'AB 9087 BI', 'jazz.jpg'),
(9, '1', 'Avanza', '2020', 'Merah', 6, 'AB 6453 TS', 'avanzamerah.jpg'),
(10, '5', 'Ertiga', '2010', 'Coklat', 6, 'AB 9012 FG', 'suzuki.jpg'),
(15, '1', 'Alphard', '2019', 'Hitam', 6, 'AB 0981 EF', 'alpad.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(50) NOT NULL,
  `nobooking` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_mobil` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id`, `nobooking`, `tgl_pinjam`, `tgl_kembali`, `id_mobil`, `user_id`, `harga`, `asal`, `tujuan`, `status`) VALUES
(26, 'NKB7FU0T4O', '2020-04-01', '2020-04-03', 5, 2, '500.000', 'Yogyakarta', 'surabaya', 1),
(27, '9QPR8I0JK6', '2020-04-02', '2020-04-08', 8, 2, '800.000', 'Yogyakarta', 'surabaya', 1),
(28, 'OQG81S0R7K', '2020-04-05', '2020-04-09', 3, 2, '600.000', 'Yogyakarta', 'Tegal', 1),
(29, 'GS9BHFP80B', '2020-04-10', '2020-04-13', 8, 2, '800.000', 'Yogyakarta', 'solo', 1),
(30, 'UKH34CSEG9', '2020-04-03', '2020-04-05', 8, 3, '600.000', 'Yogyakarta', 'surabaya', 1),
(31, '4G45638UU7', '2020-04-17', '2020-04-13', 9, 3, '450.000', 'Yogyakarta', 'Tegal', 1),
(32, 'UCB8PLHCRQ', '2020-04-03', '2020-04-13', 9, 3, '450.000', 'Yogyakarta', 'Tegal', 1),
(33, '317B0HF965', '2020-04-03', '2020-04-05', 8, 3, '600.000', 'Yogyakarta', 'surabaya', 1),
(34, 'TT6AREE2D8', '2020-04-10', '2020-04-22', 15, 3, '700.000', 'Yogyakarta', 'surabaya', 1),
(35, 'M7TE0HR5T6', '2020-04-03', '2020-04-05', 8, 4, '600.000', 'Yogyakarta', 'surabaya', 1),
(36, 'SUODIHDDGQ', '2020-04-15', '2020-04-17', 8, 4, '600.000', 'Yogyakarta', 'surabaya', 1),
(37, 'QD49NG3A4Q', '2020-04-17', '2020-04-22', 15, 4, '700.000', 'Yogyakarta', 'surabaya', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
