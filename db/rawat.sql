-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2021 pada 18.48
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(11) NOT NULL,
  `nm_lengkap` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `foto` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `nm_lengkap`, `password`, `foto`) VALUES
('aswar12', 'aswar', 'aswar12', 'aswar.jpg'),
('fatimah1', 'fatimah', '123456', 'fatimah.png'),
('firman46', 'firmansyah', 'firman46', 'firman.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `asuransi`
--

CREATE TABLE `asuransi` (
  `nama_asuransi` varchar(11) NOT NULL,
  `potongan` double(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `asuransi`
--

INSERT INTO `asuransi` (`nama_asuransi`, `potongan`) VALUES
('BPJS', 500.000),
('JAMKESMAS', 300.000),
('REGULER', 0.000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `penyakit` varchar(11) NOT NULL,
  `tindakan` varchar(20) NOT NULL,
  `id_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`id_diagnosa`, `id_pasien`, `diagnosa`, `penyakit`, `tindakan`, `id_kamar`) VALUES
(1, 1, 'penyakit jantung', 'jantung', 'operasi', 1),
(9, 5, 'hati', 'iri', 'operasi', 3),
(13, 6, 'hati', 'iri', 'operasi', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `username` varchar(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(11) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `spesialis` varchar(11) NOT NULL,
  `kontak` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`username`, `nama_lengkap`, `alamat`, `password`, `foto`, `spesialis`, `kontak`) VALUES
('fatimah1', 'Fatimah ', 'Jl. dirumah', '12345', 'fatimah.png', 'jantung', '813334455'),
('chesa', 'chesaaaaaaa', 'jl. pankepda', '2222', 'chesa.jpg', 'hati wanita', '0822312121'),
('whidy', 'Whidy Dwiya', 'jl. Perumnas Antang', '2012', 'whidy.jpeg', 'hati', '082212345678'),
('chairunnisa', 'chairunnisa', 'jl. paccerakkang', '2222', 'chairunnisa.jpeg', 'gigi', '029283393993'),
('indrawati', 'Indrawatiku', 'jl. paccerang', '2323', 'indrawati.jpeg', 'otak-otak', '09399393823'),
('aswar12', 'Aswar Sumarlin', 'jl. Pangkep', '12345', 'aswar.jpg', 'Kaki', '089999999999');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(11) NOT NULL,
  `tipe_kamar` enum('VVIP','VIP','Reguler') NOT NULL DEFAULT 'VIP',
  `harga` double(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `tipe_kamar`, `harga`) VALUES
(1, 'mawar', 'VVIP', 500.000),
(2, 'melati', 'VIP', 400.000),
(3, 'raflesia', 'Reguler', 100.000),
(4, 'Kembang', 'Reguler', 90.000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL DEFAULT 'Pria',
  `pekerjaan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tlpn` varchar(20) NOT NULL,
  `ttlahir` date NOT NULL,
  `tgl_daftar` date NOT NULL DEFAULT current_timestamp(),
  `no_rekam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `alamat`, `jenis_kelamin`, `pekerjaan`, `status`, `agama`, `tlpn`, `ttlahir`, `tgl_daftar`, `no_rekam`) VALUES
(1, 'firman', 'jl. paccerakkang', 'Pria', 'mahasiswa', 'belum nikah', 'islam', '0813-444-555-77', '1998-07-07', '2021-03-30', '00-00-01'),
(5, 'aswar', 'jl. pankep', 'Pria', 'mahasiswa', 'belum nikah', 'islam', '8665745443', '2000-01-12', '2021-04-03', '00-00-03'),
(6, 'Fatimah', 'jl. Pangkep', 'Wanita', 'IRT', 'Nikah', 'Islam', '0888881', '2020-07-06', '2021-04-06', '00-00-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_diagnosa` int(11) NOT NULL,
  `tgl_keluar` date NOT NULL DEFAULT current_timestamp(),
  `biaya_tindakan` double(10,3) NOT NULL,
  `nama_asuransi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_diagnosa`, `tgl_keluar`, `biaya_tindakan`, `nama_asuransi`) VALUES
(1, 1, '2021-04-03', 500.000, 'BPJS'),
(3, 13, '0000-00-00', 900.000, 'JAMKESMAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `total`
--

CREATE TABLE `total` (
  `id_total` int(11) NOT NULL,
  `id_diagnosa` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `asuransi`
--
ALTER TABLE `asuransi`
  ADD PRIMARY KEY (`nama_asuransi`);

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_pasien` (`id_pasien`,`id_kamar`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_diagnosa` (`id_diagnosa`),
  ADD KEY `nama_asuransi` (`nama_asuransi`);

--
-- Indeks untuk tabel `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id_total`),
  ADD KEY `id_diagnosa` (`id_diagnosa`,`id_pembayaran`),
  ADD KEY `id_pembayaran` (`id_pembayaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `diagnosa_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `diagnosa_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_diagnosa`) REFERENCES `diagnosa` (`id_diagnosa`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`nama_asuransi`) REFERENCES `asuransi` (`nama_asuransi`);

--
-- Ketidakleluasaan untuk tabel `total`
--
ALTER TABLE `total`
  ADD CONSTRAINT `total_ibfk_1` FOREIGN KEY (`id_diagnosa`) REFERENCES `diagnosa` (`id_diagnosa`),
  ADD CONSTRAINT `total_ibfk_2` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
