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
-- Estrutura da tabela `geracao_distribuida`
--

CREATE TABLE IF NOT EXISTS `geracao_distribuida` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `protocolo` varchar(20) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `status` varchar(100) NOT NULL,
  `prazo_analise` varchar(300) NOT NULL,
  `prazo_fiscalizacao` varchar(50) NOT NULL,
  `ultima_alteracao` varchar(100) NOT NULL,
  `tecnico` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `kwpico` varchar(50) NOT NULL,
  `data_entrada` varchar(50) NOT NULL,
  `uc` varchar(50) NOT NULL,
  `atribuido` varchar(50) NOT NULL,
  `observacao` varchar(50) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `geracao_distribuida`
--

INSERT INTO `geracao_distribuida` (`id`, `protocolo`, `nome`, `status`, `prazo_analise`, `prazo_fiscalizacao`, `ultima_alteracao`, `tecnico`, `cidade`, `kwpico`, `data_entrada`, `uc`, `atribuido`, `observacao`, `login`) VALUES
(1, 'GD-001-2018', 'Cliente1', '', '', '', '', '', '', '', '', '', '', '', NULL),
(2, 'GD-002-2018', 'Cliente2', '', '', '', '', '', '', '', '', '', '', '', NULL),
(3, 'GD-003-2018', 'Cliente1', '', '', '', '', '', '', '', '', '', '', '', NULL),
(4, 'GD-004-2018', '', 'Validação', '13/09/2018', '13/10/2018', '13/10/2018', 'Arthur Nicolau dos Santos Mendes', 'Selecione uma Cidade...', '', '13/09/2018', '', 'Arthur Mendes', '', 'Arthur Mendes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
