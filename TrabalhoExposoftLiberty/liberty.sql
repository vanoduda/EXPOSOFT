-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Nov-2022 às 01:41
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liberty`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agencia`
--

CREATE TABLE `agencia` (
  `idagencia` int(11) NOT NULL,
  `imagem` varchar(30) COLLATE utf8_bin NOT NULL,
  `nome` varchar(30) COLLATE utf8_bin NOT NULL,
  `preco` varchar(30) COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `datafinal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `agencia`
--

INSERT INTO `agencia` (`idagencia`, `imagem`, `nome`, `preco`, `data`, `datafinal`) VALUES
(1, 'cataratas.jpeg', 'Cataratas do Iguacu PR', 'R$ 1664,33', '2022-11-20', '2022-11-30'),
(2, 'cataratas.jpeg', 'Cataratas do Iguacu PR', 'R$1014,00', '2023-02-06', '2023-02-12'),
(3, 'japalÃ£oblog.jpg', 'Jalapao', 'R$1.200,00', '2022-12-22', '2023-01-02'),
(4, 'japalÃ£oblog.jpg', 'Jalapao', 'R$968,34', '2023-01-17', '2023-01-25'),
(5, 'atibaiablog.jpg', 'Atibaia', 'R$600,00', '2022-11-20', '2022-11-30'),
(6, 'atibaiablog.jpg', 'Atibaia', 'R$401,00', '2023-02-06', '2023-02-12'),
(7, 'diamantinablog.jpg', 'Diamantina', 'R$500,00', '2022-12-22', '2023-01-02'),
(8, 'diamantinablog.jpg', 'Diamantina', 'R$391,00', '2023-01-17', '2023-01-25'),
(9, 'camposblog.jpg', 'Campos do Jordao', 'R$650,89', '2022-11-20', '2022-11-30'),
(10, 'camposblog.jpg', 'Campos do Jordao', 'R$410,67', '2023-02-06', '2023-02-12'),
(11, 'bragranca.jpg', 'Braganca Paulista', 'R$600,00', '2022-12-22', '2023-01-02'),
(12, 'bragranca.jpg', 'Braganca Paulista', 'R$401,00', '2023-01-17', '2023-01-25'),
(13, 'lencois.jpg', 'Lencois Maranhenses, MA', 'R$ 926,00', '2022-11-20', '2022-11-30'),
(14, 'lencois.jpg', 'Lencois Maranhenses, MA', 'R$800,00', '2023-02-06', '2023-02-12'),
(15, 'costadescobrimento.jpg', 'Costa do Descobrimento, Bahia', 'R$ 705,00', '2022-12-22', '2023-01-02'),
(16, 'costadescobrimento.jpg', 'Costa do Descobrimento, Bahia', 'R$610,00', '2023-01-17', '2023-01-25'),
(17, 'bonito.png', 'Bonito, Mato Grosso do Sul', 'R$ 1.318,00', '2022-11-20', '2022-11-30'),
(18, 'bonito.png', 'Bonito, Mato Grosso do Sul', 'R$ 1.198,00', '2023-02-06', '2023-02-12'),
(19, 'paratyrio.jpg', 'Paraty, Rio de Janeiro', 'R$334,90', '2022-12-22', '2023-01-02'),
(20, 'paratyrio.jpg', 'Paraty, Rio de Janeiro', 'R$290,89', '2023-01-17', '2023-01-25'),
(21, 'pipa.jpg', 'Praia da Pipa, Rio Grande do N', 'R$ 851,00', '2022-11-20', '2022-11-30'),
(22, 'pipa.jpg', 'Praia da Pipa, Rio Grande do N', 'R$769,00', '2023-02-06', '2023-02-12'),
(23, 'monteverde.jpg', 'Monte Verde, MG', 'R$ 2.019,00', '2022-12-22', '2023-01-02'),
(24, 'monteverde.jpg', 'Monte Verde, MG', 'R$ 1.945,00', '2023-01-17', '2023-01-25'),
(25, 'ilhaboipeba.jpg', 'Ilha de Boipeba, BA', 'R$1.181,00', '2022-11-20', '2022-11-30'),
(26, 'ilhaboipeba.jpg', 'Ilha de Boipeba, BA', 'R$1.154,00', '2023-02-06', '2023-02-12'),
(27, 'ilhaboipeba.jpg', 'Ilha de Boipeba, BA', 'R$1.154,00', '2023-02-06', '2023-02-12'),
(28, 'joaopessoa.jpg', 'Joao Pessoa, PB', 'R$ 748,00', '2022-12-22', '2023-01-02'),
(29, 'joaopessoa.jpg', 'Joao Pessoa, PB', 'R$664,00', '2023-01-17', '2023-01-25'),
(30, 'capitoliomg.jpg', 'Capitolio, MG', 'R$863,00', '2022-11-20', '2022-11-30'),
(31, 'capitoliomg.jpg', 'Capitolio, MG', 'R$785,00', '2023-02-06', '2023-02-12'),
(32, 'ubatuba.jpg', 'Ubatuba, SP', 'R$ 1.047,00', '2022-12-22', '2023-01-02'),
(33, 'ubatuba.jpg', 'Ubatuba, SP', 'R$ 986,00', '2023-01-17', '2023-01-25'),
(34, 'gramado.jpg', 'Gramado, RS', 'R$597,00', '2022-11-20', '2022-11-30'),
(35, 'gramado.jpg', 'Gramado, RS', 'R$ 432,00', '2023-02-06', '2023-02-12'),
(36, 'maceio.jpg', 'Maceio, Alagoas', 'R$ 2.326,00', '2022-12-22', '2023-01-02'),
(37, 'maceio.jpg', 'Maceio, Alagoas', 'R$ 1.253,00', '2023-01-17', '2023-01-25'),
(38, 'floripa.jpg.crdownload', 'Florianopolis - SC', 'R$ 697,00', '2022-11-20', '2022-11-30'),
(39, 'floripa.jpg.crdownload', 'Florianopolis - SC', 'R$ 487,00', '2023-02-06', '2023-02-12'),
(40, 'fernandodenoronha.jpg', 'Fernando de Noronha', 'R$ 2.883,00', '2022-12-22', '2023-01-02'),
(41, 'fernandodenoronha.jpg', 'Fernando de Noronha', 'R$ 2.471,00', '2023-01-17', '2023-01-25'),
(42, 'campina.jpg', 'Campina Grande- PB ', 'R$ 1.487,00', '2022-11-20', '2022-11-30'),
(43, 'campina.jpg', 'Campina Grande- PB ', 'R$ 1.310,00', '2023-02-06', '2023-02-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrarusuario`
--

CREATE TABLE `cadastrarusuario` (
  `nome` varchar(25) COLLATE utf8_bin NOT NULL,
  `cpf` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `senha` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cadastrarusuario`
--

INSERT INTO `cadastrarusuario` (`nome`, `cpf`, `email`, `senha`) VALUES
('duda', 374237, 'eduarda.vano@yahoo.com', '123'),
('sophia', 374237, 'sophia.bergamo@scseduca.com.br', '333'),
('', 0, '', ''),
('Henrique', 0, 'henrique.vigano@yahoo.com', '1313'),
('Diamantina', 374237, 'sophia.bergamo@scseduca.com.br', '555'),
('soso', 374237, 'sophia.bergamo@scseduca.com.br', '333'),
('Atibaia', 2147483647, 'roberto_zoboli@outlook.com', '888'),
('coca', 0, 'xuxu.vano@yahoo.com', '555'),
('Atibaia', 374237, 'aaaa_zoboli@outlook.com', '666'),
('Nilson', 374237, 'nilson@yahoo', '222'),
('biquini', 2147483647, 'zzz@zzz', '777'),
('aaa', 0, 'aaa@aaa', '777'),
('marcola', 2147483647, 'marcola@marcola', '111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `nomcard` varchar(30) COLLATE utf8_bin NOT NULL,
  `nuncard` int(11) NOT NULL,
  `codseg` int(11) NOT NULL,
  `bandeira` varchar(30) COLLATE utf8_bin NOT NULL,
  `parcelamento` int(11) NOT NULL,
  `validade` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`nomcard`, `nuncard`, `codseg`, `bandeira`, `parcelamento`, `validade`) VALUES
('duda', 2147483647, 878, 'Visa', 2, '10/10/2022');

-- --------------------------------------------------------

--
-- Estrutura da tabela `presente`
--

CREATE TABLE `presente` (
  `nome` varchar(30) COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `cep` varchar(30) COLLATE utf8_bin NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` int(11) NOT NULL,
  `rua` varchar(30) COLLATE utf8_bin NOT NULL,
  `bairro` varchar(30) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(30) COLLATE utf8_bin NOT NULL,
  `estado` varchar(30) COLLATE utf8_bin NOT NULL,
  `preco` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `presente`
--

INSERT INTO `presente` (`nome`, `data`, `email`, `cep`, `numero`, `complemento`, `rua`, `bairro`, `cidade`, `estado`, `preco`) VALUES
('0', '2005-06-29', '0', '9571300', 0, 898, '0', '0', '0', '0', '0'),
('0', '2003-09-08', '0', '9571300', 0, 999, '0', '0', '0', '0', '0'),
('0', '2005-06-29', '0', '9571300', 0, 999, '0', '0', '0', '0', '0'),
('0', '2003-07-08', '0', '9571300', 11, 222, '0', '0', '0', '0', '0'),
('maio', '2004-08-09', 'roberto_zoboli@outlook.com', '09571300', 787, 90, 'Rua SÃ­lvia', 'OlÃ­mpico', 'SÃ£o Caetano do Sul', 'SP', 'R$600,00'),
('Atibaia', '0000-00-00', '', '', 0, 0, '', '', '', '', ''),
('duda', '2006-08-09', 'ricardo_zoboli@yahoo.com.br', '09571300', 11, 90, 'Rua SÃ­lvia', 'OlÃ­mpico', 'SÃ£o Caetano do Sul', 'SP', 'R$600,00'),
('duda', '2006-08-09', 'eduarda.vano@yahoo.com', '09571300', 11, 90, 'Rua SÃ­lvia', 'OlÃ­mpico', 'SÃ£o Caetano do Sul', 'SP', 'R$600,00'),
('', '0000-00-00', 'henrique.vigano@yahoo.com', '', 0, 0, '', '', '', '', ''),
('duda', '2005-06-29', 'eduardarocha.vano@scseduca.com', '09571300', 11, 898, 'Rua SÃ­lvia', 'OlÃ­mpico', 'SÃ£o Caetano do Sul', 'SP', 'R$600,00'),
('duda', '2005-06-29', 'eduardarocha.vano@scseduca.com', '09571300', 11, 898, 'Rua SÃ­lvia', 'OlÃ­mpico', 'SÃ£o Caetano do Sul', 'SP', 'R$600,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quizpag`
--

CREATE TABLE `quizpag` (
  `nome` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `quizpag`
--

INSERT INTO `quizpag` (`nome`, `email`, `telefone`) VALUES
('11991158781', '', ''),
('11991158781', '', ''),
('Eduarda', 'gg@gg', '11 99115-8781'),
('henrique', 'hh@hh', '11 93396-0312'),
('Vitor', 'vv@vv', '11 99999-9999'),
('Vitor', 'vv@vv', '11 99999-9999'),
('Vitor', 'vv@vv', '11 99999-9999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencia`
--
ALTER TABLE `agencia`
  ADD PRIMARY KEY (`idagencia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agencia`
--
ALTER TABLE `agencia`
  MODIFY `idagencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
