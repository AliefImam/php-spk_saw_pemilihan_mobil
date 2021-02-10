-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 02:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sawmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatifhp`
--

CREATE TABLE `alternatifhp` (
  `id_mobil_bekas` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `kategori_kendaraan` varchar(20) NOT NULL,
  `Transmisi` varchar(20) NOT NULL,
  `Kisaran_harga_beli` varchar(20) NOT NULL,
  `Kapasitas_Penumpang` varchar(10) NOT NULL,
  `Kapasitas_Bagasi` varchar(20) NOT NULL,
  `Tahun_Pembuatan` varchar(5) NOT NULL,
  `Warna_Mobil` varchar(10) NOT NULL,
  `Kondisi_Mesin` varchar(20) NOT NULL,
  `Bahan_Bakar` varchar(10) NOT NULL,
  `Ukuran_CC` varchar(10) NOT NULL,
  `Telepon` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatifhp`
--

INSERT INTO `alternatifhp` (`id_mobil_bekas`, `userid`, `Nama`, `kategori_kendaraan`, `Transmisi`, `Kisaran_harga_beli`, `Kapasitas_Penumpang`, `Kapasitas_Bagasi`, `Tahun_Pembuatan`, `Warna_Mobil`, `Kondisi_Mesin`, `Bahan_Bakar`, `Ukuran_CC`, `Telepon`) VALUES
(13, 0, 'Toyota Alphard S', 'MPV', 'Automatic', 'Rp 270.000.000', '6 Orang', 'Kecil', '2010', 'Hitam', 'Bagus', 'Bensin', '3000 CC', '08163259848'),
(14, 0, 'Kijang Innova G Diesel ', 'MPV', 'Automatic', 'Rp 215.000.000', '7 Orang', 'Kecil', '2015', 'Hitam', 'Bagus', 'Solar', '2000 CC', '083123658947'),
(15, 0, 'Daihatsu Xenia R ', 'MPV', 'Manual', 'Rp 105.000.000', '7 Orang', 'Kecil', '2013', 'Putih', 'Bagus', 'Bensin', '1500 CC', '08380256874'),
(16, 0, 'Kijang LSX - D', 'MPV', 'Manual', 'Rp 88.000.000', '7 Orang', 'Kecil', '2003', 'Biru', 'Bagus', 'Solar', '2000 CC', '083800665789'),
(17, 0, 'Suzuki APV Arena GX', 'MPV', 'Manual', 'Rp 87.200.000', '7 Orang', 'Kecil', '2011', 'Maroon', 'Bagus', 'Bensin', '1500 CC', '085189756321'),
(18, 0, 'Pajero Sport Exceed ', 'SUV', 'Automatic', 'Rp 369.000.000', '7 Orang', 'Kecil', '2017', 'Hitam', 'Bagus', 'Solar', '2500 CC', '082155598662'),
(19, 0, 'Toyota Fortuner VRZ', 'SUV', 'Triptonic', 'Rp 391.000.000', '7 Orang', 'Kecil', '2017', 'Putih', 'Bagus', 'Solar', '2393 CC', '08389208975'),
(20, 0, 'Honda Grand CR-V', 'SUV', 'Automatic', 'Rp 189.000.000', '5 Orang', 'Sedang', '2013', 'Putih', 'Bagus', 'Bensin', '2400 CC', '085100685325'),
(21, 0, 'Lexus LX570', 'SUV', 'Triptonic', 'Rp 1.188.000.000', '5 Orang', 'Besar', '2012', 'Hitam', 'Bagus', 'Bensin', '5700 CC', '083879654136'),
(22, 0, 'Suzuki Escudo Side Kick', 'SUV', 'Manual', 'Rp 55.000.000', '4 Orang', 'Sedang', '2000', 'Silver', 'Bagus', 'Bensin', '1600 CC', '08215536987'),
(23, 0, 'Honda Brio RS', 'City Car', 'Automatic', 'Rp 128.000.000', '4 Orang', 'Kecil', '2016', 'Putih', 'Bagus', 'Bensin', '1200 CC', '08356987412'),
(24, 0, 'Honda Jazz RS', 'City Car', 'Automatic', 'Rp 200.000.000', '4 Orang', 'Kecil', '2016', 'Hitam', 'Bagus', 'Bensin', '1500 CC', '082100689659'),
(25, 0, 'Toyota Yaris Type E', 'City Car', 'Automatic', 'Rp 85.000.000', '4 Orang', 'Kecil', '2010', 'Hitam', 'Bagus', 'Bensin', '1500 CC', '082800658795'),
(26, 0, 'Suzuki Swift ST', 'City Car', 'Manual', 'Rp 95.000.000', '4 Orang', 'Kecil', '2008', 'Hitam', 'Bagus', 'Bensin', '1500 CC', '085236987465'),
(27, 0, 'Toyota Agya G', 'City Car', 'Automatic', 'Rp 79.500.000', '4 Orang', 'Kecil', '2013', 'Abu - Abu', 'Bagus', 'Bensin', '1000 CC', '08155698741'),
(28, 4, 'BMW 520i Luxury', 'Sedan', 'Automatic', 'Rp 780.000.000', '4 Orang', 'Sedang', '2019', 'Putih', 'Bagus', 'Bensin', '1997 CC', '081556898745'),
(30, 4, 'Toyota Camry Type G', 'Sedan', 'Automatic', 'Rp 200.000.000', '4 Orang', 'Sedang', '2014', 'Abu - Abu', 'Bagus', 'Bensin', '2500 CC', '08386987456'),
(31, 4, 'Audi A4 1.8 TFSI', 'Sedan', 'Triptonic', 'Rp 159.000.000', '4 Orang', 'Sedang', '2008', 'Hitam', 'Bagus', 'Bensin', '1800 CC', '085963158756'),
(32, 4, 'Toyota Great Corolla', 'Sedan', 'Manual', 'Rp 42.000.000', '4 Orang', 'Sedang', '1993', 'Silver', 'Bagus', 'Bensin', '1600 CC', '083265989859'),
(33, 4, 'Honda Civic FD', 'Sedan', 'Automatic', 'Rp 155.000.000', '4 Orang', 'Sedang', '2010', 'Hitam', 'Bagus', 'Bensin', '1800 CC', '08239874565');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `Kriteria` varchar(50) NOT NULL,
  `attribut` varchar(50) NOT NULL,
  `Bobot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `Kriteria`, `attribut`, `Bobot`) VALUES
(1, 'Kategori Kendaraan', 'Benefit', '10'),
(2, 'Transmisi', 'Benefit', '9'),
(3, 'Kisaran Harga Beli', 'Cost', '15'),
(4, 'Kapasitas Penumpang', 'Benefit', '10'),
(5, 'Kapasitas Bagasi', 'Benefit', '9'),
(6, 'Tahun Pembuatan', 'Benefit', '10'),
(7, 'Warna Mobil', 'Benefit', '9'),
(8, 'Kondisi Mesin', 'Benefit', '9'),
(9, 'Bahan Bakar', 'Benefit', '9'),
(10, 'Ukuran CC', 'Benefit', '10');

-- --------------------------------------------------------

--
-- Table structure for table `normal`
--

CREATE TABLE `normal` (
  `id_normal` int(11) NOT NULL,
  `id_mobil_bekas` int(11) NOT NULL,
  `kategori_kendaraan2` double NOT NULL,
  `Transmisi2` double NOT NULL,
  `Kisaran_harga_beli2` double NOT NULL,
  `Kapasitas_Penumpang2` double NOT NULL,
  `Kapasitas_Bagasi2` double NOT NULL,
  `Tahun_Pembuatan2` double NOT NULL,
  `Warna_Mobil2` double NOT NULL,
  `Kondisi_Mesin2` double NOT NULL,
  `Bahan_Bakar2` double NOT NULL,
  `Ukuran_CC2` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `normal`
--

INSERT INTO `normal` (`id_normal`, `id_mobil_bekas`, `kategori_kendaraan2`, `Transmisi2`, `Kisaran_harga_beli2`, `Kapasitas_Penumpang2`, `Kapasitas_Bagasi2`, `Tahun_Pembuatan2`, `Warna_Mobil2`, `Kondisi_Mesin2`, `Bahan_Bakar2`, `Ukuran_CC2`) VALUES
(11, 1, 100, 50, 25, 25, 50, 75, 100, 100, 100, 50),
(20, 2, 100, 75, 25, 100, 25, 75, 75, 100, 100, 50),
(21, 8, 50, 50, 100, 50, 75, 75, 50, 100, 100, 100),
(22, 9, 25, 50, 100, 75, 25, 75, 100, 100, 100, 75),
(23, 13, 100, 50, 50, 100, 75, 50, 100, 100, 100, 100),
(24, 14, 100, 50, 50, 100, 25, 75, 100, 100, 50, 75),
(25, 15, 100, 75, 25, 100, 25, 75, 75, 100, 100, 50),
(26, 16, 100, 75, 25, 100, 25, 50, 25, 100, 50, 75),
(27, 17, 100, 75, 25, 100, 25, 75, 25, 100, 100, 50),
(28, 18, 75, 50, 75, 100, 25, 75, 100, 100, 50, 100),
(29, 19, 75, 25, 75, 100, 25, 75, 75, 100, 50, 100),
(30, 20, 75, 50, 25, 75, 50, 75, 75, 100, 100, 100),
(31, 21, 75, 25, 100, 75, 75, 75, 100, 100, 100, 100),
(32, 22, 75, 75, 25, 75, 50, 25, 50, 100, 100, 75),
(33, 23, 25, 50, 25, 75, 25, 75, 75, 100, 100, 50),
(34, 24, 25, 50, 50, 75, 25, 75, 100, 100, 100, 50),
(35, 25, 25, 50, 25, 75, 25, 50, 100, 100, 100, 50),
(36, 26, 25, 75, 25, 75, 25, 50, 100, 100, 100, 50),
(37, 27, 25, 50, 25, 75, 25, 75, 25, 100, 100, 25),
(38, 28, 50, 50, 100, 75, 50, 75, 75, 100, 100, 75),
(39, 30, 50, 50, 25, 75, 50, 75, 25, 100, 100, 100),
(40, 31, 50, 25, 25, 75, 50, 50, 100, 100, 100, 75),
(41, 32, 50, 75, 25, 75, 50, 25, 50, 100, 100, 75),
(42, 33, 50, 50, 25, 75, 50, 50, 100, 100, 100, 75);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_sub` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_sub` varchar(100) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_sub`, `id_kriteria`, `nama_sub`, `nilai`, `keterangan`) VALUES
(1, 1, 'City Car', '25', 'Kurang'),
(4, 1, 'Sedan', '50', 'Cukup'),
(5, 1, 'SUV', '75', 'Baik'),
(6, 1, 'MPV', '100', 'Sangat Baik'),
(7, 2, 'Triptonic', '25', 'Kurang'),
(8, 2, 'Automatic', '50', 'Cukup'),
(9, 2, 'Manual', '75', 'Baik'),
(11, 3, '< 200.000.000', '25', 'Kurang'),
(12, 3, '201.000.000 - 300.000.000', '50', 'Cukup'),
(13, 3, '301.000.000 - 400.000.000', '75', 'Baik'),
(15, 3, '> 401.000.000', '100', 'Sangat Baik'),
(16, 4, '11 Penumpang', '25', 'Kurang'),
(17, 4, '2 Penumpang', '50', 'Cukup'),
(18, 4, '4 - 5 Penumpang', '75', 'Baik'),
(19, 4, '6 - 7 Penumpang', '100', 'Sangat Baik'),
(20, 5, 'Kecil', '25', 'Kurang'),
(21, 5, 'Sedang', '50', 'Cukup'),
(22, 5, 'Besar', '75', 'Baik'),
(23, 6, '< 2000', '25', 'Kurang'),
(24, 6, '2001 - 2010', '50', 'Cukup'),
(25, 6, '2011 - 2019', '75', 'Baik'),
(26, 6, '2020', '100', 'Sangat Baik'),
(27, 7, 'Lainnya', '25', 'Kurang'),
(28, 7, 'Silver', '50', 'Cukup'),
(29, 7, 'Putih', '75', 'Baik'),
(30, 7, 'Hitam', '100', 'Sangat Baik'),
(31, 8, 'Kurang Bagus', '25', 'Kurang'),
(32, 8, 'Bagus', '100', 'Sangat Baik'),
(33, 9, 'Solar', '50', 'Cukup'),
(34, 9, 'Bensin', '100', 'Sangat Baik'),
(35, 10, '< 1200 CC', '25', 'Kurang'),
(36, 10, '1200 - 1500 CC', '50', 'Cukup'),
(37, 10, '1501 - 2000 CC', '75', 'Baik'),
(38, 10, '> 2000', '100', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `uplad`
--

CREATE TABLE `uplad` (
  `id_file` int(11) NOT NULL,
  `id_mobil_bekas` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uplad`
--

INSERT INTO `uplad` (`id_file`, `id_mobil_bekas`, `nama_file`) VALUES
(5, 13, 'alphard1.png'),
(6, 14, 'innova1.png'),
(7, 15, 'xenia1.png'),
(8, 16, 'kijang1.png'),
(9, 17, 'apv1.png'),
(10, 18, 'pajero.png'),
(11, 19, 'fortuner1.png'),
(12, 20, 'crv1.png'),
(13, 21, 'lexus1.png'),
(14, 22, 'escudo1.png'),
(15, 23, 'brio1.png'),
(16, 24, 'jazz1.png'),
(17, 25, 'yaris.png'),
(18, 26, 'swift1.png'),
(19, 27, 'agya1.png'),
(20, 28, 'bmw520i.png'),
(21, 30, 'camry.png'),
(22, 31, 'audi.png'),
(23, 32, 'greatcorolla.png'),
(24, 33, 'civic1.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Telepon` varchar(14) NOT NULL,
  `user_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `nama_depan`, `nama_belakang`, `email`, `password`, `Telepon`, `user_level`) VALUES
(1, 'admin', 'SPK', 'admin@mail.com', '$2y$10$Yt5Frb2yb3V/TGcyagEh4OWEPffZoxTp4mZtXGoXlsbALwnWjVUKW', '', 0),
(2, 'alief', 'imam', 'aliefimama@gmail.com', '$2y$10$Wx6jBraf28jEx0qI/MyXhurVxzyIFfjRBMvji3PvnQlRjbXq9R1V.', '', 1),
(3, 'aku', 'gabut', 'gabut@mail.com', '$2y$10$229l.OThUqIJ5kOIGchQUuNUB5rnDLMaS4buE5nSg0.ZhH.27RUkW', '', 2),
(4, 'abu', 'hanif', 'abu@gmail.com', '$2y$10$1CxD8v5U/YAabk/0K45.J.X8HGXgSA40M23CBPAn7wxyVrE3WC2Yi', '', 2),
(5, 'hanif', 'rah', 'hanifr@gmail.com', '$2y$10$WsgEwJvaurr5dbd9IuQr5us.akNDqVW/PwjRGnfVcayzADc8MlY5.', '', 1),
(6, 'abu', 'hanif', 'hanif9@gmail.com', '$2y$10$XTjNcM3Uuu0YjPXTCxD0oOt6rJEwMSzUkQwJSDyHqFSBr1nKkjUUO', '08166748490', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatifhp`
--
ALTER TABLE `alternatifhp`
  ADD PRIMARY KEY (`id_mobil_bekas`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `normal`
--
ALTER TABLE `normal`
  ADD PRIMARY KEY (`id_normal`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `uplad`
--
ALTER TABLE `uplad`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatifhp`
--
ALTER TABLE `alternatifhp`
  MODIFY `id_mobil_bekas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `normal`
--
ALTER TABLE `normal`
  MODIFY `id_normal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `uplad`
--
ALTER TABLE `uplad`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
