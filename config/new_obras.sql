-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Mar-2015 às 00:03
-- Versão do servidor: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_obras`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
`id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nivel` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `telefone` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nome`, `email`, `login`, `senha`, `nivel`, `ativo`, `telefone`) VALUES
(1, 'lazarone', 'lazarone.info.web@gmail.com', 'lazarone', 'e10adc3949ba59abbe56e057f20f883e', 5, 1, '96042-9643'),
(2, 'Admin novo', 'novo@admin.com.br', 'novo_admin', 'd41d8cd98f00b204e9800998ecf8427e', 1, 0, '91111-0000'),
(3, 'fulano', 'novo2@admin.com.br', 'novo2', '54621b46c1664db5ba7127d8f22aff00', 2, 1, '96042-3469'),
(4, 'teste78', 'teste78@teste.com', 'teste78', 'f8596a7996048c412ff2ddcadcedb5ba', 1, 0, '96042-6042');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE IF NOT EXISTS `tb_cliente` (
`id` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `cpf_cnpj` varchar(32) NOT NULL,
  `nome_razao_social` varchar(100) NOT NULL,
  `tipo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_etapa`
--

CREATE TABLE IF NOT EXISTS `tb_etapa` (
`id` int(11) NOT NULL,
  `porcentagem` float NOT NULL,
  `nome` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_etapa`
--

INSERT INTO `tb_etapa` (`id`, `porcentagem`, `nome`) VALUES
(1, 5, 'pintura');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fase`
--

CREATE TABLE IF NOT EXISTS `tb_fase` (
`id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_fase`
--

INSERT INTO `tb_fase` (`id`, `nome`) VALUES
(1, 'teste01'),
(2, 'teste02'),
(3, 'teste04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE IF NOT EXISTS `tb_funcionario` (
`id` int(11) NOT NULL,
  `cpf` varchar(32) NOT NULL,
  `cidade` varchar(32) NOT NULL,
  `estado` varchar(32) NOT NULL,
  `cargo` varchar(32) NOT NULL,
  `bairro` varchar(32) NOT NULL,
  `cep` varchar(32) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`id`, `cpf`, `cidade`, `estado`, `cargo`, `bairro`, `cep`, `nome`) VALUES
(1, '40002122812', 'Osasco', 'São Paulo', 'Programador', 'Santa Maria', '06150-510', 'Lazarone'),
(2, '774.186.483-16', 'oscasco', 'São Paulo', 'testador', 'Santa Maria', '06150-510', 'Teste novo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_obra`
--

CREATE TABLE IF NOT EXISTS `tb_obra` (
`id` int(11) NOT NULL,
  `inicio` date NOT NULL,
  `termino` date NOT NULL,
  `entrega` date NOT NULL,
  `porcentagem` float NOT NULL,
  `descricao` text NOT NULL,
  `estado` varchar(32) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cidade` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_etapa`
--
ALTER TABLE `tb_etapa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fase`
--
ALTER TABLE `tb_fase`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_obra`
--
ALTER TABLE `tb_obra`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_etapa`
--
ALTER TABLE `tb_etapa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_fase`
--
ALTER TABLE `tb_fase`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_obra`
--
ALTER TABLE `tb_obra`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
