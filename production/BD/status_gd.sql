-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Out-2018 às 20:59
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `software`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_gd`
--

CREATE TABLE IF NOT EXISTS `status_gd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `status_gd`
--

INSERT INTO `status_gd` (`id`, `nome`) VALUES
(2, 'Triagem'),
(3, 'Pendências de Documentação'),
(7, 'Primeira Análise'),
(8, 'Projeto Indeferido'),
(10, 'Reanálsie do Projeto'),
(11, 'Parecer de Acesso'),
(12, 'Solicitação de Fiscalização'),
(13, 'Fiscalização Agendada'),
(14, 'Refiscalização'),
(15, 'Encaminhado para Comercial');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
