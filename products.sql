-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 11:20 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `avail` varchar(255) NOT NULL,
  `cond` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `owner` int(11) NOT NULL,
  `comment` text NOT NULL,
  `now` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img1`, `img2`, `img3`, `name`, `price`, `avail`, `cond`, `brand`, `owner`, `comment`, `now`) VALUES
(34, 'vsvsevesv.jpg', '26-608-014-10.jpg', 'download.jpg', 'Mouse', 5, 'In Stock', 'New', 'Razer', 1, '', 0),
(35, 'Imageresizer.jpg', 'Imageresizer (1).jpg', 'Screwdriver.jpg', 'Screwdriver', 2, 'In Stock', 'New', 'Stanley', 1, '', 0),
(36, 'fendt-vario-939-1000-traktor-27.jpg', 'download (1).jpg', 'trakter.jpg', 'Deutz-Fahr', 300, 'In Stock', 'New', 'Deutz-Fahr 9', 6, '', 1),
(37, 'Makita-7.2V-Cordless-Screwdriver.jpg', 'wcewcewcewce.jpg', 'wecewewvrebtrfb.jpg', 'Electronic Screwdriver', 10, 'Out of Stock', 'New', 'Makita', 1, '', 8),
(42, 'large_77_1441296518_glove-moto-black-c.jpg', 'download (2).jpg', '81wQYWPWVoL._SL1500_.jpg', 'Work Gloves', 7, 'In Stock', 'New', 'Biltwell', 10, '', 0),
(43, '325462_R_Z001.jpg', '310471_R_Z001.jpg', '131598_R_Z001.jpg', 'Lawnmower', 13, 'In Stock', 'New', 'Bosch', 1, '', 0),
(44, '1-300x300.jpg', '304452_2000x2000.jpg', 'standalone_meat_grinder.jpg', 'Meat Grinder', 15, 'In Stock', 'New', 'STX', 1, '', 0),
(45, '41aM4TMKvKL.jpg', '61nDVhlbRKL._SL850_.jpg', 'images.jpg', 'Electric Saw', 15, 'In Stock', 'New', 'Makita', 10, '', 0),
(46, '2011042226145575.jpg', '470b62242884a55129b8521a8ef43425.jpg', 'image_14661.jpg', 'Saw', 9, 'In Stock', 'New', 'ProfCut', 10, '', 0),
(47, '51OWjqdz0JL.jpg', 'audrey-red-polka-dot-swing-dress-p41-15865_zoom.jpg', 'img-thing.jpg', 'Blue Dress', 20, 'In Stock', 'New', 'Armani', 10, '', 0),
(48, '15a53c2ea7a55218eccf474be4674270.jpg', 'images (1).jpg', '44d461357bf6cd2acd3f143f24a84170.jpg', 'Red Dress', 20, 'In Stock', 'New', 'Prada', 10, '', 0),
(49, '71kgK6fAvtL._SL1500_.jpg', 'U2412M-Dell-Monitor.jpg', '51Z0ALvn1wL.jpg', 'Monitor', 14, 'In Stock', 'New', 'Dell', 8, '', 0),
(50, '71OFFI4WTDL._SL1500_.jpg', 'crenova-xpe460-led-projector_thumb800.jpg', 'download (3).jpg', 'Projector', 17, 'In Stock', 'New', 'EPSON', 8, '', 0),
(51, 'images (2).jpg', 's-l1000.jpg', 'images (3).jpg', 'Universal Remote', 4, 'In Stock', 'New', 'Charter', 8, '', 0),
(53, 'skyfall-tuxedo.jpg', 'craig_justjared.jpg', '1b7375b3aa62d125063beb32de3b8c8f.jpg', 'Tuxedo Blue', 30, 'In Stock', 'New', 'Prada', 8, '', 0),
(54, 'MakerBot-Replicator-2.jpg', 'section_1.png', '522323-the-best-3d-printers-of-2016-11-4-2016-update-flashforge-finder-3d-printer.jpg', '3D Printer', 120, 'In Stock', 'New', 'MakerBot', 8, '', 0),
(55, '2500470_1.jpg', '0122106_PE278491_S5.JPG', '0355482_PE547815_S5.JPG', 'Chair', 4, 'In Stock', 'New', 'Chair', 34, '', 0),
(56, 'Hudson Armchair - Old Saddle Nut 500-1000x1000.jpg', '22472_2.jpg', '0403831_PE566131_S5.JPG', 'Armchair', 6, 'In Stock', 'New', 'Morpheus', 34, '', 0),
(57, '1081877_R_Z002A.jpg', 'ethernet.jpg', '410lvw0Ys4L.jpg', 'Ethernet Cable', 3, 'In Stock', 'New', 'Belkin', 34, '', 0),
(58, '8025_Matte_Rainbow_600x.jpg', 'smith_optics_ldpcboib_lowdown_sunglasses_impossibly_black_1081157.jpg', '51bVN-OaPBL._UL1500_.jpg', 'Sunglasses', 7, 'In Stock', 'New', 'RayBan', 34, '', 0),
(59, 'high_pressure_washer.jpg', '16016890.jpg', 'MIN_181250_EAA.jpg', 'Pressure Cleaner', 12, 'In Stock', 'New', 'Makita', 34, '', 0),
(61, 'H70301000001000-00-500x500.jpg', 'breedlove_premier_auditorium_sitka_spruce_mahogany_acoustic_guitar_ (1).jpg', 'Taylor-814ce-fr-2015.png', 'Acoustic Guitar', 3, 'In Stock', 'New', 'Taylor', 34, '', 0),
(62, 'leather-camera-bag-p8-257_image.jpg', 'Bucket_Bag_Suede_Brick_Detail_1_grande.jpg', 'naptholred_ice_bag.jpg', 'Bag', 10, 'In Stock', 'New', 'Lidl', 34, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
