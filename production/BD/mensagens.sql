-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Out-2018 às 20:58
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
-- Estrutura da tabela `mensagens`
--

CREATE TABLE IF NOT EXISTS `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` varchar(50) NOT NULL DEFAULT '0',
  `id_para` varchar(50) DEFAULT NULL,
  `id_atribuido` varchar(50) NOT NULL DEFAULT '0',
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `id_cliente`, `id_para`, `id_atribuido`, `mensagem`) VALUES
(38, 'Cícero Filho', 'GD-001-2018', 'Comercial', 'Olá'),
(39, 'Cliente1', 'GD-001-2018', 'Comercial', 'Tudo Bom?'),
(40, 'Arthur Mendes', 'GD-004-2018', 'Comercial', 'Olá'),
(41, 'Cícero Filho', 'GD-004-2018', 'Comercial', 'olá'),
(42, 'Cícero Filho', 'GD-004-2018', 'Comercial', 'boa tarde'),
(43, 'Arthur Mendes', 'GD-004-2018', 'Comercial', 'boa, como vc está?');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
