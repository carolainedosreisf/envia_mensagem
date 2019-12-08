-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Ago-2019 às 13:06
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exercicio_01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `nome`, `telefone`, `email`, `assunto`, `mensagem`) VALUES
(5, 'Amanda', '8888-8888', 'amanda.torres@gmail.com', 'Quarto teste', 'Por favor leia esta mensagem, é o primeiro teste.'),
(2, 'Carolaine', '996725458', 'caroldosreis97@gmail.com', 'Primeiro teste', 'Por favor leia esta mensagem, é o primeiro teste.'),
(3, 'David', '9999-9999', 'david.vitor@gmail.com', 'Segundo teste', 'Por favor leia esta mensagem, é o segundo teste.'),
(4, 'Zaira', '5555-5555', 'zaira.souza@gmail.com', 'Terceiro teste', 'Por favor leia esta mensagem, é o terceiro teste.'),
(19, 'Bela', '1111-1111', 'bela.cat@gmail.com', 'Sexto teste', 'Por favor leia esta mensagem, Ã© o sexto teste.'),
(17, 'Aline', '7777-7777', 'aline.santos@gamil.com', 'Quinto teste', 'Por favor leia esta mensagem, Ã© o quinto teste.'),
(22, 'Bela dog', '2222-2222', 'bela.dog@gmail.com', 'Setimo teste', 'Por favor leia esta mensagem, Ã© o setimo teste.'),
(23, 'Bela dog', '2222-2222', 'bela.dog@gmail.com', 'Setimo teste', 'Por favor leia esta mensagem, Ã© o setimo teste.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
