-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220613.b3001e4d64
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 05:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qualificas`
--

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

CREATE TABLE `contato` (
  `IDCONTATO` int(11) NOT NULL,
  `TELEFONE_FIXO` varchar(45) DEFAULT NULL,
  `TELEFONE_CELULAR` varchar(45) NOT NULL,
  `SITE` varchar(180) DEFAULT NULL,
  `EMAIL` varchar(180) DEFAULT NULL,
  `ID_CONTATO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contato`
--

INSERT INTO `contato` (`IDCONTATO`, `TELEFONE_FIXO`, `TELEFONE_CELULAR`, `SITE`, `EMAIL`, `ID_CONTATO`) VALUES
(1, '(11) 3687-8261', '', 'https://larjesuscriancas.org.br', 'ajude@larjesuscriancas.org.br', 1),
(2, NULL, '(11) 98167-6258', 'https://vivereh.org.br', NULL, 2),
(3, '(11) 3608-0846', '', 'http://www.centrosocialcarisma.org', 'centrosocial@centrosocialcarisma.org', 3),
(4, '(11) 3682-2158', '', 'https://pestalozziosasco.org.br/', 'info@pestalozziosasco.org.br', 4);

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `IDCURSO` int(11) NOT NULL,
  `NOME_CURSO` varchar(65) NOT NULL,
  `MODALIDADE` varchar(45) DEFAULT NULL,
  `CARGA_HORARIA` varchar(45) DEFAULT NULL,
  `DIA_LETIVO` varchar(45) DEFAULT NULL,
  `PERIODO` varchar(45) DEFAULT NULL,
  `HORARIO` varchar(45) DEFAULT NULL,
  `QTD_VAGAS` varchar(45) DEFAULT NULL,
  `IMAGEM` varchar(180) DEFAULT NULL,
  `ID_CURSO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curso`
--

INSERT INTO `curso` (`IDCURSO`, `NOME_CURSO`, `MODALIDADE`, `CARGA_HORARIA`, `DIA_LETIVO`, `PERIODO`, `HORARIO`, `QTD_VAGAS`, `IMAGEM`, `ID_CURSO`) VALUES
(1, 'OFICINA DE DESENVOLVIMENTO PESSOAL E PROFISSIONAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'OFICINA DE COMUNICACAO E INCLUSAO DIGITAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 'OFICINA DE TEATRO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 'OFICINA DE SACOLA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 'OFICINA DE GESTAO FINANCEIRA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 'OFICINA DE ETICA E CIDADANIA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 'OFICINA DE EMPREENDEDORISMO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 'PROJETO ROBOTICA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 'CURSO DE INGLES BASICO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(10, 'CURSO DE INFORMATICA BASICA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(11, 'NOVO OLHAR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(12, 'MENTES NOTAVEIS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(13, 'CULTURA DIGITAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(14, 'ESPORTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(15, 'MUSICA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(16, 'SUSTENTABILIDADE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(17, 'HORTA HIDROPONICA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(18, 'OFICINA DE MODA SUSTENTAVEL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(19, 'EDUCACAO AMBIENTAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(20, 'PROGRAMA DE APRENDIZAGEM PROFISSIONAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `endereco`
--

CREATE TABLE `endereco` (
  `IDENDERECO` int(11) NOT NULL,
  `ENDERECO` varchar(45) NOT NULL,
  `NUMERO` varchar(45) NOT NULL,
  `COMPLEMENTO` varchar(45) DEFAULT NULL,
  `BAIRRO` varchar(45) NOT NULL,
  `CIDADE` varchar(45) NOT NULL,
  `ESTADO` varchar(45) NOT NULL,
  `CEP` varchar(45) NOT NULL,
  `REGIAO` varchar(45) DEFAULT NULL,
  `UNIDADE` varchar(45) DEFAULT NULL,
  `ID_ENDERECO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `endereco`
--

INSERT INTO `endereco` (`IDENDERECO`, `ENDERECO`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `CIDADE`, `ESTADO`, `CEP`, `REGIAO`, `UNIDADE`, `ID_ENDERECO`) VALUES
(1, 'RUA JOAO KAUFMANN', '437', NULL, 'ROCHDALE', 'OSASCO', 'SAO PAULO', '06220-060', NULL, NULL, 1),
(2, 'RUA SAO PAULO DA CRUZ', '256', NULL, 'JARDIM SANTO ANTONIO', 'OSASCO', 'SAO PAULO', '06130-060', NULL, NULL, 2),
(3, 'RUA SAO BENTO', '273', NULL, 'QUINTAUNA', 'OSASCO', 'SAO PAULO', '06186-140', NULL, NULL, 3),
(4, 'RUA DIONISIO BIZARRO', '415', NULL, 'JARDIM ESTER', 'OSASCO', 'SAO PAULO', '06036-060', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `formulario`
--

CREATE TABLE `formulario` (
  `ID_FORMULARIO` int(11) NOT NULL,
  `NOME` varchar(45) NOT NULL,
  `EMAIL` varchar(180) NOT NULL,
  `TEL_FIXO` varchar(45) DEFAULT NULL,
  `TEL_CELULAR` varchar(45) NOT NULL,
  `MENSAGEM` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formulario`
--

INSERT INTO `formulario` (`ID_FORMULARIO`, `NOME`, `EMAIL`, `TEL_FIXO`, `TEL_CELULAR`, `MENSAGEM`) VALUES
(1, 'CAMILA MARIA DA SILVA BRITO', 'camilam.brito@outlook.com.br', '(11) 3781-1945', '(11) 97378-7520', 'mensagem de teste'),
(2, 'CAMILA MARIA DA SILVA BRITO', 'camilam.brito@outlook.com.br', '(11) 3781-1945', '(11) 97378-7520', 'mensagem de teste'),
(3, 'CAMILA MARIA DA SILVA BRITO', 'camilam.brito@outlook.com.br', '(11) 3781-1945', '(11) 97378-7520', 'mensagem de teste'),
(4, 'Camila Brito', 'camilam.brito@outlook.com.br', '(11) 3781-1945', '(11) 97378-7520', 'mensagem de teste'),
(5, 'Camila Brito', 'camilam.brito@outlook.com.br', '(11) 3781-1945', '(11) 97378-7520', 'mensagem de teste');

-- --------------------------------------------------------

--
-- Table structure for table `instituicao`
--

CREATE TABLE `instituicao` (
  `IDINSTITUICAO` int(11) NOT NULL,
  `RAZAO_SOCIAL` varchar(45) DEFAULT NULL,
  `NOME_FANTASIA` varchar(45) NOT NULL,
  `LOGOTIPO` varchar(180) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instituicao`
--

INSERT INTO `instituicao` (`IDINSTITUICAO`, `RAZAO_SOCIAL`, `NOME_FANTASIA`, `LOGOTIPO`) VALUES
(1, NULL, 'LAR JESUS ENTRE AS CRIANCAS', NULL),
(2, NULL, 'INSTITUTO VIVEREH', NULL),
(3, NULL, 'CENTRO SOCIAL CARISMA', NULL),
(4, NULL, 'ASSOCIACAO PESTALOZZI DE OSASCO', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`IDCONTATO`),
  ADD KEY `ID_CONTATO` (`ID_CONTATO`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`IDCURSO`),
  ADD KEY `ID_CURSO` (`ID_CURSO`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`IDENDERECO`),
  ADD KEY `ID_ENDERECO` (`ID_ENDERECO`);

--
-- Indexes for table `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`ID_FORMULARIO`);

--
-- Indexes for table `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`IDINSTITUICAO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `IDCONTATO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `IDCURSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `IDENDERECO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `formulario`
--
ALTER TABLE `formulario`
  MODIFY `ID_FORMULARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `IDINSTITUICAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `contato_ibfk_1` FOREIGN KEY (`ID_CONTATO`) REFERENCES `instituicao` (`IDINSTITUICAO`);

--
-- Constraints for table `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`ID_CURSO`) REFERENCES `instituicao` (`IDINSTITUICAO`);

--
-- Constraints for table `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`ID_ENDERECO`) REFERENCES `instituicao` (`IDINSTITUICAO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



