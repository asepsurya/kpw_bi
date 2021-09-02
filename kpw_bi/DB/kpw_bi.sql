-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2021 pada 15.25
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpw_bi`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tb_brainstorming`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tb_brainstorming` (
`tanggal` varchar(20)
,`id_ikm` int(11)
,`jenis_produk` varchar(80)
,`merek` text
,`komposisi` text
,`varian_rasa` text
,`kelebihan_produk` text
,`tagline` text
,`gramasi` int(11)
,`gramasi_new` int(11)
,`harga` varchar(20)
,`kapasitas_produk` varchar(50)
,`omset` varchar(80)
,`segmentasi` varchar(80)
,`jenis_kemasan` text
,`nama_perusahaan` varchar(90)
,`halal` varchar(90)
,`pirt` varchar(50)
,`legalitas_lainnya` varchar(80)
,`media_penjualan` varchar(80)
,`redaksi` text
,`ket_lain` text
,`id_kota` varchar(30)
,`nama` varchar(30)
,`alamat` text
,`gender` varchar(20)
,`kelas` varchar(30)
,`telp` varchar(40)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cek`
--

CREATE TABLE `tb_cek` (
  `id_ikm` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL COMMENT 'aktif dan tidak-aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_cek`
--

INSERT INTO `tb_cek` (`id_ikm`, `status`) VALUES
('', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `id_ikm` int(30) NOT NULL,
  `dokumen_compro` varchar(30) NOT NULL,
  `dokumen_legalitas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dokumen`
--

INSERT INTO `tb_dokumen` (`id_ikm`, `dokumen_compro`, `dokumen_legalitas`) VALUES
(1, '', ''),
(2, '', 'Form_Brainstorming1.rtf'),
(8, '', ''),
(9, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_formulir`
--

CREATE TABLE `tb_formulir` (
  `id_ikm` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `jenis_produk` varchar(80) NOT NULL,
  `merek` text NOT NULL,
  `komposisi` text NOT NULL,
  `varian_rasa` text NOT NULL,
  `kelebihan_produk` text NOT NULL,
  `tagline` text NOT NULL,
  `gramasi` int(11) NOT NULL,
  `gramasi_new` int(11) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `kapasitas_produk` varchar(50) NOT NULL,
  `omset` varchar(80) NOT NULL,
  `segmentasi` varchar(80) NOT NULL,
  `jenis_kemasan` text NOT NULL,
  `nama_perusahaan` varchar(90) NOT NULL,
  `halal` varchar(90) NOT NULL,
  `pirt` varchar(50) NOT NULL,
  `legalitas_lainnya` varchar(80) NOT NULL,
  `media_penjualan` varchar(80) NOT NULL,
  `redaksi` text NOT NULL,
  `ket_lain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_formulir`
--

INSERT INTO `tb_formulir` (`id_ikm`, `tanggal`, `jenis_produk`, `merek`, `komposisi`, `varian_rasa`, `kelebihan_produk`, `tagline`, `gramasi`, `gramasi_new`, `harga`, `kapasitas_produk`, `omset`, `segmentasi`, `jenis_kemasan`, `nama_perusahaan`, `halal`, `pirt`, `legalitas_lainnya`, `media_penjualan`, `redaksi`, `ket_lain`) VALUES
(1, '02-09-2021', 'Refile Parfume', 'D\'Laza', 'asdasd', 'asdasd', 'Wangi dan hanagat', '-', 200, 0, '50000', '', '', 'Anak Muda', '', 'Cv. Muliana', '234324', '23432432', 'NIB = 0255448845', '     Intagaram, Whatsapp, Facebook, Tokopedia', 'Lorem Ipsum dolor', 'asdasd'),
(2, '02-09-2021', 'asdad', 'asdasd', 'adasd', 'asdasd', 'adasd', 'ne', 100, 0, '500', 'hari', 'Bulan', 'adasd', '', 'Cv. Muliana', '', '', '', 'adasdas', 'Lorem Ipsum dolor', 'adsadas'),
(8, '02-09-2021', 'Bakso', 'Nilon', 'adas', 'asdas', 'Wangi dan hanagat', '-', 500, 0, '5000', '', '', 'Anak Muda', '', 'Cv. Muliana', '', '', ' ', ' adas', 'Lorem Ipsum dolor', 'ada'),
(9, '02-09-2021', 'teh hijau', 'TACHA', 'teh hijau murni', 'serbuk dan daun', 'ALAMI', '-', 100, 0, '45000', '', '', 'Mnengah ke atas', '', 'CV INOPAK', '1231425', '12345', '  -', '  INSTAGRAM', 'Lorem Ipsum dolor', 'nbcvfxvczfshmgcv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kota`
--

CREATE TABLE `tb_kota` (
  `no` int(11) NOT NULL,
  `id_kota` varchar(30) NOT NULL,
  `nama_kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kurasi`
--

CREATE TABLE `tb_kurasi` (
  `id_ikm` varchar(30) NOT NULL,
  `supply` text NOT NULL,
  `proses_pengolahan` text NOT NULL,
  `kapasitas_produksi` text NOT NULL,
  `konsistensi_produksi` text NOT NULL,
  `tempat_produksi` text NOT NULL,
  `keterlibatan` text NOT NULL,
  `dampak` text NOT NULL,
  `kearifan` text NOT NULL,
  `kreativitas` text NOT NULL,
  `citra_rasa` text NOT NULL,
  `varian` text NOT NULL,
  `keunikan` text NOT NULL,
  `perijinan_dasar` text NOT NULL,
  `perijinan_tingkat` text NOT NULL,
  `jenis_kemasan` text NOT NULL,
  `visual` text NOT NULL,
  `attribut` text NOT NULL,
  `daya_tahan` text NOT NULL,
  `struktur` text NOT NULL,
  `administrasi` text NOT NULL,
  `keuangan` text NOT NULL,
  `retail` text NOT NULL,
  `b_t_b` text NOT NULL,
  `export` text NOT NULL,
  `b_t_c` text NOT NULL,
  `reseller` text NOT NULL,
  `media` text NOT NULL,
  `market` text NOT NULL,
  `website` text NOT NULL,
  `e-payment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_legalitas`
--

CREATE TABLE `tb_legalitas` (
  `id_ikm` int(30) NOT NULL,
  `nib` varchar(30) NOT NULL,
  `spirt` varchar(30) NOT NULL,
  `layak_sehat` varchar(30) NOT NULL,
  `halal` varchar(30) NOT NULL,
  `cppob` varchar(30) NOT NULL,
  `iso` varchar(30) NOT NULL,
  `haki` varchar(30) NOT NULL,
  `haccp` varchar(30) NOT NULL,
  `legalitas_lainnya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_legalitas`
--

INSERT INTO `tb_legalitas` (`id_ikm`, `nib`, `spirt`, `layak_sehat`, `halal`, `cppob`, `iso`, `haki`, `haccp`, `legalitas_lainnya`) VALUES
(1, '10052244788', '23432432', '13132', '234324', '23423', '9555122111', '1205522114555', '4654', 'NIB = 0255448845'),
(2, '10052244788', '', '', '', '', '9555122111', '', '', ''),
(8, '100522447889', '', '', '', '', '', '', '', ' '),
(9, '123', '12345', '13245235', '1231425', '12323535', '1100', 'REGISTER', '1325235', '  -');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_media_produk`
--

CREATE TABLE `tb_media_produk` (
  `id_gambar` int(11) NOT NULL,
  `id_ikm` varchar(30) NOT NULL,
  `gambar_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_media_produk`
--

INSERT INTO `tb_media_produk` (`id_gambar`, `id_ikm`, `gambar_produk`) VALUES
(1, '8', '69b43191b2.jpg'),
(2, '8', 'depositphotos_376811108-stock-photo-siomay-indonesian-street-food-steamed.jpg'),
(3, '8', 'picture-1542273415.jpg'),
(4, '8', '3650390209.jpg'),
(5, '1', 'hqdefault.jpg'),
(6, '', ''),
(7, '9', 'Capture.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_media_produksi`
--

CREATE TABLE `tb_media_produksi` (
  `id_gambar` varchar(30) NOT NULL,
  `id_ikm` varchar(30) NOT NULL,
  `gambar_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_media_produksi`
--

INSERT INTO `tb_media_produksi` (`id_gambar`, `id_ikm`, `gambar_produk`) VALUES
('gbr001', '2', '69b43191b2.jpg'),
('gbr002', '1', '69b43191b2.jpg'),
('gbr003', '1', 'picture-1542273415.jpg'),
('gbr004', '8', '69b43191b2.jpg'),
('gbr005', '8', '9e6295c89b29f834a2887f94d308de8d.jfif'),
('gbr006', '9', 'Foto.png'),
('gbr007', '9', 'Picture1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan_new` int(11) NOT NULL,
  `id_ikm` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `keterangan` varchar(80) NOT NULL,
  `id_kota` varchar(80) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ukm`
--

CREATE TABLE `tb_ukm` (
  `id_ikm` int(11) NOT NULL,
  `id_kota` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `telp` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ukm`
--

INSERT INTO `tb_ukm` (`id_ikm`, `id_kota`, `nama`, `alamat`, `gender`, `kelas`, `telp`) VALUES
(1, '550', 'Asep Surya Somantri', 'Ruko Hamas, Jl. Pancasila No.1, Lengkongsari, Tawang, Tasikmalaya, West Java', 'L', ' asepsurya1998@gmail.com', '  (+62)81-323-899-376'),
(2, '550', 'Eka Wijaya', 'asdad', 'L', 'iin201@yahoo.com', '(+62)81-323-899-376'),
(8, '550', 'Rani Nurnawati', 'Tasikmalaya', 'P', ' asdasd@gmail.com', ' (+62)81-323-899-376'),
(9, '550', 'Rani', 'Ciamis', 'P', '  rani@gmail.com', '  081214713475');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_ikm` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(2) NOT NULL,
  `id_kota` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `online` int(11) NOT NULL COMMENT '1=online 0=offline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_ikm`, `nama`, `username`, `password`, `level`, `id_kota`, `gambar`, `online`) VALUES
(1, 'SRI SARI', 'bisnistsm4@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2, 'KT001', 'a.jpg', 1),
(2, 'Asep Surya  Somantri', 'asepsurya1998@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 'KT001', 'a.jpg', 1),
(6, 'IIN SETIWAN', 'iinsetiawan2021@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2, 'KT001', 'a.jpg', 1),
(8, 'Rani Nurnawati', '081323899376', '0938fe42b5ee7cddf56bceddd4ece4ff', 2, '', 'a.jpg', 0),
(9, 'Rani', '081214713475', 'bfd925fa86084bd0300fde7fd05ddd97', 2, '', 'a.jpg', 0),
(10, 'Kurator 1', 'kurator1@email.com', '21232f297a57a5a743894a0e4a801fc3', 12, '65554', '', 0),
(12, 'Kurator 2', 'kurator2@email.com', '21232f297a57a5a743894a0e4a801fc3', 13, '65554', '', 0),
(13, 'Kurator 3', 'kurator3@email.com', '21232f297a57a5a743894a0e4a801fc3', 14, '65554', '', 0);

-- --------------------------------------------------------

--
-- Struktur untuk view `tb_brainstorming`
--
DROP TABLE IF EXISTS `tb_brainstorming`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tb_brainstorming`  AS SELECT `m`.`tanggal` AS `tanggal`, `m`.`id_ikm` AS `id_ikm`, `m`.`jenis_produk` AS `jenis_produk`, `m`.`merek` AS `merek`, `m`.`komposisi` AS `komposisi`, `m`.`varian_rasa` AS `varian_rasa`, `m`.`kelebihan_produk` AS `kelebihan_produk`, `m`.`tagline` AS `tagline`, `m`.`gramasi` AS `gramasi`, `m`.`gramasi_new` AS `gramasi_new`, `m`.`harga` AS `harga`, `m`.`kapasitas_produk` AS `kapasitas_produk`, `m`.`omset` AS `omset`, `m`.`segmentasi` AS `segmentasi`, `m`.`jenis_kemasan` AS `jenis_kemasan`, `m`.`nama_perusahaan` AS `nama_perusahaan`, `m`.`halal` AS `halal`, `m`.`pirt` AS `pirt`, `m`.`legalitas_lainnya` AS `legalitas_lainnya`, `m`.`media_penjualan` AS `media_penjualan`, `m`.`redaksi` AS `redaksi`, `m`.`ket_lain` AS `ket_lain`, `s`.`id_kota` AS `id_kota`, `s`.`nama` AS `nama`, `s`.`alamat` AS `alamat`, `s`.`gender` AS `gender`, `s`.`kelas` AS `kelas`, `s`.`telp` AS `telp` FROM (`tb_formulir` `m` join `tb_ukm` `s` on(`m`.`id_ikm` = `s`.`id_ikm`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_cek`
--
ALTER TABLE `tb_cek`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indeks untuk tabel `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indeks untuk tabel `tb_formulir`
--
ALTER TABLE `tb_formulir`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indeks untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_kurasi`
--
ALTER TABLE `tb_kurasi`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indeks untuk tabel `tb_legalitas`
--
ALTER TABLE `tb_legalitas`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indeks untuk tabel `tb_media_produk`
--
ALTER TABLE `tb_media_produk`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `tb_media_produksi`
--
ALTER TABLE `tb_media_produksi`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan_new`);

--
-- Indeks untuk tabel `tb_ukm`
--
ALTER TABLE `tb_ukm`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_ikm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_formulir`
--
ALTER TABLE `tb_formulir`
  MODIFY `id_ikm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_media_produk`
--
ALTER TABLE `tb_media_produk`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan_new` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_ikm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
