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
-- Database: `bd_autoria`
--
CREATE DATABASE IF NOT EXISTS `bd_autoria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_autoria`;

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `cod_autor` int(10) UNSIGNED NOT NULL,
  `nome_autor` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(320) NOT NULL,
  `nasc` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`cod_autor`, `nome_autor`, `sobrenome`, `email`, `nasc`) VALUES
(1, 'Machado', 'de Assis', 'machado.assis@gmail.com', '1839-06-21'),
(2, 'Clarice', 'Lispector', 'clarice.lispector@gmail.com', '1920-12-10'),
(3, 'Paulo', 'Coelho', 'paulo.coelho@hotmail.com', '1947-08-24'),
(4, 'Jorge', 'Amado', 'jorge.amado@yahoo.com', '1912-08-10'),
(5, 'Cecília', 'Meireles', 'cecilia.meireles@duckduckgo.com', '1901-11-07'),
(6, 'Carlos', 'Drummond de Andrade', 'carlos.drummond@gmail.com', '1902-10-31'),
(7, 'João', 'Guimarães Rosa', 'joao.rosa@outlook.com', '1908-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `autoria`
--

CREATE TABLE `autoria` (
  `cod_autor` int(10) UNSIGNED NOT NULL,
  `cod_livro` int(10) UNSIGNED NOT NULL,
  `data_lancamento` date NOT NULL,
  `editora` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autoria`
--

INSERT INTO `autoria` (`cod_autor`, `cod_livro`, `data_lancamento`, `editora`) VALUES
(1, 1, '1899-03-25', 'Garnier'),
(2, 4, '1977-12-22', 'Rocco'),
(3, 2, '1988-05-01', 'HarperCollins'),
(4, 5, '1956-11-03', 'Livraria Martins Editora'),
(5, 3, '1944-08-15', 'MEC'),
(6, 1, '1930-06-15', 'Livraria Garnier'),
(7, 5, '1956-12-25', 'Livraria José Olympio Editora'),
(1, 3, '1900-01-10', 'Garnier');

-- --------------------------------------------------------

--
-- Table structure for table `livro`
--

CREATE TABLE `livro` (
  `cod_livro` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `ISBN` char(13) NOT NULL,
  `idioma` char(5) NOT NULL,
  `qtde_pag` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `livro`
--

INSERT INTO `livro` (`cod_livro`, `titulo`, `categoria`, `ISBN`, `idioma`, `qtde_pag`) VALUES
(1, 'Dom Casmurro', 'Romance', '9788573264557', 'PT-BR', 256),
(2, 'O Alquimista', 'Ficção', '9780061122415', 'PT-BR', 208),
(3, 'Memórias Póstumas de Brás Cubas', 'Romance', '9788535909554', 'PT-BR', 256),
(4, 'A Hora da Estrela', 'Ficção', '9788520925561', 'PT-BR', 88),
(5, 'Grande Sertão: Veredas', 'Romance', '9788535920139', 'PT-BR', 624);

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
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`cod_autor`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`cod_livro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `cod_autor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `cod_livro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
