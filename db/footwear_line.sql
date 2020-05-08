-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 07:43 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `footwear_line`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `Id_Cat` int(11) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Genero` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`Id_Cat`, `Descripcion`, `Genero`) VALUES
(5, 'Botas y Botines', 'DAMA'),
(6, 'Tacones', 'DAMA'),
(7, 'Sneakers', 'DAMA'),
(8, 'Sandalias', 'DAMA'),
(9, 'Casual', 'DAMA'),
(10, 'Confort', 'DAMA'),
(11, 'De vestir', 'DAMA'),
(12, 'Escolar', 'DAMA'),
(21, 'Botas y botines', 'CABALLERO'),
(22, 'Mocasines', 'CABALLERO'),
(23, 'Sneakers', 'CABALLERO'),
(24, 'Sandalias', 'CABALLERO'),
(25, 'Casual', 'CABALLERO'),
(26, 'Confort', 'CABALLERO'),
(27, 'De Vestir', 'CABALLERO'),
(28, 'Escolar', 'CABALLERO');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`) VALUES
(1, 'Administrador', '', 'admin@gmail.com', '123456', 1),
(2, 'Joseph', '12345', 'josephg059@gmail.com', '', 2),
(4, 'joseph', '12345', 'joseph@gmail.com', '', 2),
(6, 'perlaarroyo', '123456', 'perla@hotmail.com', '', 2),
(7, 'abril arroyo', '123456', 'abril28@hotmail.com', '', 2),
(8, 'fernando caciano', '123456', 'fernando@gmail.com', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `N_Producto` varchar(255) NOT NULL,
  `Descripcion` text NOT NULL,
  `Precio` int(11) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Estatus` tinyint(4) NOT NULL,
  `Id_Cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`Id`, `N_Producto`, `Descripcion`, `Precio`, `Imagen`, `Estatus`, `Id_Cat`) VALUES
(9, 'PRODUCTO--', 'XXXX', 10, 'images/bb2.jpg\r\n	', 1, 28),
(10, 'Ranfo', 'jkn gjanflflanflkewmnflksdlsnfldsnfklsndflkn lkdlknflksnfklndslfknsdlfksdnflkdsnfsdlk cslkdnfsdl flskd fklsdlk lsd c slkc', 20, 'images/c1.png\r\n	', 1, 21),
(11, 'Tacon aguja', 'jkn gjanflflanflkewmnflksdlsnfldsnfklsndflkn lkdlknflksnfklndslfknsdlfksdnflkdsnfsdlk cslkdnfsdl flskd fklsdlk lsd c slkc', 20, 'images/cp1.jpg\r\n	', 1, 5),
(12, 'llll', 'DESQ--', 80, 'images/c2.png\r\n	', 1, 7),
(13, 'nuevaprueba', 'jkn gjanflflanflkewmnflksdlsnfldsnfklsndflkn lkdlknflksnfklndslfknsdlfksdnflkdsnfsdlk cslkdnfsdl flskd fklsdlk lsd c slkc', 1000, 'images/shp4.jpg\r\n	', 1, 5),
(14, 'MeLaPela', 'DESQ', 20, 'images/c1.png\r\n	', 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id_Cat`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Cat` (`Id_Cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `Id_Cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Id_Cat`) REFERENCES `categorias` (`Id_Cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
