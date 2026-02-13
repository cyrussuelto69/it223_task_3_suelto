-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2026 at 09:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garciadb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `peopletbl`
--

CREATE TABLE `peopletbl` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peopletbl`
--

INSERT INTO `peopletbl` (`first_name`, `last_name`, `email`, `age`, `gender`, `birth_date`, `city`) VALUES
('John', 'Doe', 'john.doe@example.com', 28, 'Male', '1998-05-12', 'New York'),
('Jane', 'Smith', 'jane.smith@example.com', 34, 'Female', '1988-09-23', 'Los Angeles'),
('Michael', 'Johnson', 'michael.johnson@example.com', 45, 'Male', '1979-12-01', 'Chicago'),
('Emily', 'Davis', 'emily.davis@example.com', 22, 'Female', '2001-03-17', 'Houston'),
('William', 'Brown', 'william.brown@example.com', 30, 'Male', '1993-07-05', 'Phoenix'),
('Olivia', 'Wilson', 'olivia.wilson@example.com', 27, 'Female', '1996-11-11', 'Philadelphia'),
('James', 'Taylor', 'james.taylor@example.com', 50, 'Male', '1973-02-20', 'San Antonio'),
('Sophia', 'Anderson', 'sophia.anderson@example.com', 29, 'Female', '1994-06-08', 'San Diego'),
('Benjamin', 'Thomas', 'benjamin.thomas@example.com', 40, 'Male', '1983-08-30', 'Dallas'),
('Ava', 'Jackson', 'ava.jackson@example.com', 33, 'Female', '1990-04-14', 'San Jose'),
('Lucas', 'White', 'lucas.white@example.com', 26, 'Male', '1997-10-22', 'Austin'),
('Mia', 'Harris', 'mia.harris@example.com', 24, 'Female', '1999-01-05', 'Jacksonville'),
('Henry', 'Martin', 'henry.martin@example.com', 38, 'Male', '1985-09-15', 'Fort Worth'),
('Charlotte', 'Thompson', 'charlotte.thompson@example.com', 31, 'Female', '1992-07-27', 'Columbus'),
('Alexander', 'Garcia', 'alexander.garcia@example.com', 36, 'Male', '1987-12-10', 'San Francisco'),
('Amelia', 'Martinez', 'amelia.martinez@example.com', 23, 'Female', '2000-02-19', 'Charlotte'),
('Daniel', 'Robinson', 'daniel.robinson@example.com', 41, 'Male', '1982-05-03', 'Indianapolis'),
('Harper', 'Clark', 'harper.clark@example.com', 28, 'Female', '1998-08-21', 'Seattle'),
('Ethan', 'Rodriguez', 'ethan.rodriguez@example.com', 35, 'Male', '1989-11-02', 'Denver'),
('Ella', 'Lewis', 'ella.lewis@example.com', 30, 'Female', '1993-03-09', 'Washington');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
