-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 03/12/2014 às 17:14
-- Versão do servidor: 5.5.40-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `portaldaturma`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `idAluno` varchar(6) NOT NULL,
  `nomeAluno` varchar(45) NOT NULL,
  `turmaAluno` varchar(6) NOT NULL,
  `matriculaAluno` varchar(12) NOT NULL,
  `senhaAluno` int(6) NOT NULL,
  `emailAluno` varchar(45) NOT NULL,
  `telefoneAluno` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`idAluno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `alunos`
--

INSERT INTO `alunos` (`idAluno`, `nomeAluno`, `turmaAluno`, `matriculaAluno`, `senhaAluno`, `emailAluno`, `telefoneAluno`) VALUES
('d95a0a', 'Patrick Maia', '53', '1200523INFO', 597384, 'patrickmaia@hotmail.com.br', '995047254');

-- --------------------------------------------------------

--
-- Estrutura para tabela `auth_admin`
--

CREATE TABLE IF NOT EXISTS `auth_admin` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `loginAdmin` varchar(45) NOT NULL,
  `senhaAdmin` varchar(45) NOT NULL,
  `nomeAdmin` varchar(45) DEFAULT NULL,
  `emailAdmin` varchar(45) DEFAULT NULL,
  `turmaAdmin` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `auth_admin`
--

INSERT INTO `auth_admin` (`idAdmin`, `loginAdmin`, `senhaAdmin`, `nomeAdmin`, `emailAdmin`, `turmaAdmin`) VALUES
(1, 'pmaia', 'root', 'Patrick Maia', 'patrickmaia@hotmail.com.br', '3INFO'),
(2, 'rmarques', 'root', 'Rodrigo Marques', 'rodmarques@gmail.com', '3INFO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Avisos`
--

CREATE TABLE IF NOT EXISTS `Avisos` (
  `idAviso` int(10) NOT NULL,
  `Remetente` varchar(45) NOT NULL,
  `idTurma` int(10) NOT NULL,
  `Mensagem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplinas`
--

CREATE TABLE IF NOT EXISTS `disciplinas` (
  `idDisciplina` varchar(6) NOT NULL,
  `idTurma` varchar(45) NOT NULL,
  `nomeDisciplina` varchar(15) NOT NULL,
  `idProfessor` varchar(45) NOT NULL,
  PRIMARY KEY (`idDisciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `disciplinas`
--

INSERT INTO `disciplinas` (`idDisciplina`, `idTurma`, `nomeDisciplina`, `idProfessor`) VALUES
('18c9e5', '53', 'MatemÃ¡tica II', '598ea2'),
('b0c366', '53', 'Literatura', '6a190b'),
('f86608', '53', 'Geografia', '6a190b');

-- --------------------------------------------------------

--
-- Estrutura para tabela `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `idDisciplina` varchar(6) NOT NULL,
  `idAluno` varchar(6) NOT NULL,
  `nota` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `notas`
--

INSERT INTO `notas` (`idDisciplina`, `idAluno`, `nota`) VALUES
('b0c366', 'd95a0a', '6-7-7-6'),
('18c9e5', 'd95a0a', '6,1-7-5,2-4,3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `idProfessor` varchar(6) NOT NULL,
  `nomeProfessor` varchar(45) NOT NULL,
  `matriculaProfessor` varchar(20) NOT NULL,
  `senhaProfessor` int(6) NOT NULL,
  `emailProfessor` varchar(45) NOT NULL,
  `telefoneProfessor` varchar(11) NOT NULL,
  PRIMARY KEY (`idProfessor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `professores`
--

INSERT INTO `professores` (`idProfessor`, `nomeProfessor`, `matriculaProfessor`, `senhaProfessor`, `emailProfessor`, `telefoneProfessor`) VALUES
('598ea2', 'Wellerson', '1323', 286715, 'well@son.com', '987'),
('6a190b', 'Caio Castro', '7895', 150642, 'caio@castro.com', '954');

-- --------------------------------------------------------

--
-- Estrutura para tabela `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
  `idTurma` int(5) NOT NULL,
  `Turma` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `turmas`
--

INSERT INTO `turmas` (`idTurma`, `Turma`) VALUES
(53, '3INFO');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
