-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 04:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shucakenew`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `ukuran_kue` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `jasa_pengiriman` varchar(50) NOT NULL,
  `bank` varchar(56) NOT NULL,
  `notelp` varchar(22) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `nama_produk`, `ukuran_kue`, `harga`, `jumlah`, `jasa_pengiriman`, `bank`, `notelp`, `tgl_pesan`, `batas_bayar`) VALUES
(45, 'Gusto', 'Depok', 'Blueberry Cake', '200 x 200', 300000, 1, 'Gofood', 'BCA - xxxxxxx', '2147483647', '2023-06-15 23:01:24', '2023-06-16 23:01:24'),
(46, 'Mariam', 'Depok', 'Strawberry Cake', '200 x 200', 250000, 1, 'Shopeefood', 'BRI - xxxxxxx', '543808012', '2023-06-15 23:02:49', '2023-06-16 23:02:49'),
(47, 'Okta', 'Depok', 'Blueberry Cake', '200 x 200', 300000, 1, 'Grabfood', 'BCA - xxxxxxx', '56784525', '2023-06-16 16:24:40', '2023-06-17 16:24:40'),
(48, 'okta', 'depok', 'Strawberry Cake', '100 x 100', 250000, 1, 'Shopeefood', 'BCA - xxxxxxx', '454334233', '2023-06-16 16:33:57', '2023-06-17 16:33:57'),
(49, 'tangguh', 'Depok', 'Blueberry Cake', '200 x 200', 300000, 1, 'Grabfood', 'BRI - xxxxxxx', '765843323', '2023-06-16 16:34:55', '2023-06-17 16:34:55'),
(50, 'Agusto Vercelli', 'Depok', 'Blueberry Cake 300', '300 x 300', 300000, 1, 'Gofood', 'BCA - xxxxxxx', '56112234223', '2023-07-04 18:16:24', '2023-07-05 18:16:24'),
(51, 'Agusto Vercelli', 'Depok', 'Brownies Cake 300', '300 x 300', 325000, 1, 'Gofood', 'BCA - xxxxxxx', '56784525', '2023-07-04 18:17:50', '2023-07-05 18:17:50'),
(52, 'Agusto Vercelli', 'Depok', 'Brownies Cake 300', '300 x 300', 325000, 1, 'Gofood', 'BCA - xxxxxxx', '56784525', '2023-07-04 18:23:15', '2023-07-05 18:23:15'),
(53, 'Agusto Vercelli', 'depok', 'Brownies Cake 300', '300 x 300', 325000, 1, 'Gofood', 'BCA - xxxxxxx', '56784525', '2023-07-04 18:28:41', '2023-07-05 18:28:41'),
(54, 'Agusto Vercelli', 'depok', 'Brownies Cake 300', '300 x 300', 325000, 1, 'Gofood', 'BCA - xxxxxxx', '56784525', '2023-07-04 18:29:08', '2023-07-05 18:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `ukuran_kue` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `jasa_pengiriman` varchar(50) NOT NULL,
  `notelp` int(22) NOT NULL,
  `bank` varchar(56) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_produk`, `nama_produk`, `ukuran_kue`, `jumlah`, `harga`, `jasa_pengiriman`, `notelp`, `bank`, `pilihan`) VALUES
(36, 38, 10, 'Blueberry Cake', '100 x 100', 1, 300000, 'Grabfood', 2147483647, 'BCA - xxxxxxx', ''),
(37, 39, 11, 'Strawberry Cake', '200 x 200', 1, 250000, 'Shopeefood', 2147483647, 'BNI - xxxxxxx', ''),
(38, 40, 10, 'Blueberry Cake', '200 x 200', 1, 300000, 'Shopeefood', 2147483647, 'BCA - xxxxxxx', ''),
(39, 40, 11, 'Strawberry Cake', '200 x 200', 1, 250000, 'Shopeefood', 2147483647, 'BCA - xxxxxxx', ''),
(40, 41, 11, 'Strawberry Cake', '300 x 300', 1, 250000, 'Grabfood', 2147483647, 'BNI - xxxxxxx', ''),
(41, 41, 10, 'Blueberry Cake', '300 x 300', 1, 300000, 'Grabfood', 2147483647, 'BNI - xxxxxxx', ''),
(42, 42, 10, 'Blueberry Cake', '100 x 100', 1, 300000, 'Grabfood', 2147483647, 'BCA - xxxxxxx', ''),
(43, 43, 10, 'Blueberry Cake', '300 x 300', 1, 300000, 'Shopeefood', 123123, 'BNI - xxxxxxx', ''),
(44, 44, 10, 'Blueberry Cake', '200 x 200', 1, 300000, 'Shopeefood', 2147483647, 'BRI - xxxxxxx', ''),
(45, 45, 10, 'Blueberry Cake', '200 x 200', 1, 300000, 'Gofood', 2147483647, 'BCA - xxxxxxx', ''),
(46, 46, 11, 'Strawberry Cake', '200 x 200', 1, 250000, 'Shopeefood', 543808012, 'BRI - xxxxxxx', ''),
(47, 47, 11, 'Strawberry Cake', '200 x 200', 1, 250000, 'Grabfood', 56784525, 'BCA - xxxxxxx', ''),
(48, 47, 10, 'Blueberry Cake', '200 x 200', 1, 300000, 'Grabfood', 56784525, 'BCA - xxxxxxx', ''),
(49, 48, 10, 'Blueberry Cake', '100 x 100', 1, 300000, 'Shopeefood', 454334233, 'BCA - xxxxxxx', ''),
(50, 48, 11, 'Strawberry Cake', '100 x 100', 1, 250000, 'Shopeefood', 454334233, 'BCA - xxxxxxx', ''),
(51, 49, 10, 'Blueberry Cake', '200 x 200', 1, 300000, 'Grabfood', 765843323, 'BRI - xxxxxxx', ''),
(52, 50, 10, 'Blueberry Cake 300', '300 x 300', 1, 300000, 'Gofood', 2147483647, 'BCA - xxxxxxx', ''),
(53, 51, 12, 'Brownies Cake 300', '300 x 300', 1, 325000, 'Gofood', 56784525, 'BCA - xxxxxxx', ''),
(54, 52, 12, 'Brownies Cake 300', '300 x 300', 1, 325000, 'Gofood', 56784525, 'BCA - xxxxxxx', ''),
(55, 53, 12, 'Brownies Cake 300', '300 x 300', 1, 325000, 'Gofood', 56784525, 'BCA - xxxxxxx', ''),
(56, 54, 12, 'Brownies Cake 300', '300 x 300', 1, 325000, 'Gofood', 56784525, 'BCA - xxxxxxx', '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_produk` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_produk SET stok = stok-NEW.jumlah
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `kategori` varchar(300) NOT NULL,
  `ukuran_kue` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `keterangan`, `kategori`, `ukuran_kue`, `harga`, `stok`, `gambar`) VALUES
(10, 'Blueberry Cake 300', 'Cake full of Blueberry Sauce', 'Chiffon Cake', '300 x 300', 300000, 19, 'blueberrycake.jpg'),
(11, 'Strawberry Cake 300', 'Cake full of Strawberry', 'Butter Cake', '300 x 300', 250000, 20, 'strawberrycake.jpg'),
(12, 'Brownies Cake 300', 'Cake full of Chocolate', 'Chiffon Cake', '300 x 300', 325000, 11, 'browniecake1.jpg'),
(13, 'Blueberry Cake 200', 'Cake full of Blueberry Sauce', 'Chiffon Cake', '200 x 200', 270000, 15, 'blueberrycake1.jpg'),
(14, 'Strawberry Cake 200', 'Cake full of Strawberry', 'Butter Cake', '200 x 200', 250000, 15, 'strawberrycake1.jpg'),
(15, 'Brownies Cake 200', 'Cake full of Chocolate', 'Chiffon Cake', '200 x 200', 275000, 15, 'browniecake2.jpg'),
(16, 'Blueberry Cake 100', 'Cake full of Blueberry Sauce', 'Chiffon Cake', '100 x 100', 250000, 10, 'blueberrycake2.jpg'),
(17, 'Brownies Cake 100', 'Cake full of Chocolate Sauce', 'Chiffon Cake', '100 x 100', 200000, 10, 'browniecake3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `transaksi_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `notelp` int(22) NOT NULL,
  `jasa_pengiriman` varchar(255) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_pembayaran` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `notelp` int(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `username`, `password`, `notelp`, `alamat`, `role_id`) VALUES
(1, 'admin', '', 'admin', '123', 0, '', 1),
(2, 'user', '', 'user', '123', 0, '', 2),
(4, 'Oktaviana', '', 'okta', 'okta', 0, '', 2),
(7, 'Agusto Vercelli', 'agusto.vercelli@gmail.com', 'gusto', 'gusto', 2147483647, '', 2),
(8, 'Adam Lavine', 'adam.lavine@artist.com', 'adam', 'adam', 2147483647, 'New York', 2);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `transaksi_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
