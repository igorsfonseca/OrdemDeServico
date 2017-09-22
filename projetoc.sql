-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Set 22, 2017 as 07:43 PM
-- Versão do Servidor: 5.5.8
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `projetoc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `endereco`, `cep`, `telefone`, `email`) VALUES
(1, 'Fulano de Tal', '01501501513', 'Av ...', '00000000', '61000000000', 'fulano@fulano.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `cpf` int(11) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `cep` int(8) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `email` varchar(120) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `cpf`, `endereco`, `cep`, `telefone`, `email`, `usuario`, `senha`) VALUES
(1, 'Fulano', 1503325533, 'Av ...', 0, '6190000000', 'funcionario@funcionario.com', 'funcionario', 'teste'),
(7, 'teste', 1515, 'teste', 0, '6190000000', 'teste@teste.com', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `os`
--

CREATE TABLE IF NOT EXISTS `os` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(200) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cep` int(9) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `servico` varchar(80) NOT NULL,
  `valor` float NOT NULL,
  `atividades` varchar(300) NOT NULL,
  `data` date NOT NULL,
  `situacao` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Extraindo dados da tabela `os`
--

INSERT INTO `os` (`id`, `cliente`, `cpf`, `endereco`, `cep`, `telefone`, `email`, `servico`, `valor`, `atividades`, `data`, `situacao`) VALUES
(56, 'Fulano de Tal', '01501501513', 'Av ...', 0, '61000000000', 'fulano@fulano.com', 'Outros ServiÃ§os', 50, 'Teste', '2017-09-22', 'Aberto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servico` varchar(100) NOT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `servico`, `valor`) VALUES
(1, 'FormataÃ§Ã£o', 0),
(2, 'RemoÃ§Ã£o de VÃ­rus', 0),
(3, 'Desenvolvimento de Sites', 0),
(4, 'ConfiguraÃ§Ã£o de Redes', 0),
(5, 'Troca de peÃ§as', 50),
(6, 'Outros ServiÃ§os', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `email`) VALUES
(1, 'admin', 'teste', 'admin@admin.com');
