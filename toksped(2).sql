-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2020 pada 01.03
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
-- Database: `toksped`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_category` int(11) NOT NULL,
  `nama_category` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_category`, `nama_category`) VALUES
(1, 'Sepeda'),
(2, 'Helm'),
(7, 'Spare Part'),
(8, 'Apparel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_user` varchar(20) NOT NULL,
  `id_product` varchar(20) NOT NULL,
  `qty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id_user`, `id_product`, `qty`) VALUES
('200105013446', '10', '1'),
('200105013446', '27', '1'),
('191230062136', '24', '1'),
('191230062136', '10', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesan`
--

CREATE TABLE `tb_pemesan` (
  `id_pemesan` varchar(50) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tgl` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kab_kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kodepos` varchar(50) NOT NULL,
  `subtotal` varchar(50) NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `jasa` varchar(30) NOT NULL,
  `ongkir` varchar(30) NOT NULL,
  `status_pesanan` varchar(100) NOT NULL,
  `buktitf` varchar(100) NOT NULL,
  `tglterima` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemesan`
--

INSERT INTO `tb_pemesan` (`id_pemesan`, `id_user`, `nama_penerima`, `no_hp`, `tgl`, `alamat`, `provinsi`, `kab_kota`, `kecamatan`, `kodepos`, `subtotal`, `pembayaran`, `jasa`, `ongkir`, `status_pesanan`, `buktitf`, `tglterima`) VALUES
('200114111856', '191230062136', 'Kefin Dwi Oktafiano', '08765432123', '14 Jan 2020', 'Jl. Harum', 'Jawa Barat', '', 'Jl. Harum ', '40215', '24110000', 'Transfer Bank', 'J&T', '10000', '1', '439752-20019506-DSC02345_jpg5.jpg', NULL),
('200115055652', '191230062136', 'Kefin Dwi Oktafiano', '0876261784662', '15 Jan 2020', 'Komp. Margaasih Jl. Harum', 'Jawa Barat', 'Bandung', 'Komp. Margaasih Jl. Harum ', '40215', '24110000', 'Transfer Bank', 'J&T', '10000', '1', '439752-20019506-DSC02345_jpg51.jpg', NULL),
('200115055652', '191230062136', 'Kefin Dwi Oktafiano', '0876261784662', '15 Jan 2020', 'Komp. Margaasih Jl. Harum', 'Jawa Barat', 'Bandung', 'Komp. Margaasih Jl. Harum ', '40215', '24110000', 'Transfer Bank', 'J&T', '10000', '1', '439752-20019506-DSC02345_jpg52.jpg', NULL),
('200115060503', '191230062136', 'Kefin Dwi Oktafiano', '0876261784662', '15 Jan 2020', 'Komp. Margaasih Jl. Harum', 'Jawa Barat', 'Bandung', 'Komp. Margaasih Jl. Harum ', '40215', '24110000', 'Transfer Bank', 'J&T', '10000', '1', '439752-20019506-DSC02345_jpg53.jpg', NULL),
('200115060812', '191230062136', 'w', '', '15 Jan 2020', 'w', 'w', 'w', 'w ', 'w', '24100010', 'pembayaran', 'Jasa Ekspedisi', '10', '1', '439752-20019506-DSC02345_jpg54.jpg', NULL),
('200115061137', '191230062136', 'ui', '45678', '15 Jan 2020', 'werftgyhuj', 'rtyu', 'ertyu', 'werftgyhuj ', '45', '24110000', 'Transfer Bank', 'J&T', '10000', '4', '439752-20019506-DSC02345_jpg55.jpg', '17 Jan 2020'),
('200117021247', '191230062136', '', '', '17 Jan 2020', 'khk', '1', '', 'khk ', '', '40000', 'Transfer Bank', '', '10000', '2', '12065924_967424566637412_1843100109924805067_n.jpg', NULL),
('200121093234', '200121074104', 'Irvan Br', '086325678353', '21 Jan 2020', 'Komp. Margaasih', '', '', 'Komp. Margaasih ', '', '130000', 'Transfer Bank', 'jne', '10000', '3', '1470376332524.png', NULL),
('200121033012', '200121074104', 'Irvan Br', '0874235456678', '21 Jan 2020', 'Komp. Margaasih', '', '', 'Komp. Margaasih ', '', '5010000', 'Transfer Bank', '', '10000', '1', '14495361_10209054932509213_6821620961439132490_n.jpg', NULL),
('200122040243', '200122035511', 'iqbal', '232435', '22 Jan 2020', 'bandung', '', '', 'bandung ', '', '5010000', 'Bayar Di tempat', 'jne', '10000', '1', '439752-20019506-DSC02345_jpg56.jpg', NULL),
('200122042559', '200122035511', 'Iqbal', '07687435', '22 Jan 2020', 'Cililin', '', '', 'Cililin ', '', '360000', 'Transfer Bank', 'jne', '10000', '4', '439752-20019506-DSC02345_jpg57.jpg', '22 Jan 2020'),
('200122043446', '200122035511', 'iqbal', '123455', '22 Jan 2020', 'bandung', '', '', 'bandung ', '', '360000', 'Bayar Di tempat', 'jne', '10000', '3', '12065924_967424566637412_1843100109924805067_n1.jpg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` varchar(50) NOT NULL,
  `id_userpesan` varchar(50) NOT NULL,
  `id_barang` varchar(50) NOT NULL,
  `jumlahcheck` varchar(40) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `subtotal` varchar(50) NOT NULL,
  `jumlahxharga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_userpesan`, `id_barang`, `jumlahcheck`, `harga`, `subtotal`, `jumlahxharga`) VALUES
('200115061137', '191230062136', '11', '1', '7', '24110000', '5000000'),
('200115061137', '191230062136', '4', '2', '0', '24110000', '5000000'),
('200115061137', '191230062136', '5', '2', '5', '24110000', '14100000'),
('200117021247', '191230062136', '21', '1', '3', '40000', '30000'),
('200121093234', '200121074104', '24', '1', '1', '130000', '120000'),
('200121033012', '200121074104', '11', '1', '5', '5010000', '5000000'),
('200122040243', '200122035511', '11', '1', '5', '5010000', '5000000'),
('200122042559', '200122035511', '6', '1', '3', '360000', '350000'),
('200122043446', '200122035511', '6', '1', '3', '360000', '350000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `nama_product` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi` varchar(2000) NOT NULL,
  `status` varchar(10) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `stok` varchar(15) NOT NULL,
  `id_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `nama_product`, `foto`, `deskripsi`, `status`, `harga`, `category`, `stok`, `id_user`) VALUES
(4, 'polygon Cruzer', 'S4.jpg', 'Cocok untuk track datar', 'on', '2500000', '1', '18', ''),
(5, 'Sepeda Santa Cruz', 'P21.png', '\"The Bronson was a do-it-all, for-the-fun-of-it play bike. It wasn\'t committed to any one style of riding, rather it just wanted to be out on the trail having a good time. It jumped well, pedaled well, cornered well and, well, did just about everything well. And that was what most people loved about the Bronson—it didn\'t matter what kind of rider you were, you\'d probably have a lot of fun on it. Santa Cruz convinced the public that 27.5 wheels worked and, soon after its release, most of the other big-name brands started churning out their own 27.5 creations\".', 'on', '7050000', '1', '8', ''),
(6, 'Spare Part', 's13.jpg', 'Dijamin genaheun empuk', 'on', '350000', '7', '8', ''),
(10, 'Shifter MTB', 'c4.png', 'Membuat bersepeda semakin nyaman', 'on', '250000', '7', '20', '191104102519'),
(11, 'Polygon MTB', 'S2.jpg', 'Genaheun wa', 'on', '5000000', '1', '9', ''),
(20, 'sendal', 'default.png', 'wp', 'on', '20000', '0', '80', ''),
(21, 'Po', 'S1.jpg', 'we', 'on', '30000', '2', '20', ''),
(24, 'Pedal', 'C1.png', 'qw', 'off', '120000', '2', '11', ''),
(26, 'Frame Orbea Bike MT', 's7.jpg', 'FRAME Orbea Hydroformed triple butted alloy. Advanced Dynamics 160mm travel suspension. C-Boost 12x148 rear axle. Hollow linear ratio rocker arm. Pure Enduro geometry II. Downtube cable highway routing\r\nSHOCK Fox Float X2 DPS Factory 2-Position Adjust LV EVOL Kashima custom tune 215x63mm\r\nHEADSET Orbit ZS 1\"-1/2 Semi-Integrated\r\nWe reserve the right to make changes to the product information contained on this site at any time without notice, including with respect to equipment, specifications, models, colors, and materials.\r\n', 'on', '350000', '1', '12', ''),
(27, 'Helm Trans hiw', 'S191.jpg', 'Helm untuk keselamatan bersepeda', 'on', '350000', '2', '10', ''),
(28, 'Norco Rollover FS 100', 's17.png', 'The Revolver FS 100 was designed specifically for Norco’s Factory Team XC riders, who have been racing on the bike since the middle of last season — including Hayley Smith, who rode to a career-best 8th at Mont Sainte-Anne, which was her first World Cup on the new frame.', 'on', '10000000', '1', '2', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekening`
--

CREATE TABLE `tb_rekening` (
  `norek` varchar(25) NOT NULL,
  `an` varchar(25) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rekening`
--

INSERT INTO `tb_rekening` (`norek`, `an`, `level`) VALUES
('137-578-9897865-001', 'Kefin Dwi Oktafiano', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL,
  `status_aktif` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `username`, `password`, `photo`, `nohp`, `alamat`, `level`, `status_aktif`) VALUES
('191230062136', 'Kefin Dwi', 'kefin@gmail.com', 'kefindwi', '$2y$10$US0bSJCEoXuEBv.ip2iZveD1gLmJKa9LtAGUCJzGSkm.KWH3BCYZC', '19488911_1791958597487104_104784798539778666_o.jpg', '081572795615', 'Bandung', '1', '1'),
('200105013446', 'Kefin Dwi Oktafiano', 'kefindwioktaviano@gmail.com', 'kefindwi17', '$2y$10$OV/fCWzbOhhs3VonfDNeqeBRqDSz2Ftxqffd1Oso8eQ1u66qFgw1W', 'LRM_EXPORT_29962849937771_20190705_171330647.jpg', '+6283821220137', 'Komp. Margaasih Bandung', '2', '1'),
('200121074104', 'Irvan Br', 'irvan@gmail.com', 'irvan_br', '$2y$10$zXjfkG3ewwGsdG4O/VnZ6.WPqE6o5yx1csKTW7xrDaJ9JRn8ijw26', 'default.png', '086543567975', 'Komp. Margaasi Permai', '1', '1'),
('200122035511', 'iqbal', 'iqbal347@gmail.com', 'lone', '$2y$10$zm4RddVZjaZWyNnK30SKoOAcIB1wjjBvm8vYyBdDKwnDBU9/4ldCC', 'default.png', '', '', '1', '1'),
('200122041349', 'iqbal', 'baliq@gmail.com', 'adminbal', '$2y$10$zQ1hNzQy0VPWreEyCa3oKuZ56JC1mNLP8Ni8L0sgJsbY5I9HoTggW', 'default.png', '', '', '2', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
