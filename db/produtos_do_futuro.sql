-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/11/2023 às 21:08
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

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
-- Estrutura para tabela `chat`
--

CREATE TABLE `chat` (
  `id_message` int(11) NOT NULL,
  `content` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `chat`
--

INSERT INTO `chat` (`id_message`, `content`, `author`);

-- --------------------------------------------------------

--
-- Estrutura para tabela `infovendedor`
--

CREATE TABLE `infovendedor` (
  `id_vend` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `faculdade` varchar(255) DEFAULT NULL,
  `curso` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `subArea` varchar(255) DEFAULT NULL,
  `inicioCurso` date DEFAULT NULL,
  `finalCurso` date DEFAULT NULL,
  `buscandoEmprego` tinyint(1) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `genero` varchar(255) DEFAULT NULL,
  `nascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `infovendedor`
--

INSERT INTO `infovendedor` (`id_vend`, `email`, `faculdade`, `curso`, `area`, `subArea`, `inicioCurso`, `finalCurso`, `buscandoEmprego`, `cidade`, `genero`, `nascimento`);

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
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`id_log`, `nome_log`, `email_log`, `pw_log`) ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_ti`
--

CREATE TABLE `produto_ti` (
  `id_prod` int(1) NOT NULL COMMENT 'Id increase',
  `id_author` int(1) NOT NULL,
  `nome_prod` varchar(30) NOT NULL,
  `price_prod` float NOT NULL,
  `descricao_prod` mediumtext NOT NULL,
  `subcategoria_prod` int(2) NOT NULL,
  `donwloadUrl_prod` varchar(30) NOT NULL,
  `banner_prod` varchar(40) NOT NULL,
  `carrosselDeImagens_prod` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`carrosselDeImagens_prod`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Protudos apenas de Ti/Programação';

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_message`);

--
-- Índices de tabela `infovendedor`
--
ALTER TABLE `infovendedor`
  ADD PRIMARY KEY (`id_vend`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_log`);

--
-- Índices de tabela `produto_ti`
--
ALTER TABLE `produto_ti`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chat`
--
ALTER TABLE `chat`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `infovendedor`
--
ALTER TABLE `infovendedor`
  MODIFY `id_vend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_log` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `produto_ti`
--
ALTER TABLE `produto_ti`
  MODIFY `id_prod` int(1) NOT NULL AUTO_INCREMENT COMMENT 'Id increase';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
