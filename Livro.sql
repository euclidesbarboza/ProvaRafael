-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13/08/2019 às 11:56
-- Versão do servidor: 10.3.16-MariaDB
-- Versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Livro`
--
CREATE DATABASE IF NOT EXISTS `Livro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Livro`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendaLivro`
--

CREATE TABLE `vendaLivro` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `editora` varchar(100) NOT NULL,
  `numEdicao` int(11) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `valor` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `vendaLivro`
--

INSERT INTO `vendaLivro` (`id`, `nome`, `autor`, `editora`, `numEdicao`, `genero`, `descricao`, `valor`) VALUES
(1, 'Enquanto a fila nÃ£o anda', 'Luca Martini', 'Ler', 52, 'auto ajuda', 'um livro para jovens', '52.00'),
(2, 'Enquanto a fila nÃ£o anda', 'Luca Martini', 'Ler', 52, 'auto ajuda', 'um livro para jovens', '0.00'),
(3, 'Biblia', 'Jesus e outros', 'Ceu', 1, 'religioso', 'Um livro parqa alma', '0.00'),
(4, 'Dom Quixote', 'Miguel de Cervantes', 'Francisco de Robles', 19999, 'Romance entre outros', 'Narra as aventuras de quixote', '100.00'),
(5, 'Dom Quixote', 'Miguel de Cervantes', 'Francisco de Robles', 19999, 'Romance entre outros', 'Narra as aventuras de quixote', '99.00'),
(6, 'Dom Quixote', 'Miguel de Cervantes', 'Francisco de Robles', 19999, 'Romance entre outros', 'Narra as aventuras de quixote', '993.00'),
(7, 'Dom Quixote', 'Miguel de Cervantes', 'Francisco de Robles', 19999, 'Romance entre outros', 'Narra as aventuras de quixote', '1993.00'),
(8, 'Dom Quixote', 'Miguel de Cervantes', 'Francisco de Robles', 19999, 'Romance entre outros', 'Narra as aventuras de quixote', '993.00');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `vendaLivro`
--
ALTER TABLE `vendaLivro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `vendaLivro`
--
ALTER TABLE `vendaLivro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
