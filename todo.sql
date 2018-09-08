-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 08-Set-2018 às 19:46
-- Versão do servidor: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `base`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `detalhes` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `todo`
--

INSERT INTO `todo` (`id`, `nome`, `detalhes`, `status`) VALUES
(21, 'Outra tarefa', 'Uma descrição qualquerr', 1),
(22, 'Exibir resultado', 'Mais uma descrição louca ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
