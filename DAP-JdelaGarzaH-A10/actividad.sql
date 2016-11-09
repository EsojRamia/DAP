-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2016 at 04:06 AM
-- Server version: 5.5.41-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `actividad`
--

-- --------------------------------------------------------

--
-- Table structure for table `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
`id` int(3) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `edicion` varchar(20) NOT NULL,
  `año` int(4) NOT NULL,
  `editorial` varchar(20) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `idioma` varchar(15) NOT NULL,
  `pag` int(4) DEFAULT NULL,
  `descr` varchar(60) DEFAULT NULL,
  `codigo` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `autor`, `edicion`, `año`, `editorial`, `isbn`, `idioma`, `pag`, `descr`, `codigo`) VALUES
(1, 'Libro 1', 'José María', '5 edición', 1995, 'Santillana', '9868768', 'Español', 489, 'Es un libro muy interesante', 'QA-1356'),
(2, 'Libro 2', 'Jesus', '6 edicion', 2003, 'colores', '98765', 'ingles', 597, 'Es un libro de ingles', 'D7-9870');

-- --------------------------------------------------------

--
-- Table structure for table `sesion`
--

CREATE TABLE IF NOT EXISTS `sesion` (
`id` int(1) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sesion`
--

INSERT INTO `sesion` (`id`, `usuario`, `pass`) VALUES
(1, 'Jose', '1235'),
(2, 'Jesus', '2345'),
(6, 'Chema', '`tÆª4ˆóÂÝßò§Ê‚\Z«');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registro`
--
ALTER TABLE `registro`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sesion`
--
ALTER TABLE `sesion`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registro`
--
ALTER TABLE `registro`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sesion`
--
ALTER TABLE `sesion`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
