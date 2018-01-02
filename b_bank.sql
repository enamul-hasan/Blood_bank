-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2015 at 08:23 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `donor_id` int(10) NOT NULL ,
  `donor_name` varchar(255) NOT NULL,
  `donor_email` varchar(255) NOT NULL,
  `donor_contact` varchar(255) NOT NULL,
  `donor_address` varchar(255) NOT NULL,
  `donor_blood_group` varchar(255) NOT NULL,
  PRIMARY KEY (`donor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1  ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `donor_name`, `donor_email`, `donor_contact`, `donor_address`,`donor_blood_group`) VALUES
(1, 'RASHED', 'rashed@gmail.com', '01776445218', 'IUBAT, DHAKA, BANGLADESH','A+'),
(2, 'RAHIM', 'rahim@iubat.edu', '017891245', 'GULSHAN, DHAKA','B+'),
(3, 'Shaila', 'shaila@gmail.com', '01686445218', '117/A,Road-2,Sector-11,Uttara, DHAKA, BANGLADESH','O+'),
(4, 'Dipty', 'dipty@gmail.com', '01976545318', '113/B,Road-4,Sector-6,Uttara, DHAKA, BANGLADESH','A+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Table structure for table `acceptor`
--

CREATE TABLE IF NOT EXISTS `acceptor` (
  `acceptor_id` int(10) NOT NULL ,
  `acceptor_name` varchar(255) NOT NULL,
  `acceptor_email` varchar(255) NOT NULL,
  `acceptor_contact` varchar(255) NOT NULL,
  `acceptor_address` varchar(255) NOT NULL,
  `acceptor_blood_group` varchar(255) NOT NULL,
  PRIMARY KEY (`acceptor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

--
-- Dumping data for table `acceptor`
--

INSERT INTO `acceptor` (`acceptor_id`, `acceptor_name`, `acceptor_email`, `acceptor_contact`, `acceptor_address`,`acceptor_blood_group`) VALUES
(101, 'Shazid', 'Shazid@gmail.com', '01776445218', 'Uttara, DHAKA, BANGLADESH','A+'),
(102, 'Shakil', 'shakil@iubat.edu', '017891245', 'GULSHAN, DHAKA','B+'),
(103, 'Ovi', 'ovi@gmail.com', '01785595318', 'Sector-11,Mirpur, DHAKA, BANGLADESH','A-'),
(104, 'Dipshikha', 'dipshikha@gmail.com', '01676547778', 'Uttara, DHAKA, BANGLADESH','AB-');

--
-- Table structure for table `blood`
--

CREATE TABLE IF NOT EXISTS `blood` (
  `donor_id` int(10) NOT NULL ,
  `blood_code` int(10) NOT NULL ,
  `blood_group` varchar(255) NOT NULL,
  PRIMARY KEY (`blood_code`)
)ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`donor_id`, `blood_code`, `blood_group`) VALUES
(1,1001,'A+'),
(2,1002,'B+'),
(3,1003,'O+'),
(4,1004,'A+');

--
-- Table structure for table `blood_request`
--

CREATE TABLE IF NOT EXISTS `blood_request` (
  `acceptor_id` int(10) NOT NULL ,
  `blood_type` varchar(255) NOT NULL
  
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`acceptor_id`, `blood_type`) VALUES
(101,'A+'),
(102,'B+'),
(103,'A-'),
(104,'AB-');
