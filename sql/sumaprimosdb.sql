-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 08:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sumaprimosdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculo`
--

CREATE TABLE `calculo` (
  `id_calculo` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `desc_calculo` varchar(500) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `resultado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calculo`
--

INSERT INTO `calculo` (`id_calculo`, `numero`, `desc_calculo`, `fecha`, `id_usuario`, `resultado`) VALUES
(1, 4, '4: 2 + 3   = 5', '0000-00-00 00:00:00', 1, 0),
(2, 8, '8: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:00:00', 1, 0),
(3, 8, '8: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:00:00', 1, 0),
(4, 8, '8: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:00:00', 1, 0),
(5, 8, '8: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:00:00', 1, 0),
(6, 8, '8: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:00:00', 1, 0),
(7, 8, '8: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:00:00', 1, 0),
(8, 8, '8: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:00:00', 1, 0),
(9, 8, '8: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:00:00', 1, 0),
(10, 8, '8: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:00:00', 1, 0),
(11, 8, '8: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:00:00', 1, 0),
(12, 5, '5: 2 + 3 + 5   = 10', '2023-03-30 00:00:00', 1, 0),
(13, 5, '5: 2 + 3 + 5   = 10', '2023-03-30 00:00:00', 1, 0),
(14, 9, '9: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:00:00', 1, 17),
(15, 9, '9: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:10:59', 1, 17),
(16, 8, '8: 2 + 3 + 5 + 7   = 17', '2023-03-30 00:11:14', 1, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculo`
--
ALTER TABLE `calculo`
  ADD PRIMARY KEY (`id_calculo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calculo`
--
ALTER TABLE `calculo`
  MODIFY `id_calculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calculo`
--
ALTER TABLE `calculo`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
