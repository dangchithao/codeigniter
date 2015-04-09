-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2012 at 08:15 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `_ciex01`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(12, 'AM', 'Amenia'),
(13, 'AW', 'Aruba'),
(14, 'VP', 'Vinh Phuc'),
(15, 'VY', 'Vinh Yen');

-- --------------------------------------------------------

--
-- Table structure for table `countries_users`
--

CREATE TABLE IF NOT EXISTS `countries_users` (
  `id` int(4) NOT NULL,
  `country_id` int(4) NOT NULL,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries_users`
--

INSERT INTO `countries_users` (`id`, `country_id`, `user_id`) VALUES
(1, 12, 2),
(2, 14, 1),
(3, 13, 3),
(4, 15, 16);

-- --------------------------------------------------------

--
-- Table structure for table `lusers`
--

CREATE TABLE IF NOT EXISTS `lusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pword` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lusers`
--

INSERT INTO `lusers` (`id`, `user`, `pword`) VALUES
(1, 'dangchithao', '9b55150f2a956b86b074a707f5f7f9c7'),
(2, 'admin', 'e6e061838856bf47e1de730719fb2609'),
(3, 'thao', 'e99a18c428cb38d5f260853678922e03'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'root', 'abc@123', 'kjkjjkjkjkjkjk'),
(2, 'Jame Smith', 'abc', 'jame@twosmith.com'),
(3, 'Dang Chi Thao', 'abc', 'nhocyeuphp@gmail.com'),
(15, 'nhocthamlam', 'abc', 'nhocthamlam@facebook.com'),
(16, 'nhocyeuhoc', 'abc', 'nhocyeuhoc@hotmail.com'),
(19, 'momomo', 'abc', 'momo@momo.mo'),
(20, 'dsggdsg', 'sdghsdg', 'xcb'),
(21, 'dsggdsg', 'sdghsdg', 'xcb');
