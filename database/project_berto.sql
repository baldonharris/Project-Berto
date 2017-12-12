-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Nov 2017 pada 10.27
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_berto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
`id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `name`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(11, 'dah', '080f651e3fcca17df3a4', 'dah'),
(12, 'yray', 'cbd44f8b5b48a51f7dab', 'Brian Brandon Yray'),
(13, 'anne', 'e3fb62ebfa4f36acf5cbff6a6ed0f2e0', 'Anna Marie Ayop');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tourist_spots`
--

CREATE TABLE IF NOT EXISTS `tourist_spots` (
`id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `rate` double NOT NULL,
  `address` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `fee` double NOT NULL,
  `service` varchar(250) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `picture` varchar(250) NOT NULL,
  `spot_type` enum('adventure','artscrafts','heritage','nature','wildlife') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tourist_spots`
--

INSERT INTO `tourist_spots` (`id`, `name`, `rate`, `address`, `description`, `fee`, `service`, `latitude`, `longitude`, `picture`, `spot_type`) VALUES
(42, 'Man-made Forest', 0, 'Loay Interior Road, Bilar, Bohol', 'The Bohol Forest is a man-made mahogany forest stretching ina two-kilometer stretch of densely planted Mahagony trees located in the border of Loboc and Bilar towns. No other vegetation is growing among the the Mahogany trees.', 50, 'None', 9.6642, 124.0785, 'a5c6e093320a633714a30bca7b963824.png', 'nature'),
(43, 'Abatan River Community Life Tour', 0, 'Cortes, Bohol', 'Abatan River serves as the chief drainage system of the Abatan Watershed and is one of the three main rivers of Bohol. The river traverses through the town of Antequerra to the town of Balilihan opening up to the Cortes nipa swamps. ', 50, 'None', 9.8617323, 123.765163, '8b041fef6dacb37702b36a36cdeb79d7.jpg', 'nature'),
(44, 'Kawasan Falls', 0, 'Candasig, Balilihan, Bohol', 'It is cool and clear water flowing from above and refreshing bath. You can swim at the small pond below the waterfall.', 50, 'None', 9.672948, 123.873001, 'b6c6a1d6071af31dcb49ddc64b09e620.png', 'nature'),
(45, 'Chocolate Hills', 0, 'Carmen, Bohol', 'The Chocolate Hills are a geological  formation in the Bohol province of the Philippines. There are at least 1,260 hills.', 50, 'None', 9.8297, 124.1397, 'f00d080056d03082d7a859931e7766d4.jpg', 'nature'),
(46, 'Panglao Island Beaches', 0, 'Panglao, Bohol', 'Panglao is an island in the north Bohol sea, located in the Central Visayas island group, in the south-central Philippines.', 0, 'None', 9.573143, 123.762947, 'f1e81585245986a299358c5a0e7ce7ef.jpg', 'nature'),
(48, 'Lamanok Island', 0, 'Badiang, Anda, Bohol', 'The Lamanok Island is a popular destination in the eastern peninsula of Anda. It is a mystical island in Anda.', 50, 'None', 9.73113199747009, 124.562591314316, '4f3614a6bee5a271a0a6e5778e39a12e.jpg', 'adventure'),
(49, 'Caving ', 0, 'Danao, Bohol', 'Caving (Kamira Cave), this cave is home to bats. One of the activities of Danao Adventure Park.', 150, 'None', 9.091897, 124.09897785, '7583f032ba1bc56c0b2c894c31b40fb1.jpg', 'adventure'),
(50, 'Catigbian D.A.T.E. Park', 100, 'Catigbian, Bohol', 'A mere 30-minute ride from the city, a taste of adventure.', 200, 'Climbing', 9.826478, 123.897567, '341515983c3d1c57410cfaccd6d80139.jpg', 'adventure'),
(51, 'Balicasag Diving Site', 150, 'Panglao, Bohol', 'Found in the southwest Panglao and internationally-recognized dive spots.', 300, 'Diving', 9.13765, 124.98587, 'db00be6773239536a646e6abd0e2107e.jpg', 'adventure'),
(52, 'Bien Unido Double Barrier Reef Marine Park', 200, 'Bien Unido, Bohol', 'Has a unique diving experience with the submerged 14-feet statues of the Blessed Virgin and the Sto. Nino.', 200, 'Diving', 9.289786, 124.8678, 'c1f75d9fc58d26624e570053829e8677.jpg', 'adventure'),
(53, 'Philippine Tarsier and Wildlife Sanctuary', 0, 'Corella, Bohol', 'There are small primates, tarsiers are nocturnal with heads that can rotate 180 degrees.', 100, 'None', 9.826875675, 124.8615476, 'dd8df376673c9c05ef623fc978aec483.jpg', 'wildlife'),
(54, 'Rajah Sikatuna Protected Landscape', 0, 'Bilar, Bohol', 'A paradise for bird watchers and wildlife lovers.', 150, 'None', 9.982786, 124.86876, 'e0f48751f55c30694eb441aeb8fe87dd.jpg', 'wildlife'),
(55, 'Dolphin Watching and Marine Life Tour', 0, 'Pamilacan Island, Baclayon, Bohol', 'Experience the excitement of watching the playful spinner dolphins frolic in the seas.', 300, 'None', 9.27564, 124.75465, 'd03bc78e230eb95bec29ec57c1cfc684.jpg', 'wildlife'),
(56, 'Bohol Habitat Conservation Center', 0, 'Bilar, Bohol', 'A paradise for bird watchers and wildlife lovers. It is the widest remaining forest in Bohol.', 150, 'None', 9.86278, 124.82675, '37b30e377c4b560f5a574854cbe735ba.jpg', 'wildlife'),
(57, 'Tarsier Botanika', 0, 'Panglao, Bohol', 'A botanical garden with over 3,000 varietes of plants and trees. It has an animal sanctuary, a stable with a riding arena.', 150, 'None', 9.876752, 124.17567, '028e1ffc5717668f5f01fcad7cc1ff58.jpg', 'wildlife'),
(58, 'Philippine Mangrove Macaques Tour', 0, 'Loon, Bohol', 'Have a close encounter experience with the crab-eating species of monkeys called macaque.', 150, 'None', 9.19878, 124.98786, '6016afafe1a09e1b6ee0e21a2bc79c20.jpg', 'wildlife'),
(59, 'Immaculate Concepcion Parish Church', 0, 'Baclayon, Bohol', 'One of the earliest-built stone churches in the country. Declared a national historical landmark by the National Historical Institute.', 20, 'None', 9.87672, 124.17367, 'bb5f156d15e7c2ac1415922eb0f39741.jpg', 'heritage'),
(60, 'Assumption of Our Lady Shrine', 0, 'Dauis, Bohol', 'One of the churches in Bohol and now a pilgrim center for Marian devotees. It is place in Dauis were has a fresh water well near the altar.', 0, 'None', 9.71564, 124.97654, '6db4e1840b5325c64c023c097d4fb2bd.jpg', 'heritage'),
(61, 'Clarin Heritage House', 0, 'Loay, Bohol', 'One of the old houses in Bohol and it provide a glimpse of the Boholanos'' way of life in the past century.', 20, 'None', 9.17536, 124.87862, '78afcd9cb70ece2064e37fc910006a36.jpg', 'heritage'),
(62, 'Punta Cruz Watchtower', 0, 'Maribojoc, Bohol', 'Ancient watchtowers built as part of the island''s defense system is worth a visit.', 0, 'None', 9.18722, 124.82786, '651a9e9f4d0216e18c4db52ad238e1e9.jpg', 'heritage'),
(63, 'Blood Compact Shrine', 0, 'Loay, Bohol', 'It is sculpted by Boholano National Artist Napoleon Abueva.', 30, 'None', 9.10013, 124.14642, 'a77767d78a469501430cebf2696e47dd.jpg', 'heritage'),
(64, 'C.P.G. Museum', 0, 'Tagbilaran City, Bohol', 'The C.P.G. Museum is the houses the memorabilia of the late Pres. Carlos P. Garcia.', 30, 'None', 9.18761, 124.15453, 'f96c4a5aa2e785560c07c1abb34d8d10.jpg', 'heritage'),
(65, 'Loboc Children''s Choir', 0, 'Loboc, Bohol', 'Had a bagged prestigious awards in Philippine choral competitions and international music festivals.', 0, 'None', 9.87614, 124.83645, 'd4e03443280d3867d42be169fabc0b88.jpg', 'artscrafts'),
(66, 'Dimiao Children''s Rondalla', 0, 'Dimiao, Bohol', 'One of the orchestra with well-acclaimed concerts here and abroad and winning in national competitions.', 0, 'None', 9.91874, 124.97416, 'f4735790a2fdfec9a6bc8bc3e01d726d.jpg', 'artscrafts'),
(67, 'Lungsoranon Performing Arts Ensemble', 0, 'Tubigon, Bohol', 'One of the popular group in the performing arts and LPAE of Tubigon are prolific groups.', 0, 'None', 9.92865, 124.13241, 'd7fe83424e4e291ff57a3a8b0158c31e.jpg', 'artscrafts'),
(68, 'Tubigon Loom Weaving Center', 0, 'Tubigon, Bohol', 'A tour stop where visitors witness actual loom weaving.', 0, 'None', 9.81748, 124.81671, 'aba4f488afd3bf10fe900d02cf5e71a0.jpg', 'artscrafts'),
(69, 'Bolo-Making', 0, 'Loay, Bohol', 'One of the centuries-old crafts are kept alive in many vilages like in Loay.', 0, 'None', 9.18626, 124.81647, '1e6f6ca5b7a31c0dcc75e186006ffdc1.jpg', 'artscrafts'),
(70, 'Handuman Shop', 0, 'Dauis, Bohol', 'A souvenier shop which features the Boholano ingenuity in handicrafts. It sells different items that come from the nearby Bohol towns.', 0, 'None', 9.98741, 124.81647, '512195afe6afc0c8fee5e8ae24434620.jpg', 'artscrafts'),
(71, 'Danao Adventure Park', 200, 'Danao, Bohol', 'Is the destination for global thrill-seekers with E.A.T. Danao, which stands for Eco/Educational/Extreme Adventure Tours.', 100, 'Kayaking, Rappelling,Spelunking and etc.', 9.8924, 124.98735, '3d1e2851d7901fc3439377bee8effb2c.jpg', 'adventure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
