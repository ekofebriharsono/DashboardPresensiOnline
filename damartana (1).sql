-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 02 Mei 2020 pada 00.28
-- Versi Server: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.2.15-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `damartana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barcode_damartana`
--

CREATE TABLE `barcode_damartana` (
  `id_barcode` int(11) NOT NULL,
  `lat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `long` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lokasi` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `barcode_damartana`
--

INSERT INTO `barcode_damartana` (`id_barcode`, `lat`, `long`, `lokasi`) VALUES
(1, '-7.268185', '112.666288', 'Terminal'),
(2, '-7.448216', '112.225227', 'Jauh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif_user_damartana`
--

CREATE TABLE `notif_user_damartana` (
  `id_notif` int(11) NOT NULL,
  `nip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `waktu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `presensi_tanggal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pesan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `notif_user_damartana`
--

INSERT INTO `notif_user_damartana` (`id_notif`, `nip`, `waktu`, `tanggal`, `presensi_tanggal`, `pesan`) VALUES
(3, '11111111', '19:51:16', '2019-04-15', '2019-04-15', 'Presensi anda diterima!'),
(4, '11111111', '00:43:17', '2019-04-16', '2019-04-15', 'Presensi anda ditolak!'),
(5, '11111111', '00:48:30', '2019-04-16', '2019-04-16', 'Presensi anda diterima!'),
(6, '11111111', '00:54:27', '2019-04-16', '2019-04-16', 'Presensi anda diterima!'),
(7, '11111111', '00:56:01', '2019-04-16', '2019-04-16', 'Presensi anda diterima!'),
(8, '0101', '00:58:40', '2019-04-16', '2019-04-16', 'Presensi anda diterima!'),
(9, '0101', '00:59:26', '2019-04-16', '2019-04-16', 'Presensi anda diterima!'),
(10, '11111111', '01:04:36', '2019-04-16', '2019-04-16', 'Presensi anda diterima!'),
(11, '0101', '23:04:08', '2019-04-16', '2019-04-16', 'Presensi anda diterima!'),
(12, '200283', '03:28:38', '2019-04-21', '2019-04-21', 'Presensi anda diterima!'),
(13, '200283', '23:49:25', '2019-04-30', '2019-04-30', 'Presensi anda diterima!'),
(14, '11111111', '10:06:51', '2019-05-13', '2019-05-04', 'Presensi anda diterima!'),
(15, '040506', '15:55:40', '2019-06-15', '2019-06-15', 'Presensi anda ditolak!'),
(16, '040506', '15:58:03', '2019-06-15', '2019-06-15', 'Presensi anda diterima!'),
(17, '040506', '17:00:18', '2019-06-15', '2019-06-15', 'Presensi anda ditolak!'),
(18, '040506', '21:28:22', '2019-06-26', '2019-05-14', 'Presensi anda diterima!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id_pendapatan` int(11) NOT NULL,
  `tgl_pendapatan` date NOT NULL,
  `pend_total` bigint(100) NOT NULL,
  `pend_bersih` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendapatan`
--

INSERT INTO `pendapatan` (`id_pendapatan`, `tgl_pendapatan`, `pend_total`, `pend_bersih`) VALUES
(1, '2019-07-05', 547442000, 705273000),
(2, '2019-07-06', 521329500, 524584000),
(3, '2019-07-07', 616154000, 618299600),
(4, '2019-07-08', 615850516, 614915516),
(5, '2019-07-09', 557457004, 556888004),
(6, '2019-07-10', 559873000, 558791000),
(7, '2019-07-11', 547914000, 549152000),
(8, '2019-07-12', 543865000, 543264500),
(9, '2019-07-13', 516305500, 515100500),
(10, '2019-07-14', 581676000, 568655020),
(11, '2019-07-15', 545115000, 544176000),
(12, '2019-07-16', 481062500, 479144500),
(13, '2019-07-17', 479342000, 471726500),
(14, '2019-07-18', 492023000, 491335000),
(15, '2019-07-19', 505080000, 503781500),
(16, '2019-07-20', 495127000, 497080000),
(17, '2019-07-21', 590811500, 590222000),
(18, '2019-07-22', 551396000, 543897000),
(19, '2019-07-23', 462534500, 461720500),
(20, '2019-07-24', 466160500, 464981000),
(21, '2019-07-25', 481483000, 479568500),
(22, '2019-07-26', 493779000, 491652000),
(23, '2019-07-27', 481335500, 440880500),
(24, '2019-07-28', 567928000, 569473000),
(25, '2019-07-29', 548684500, 547240983),
(26, '2019-07-30', 463366519, 461611519),
(27, '2019-07-31', 467205000, 466622600),
(28, '2019-08-01', 486852503, 498518200),
(29, '2019-08-02', 501106000, 519372240),
(30, '2019-08-03', 350962000, 384257700);

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `shift` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `waktu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lokasi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `barcode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link_foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hadir` int(11) NOT NULL,
  `pulang` int(11) NOT NULL,
  `imei` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_pulang` varchar(100) COLLATE utf8_unicode_ci DEFAULT '-',
  `waktu_pulang` varchar(100) COLLATE utf8_unicode_ci DEFAULT '-',
  `lokasi_pulang` varchar(500) COLLATE utf8_unicode_ci DEFAULT '-',
  `barcode_pulang` varchar(100) COLLATE utf8_unicode_ci DEFAULT '-',
  `link_foto_pulang` varchar(100) COLLATE utf8_unicode_ci DEFAULT '-',
  `hadir_luar_kota` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-',
  `pulang_luar_kota` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `id_user`, `shift`, `tanggal`, `waktu`, `lokasi`, `barcode`, `link_foto`, `hadir`, `pulang`, `imei`, `tanggal_pulang`, `waktu_pulang`, `lokasi_pulang`, `barcode_pulang`, `link_foto_pulang`, `hadir_luar_kota`, `pulang_luar_kota`) VALUES
(87, 32, 'Shift 1', '2019-04-30', '23:57:39', 'Jl. Raya Candi Lontar No.23, Lontar, Sambikerep, Kota SBY, Jawa Timur 60185, Indonesia', '1', 'https://maseko.000webhostapp.com/reska/uploads/1556643473003.jpg', 1, 1, '868417038358724', '2019-04-30', '23:59:48', 'Jl. Raya Candi Lontar No.23, Lontar, Sambikerep, Kota SBY, Jawa Timur 60185, Indonesia', '1', 'https://maseko.000webhostapp.com/reska/uploads/1556643605075.jpg', '-', '-'),
(89, 50, 'Non-Shift', '2019-05-07', '16:19:52', 'Jl. Babat No.8a, Gundih, Bubutan, Kota SBY, Jawa Timur 60174, Indonesia', '-', 'https://maseko.000webhostapp.com/reska/uploads/1557220813279.jpg', 1, 0, '868131031464401', '-', '-', '-', '-', '-', '0', '-'),
(90, 51, 'Non-Shift', '2019-05-12', '11:29:34', 'Jl. Babat No.8a, Gundih, Bubutan, Kota SBY, Jawa Timur 60174, Indonesia', 'e06ed302b5ccb1f7509a5aac081b535c', 'https://maseko.000webhostapp.com/reska/uploads/1557635410825.jpg', 1, 1, '357823080053345', '2019-05-12', '11:30:35', 'Jl. Babat No.8a, Gundih, Bubutan, Kota SBY, Jawa Timur 60174, Indonesia', '-', 'https://maseko.000webhostapp.com/reska/uploads/1557635442468.jpg', '-', '1'),
(91, 46, 'Shift 1', '2019-05-12', '11:34:25', 'Jl. Lamongan No.14, Gundih, Bubutan, Kota SBY, Jawa Timur 60174, Indonesia', 'e06ed302b5ccb1f7509a5aac081b535c', 'https://maseko.000webhostapp.com/reska/uploads/1557635672554.jpg', 1, 0, '867560037071680', '-', '-', '-', '-', '-', '-', '-'),
(92, 51, 'Non-Shift', '2019-05-13', '10:04:39', 'Jl. Babat No.8a, Gundih, Bubutan, Kota SBY, Jawa Timur 60174, Indonesia', '2b80eac859eb1e87868585619782f7fe', 'https://maseko.000webhostapp.com/reska/uploads/1557716706611.jpg', 1, 0, '357823080053345', '-', '-', '-', '-', '-', '-', '-'),
(93, 53, 'Shift 1', '2019-05-14', '16:18:57', 'Jl. Babat No.8a, Gundih, Bubutan, Kota SBY, Jawa Timur 60174, Indonesia', '2b80eac859eb1e87868585619782f7fe', 'https://maseko.000webhostapp.com/reska/uploads/1557825574300.jpg', 1, 0, '868131031464401', '-', '-', '-', '-', '-', '-', '-'),
(94, 54, 'Non-Shift', '2019-05-14', '16:21:17', 'Jl. Babat No.8a, Gundih, Bubutan, Kota SBY, Jawa Timur 60174, Indonesia', '-', 'https://maseko.000webhostapp.com/reska/uploads/1557825686747.jpg', 1, 0, '867560037071680', '-', '-', '-', '-', '-', '1', '-'),
(95, 51, 'Non-Shift', '2019-05-31', '22:29:22', 'Jl. Embong Malang No.95, RT.003/RW.04, Kedungdoro, Kec. Tegalsari, Kota SBY, Jawa Timur 60261, Indonesia', '200283', 'https://maseko.000webhostapp.com/reska/uploads/1559316593782.jpg', 1, 0, '357823080053345', '-', '-', '-', '-', '-', '-', '-'),
(96, 54, 'Non-Shift', '2019-06-14', '14:28:36', 'Jl. Babat No.8a, Gundih, Kec. Bubutan, Kota SBY, Jawa Timur 60174, Indonesia', '-', 'https://maseko.000webhostapp.com/reska/uploads/1560497324938.jpg', 1, 0, '867560037071680', '-', '-', '-', '-', '-', '0', '-'),
(100, 54, 'Non-Shift', '2019-06-15', '17:00:26', 'Jl. Kapuas No.59, DR. Soetomo, Kec. Tegalsari, Kota SBY, Jawa Timur 60264, Indonesia', '-', 'https://maseko.000webhostapp.com/reska/uploads/1560592837058.jpg', 1, 0, '867560037071680', '-', '-', '-', '-', '-', '0', '-'),
(101, 45, 'Shift 1', '2019-06-22', '13:26:40', 'Jl. Plemahan Besar No.54 B, RT.008/RW.09, Kedungdoro, Kec. Tegalsari, Kota SBY, Jawa Timur 60261, Indonesia', 'Meja03', 'https://maseko.000webhostapp.com/reska/uploads/1561184816559.jpg', 1, 1, '867299040164857', '2019-06-22', '13:29:10', 'Jl. Praban No.2, RT.001/RW.10, Alun-alun Contong, Kec. Bubutan, Kota SBY, Jawa Timur 60174, Indonesia', 'Meja03', 'https://maseko.000webhostapp.com/reska/uploads/1561184958240.jpg', '-', '-'),
(102, 51, 'Non-Shift', '2019-06-26', '21:26:30', 'Jl. Manggarai Utara 4 Blok d No.7, RT.5/RW.1, Manggarai, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12850, Indonesia', '8999909096004', 'https://maseko.000webhostapp.com/reska/uploads/1561559215762.jpg', 1, 1, '357823080053345', '2019-06-26', '21:27:27', 'Jl. Manggarai Utara 4 Blok d No.7, RT.5/RW.1, Manggarai, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12850, Indonesia', '-', 'https://maseko.000webhostapp.com/reska/uploads/1561559266457.jpg', '-', '1'),
(103, 51, 'Non-Shift', '2019-07-15', '19:11:35', 'Jl. Dupak Bandarejo No.2, Dupak, Kec. Krembangan, Kota SBY, Jawa Timur 60179, Indonesia', '8182770778876', 'https://maseko.000webhostapp.com/reska/uploads/1563192732665.jpg', 1, 1, '357823080053345', '2019-07-15', '19:37:56', 'Jl. Taman Dupak Bandarejo No.26, RT.001/RW.03, Dupak, Kec. Krembangan, Kota SBY, Jawa Timur 60179, Indonesia', '8999909096004', 'https://maseko.000webhostapp.com/reska/uploads/1563194299672.jpg', '-', '-'),
(104, 54, 'Shift 1', '2019-07-20', '18:25:11', 'Jl. Dupak Rukun No.2, Dupak, Kec. Krembangan, Kota SBY, Jawa Timur 60179, Indonesia', 'https://support.lenovo.com/qrcode?sn=PF0ZVLCN&mtm=80XU0042ID', 'http://maseko.000webhostapp.com/smile_sisi.png', 1, 0, '867560037071680', '-', '-', '-', '-', '-', '', ''),
(105, 51, 'Shift 1', '2019-07-22', '17:34:33', 'Jl. Babat No.8a, Gundih, Kec. Bubutan, Kota SBY, Jawa Timur 60174, Indonesia', '8999909096004', 'http://maseko.000webhostapp.com/smile_sisi.png', 1, 1, '357823080053345', '2019-07-22', '20:26:00', 'Jl. Taman Dupak Bandarejo No.24 A, RT.001/RW.03, Dupak, Kec. Krembangan, Kota SBY, Jawa Timur 60179, Indonesia', '8999909096004', 'https://maseko.000webhostapp.com/reska/uploads/1563801987665.jpg', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `presensi` int(11) NOT NULL DEFAULT '0',
  `acp` int(11) NOT NULL,
  `id_device` varchar(100) NOT NULL DEFAULT '-',
  `status_device` int(11) NOT NULL DEFAULT '0',
  `token` varchar(500) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nip`, `pin`, `nama_user`, `presensi`, `acp`, `id_device`, `status_device`, `token`) VALUES
(1, 123, '202cb962ac59075b964b07152d234b70', 'Eko Febri Harsono', 0, 1, '-', 0, '-'),
(3, 789, '68053af2923e00204c3ca7c6a3150cf7', 'Dekeko', 0, 0, '-', 0, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `versi_damartana`
--

CREATE TABLE `versi_damartana` (
  `id_versi` int(11) NOT NULL,
  `last_version` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_update` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `versi_damartana`
--

INSERT INTO `versi_damartana` (`id_versi`, `last_version`, `last_update`, `link`) VALUES
(6, '1.0.0', '2019-04-07', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(7, '2.0.0', '2019-04-11', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(8, '1.0.0', '2019-04-07', 'http://maseko.000webhostapp.com/reska/apk/'),
(9, '2.0.0', '2019-04-07', 'http://maseko.000webhostapp.com/reska/apk/'),
(10, '1.0.0', '2019-04-08', 'http://maseko.000webhostapp.com/reska/apk/'),
(11, '2.0.0', '2019-04-08', 'http://maseko.000webhostapp.com/reska/apk/'),
(12, '2.0.1', '2019-04-09', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(13, '2.0.2', '2019-04-09', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(14, '2.0.3', '2019-04-13', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(15, '2.0.2', '2019-04-13', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(16, '2.0.3', '2019-04-15', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(17, '2.0.2', '2019-04-15', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(18, '2.0.3', '2019-04-16', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(19, '2.0.4', '2019-04-16', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(20, '2.0.3', '2019-04-16', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(21, '2.0.4', '2019-04-18', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(22, '2.0.3', '2019-04-18', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(23, '2.1.0', '2019-05-04', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(24, '2.1.1', '2019-06-15', 'https://drive.google.com/open?id=1qlpGBaRiB9m1pma-R5GueLQe6ZJnj_DH'),
(25, '2.1.1', '2019-08-04', 'http://api.damartana.com/apk/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah_pendapatan`
--

CREATE TABLE `wilayah_pendapatan` (
  `id_wilayah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pendapatan` bigint(100) NOT NULL,
  `wilayah` int(11) NOT NULL,
  `tes` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah_pendapatan`
--

INSERT INTO `wilayah_pendapatan` (`id_wilayah`, `nama`, `pendapatan`, `wilayah`, `tes`) VALUES
(1, 'GAMBIR', 2404050720, 1, 2404050720),
(2, 'BOGOR', 1197347400, 1, 0),
(3, 'PASAR SENEN', 1159628940, 1, 0),
(4, 'TANGERANG', 743435002, 1, 0),
(5, 'BEKASI UTARA', 366251900, 1, 0),
(6, 'BANDUNG UTARA', 836935600, 2, 0),
(7, 'KIARACONGDONG UTARA', 217970800, 2, 0),
(8, 'CIREBON', 318106800, 3, 0),
(9, 'SEMARANG TAWANG', 655205900, 4, 0),
(10, 'SEMARANG PONCOL', 435852400, 4, 0),
(11, 'PEKALONGAN', 244762300, 4, 0),
(12, 'TEGAL', 126623000, 4, 0),
(13, 'PURWOKERTO', 389453200, 5, 0),
(14, 'KUTOARJO', 128721800, 5, 0),
(15, 'YOGYAKARTA SELATAN', 571910500, 6, 0),
(16, 'SOLO', 484780100, 6, 0),
(17, 'PURWOSARI', 198328600, 6, 0),
(18, 'LEMPUYANGAN', 88243000, 6, 0),
(19, 'KLATEN', 63361000, 6, 0),
(20, 'MADIUN', 133429900, 7, 0),
(21, 'BLITAR', 131502300, 7, 0),
(22, 'GUBENG BARU', 718304800, 8, 0),
(23, 'PASAR TURI', 643459100, 8, 0),
(24, 'PGS', 466104000, 8, 0),
(25, 'SIDOARJO', 179142220, 8, 0),
(26, 'MOJOKRTO', 165753000, 8, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barcode_damartana`
--
ALTER TABLE `barcode_damartana`
  ADD PRIMARY KEY (`id_barcode`);

--
-- Indexes for table `notif_user_damartana`
--
ALTER TABLE `notif_user_damartana`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id_pendapatan`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `versi_damartana`
--
ALTER TABLE `versi_damartana`
  ADD PRIMARY KEY (`id_versi`);

--
-- Indexes for table `wilayah_pendapatan`
--
ALTER TABLE `wilayah_pendapatan`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barcode_damartana`
--
ALTER TABLE `barcode_damartana`
  MODIFY `id_barcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notif_user_damartana`
--
ALTER TABLE `notif_user_damartana`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `id_pendapatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `versi_damartana`
--
ALTER TABLE `versi_damartana`
  MODIFY `id_versi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `wilayah_pendapatan`
--
ALTER TABLE `wilayah_pendapatan`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
