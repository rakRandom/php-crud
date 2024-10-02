-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/05/2024 às 06:21
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_autoria`
--
CREATE DATABASE IF NOT EXISTS `bd_autoria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_autoria`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `autor`
--

CREATE TABLE `autor` (
  `cod_autor` int(10) UNSIGNED NOT NULL,
  `nome_autor` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(320) NOT NULL,
  `nasc` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `autor`
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
-- Estrutura para tabela `autoria`
--

CREATE TABLE `autoria` (
  `cod_autor` int(10) UNSIGNED NOT NULL,
  `cod_livro` int(10) UNSIGNED NOT NULL,
  `data_lancamento` date NOT NULL,
  `editora` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `autoria`
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
-- Estrutura para tabela `livro`
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
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`cod_livro`, `titulo`, `categoria`, `ISBN`, `idioma`, `qtde_pag`) VALUES
(1, 'Dom Casmurro', 'Romance', '9788573264557', 'PT-BR', 256),
(2, 'O Alquimista', 'Ficção', '9780061122415', 'PT-BR', 208),
(3, 'Memórias Póstumas de Brás Cubas', 'Romance', '9788535909554', 'PT-BR', 256),
(4, 'A Hora da Estrela', 'Ficção', '9788520925561', 'PT-BR', 88),
(5, 'Grande Sertão: Veredas', 'Romance', '9788535920139', 'PT-BR', 624);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`cod_autor`);

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`cod_livro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `cod_autor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `cod_livro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
