-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jul-2021 às 20:35
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rgb_images`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `fotografo` varchar(255) DEFAULT NULL,
  `ano` year(4) DEFAULT NULL,
  `caminho` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `images`
--

INSERT INTO `images` (`id`, `nome`, `fotografo`, `ano`, `caminho`) VALUES
(15, 'O Fotógrafo', 'Heitor Leonardo', 2019, '60fb07e9cde26.jpg'),
(16, 'Casamento', 'Louis Cameron', 2017, '60fb0827f0cee.jpg'),
(17, 'Fotografando', 'Walter Kayser', 2018, '60fb08682c6e8.jpg'),
(18, 'Olá Colorido', 'Juliana Xavier', 2020, '60fb0885350b5.jpg'),
(19, 'Diga Xis', 'Charlie Willman', 2016, '60fb08ac9d7ea.jpg'),
(20, 'Dança & Cor', 'Heitor Leonardo', 2016, '60fb08e03f6ab.jpg'),
(21, 'O Vale', 'Giusseppe Antonini', 2019, '60fb08feebb66.jpg'),
(22, 'Os 4migos', 'Scott Phillip', 2015, '60fb093930c78.jpg'),
(23, 'Smile & Sky', 'Joanne Ford', 2019, '60fb0984157c3.jpg'),
(24, 'O Paraíso', 'Carlos Oliveira', 2012, '60fb09bc34e37.jpg'),
(25, 'Resort', 'Harrisson Schrader', 2011, '60fb09ec0d8a4.jpg'),
(26, 'Flor Rosa', 'Kim Ozimura', 2017, '60fb0a09148fe.jpg'),
(27, 'Diamante', 'Clark Richard', 2015, '60fb0a1bd7f8c.jpg'),
(28, 'Monte & Céu', 'Juan Rodriguez', 2014, '60fb0a40ad6e7.jpg'),
(29, 'Aranha', 'Charlie Willman', 2017, '60fb0a587c0c4.jpg'),
(30, 'Cachorro Distraído', 'Walter Kayser', 2019, '60fb0a6ebe31b.jpg'),
(31, 'Caminhando', 'Heitor Leonardo', 2021, '60fb0a87a66b9.jpg'),
(32, 'Inseto Colorido', 'Louis Cameron', 2019, '60fb0aa3b844f.jpg'),
(33, 'Coelhinhos', 'Kim Ozimura', 2019, '60fb0abb7ede2.jpg'),
(34, 'Olhar Poderoso', 'Frank Scott', 2020, '60fb0ad62205b.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
