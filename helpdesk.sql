-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2020 pada 06.36
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `kelamin_admin` enum('Laki-Laki','Perempuan') NOT NULL,
  `foto_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password_admin`, `kelamin_admin`, `foto_admin`) VALUES
(1, 'Fadila', 'rfadila@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'Perempuan', 'Fadila.png'),
(2, 'Loli', 'loli@gmail.com', 'a436d68acf4ebf5396c7065f3ce965', 'Perempuan', 'Loli.png'),
(3, 'Tris', 'tris@gmail.com', 'ab1e43491b5d1816ec0e077811f38a', 'Perempuan', 'default.jpg'),
(4, 'Aldila', 'aldila@gmail.com', 'd7c2b1995edcc6acd9e002cf7f8f2786', 'Laki-Laki', 'default.jpg'),
(5, 'Akil', 'akil@gmail.com', '91dada2eb887744f8bf4f04afa163416', 'Laki-Laki', 'default.jpg'),
(10, 'Ringga', 'ringga@gmail.com', '216850382e6feeb6a0ed96e2e6c61bc3', 'Laki-Laki', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `alamat_instansi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat_instansi`) VALUES
(6, 'Smpn 2 Probolinggo', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `id_teknisi` int(11) NOT NULL,
  `nama_teknisi` varchar(100) NOT NULL,
  `email_teknisi` varchar(100) NOT NULL,
  `password_teknisi` varchar(50) NOT NULL,
  `kelamin_teknisi` enum('Laki-laki','Perempuan') NOT NULL,
  `notelp_teknisi` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `no_ticket` varchar(100) NOT NULL,
  `judul_ticket` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` enum('Waiting','Proses','Finish') NOT NULL DEFAULT 'Waiting',
  `update_at` datetime NOT NULL,
  `balasan` text DEFAULT NULL,
  `tanggal_kerusakan` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `indikator` enum('Tunggu Admin','Hardware','Software','Human Error') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `no_ticket`, `judul_ticket`, `id_user`, `id_instansi`, `deskripsi`, `status`, `update_at`, `balasan`, `tanggal_kerusakan`, `tanggal_selesai`, `indikator`) VALUES
(17, '27571220200210', 'PC Lemot', 8, 6, '<p>pc error</p>\r\n', 'Finish', '2020-02-10 12:57:27', '<p>Waiting for reply</p>\r\n', '0000-00-00', '0000-00-00', 'Tunggu Admin'),
(18, '49201020200308', 'Saya Lapar', 8, 6, '<p>1</p>\r\n', 'Proses', '2020-03-08 10:20:49', '<p>sasasa</p>\r\n', '0000-00-00', '0000-00-00', 'Tunggu Admin'),
(19, '55281220200308', 'Pc Meledak', 8, 6, '<p>PC saya meledak</p>\r\n', 'Waiting', '2020-03-08 12:28:55', 'Waiting for reply', '2020-03-21', '0000-00-00', 'Tunggu Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `kelamin_user` enum('laki-laki','perempuan') NOT NULL,
  `notelp_user` varchar(30) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `id_instansi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `kelamin_user`, `notelp_user`, `email_user`, `password_user`, `id_instansi`) VALUES
(8, 'Arya Rudi', 'laki-laki', '083122939406', 'aryarudi@gmail.com', '19ec75f6f6306c0d87382b897e484d39', 6),
(9, 'Subhi Alay', 'laki-laki', '083122939406', 'subhialay@gmail.com', '1c448d033215b2f36712d35ff20ae78b', 6);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indeks untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indeks untuk tabel `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `FK_TICKET_USER` (`id_user`),
  ADD KEY `FK_TICKET_INSTANSI` (`id_instansi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_INSTANSI` (`id_instansi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id_teknisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_instansi`) REFERENCES `instansi` (`id_instansi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
