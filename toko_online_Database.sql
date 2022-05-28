-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 04:54 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'ROG Strix G15 G513QR-R737D6T-O', 'Laptop Rog dengan prosesor 8-core AMD Ryzen 7 5800H 3,2 GHz generasi ke-5 yang kuat dengan memori 16GB dan Solid State Drive (SSD) 512GB M.2 NVMe PCIe. ', 'Laptop', 24000000, 44, 'rog.jpg'),
(2, 'Samsung Galaxy s22', 'Hp Samsung dengan layar 6,1 inci, menggunakan material terbaik Dynamic AMOLED 2X, Memiliki tiga buah kamera utama yang masih tersusun secara vertikal. Masing-masing dengan sensor wide angle 50MP, telephoto dengan 3x optical z', 'Handphone', 18000000, 4, 'samsung.jpg'),
(3, 'Sepedah Gunung', 'Sepedah Gunung/MTB AVAND 27.5', 'Sepedah', 6500000, 92, 'sepedah.jpg'),
(4, 'Paket 3 Cheeseburger', 'Burger dengan isi daging sapi, seledri, tomat, acar, dan keju. Dijamin makanan sesuai gambar.', 'Makanan', 100000, 97, 'burger.png'),
(5, 'Setrika', 'Setrika Gosokan Turbo EHL3038 by Distributor Philips Anti Lengket', 'Elektronik', 135000, 18, 'setrika.jpg'),
(12, 'vivo V23e [8/128] RAM 8GB ROM 128GB Moonlight Shadow', 'Processor : MediaTek G96 RAM&ROM : 8GB+128GB Battery : 4050mAh (TYP) Fast Charging : 44W (11V/4A) Color : Moonlight Shadow & Sunshine Coast Operating System : Funtouch OS 12', 'Handphone', 4000000, 6, 'vivo3.jpg'),
(13, 'samsung', 'kotak', 'Handphone', 354535434, 7, ''),
(15, 'ASUS Notebook A516JA-HD3122', 'laptop asus', 'Laptop', 8000000, 4, 'ASUS_Notebook_A516JA-HD3122.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Alif Mahmud', 'Sumatra', '2022-05-05 20:04:35', '2022-05-06 20:04:35'),
(2, 'asepmus', 'singapore', '2022-05-14 09:20:57', '2022-05-15 09:20:57'),
(3, 'iimus', 'jonggol', '2022-05-21 10:50:46', '2022-05-22 10:50:46'),
(4, 'sidas', 'qrrq', '2022-05-21 10:55:10', '2022-05-22 10:55:10'),
(5, 'times', '', '2022-05-21 11:34:09', '2022-05-22 11:34:09'),
(6, 'kimal', 'semarang', '2022-05-21 11:43:43', '2022-05-22 11:43:43'),
(7, 'iim', '', '2022-05-28 09:33:30', '2022-05-29 09:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 3, 'Sepedah Gunung', 1, 6500000, ''),
(2, 2, 3, 'Sepedah Gunung', 1, 6500000, ''),
(3, 3, 1, 'ROG Strix G15 G513QR-R737D6T-O', 1, 24000000, ''),
(4, 3, 2, 'Samsung Galaxy s22', 1, 18000000, ''),
(5, 3, 3, 'Sepedah Gunung', 1, 6500000, ''),
(6, 3, 5, 'Setrika', 1, 135000, ''),
(7, 4, 2, 'Samsung Galaxy s22', 1, 18000000, ''),
(8, 5, 1, 'ROG Strix G15 G513QR-R737D6T-O', 1, 24000000, ''),
(9, 5, 3, 'Sepedah Gunung', 1, 6500000, ''),
(10, 5, 2, 'Samsung Galaxy s22', 1, 18000000, ''),
(11, 6, 3, 'Sepedah Gunung', 1, 6500000, ''),
(12, 6, 15, 'ASUS Notebook A516JA-HD3122', 1, 8000000, ''),
(13, 7, 1, 'ROG Strix G15 G513QR-R737D6T-O', 1, 24000000, ''),
(14, 7, 2, 'Samsung Galaxy s22', 1, 18000000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` int(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', 'Admin', 1234, 1),
(2, 'user', 'user', 12345, 2),
(3, 'Rizqy', 'Rizqy Winarko', 234, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
