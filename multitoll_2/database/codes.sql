-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Jan-2015 às 01:00
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `code`
--

CREATE TABLE IF NOT EXISTS `code` (
`id` int(11) NOT NULL,
  `code` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=37 ;

--
-- Extraindo dados da tabela `code`
--

INSERT INTO `code` (`id`, `code`) VALUES
(4, 'DPPVMG'),
(5, 'AU6U72KQKI'),
(6, 'IAMU2Y55SP'),
(7, 'KBXIW8'),
(8, 'UJ4DNJ'),
(9, 'SDAFHW'),
(10, 'JCNWX4'),
(11, 'NFPZVS'),
(12, 'DWMEG4'),
(13, 'SK2Z9V'),
(14, 'G3RXUW'),
(15, 'FG2FS8'),
(16, '6K7USD'),
(17, 'R5'),
(18, 'AZ'),
(19, '5J'),
(20, 'VD'),
(21, 'BP'),
(22, 'LH'),
(23, 'JZ'),
(24, 'KU'),
(25, 'T8'),
(26, 'BL'),
(27, 'LE'),
(28, 'QZ'),
(29, 'DJ'),
(30, 'Q4'),
(31, 'ND'),
(32, 'GN'),
(33, '7C'),
(34, 'MP'),
(35, '2N'),
(36, 'BJ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code`
--
ALTER TABLE `code`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
