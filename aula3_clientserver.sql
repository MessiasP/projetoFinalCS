-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2018 às 13:50
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aula3_clientserver`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricante`
--

CREATE TABLE `fabricante` (
  `fabricante_id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fabricante`
--

INSERT INTO `fabricante` (`fabricante_id`, `nome`) VALUES
(1, 'Microsoft'),
(2, 'Logitech'),
(3, 'Dell');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `painel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `status`, `code`, `senha`, `nome`, `painel`) VALUES
(1, 'ativo', '123', '1234', 'guilherme', 'admin'),
(2, 'ativo', '123', '12345', 'Bruno', 'portaria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `produto_id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `estoque` int(11) DEFAULT '0',
  `preco` float DEFAULT '0',
  `cod_fabricante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`produto_id`, `nome`, `estoque`, `preco`, `cod_fabricante`) VALUES
(1, 'ZHLGTK', 46, 77.13, 1),
(2, 'GGHQYE', 71, 92.25, 1),
(3, 'FW5G0C', 67, 72.52, 1),
(4, 'NRBG8E', 54, 79.58, 1),
(5, 'O42KKQ', 80, 73.37, 1),
(6, 'QP52SQ', 33, 113.86, 1),
(7, '21YGI5', 2, 70.53, 1),
(8, 'OMK9JY', 76, 111.71, 1),
(9, 'GGEA4F', 55, 103.72, 1),
(10, '4JFMCB', 35, 110.15, 1),
(11, 'IL28MU', 93, 93.18, 1),
(12, 'Q9WL87', 54, 95.71, 1),
(13, 'STFEOI', 19, 71.3, 1),
(14, '3D4YPS', 15, 80.3, 1),
(15, 'C9Z26Z', 1, 105.84, 1),
(16, 'XK6670', 30, 72.46, 1),
(17, 'Q6UX08', 31, 118.06, 1),
(18, 'QJYTEL', 7, 81.79, 1),
(19, 'T5XRXR', 45, 78.49, 1),
(20, '6DI9T4', 32, 96.66, 1),
(21, 'ZL98S7', 62, 77.49, 1),
(22, 'Q6QOH8', 43, 115.78, 1),
(23, '2XW76Z', 3, 96.18, 1),
(24, 'P5IDL3', 59, 79.01, 1),
(25, 'ZDJM07', 92, 98.27, 1),
(26, 'TTFIQ7', 54, 83.21, 1),
(27, 'CZLIPT', 16, 99.68, 1),
(28, '89ZITN', 86, 116.01, 1),
(29, 'OOSMJB', 72, 102.38, 1),
(30, 'KQI2TC', 39, 84.53, 1),
(31, 'FL077V', 93, 78.11, 1),
(32, '31VAXP', 85, 114.28, 1),
(33, 'I7A2V9', 27, 109.29, 1),
(34, 'C3K0RC', 41, 105.13, 1),
(35, '8VAGMF', 78, 99.55, 1),
(36, 'L1D25Z', 1, 79.43, 1),
(37, 'NH6ATT', 91, 102.01, 1),
(38, '74ZAWT', 55, 85.17, 1),
(39, 'F0JH7D', 39, 114.13, 1),
(40, 'N6N8R8', 25, 72.06, 1),
(41, 'M6QOLX', 77, 102.66, 1),
(42, 'UA6WFW', 55, 92.29, 1),
(43, '98UQFV', 45, 76.04, 1),
(44, 'M7E51Y', 16, 107.57, 1),
(45, '3HVC9W', 81, 109.62, 1),
(46, '13TMXI', 66, 104.24, 1),
(47, '8GJ35P', 56, 95.98, 1),
(48, 'YU43MG', 72, 85.06, 1),
(49, 'K4OOA4', 20, 119.93, 1),
(50, 'YTQ2T6', 71, 99.15, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`fabricante_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`produto_id`),
  ADD KEY `fabricante_FK` (`cod_fabricante`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fabricante_FK` FOREIGN KEY (`cod_fabricante`) REFERENCES `fabricante` (`fabricante_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
