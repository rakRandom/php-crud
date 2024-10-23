-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_produto`
--
CREATE DATABASE IF NOT EXISTS `bd_produto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_produto`;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `estoque` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `estoque`) VALUES
(1, 'Teclado Mecânico', 22),
(2, 'Monitor Full HD', 4),
(3, 'Gabinete Tower Master', 12),
(4, 'Mouse Gamer DPI 16000', 6),
(5, 'Pen Drive 64GB', 17),
(6, 'Fone de ouvido 360º', 20);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(32) NOT NULL COMMENT 'Não deve ter menos de 3 caracteres.\r\nApenas letras, maiúsculas ou minúsculas, do alfabeto romano, além de números do sistema de numeração decimal tradicional e o ponto final (valor 46 da tabela ascii).',
  `senha` varchar(32) NOT NULL COMMENT 'Não deve ter menos de 8 caracteres.\r\nDeve conter pelo menos um dos seguintes caracteres: !, @, #, $, %, ¨, &, *, (, ).\r\nNão pode conter aspas simples ou duplas, apóstrofo ou barra invertida.'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`nome`, `senha`) VALUES
('neo', 'admin1234*'),
('admin', 'senh4!forte'),
('outro', 'p!nd4m0nh4ng4b@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
