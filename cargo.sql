-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Abr-2022 às 10:00
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cargo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `escritorio` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idade` int NOT NULL,
  `salario` double(11,4) NOT NULL,
  `admissao` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id`, `cargo`, `nome`, `escritorio`, `idade`, `salario`, `admissao`) VALUES
(1, 'Suporte Técnico ', 'Isabel ', 'Joinville', 42, 2350.0000, '2017-04-14'),
(2, 'Escritora', 'Filomena', 'Espanha', 52, 2350.0000, '1986-04-12'),
(3, 'Gerente de Desenvolvimento', 'Carlos Uchoa', 'Joinville', 38, 3500.0000, '2020-08-12'),
(4, 'Desenvolvedor Serior', 'Maurício', 'Pirabeiraba', 42, 7213.5000, '2002-04-05'),
(5, 'Accountant', 'Airi Satou', 'Tokyo', 33, 162700.0000, '0201-08-20'),
(6, 'Chief Executive Officer (CEO)', 'Angelica Ramos', 'London', 47, 1200000.0000, '0200-09-20'),
(7, 'Junior Technical Author', 'Ashton Cox', 'San Francisco', 66, 86000.0000, '0201-09-20'),
(8, 'Software Engineer', 'Bradley Greer', 'London', 41, 132000.0000, '0200-02-20'),
(9, 'Software Engineer', 'Brenden Wagner', 'San Francisco', 28, 206850.0000, '0206-01-20'),
(10, 'Integration Specialist', 'Brielle Williamson', 'New York', 61, 372000.0000, '0202-02-20'),
(11, 'Software Engineer', 'Bruno Nash', 'London', 38, 163500.0000, '0205-01-20'),
(12, 'Pre-Sales Support', 'Caesar Vance', 'New York', 21, 106450.0000, '0202-01-20'),
(13, 'Sales Assistant', 'Cara Stevens', 'New York', 46, 145600.0000, '0202-01-20'),
(14, 'Senior Javascript Developer', 'Cedric Kelly', 'Edinburgh', 22, 433060.0000, '0203-02-20'),
(15, 'Regional Director', 'Charde Marshall', 'San Francisco', 36, 470600.0000, '0200-08-20'),
(16, 'Javascript Developer', 'Colleen Hurst', 'San Francisco', 39, 205500.0000, '0209-09-20'),
(17, 'Personnel Lead', 'Dai Rios', 'Edinburgh', 35, 217500.0000, '0209-02-20'),
(18, 'Customer Support', 'Donna Snider', 'New York', 27, 112000.0000, '0201-01-20'),
(19, 'Sales Assistant', 'Doris Wilder', 'Sydney', 23, 85600.0000, '0209-00-20'),
(20, 'Support Engineer', 'Finn Camacho', 'San Francisco', 47, 87500.0000, '0207-09-20'),
(21, 'Chief Operating Officer (COO)', 'Fiona Green', 'San Francisco', 48, 850000.0000, '0203-00-20'),
(22, 'Accountant', 'Garrett Winters', 'Tokyo', 63, 170750.0000, '0207-01-20'),
(23, 'Team Leader', 'Gavin Cortez', 'San Francisco', 22, 235500.0000, '0200-08-20'),
(24, 'Developer', 'Gavin Joyce', 'Edinburgh', 42, 92575.0000, '0202-00-20'),
(25, 'Systems Administrator', 'Gloria Little', 'New York', 59, 237500.0000, '0204-09-20'),
(26, 'Senior Marketing Designer', 'Haley Kennedy', 'London', 43, 313500.0000, '0202-02-20'),
(27, 'Regional Director', 'Hermione Butler', 'London', 47, 356250.0000, '0203-01-20'),
(28, 'Sales Assistant', 'Herrod Chandler', 'San Francisco', 59, 137500.0000, '0208-02-20'),
(29, 'Secretary', 'Hope Fuentes', 'San Francisco', 41, 109850.0000, '0202-00-20'),
(30, 'Office Manager', 'Howard Hatfield', 'San Francisco', 51, 164500.0000, '0202-08-20'),
(31, 'Director', 'Jackson Bradshaw', 'New York', 65, 645750.0000, '0209-08-20'),
(32, 'Office Manager', 'Jena Gaines', 'London', 30, 90560.0000, '0202-08-20'),
(33, 'Development Lead', 'Jenette Caldwell', 'New York', 30, 345000.0000, '0209-01-20'),
(34, 'Junior Javascript Developer', 'Jennifer Acosta', 'Edinburgh', 43, 75650.0000, '0202-03-20'),
(35, 'Regional Director', 'Jennifer Chang', 'Singapore', 28, 357650.0000, '0201-00-20'),
(36, 'Developer', 'Jonas Alexander', 'San Francisco', 30, 86500.0000, '0207-00-20'),
(37, 'Systems Administrator', 'Lael Greer', 'London', 21, 103500.0000, '0202-09-20'),
(38, 'Post-Sales support', 'Martena Mccray', 'Edinburgh', 46, 324050.0000, '0203-01-20'),
(39, 'Javascript Developer', 'Michael Bruce', 'Singapore', 29, 183000.0000, '0206-01-20'),
(40, 'Marketing Designer', 'Michael Silva', 'London', 66, 198500.0000, '0201-02-20'),
(41, 'Integration Specialist', 'Michelle House', 'Sydney', 37, 95400.0000, '0206-01-20'),
(42, 'Support Engineer', 'Olivia Liang', 'Singapore', 64, 234500.0000, '0202-01-20'),
(43, 'Chief Financial Officer (CFO)', 'Paul Byrd', 'New York', 64, 725000.0000, '0206-00-20'),
(44, 'Technical Author', 'Prescott Bartlett', 'London', 27, 145000.0000, '0205-01-20'),
(45, 'Support Lead', 'Quinn Flynn', 'Edinburgh', 22, 342000.0000, '0203-03-20'),
(46, 'Integration Specialist', 'Rhona Davidson', 'Tokyo', 55, 327900.0000, '0200-00-20'),
(47, 'Support Engineer', 'Sakura Yamamoto', 'Tokyo', 37, 139575.0000, '0208-09-20'),
(48, 'Data Coordinator', 'Serge Baldwin', 'Singapore', 64, 138575.0000, '0204-02-20'),
(49, 'Regional Director', 'Shad Decker', 'Edinburgh', 51, 183000.0000, '0201-08-20'),
(50, 'Regional Marketing', 'Shou Itou', 'Tokyo', 20, 163000.0000, '0208-01-20'),
(51, 'Software Engineer', 'Sonya Frost', 'Edinburgh', 23, 103600.0000, '0202-08-20'),
(52, 'Developer', 'Suki Burks', 'London', 53, 114500.0000, '0200-09-20'),
(53, 'Regional Director', 'Tatyana Fitzpatrick', 'London', 19, 385750.0000, '0203-00-20'),
(54, 'Developer', 'Thor Walton', 'New York', 61, 98540.0000, '0208-03-20'),
(55, 'System Architect', 'Tiger Nixon', 'Edinburgh', 61, 320800.0000, '0204-01-20'),
(56, 'Office Manager', 'Timothy Mooney', 'London', 37, 136200.0000, '0202-08-20'),
(57, 'Marketing Designer', 'Unity Butler', 'San Francisco', 47, 85675.0000, '0202-09-20'),
(58, 'Financial Controller', 'Vivian Harrell', 'San Francisco', 62, 452500.0000, '0202-09-20'),
(59, 'Chief Marketing Officer (CMO)', 'Yuri Berry', 'New York', 40, 675000.0000, '0206-09-20'),
(60, 'Software Engineer', 'Zenaida Frank', 'New York', 63, 125250.0000, '0201-00-20'),
(61, 'Software Engineer', 'Zorita Serrano', 'San Francisco', 56, 115000.0000, '0206-02-20'),
(62, 'desenvolvedor jr', 'ISABEL BOAVENTURA PEREIRA', 'joinville', 42, 2350.0000, '0000-00-00'),
(63, 'Desenvolvedor Web', 'Celke', 'Curitiba', 45, 6530.0000, '0000-00-00'),
(64, 'programador jr', 'ingrid', 'Joinville', 21, 1250.0000, '2022-03-10'),
(65, 'programador jr', 'marcel', 'joinville', 21, 1250.0000, '2022-03-10'),
(66, 'desenvolvedor jr', 'João Gabriel', 'Porto Alegre', 19, 1650.0000, '2022-03-10'),
(67, 'desenvolvedor jr', 'Alexia', 'Porto Alegre', 17, 1650.0000, '0000-00-00'),
(68, 'qualquer', 'teste', 'qualquer', 10, 1010.0000, '0000-00-00'),
(69, 'qualquer', 'ISABEL BOAVENTURA PEREIRA', 'qualquer', 17, 1250.0000, '2022-03-10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
