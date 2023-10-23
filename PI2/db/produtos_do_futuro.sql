-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/10/2023 às 06:56
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `produtos_do_futuro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `infovendedor`
--

CREATE TABLE `infovendedor` (
  `id_vend` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `facul` varchar(30) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `sub_area` varchar(30) NOT NULL,
  `semestre` float NOT NULL,
  `semestre_total` float NOT NULL,
  `empregado` tinyint(1) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `genero` int(3) NOT NULL,
  `nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `id_log` int(10) NOT NULL,
  `nome_log` varchar(30) NOT NULL,
  `email_log` varchar(30) NOT NULL,
  `pw_log` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `infovendedor`
--
ALTER TABLE `infovendedor`
  ADD PRIMARY KEY (`id_vend`),
  ADD KEY `fk_id` (`id_login`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_log`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_log` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `infovendedor`
--
ALTER TABLE `infovendedor`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_log`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
