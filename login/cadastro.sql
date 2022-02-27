-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 14-Jun-2019 às 23:32
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `cadastro`
--
CREATE DATABASE IF NOT EXISTS `cadastro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cadastro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracao`
--

CREATE TABLE IF NOT EXISTS `configuracao` (
  `idconfiguracao` int(11) NOT NULL AUTO_INCREMENT,
  `chave` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idconfiguracao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_usuarios`
--

CREATE TABLE IF NOT EXISTS `dados_usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(50) NOT NULL,
  `Senha` char(15) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Sexo` varchar(15) NOT NULL,
  `DataNasc` varchar(15) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Cep` varchar(20) NOT NULL,
  `Pergunta` varchar(200) NOT NULL,
  `Resposta` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `dados_usuarios`
--

INSERT INTO `dados_usuarios` (`ID`, `Login`, `Senha`, `Nome`, `Email`, `Sexo`, `DataNasc`, `Pais`, `Estado`, `Cidade`, `Cep`, `Pergunta`, `Resposta`) VALUES
(5, 'admin', 'admin', '', '', '', '', '', '', '', '', '', ''),
(6, 'Security', 'security', 'Security', 'sistemsecurity@gmail.com', 'Masculino', '19/12/1996', 'Brasil', 'SP', 'Uru', '16650000', 'tcc', 'automacao residencial'),
(13, 'NatÃ£', 'natÃ£123', 'NatÃ£', 'natÃ£@gmail.com', 'Masculino', '18/10/1987', 'Brasil', 'SP', 'PirajuÃ­', '16650000', 'tcc', 'automacao residencial'),
(14, 'Vitor', 'vitor123', 'Vitor', 'vitor@gmail.com', 'Masculino', '17/12/1970', 'Brasil', 'SP', 'GuarantÃ£', '16570000', 'tcc', 'automacao residencial'),
(15, 'Lucas', 'lucas123', 'Lucas', 'lucas@gmail.com', 'Masculino', '15/03/1998', 'Brasil', 'SP', 'Uru', '16650000', 'tcc', 'automacao residencial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dispositivo_status`
--

CREATE TABLE IF NOT EXISTS `dispositivo_status` (
  `codigo` int(11) NOT NULL,
  `dispositivo` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dispositivo_status`
--

INSERT INTO `dispositivo_status` (`codigo`, `dispositivo`, `status`) VALUES
(22, 'Quarto_2\r\n', 1),
(23, 'Corredor\r\n', 0),
(24, 'Lavanderia\r\n', 1),
(25, 'Banheiro', 1),
(26, 'Cozinha_1', 0),
(27, 'Cozinha_2\r\n', 0),
(28, 'Quarto_1\r\n', 1),
(29, 'Jardim_2', 0),
(30, 'Jardim_1', 1),
(31, 'Sala', 1),
(32, 'Frente', 0),
(40, 'Lavanderia_P', 0),
(41, 'Quarto_1p', 0),
(42, 'Garagem', 1),
(43, 'Frente', 0),
(44, 'Janela', 0),
(50, 'Travar', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lampada`
--

CREATE TABLE IF NOT EXISTS `lampada` (
  `idlampada` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(150) NOT NULL,
  `kwh` varchar(150) NOT NULL,
  `data` datetime NOT NULL,
  `local` varchar(150) NOT NULL,
  `voltagem` varchar(150) NOT NULL,
  PRIMARY KEY (`idlampada`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120 ;

--
-- Extraindo dados da tabela `lampada`
--

INSERT INTO `lampada` (`idlampada`, `marca`, `kwh`, `data`, `local`, `voltagem`) VALUES
(1, 'led', '165', '2019-01-25 00:00:00', 'sala', '127'),
(2, 'lampada', '555', '2019-02-11 00:00:00', 'quarto', '127'),
(3, 'ledLampada', '100', '2019-03-20 00:00:00', 'banheiro', '127'),
(4, 'lampadaLed', '80', '2019-03-21 00:00:00', 'cozinha', '127'),
(5, 'ledLampada', '100', '2019-03-25 00:00:00', 'banheiro', '127'),
(6, 'lampadaLed', '80', '2019-03-01 00:00:00', 'cozinha', '127'),
(25, 'lampada', '50', '2019-03-03 00:00:00', 'banheiro', '127'),
(26, 'lampada', '50', '2019-03-02 00:00:00', 'banheiro', '127'),
(27, 'lampada', '80', '2019-03-04 00:00:00', 'quarto', '127'),
(28, 'lampada', '85', '2019-03-05 00:00:00', 'sala', '127'),
(29, 'lampada', '91', '2019-03-06 00:00:00', 'jardim', '127'),
(30, 'lampada', '100', '2019-03-07 00:00:00', 'quarto2', '127'),
(31, 'lampada', '155', '2019-03-08 00:00:00', 'cozinha', '127'),
(32, 'lampada', '30', '2019-03-09 00:00:00', 'serviço', '127'),
(33, 'lampada', '25', '2019-03-10 00:00:00', 'controle', '127'),
(34, 'lampada', '78', '2019-03-11 00:00:00', 'sala2', '127'),
(35, 'lampada', '45', '2019-03-12 00:00:00', 'corredor', '127'),
(36, 'lampada', '34', '2019-03-13 00:00:00', 'jardim2', '127'),
(37, 'lampada', '55', '2019-03-14 00:00:00', 'sala', '127'),
(39, 'lampada', '99', '2019-03-15 00:00:00', 'sala', '127'),
(40, 'lampada', '25', '2019-03-16 00:00:00', 'sala', '127'),
(41, 'lampada', '96', '2019-03-17 00:00:00', 'sala', '127'),
(42, 'lampada', '35', '2019-03-18 00:00:00', 'sala', '127'),
(43, 'lampada', '87', '2019-03-19 00:00:00', 'sala', '127'),
(44, 'lampada', '41', '2019-03-22 00:00:00', 'sala', '127'),
(45, 'lampada', '82', '2019-03-23 00:00:00', 'sala', '127'),
(46, 'lampada', '65', '2019-03-24 00:00:00', 'sala', '127'),
(47, 'lampada', '120', '2019-03-26 00:00:00', 'sala', '127'),
(48, 'lampada', '73', '2019-03-27 00:00:00', 'sala', '127'),
(49, 'lampada', '100', '2019-03-28 00:00:00', 'sala', '127'),
(50, 'lampada', '125', '2019-03-29 00:00:00', 'sala', '127'),
(51, 'lampada', '115', '2019-03-30 00:00:00', 'sala', '127'),
(52, 'lampada', '136', '2019-03-31 00:00:00', 'sala', '127'),
(55, 'lampada', '259', '2018-01-25 00:00:00', 'sala', '127'),
(56, 'lampada', '459', '2018-02-11 00:00:00', 'sala', '127'),
(57, 'lampada', '128', '2018-03-01 00:00:00', 'sala', '127'),
(58, 'lampada', '92', '2018-03-02 00:00:00', 'sala', '127'),
(59, 'lampada', '110', '2018-03-03 00:00:00', 'sala', '127'),
(68, 'lampada', '65', '2018-03-04 00:00:00', 'area', '127'),
(69, 'lampada', '65', '2018-04-01 00:00:00', 'area', '127'),
(70, 'lampada', '62', '2018-03-05 00:00:00', 'area', '127'),
(71, 'lampada', '52', '2018-03-06 00:00:00', 'area', '127'),
(72, 'lampada', '96', '2018-03-07 00:00:00', 'area', '127'),
(73, 'lampada', '157', '2018-03-08 00:00:00', 'area', '127'),
(74, 'lampada', '98', '2018-03-09 00:00:00', 'area', '127'),
(75, 'lampada', '94', '2018-03-10 00:00:00', 'area', '127'),
(76, 'lampada', '78', '2018-03-11 00:00:00', 'area', '127'),
(77, 'lampada', '35', '2018-03-12 00:00:00', 'area', '127'),
(78, 'lampada', '26', '2018-03-13 00:00:00', 'area', '127'),
(79, 'lampada', '94', '2018-03-14 00:00:00', 'area', '127'),
(80, 'lampada', '120', '2018-03-15 00:00:00', 'area', '127'),
(81, 'lampada', '56', '2018-03-16 00:00:00', 'area', '127'),
(82, 'lampada', '81', '2018-03-17 00:00:00', 'area', '127'),
(83, 'lampada', '60', '2018-03-18 00:00:00', 'area', '127'),
(84, 'lampada', '84', '2018-03-19 00:00:00', 'area', '127'),
(85, 'lampada', '37', '2018-03-20 00:00:00', 'area', '127'),
(86, 'lampada', '159', '2018-03-21 00:00:00', 'area', '127'),
(87, 'lampada', '162', '2018-03-22 00:00:00', 'area', '127'),
(88, 'lampada', '93', '2018-03-23 00:00:00', 'area', '127'),
(89, 'lampada', '72', '2018-03-24 00:00:00', 'area', '127'),
(90, 'lampada', '56', '2018-03-25 00:00:00', 'area', '127'),
(91, 'lampada', '49', '2018-03-26 00:00:00', 'area', '127'),
(92, 'lampada', '110', '2018-03-27 00:00:00', 'area', '127'),
(93, 'lampada', '106', '2018-03-28 00:00:00', 'area', '127'),
(94, 'lampada', '123', '2018-03-29 00:00:00', 'area', '127'),
(95, 'lampada', '107', '2018-03-30 00:00:00', 'area', '127'),
(96, 'lampada', '63', '2018-03-31 00:00:00', 'area', '127'),
(97, 'lampada', '193', '2017-01-01 00:00:00', 'sala', '127'),
(98, 'lampada', '193', '2017-01-01 00:00:00', 'sala', '127'),
(99, 'lampada', '65', '2017-01-02 00:00:00', 'sala', '127'),
(100, 'lampada', '89', '2017-01-03 00:00:00', 'sala', '127'),
(101, 'lampada', '123', '2017-01-04 00:00:00', 'sala', '127'),
(102, 'lampada', '152', '2017-01-05 00:00:00', 'sala', '127'),
(103, 'lampada', '78', '2017-01-06 00:00:00', 'sala', '127'),
(104, 'lampada', '45', '2017-01-07 00:00:00', 'sala', '127'),
(105, 'lampada', '64', '2017-01-08 00:00:00', 'sala', '127'),
(106, 'lampada', '96', '2017-01-09 00:00:00', 'sala', '127'),
(107, 'lampada', '230', '2017-01-10 00:00:00', 'sala', '127'),
(108, 'lampada', '125', '2017-02-01 00:00:00', 'sala', '127'),
(109, 'lampada', '156', '2017-02-02 00:00:00', 'sala', '127'),
(110, 'lampada', '85', '2017-02-03 00:00:00', 'sala', '127'),
(111, 'lampada', '97', '2017-02-04 00:00:00', 'sala', '127'),
(112, 'lampada', '156', '2017-02-05 00:00:00', 'sala', '127'),
(113, 'lampada', '46', '2017-02-06 00:00:00', 'sala', '127'),
(114, 'lampada', '77', '2017-02-07 00:00:00', 'sala', '127'),
(115, 'lampada', '99', '2017-02-08 00:00:00', 'sala', '127'),
(116, 'lampada', '91', '2017-02-09 00:00:00', 'sala', '127'),
(117, 'lampada', '299', '2017-02-10 00:00:00', 'sala', '127'),
(118, 'lampada', '1254', '2017-03-01 00:00:00', 'sala', '127'),
(119, 'lampada', '1924', '2017-04-01 00:00:00', 'sala', '127');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lampada_registro`
--

CREATE TABLE IF NOT EXISTS `lampada_registro` (
  `idlampada_registro` int(11) NOT NULL AUTO_INCREMENT,
  `inicio_registro` datetime DEFAULT NULL,
  `termino_regsitro` datetime DEFAULT NULL,
  `id_lampada` int(11) NOT NULL,
  PRIMARY KEY (`idlampada_registro`),
  KEY `fk_lampada_registro_lampada_idx` (`id_lampada`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sensor`
--

CREATE TABLE IF NOT EXISTS `sensor` (
  `idsensor` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(45) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `local` varchar(45) DEFAULT NULL,
  `voltagem` varchar(45) DEFAULT NULL,
  `potencia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsensor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sensor_registro`
--

CREATE TABLE IF NOT EXISTS `sensor_registro` (
  `idsensor_registro` int(11) NOT NULL AUTO_INCREMENT,
  `inicio_registro` varchar(45) DEFAULT NULL,
  `termino_registro` varchar(45) DEFAULT NULL,
  `sensor_idsensor` int(11) NOT NULL,
  PRIMARY KEY (`idsensor_registro`),
  KEY `fk_sensor_registro_sensor1_idx` (`sensor_idsensor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `lampada_registro`
--
ALTER TABLE `lampada_registro`
  ADD CONSTRAINT `fk_lampada_registro_lampada` FOREIGN KEY (`id_lampada`) REFERENCES `lampadas` (`idlampada`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `sensor_registro`
--
ALTER TABLE `sensor_registro`
  ADD CONSTRAINT `fk_sensor_registro_sensor1` FOREIGN KEY (`sensor_idsensor`) REFERENCES `sensor` (`idsensor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
