-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Maio-2019 às 03:15
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro`
--

CREATE TABLE `carro` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `ano` int(4) NOT NULL,
  `combustivel` char(1) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `isNovo` tinyint(1) NOT NULL,
  `portas` char(1) NOT NULL,
  `motor` varchar(5) NOT NULL,
  `cambio` char(1) NOT NULL,
  `lugares` char(1) NOT NULL,
  `qntMin` int(10) NOT NULL,
  `qntMax` int(10) NOT NULL,
  `qntAtual` int(10) NOT NULL,
  `manutencao` decimal(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `moto`
--

CREATE TABLE `moto` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `ano` int(4) NOT NULL,
  `combustivel` char(1) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `isNovo` tinyint(1) NOT NULL,
  `lugares` char(1) NOT NULL,
  `cilindradas` int(4) NOT NULL,
  `qntMin` int(10) NOT NULL,
  `qntMax` int(10) NOT NULL,
  `qntAtual` int(10) NOT NULL,
  `manutencao` decimal(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentacao`
--

CREATE TABLE `movimentacao` (
  `id` int(11) NOT NULL,
  `movimento` char(1) NOT NULL,
  `data` date NOT NULL,
  `quantidade` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tipoVeiculo` char(1) NOT NULL,
  `modelo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movimentacao`
--
ALTER TABLE `movimentacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carro`
--
ALTER TABLE `carro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moto`
--
ALTER TABLE `moto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movimentacao`
--
ALTER TABLE `movimentacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `movimentacao`
--
ALTER TABLE `movimentacao`
  ADD CONSTRAINT `movimentacao_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
