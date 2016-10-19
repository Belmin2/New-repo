
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2016 at 10:20 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a1829662_Belmo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `projekat1`
--

CREATE TABLE `projekat1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Ime` varchar(65) COLLATE latin1_general_ci NOT NULL,
  `Prezime` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Password` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `Kratki_opis` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `Dugi_opis` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Grad` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `projekat1`
--

INSERT INTO `projekat1` VALUES(15, 'Alem', 'Peco', 'Alem.peco@hotmail.com', 'Alem4444', 'Rodjen sam u Travniku, Imam 18 godina.', 'Zavrsio sam Medicinsku skolu, trenutno studiram na Univerzitetu u Tuzli zelja mi je da postanem doktor.', 'Travnik');
INSERT INTO `projekat1` VALUES(14, 'Vedin', 'Karic', 'Vedin123@gmail.com', 'vedin12222', 'Rodjen sam u Zenici imam 17 godina.', 'Trenutno studiram na Masinskom Fakultetu u Zenici, zelja mi je da postanem inzinjer.', 'Zenica');
INSERT INTO `projekat1` VALUES(13, 'Belmin', 'Krak', 'bvk387@gmail.com', '1233455324523', 'Rodjen sam u Travniku, Imam 18 godina.', 'Zavrsio sam Elektrotehnicku skolu, zelja mi je da postanem uspjesan programer.', 'Travnik');
INSERT INTO `projekat1` VALUES(20, 'Adnan', 'Omerdic', 'Ado@hotmail.com', 'Adnan1234', 'Rodjen sam u Mostaru, imam 18 godina, bavim se nogometom.', '...', 'Mostar');
