-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 02:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_school`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Add_Person` (IN `Input_first_name` VARCHAR(30), IN `Input_last_name` VARCHAR(30), IN `Input_middle_name` VARCHAR(30), IN `Input_extension_name` VARCHAR(6), IN `Input_sex` CHAR(1), IN `Input_birth_date` DATE, IN `Input_age` INT(2), IN `Input_home_address` VARCHAR(75), IN `Input_civil_status` VARCHAR(12), IN `Input_religion` VARCHAR(20), IN `Input_nationality` VARCHAR(20), IN `Input_boarding_address` VARCHAR(75), IN `Input_contact_number` CHAR(11), IN `Input_email_address` VARCHAR(25))   BEGIN

	INSERT INTO `person` (`last_name`, `first_name`, `middle_name`, `extension_name`, `sex`, `birth_date`, `age`, `home_address`, `civil_status`, `religion`, `nationality`, `boarding_address`, `contact_number`, `email_address`) 
    VALUES (Input_first_name,Input_last_name, Input_middle_name, Input_extension_name,Input_sex, Input_birth_date, Input_age, Input_home_address, Input_civil_status, Input_religion, Input_nationality, Input_boarding_address, Input_contact_number, Input_email_address);
    
    
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_ID` int(9) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `extension_name` varchar(6) NOT NULL,
  `sex` char(1) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(2) DEFAULT NULL,
  `home_address` varchar(75) NOT NULL,
  `civil_status` varchar(12) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `boarding_address` varchar(75) NOT NULL,
  `contact_number` char(11) NOT NULL,
  `email_address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_ID`, `first_name`, `last_name`, `middle_name`, `extension_name`, `sex`, `birth_date`, `age`, `home_address`, `civil_status`, `religion`, `nationality`, `boarding_address`, `contact_number`, `email_address`) VALUES
(1, '', '', '', '', 'F', '0000-00-00', 21, '', '', 'catholic', 'filipino', '', '', ''),
(2, '', '', 'Palacpac', '', 'M', '0000-00-00', 21, '', '', 'catholic', 'filipino', '', '', ''),
(3, '', 'Pasion', 'Palacpac', '', 'M', '2001-10-23', 21, 'SAN JOSE, BAGGAO, CAGAYAN', 'Single', 'catholic', 'filipino', 'SAN JOSE, BAGGAO, CAGAYAN', '09654836960', 'kangkangpasion18@gmail.co'),
(4, '', 'Pasion', 'Palacpac', '', 'M', '2001-10-23', 21, 'SAN JOSE, BAGGAO, CAGAYAN', 'Single', 'catholic', 'filipino', 'SAN JOSE, BAGGAO, CAGAYAN', '09654836960', 'kangkangpasion18@gmail.co'),
(5, 'Nerica', 'Pasion', 'Palacpac', '', 'M', '2001-10-23', 21, 'SAN JOSE, BAGGAO, CAGAYAN', 'Single', 'catholic', 'filipino', 'SAN JOSE, BAGGAO, CAGAYAN', '09654836960', 'kangkangpasion18@gmail.co'),
(6, 'jenerwin', 'balucay', 'palad', '/', 'M', '2023-09-14', 17, 'AMERICA', 'Single', 'catholic', 'AMERICAN', 'SA', '', ''),
(7, 'Alvin Ian', 'Dela Cruz', 'Asuncion', 'Sr.', 'M', '1880-09-14', 69, 'Sa', 'Single', '', '', '', '', ''),
(8, 'Alvin Ian', 'Dela Cruz', 'Asuncion', 'Sr.', 'M', '1880-09-14', 69, 'San Jose Baggao Cagayan', 'Single', 'FilAm', 'INC', 'N/A', '0254376490', 'alvinian@gamil.com'),
(9, 'Juan', 'Dela Cruz', 'Penduko', 'jr.', 'M', '1999-07-11', 23, 'Heavenly earth', 'Maried', 'Chinese', 'budism', 'n/a', '0678324576', 'juandelacruz@gmail.com'),
(10, 'Juan', 'Dela Cruz', 'Penduko', 'jr.', 'M', '1999-07-11', 23, 'Heavenly earth', 'Maried', 'Chinese', 'budism', 'n/a', '0678324576', 'juandelacruz@gmail.com'),
(11, 'babylyn', 'salvador', 'agustin', '', 'F', '2020-12-15', 20, 'asinga via baggao cagayan', 'Maried', 'korean', 'born this way', 'n/a', '0953482080', 'babylynsalvador@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
