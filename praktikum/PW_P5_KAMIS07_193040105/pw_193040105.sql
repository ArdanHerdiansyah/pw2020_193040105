-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 04:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040105`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(25) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `bahan` longtext NOT NULL,
  `ukuran` varchar(64) NOT NULL,
  `warna` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id`, `gambar`, `nama`, `harga`, `brand`, `bahan`, `ukuran`, `warna`) VALUES
(1, 'Springkle Logo Tee.jpg', 'Springkle Logo Tee', 300000, 'Adidas', '1. Regular fit<br>\r\n2. Ribbed crewneck<br>\r\n3. 100% cotton single jersey<br>\r\n4. Soft feel<br>\r\n5. Sprinkle graphic t-shirt<br>\r\n6. Short sleeves', 'S, M, L, XL', '1. Black/White (FM6242)<br>\r\n2. Blue/Multicolor (FM6245)<br>\r\n3. White/Multicolor (FM6241)'),
(2, 'Jersey.jpg', 'Jersey', 550000, 'Adidas', '1. Regular fit<br>\r\n2. Crewneck<br>\r\n3. 57% recycled polyester, 43% polyester jacquard<br>\r\n4. Short sleeve jersey', 'S, M, L, XL', '1. Blue/White (FM3406)<br>\r\n2. Red/White (FM3405)<br>\r\n3. Black/White (FM3402)'),
(3, 'R.Y.V. Hoodie.jpg', 'R.Y.V. Hoodie', 1100000, 'Adidas', '1. Regular fit<br>\r\n2. Pullover with drawcord-adjustable hood<br>\r\n3. 100% cotton French terry<br>\r\n4. Comfy sleek hooded sweatshirt\r\n5. Kangaroo pocket\r\n6. Ribbed cuffs and hem', 'S, M, L XL', 'Black (FM2266)'),
(4, 'R.Y.V. Crew Sweatshirt.jpg', 'R.Y.V. Crew Sweatshirt', 1100000, 'Adidas', '1. Loose fit<br>\r\n2. Crewneck<br>\r\n3. 100% cotton French terry<br>\r\n4. Graphic print crewneck pullover<br>\r\n5. Ribbed cuffs and hem', 'S, M, L, XL', 'Black/White (FM2292)'),
(5, 'TKO Shorts.jpg', 'TKO Shorts', 480000, 'Adidas', '1. Regular fit<br>\r\n2. Drawcord closure<br>\r\n3. 60% viscose, 33% recycled polyester, 7% elastane French terry<br>\r\n4. Soft, lightweight fabric<br>\r\n5. Lightweight fleece shorts<br>\r\n6. Moisture-absorbing AEROREADY<br>\r\n7. Side seam pockets', 'S, M, L, XL', '1. Green (FJ5129)<br>\r\n2. Grey (FL1489)'),
(6, 'Superstar Laceless Shoes.jpg', 'Superstar Laceless Shoes', 1900000, 'Adidas', '1. Slip-on<br>\r\n2. Leather upper<br>\r\n3. Laceless shell-toe trainers<br>\r\n4. Moulded sockliner and leather lining', '36-56 cm', '1. White/Black/White (FV3017)<br>\r\n2. Black/White/Black (FV3018)'),
(7, 'Copa 20.1 Firm Ground Boots.jpg', 'Copa 20.1 Firm Ground Boots', 2800000, 'Adidas', '1. Regular fit<br>\r\n2. Lace closure<br>\r\n3. Premium K-leather upper<br>\r\n4. Sock-like feel<br>\r\n5. Leather firm ground football boots<br>\r\n6. X-Ray vamp', '36-54 cm', 'Multicolor/White/Black (EF1948)'),
(8, 'Power Backpack.jpg', 'Power Backpack', 800000, 'Adidas', '1. Dimensions: 48.5 cm x 18 cm x 31 cm<br>\r\n2. 100% polyester ripstop<br>\r\n3. Air mesh on back panel and Loadspring shoulder straps<br>\r\n4. Durable backpack<br>\r\n5. Front zip pocket and side mesh pockets<br>\r\n6. Side compression straps', 'NS', 'Black/White (FM6860)'),
(9, 'Classic 3-Stripes Waist Bag.jpg', 'Classic 3-Stripes Waist Bag', 4300000, 'Adidas', '1. Dimensions: 32 cm x 15 cm x 8.5 cm<br>\r\n2. 100% polyester plain weave<br>\r\n3. Air mesh back panel<br>\r\n4. Convenient waist bag<br>\r\n5. Front zip pocket<br>\r\n6. Elastic belt with buckle', 'NS', 'Black (FM6882)'),
(10, 'Predator 20 Training Gloves.jpg', 'Predator 20 Training Gloves', 380000, 'Adidas', '1.Body: 70% polyurethane, 30% polyester<br>\r\n2. Palm: 83% EVA, 15% polyester, 2% rubber<br>\r\n3. Goalkeeper gloves for training<br>\r\n4. Soft Grip 2.5 latex for grip and cushioning<br>\r\n5. Positive cut for comfortable fit', '7, 8, 9 cm', 'Black/Multicolor (FH7295)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
