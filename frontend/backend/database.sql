-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2024 at 12:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco_sync360`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(40) NOT NULL,
  `idade_usuario` smallint(6) NOT NULL,
  `estado_usuario` varchar(50) NOT NULL,
  `cidade_usuario` varchar(80) NOT NULL,
  `bairro_usuario` varchar(80) NOT NULL,
  `endereco_usuario` varchar(80) NOT NULL,
  `biografia_usuario` varchar(300) NOT NULL,
  `data_atualizacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `imagem_usuario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `idade_usuario`, `estado_usuario`, `cidade_usuario`, `bairro_usuario`, `endereco_usuario`, `biografia_usuario`, `data_atualizacao`, `imagem_usuario`) VALUES
(4, 'Iago Longen', 19, 'SC', 'Joinville', 'Centro', 'Rua das palmeiras,321', 'Olá recrutador, seja muito bem-vindo ao site desenvolvido por mim para o processo seletivo. O site está disponível para qualquer funcionalidade que tenha sido proposta. Foi feito com dedicação e conhecimento. Espero que goste! Qualquer dúvida, pode entrar em contato pelo telefone (47) 98807-1571.', '2024-05-04 22:11:05', 'frontend/backend/php/img/125667107.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
