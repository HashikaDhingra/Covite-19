-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 03:05 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covite-19`
--

-- --------------------------------------------------------

--
-- Table structure for table `aregister`
--

CREATE TABLE `aregister` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpsw` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aregister`
--

INSERT INTO `aregister` (`name`, `email`, `phone`, `address`, `account`, `password`, `confirmpsw`, `time`, `info`) VALUES
('Ravi Kumar', 'rkpharma@gmail.com', '8447701684', 'mubarakpur Kamla Bagh , Uttar Pradesh', 'RK Pharma', 'ravik', 'ravik', '7:10am-10pm', 'Mask and sanitizer are available in bulk quantity'),
('Kishor Kumar ', 'hitech@gmail.com', '9463198176', '315/316 SAS Nagar , Mohali', 'Hitech Industry', 'kishore', 'kishore', '7am-8pm', 'All kinds of medicines are available'),
('Sunil dhingra', 'dhingramedicos@gmail.com', '9717727487', 'Sadh Nagar palm colony , Delhi', 'Sunil Medicos', 'sunil123', 'sunil123', '10am-9pm', 'Mask and sanitizer are available in bulk quantity'),
('Vaibhav Arora', 'vaibhav@gmail.com', '9373125560', 'A38/B1 extension , Meerut', 'Vaibhav Oxygen', 'vaibhav ', 'vaibhav', '9am-11pm', 'Oxygen cylinders and cans are available'),
('Doctor Gursheen', 'hospitaljj@gmail.com', '0124-7837398', 'Byculla , Haryana', 'JJ hospital', 'gursheen1', 'gursheen1', '7am-7pm', 'Provide the best service'),
('Free Sewa', 'sewango@gmail.com', '9501287110', 'Sharma Farms highway , Zirakpur', 'Free Sewa', 'sewa@', 'sewa@', '9am-9pm', 'Required medicines and oxygen cylinder are available'),
('Ehsaas Trivedi', 'trvedingo@gmail.com', '0181-7845195', 'Mithu Basti , Jalandhar', 'Ehsaas Foundation', 'trivedi', 'trivedi', '10am-10pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `phno`, `message`) VALUES
('anish ', 'anishratra.ar@gmail.com', '0', 'Good Job'),
('anish ', 'anishratra.ar@gmail.com', '0', 'Good Job'),
('hashika', 'hashika10@gmail.com', '6239075578', 'Fantastic!!!!!!'),
('Avleen', 'Avleenskalra@gmail.com', '9815443955', 'You are working well!'),
('Bhavisha', 'bhavi690@gmail.com', '7845178954', 'Really appreciated!!'),
('Saransh', 'saranshkamal@gmail.com', '9872546854', 'Helpful website!!');

-- --------------------------------------------------------

--
-- Table structure for table `dregister`
--

CREATE TABLE `dregister` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `wphone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpsw` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dregister`
--

INSERT INTO `dregister` (`name`, `email`, `phone`, `wphone`, `address`, `account`, `password`, `confirmpsw`, `time`, `info`) VALUES
('Dr. Raman Kalra', 'ramankalra@gmail.com', '9203990298', '860399298', '345 Urban state, jalandhar', 'Kalra Clinic', '789', '789', '1am-7pm', 'Hope to have best treatment'),
('Dr. Tushar Shah', 'shahclinic@gmail.com', '9239985140', '9239985140', 'mahir road , Meerut', 'Tushar Clinic', '456', '456', '10am-6pm', ''),
('Dr. KS Duggal', 'duggalcare@gmail.com', '7865667538', '7685661244', 'sectr24/7 , Mohali', 'Duggal Hospital', 'asdfg', 'asdfg', '10am-10pm', 'Will provide you the best'),
('Dr. Naman Kumar', 'kumarclinic@gmail.com', '9422473277', '9422473277', 'nanded road , Mumbai', 'Kumar Clinic', 'qwerty', 'qwerty', '8am-11pm', 'Patient health is the first priority'),
('Dr. Lalit Kedia', 'kediaclinic@gmail.com', '9321470560', '9321470560', 'cool road , Gujarat', 'Kedia Clinic', 'kedia', 'kedia', '7am-7pm', 'Home visit is also available'),
('Dr. Mohit Bhat', 'bhatclinic@gmail.com', '8746370763', '9320894983', 'mira road 37 sector , Chandigarh', 'Bhat Clinic', 'bhat', 'bhat', '9am-6pm', 'Prioritize your value'),
('Dr. Vriksha ', 'vrikshahosp@gmail.com', '761922690', '761922577', 'soor basti , Uttar Preadesh', 'Vriksha hospital', 'vriksha', 'vriksha', '10am-10pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `fregister`
--

CREATE TABLE `fregister` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpsw` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fregister`
--

INSERT INTO `fregister` (`name`, `email`, `phone`, `address`, `account`, `password`, `confirmpsw`, `time`, `info`) VALUES
('lakhan singh', 'lakhansingh@gmail.com', '9855022838', 'street no.3,chandigarh', 'Cafe JC\'s', '4533', '4533', '10:00a.m-10:00 p.m', 'Need to book before handed'),
('Paro mehta', 'paromehta@gmail.com', '9971516084', 'NCR,Delhi', 'Paro\'s Kitchen', 'paro123', 'paro123', '9am-9pm', ''),
('Sarvani Mehta', 'mehtasarvani@gmail.com', '8566889000', 'civil line ,panchkula', 'Sarvani House', 'mehta@12', 'mehta@12', '10am-7pm', ''),
('Prabhal S Pannu', 'prabhalpannu@gmail.com', '80578345670', '345 urban state,jalandhar', 'Rotary Club', 'rotary12', 'rotary12', '10am - 7pm', 'We have hundred of members of club scattered all through jalandhar'),
('Aditya kashyap', 'kashyap09@gmail.com', '9788962310', '34 sector mira road, patiala', '3B Foundation', 'adi@123', 'adi@123', '10am-7pm', 'Serve the best'),
('Kamlesh Gupta', 'kamlesh11@gmail.com', '9788962310', 'minar ganga , jaipur', 'Food Sewa', 'kamlesh', 'kamlesh', '8am-7pm', 'Home Delivery available'),
('Disha Chawla', 'dishadisha@gmail.com', '909590001', 'karaar , mohali', 'Chawlaz Restaurant ', 'chawla', 'chawla', '9am-7pm', ''),
('Sukhda Kalra', 'kalrafood@gmail.com', '9665691613', 'gurugaon,delhi', 'Sukhda Kalra', 'kalra', 'kalra', '11am-6pm', 'Serve you the best.'),
('Shilpa Vij', 'shilpa@gmail.com', '9054789151', 'Shop no. 4 , Uttam Nagar , Delhi', 'Shilpa Food', 'shilpa123', 'shilpa123', '7am-5pm', 'Food Delivery is also available.');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `email`, `phone`, `address`, `city`, `state`, `zipcode`) VALUES
('jaya', 'jayadhingra@gmail', 675974367, 'gopal nagar', 'jalandhar', 'punjab', 144008),
('utkarsh', 'vadhwautkarsh@gmail.com', 907896543, '43 sant nagar', 'gujral nagar', 'gujrat', 19907876),
('jaya', 'jayadhingra@gmail', 675974367, 'gopal nagar', 'jalandhar', 'punjab', 144008),
('utkarsh', 'vadhwautkarsh@gmail.com', 907896543, '43 sant nagar', 'gujral nagar', 'gujrat', 19907876);

-- --------------------------------------------------------

--
-- Table structure for table `qregister`
--

CREATE TABLE `qregister` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpsw` varchar(100) NOT NULL,
  `available` varchar(100) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qregister`
--

INSERT INTO `qregister` (`name`, `email`, `phone`, `address`, `account`, `password`, `confirmpsw`, `available`, `info`) VALUES
('Civil Hospital', 'civil@gmail.com', '9815111550', 'panchkula', 'civil hospital', 'civil', 'civil', '20', 'non oxygen beds'),
('Corona Sewa Kendra', 'coronakendra@gmail.com', '9087699800', 'DPS School sector 81 ,faridabad', 'Corona Sewa Kendra', '12345', '12345', '50', 'Non oxygen beds available'),
('Dr. Raman Kalra', 'ramankalra11@gmail.com', '98412030400', 'Teka Naka ,kampty road , Nagpur', 'Hope Hospital', 'hopehope', 'hopehope', '100', 'Oxygen and Non oxygen beds are available'),
('Dr. Kriti Santok', 'santok45@gmail.com', '01724061831', '846 sector 38A , Chandigarh', 'Santok Hospital', 'santok', 'santok', '70', 'ICU beds are available'),
('Sam Kare', 'karebeds@gmail.com', '075298333434', 'nursing home side 422 street1 , Haryana', 'Kare Partners', 'kare', 'kare', '30', 'ICU and Oxygen beds are available'),
('Dr. SG johal', 'johalhops@gmail.com', '9815086965', 'Hoshiarpur , jalandhar', 'Johal Hospital', 'johal', 'johal', '40', 'Non oxygen beds are available');

-- --------------------------------------------------------

--
-- Table structure for table `vregister`
--

CREATE TABLE `vregister` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpsw` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vregister`
--

INSERT INTO `vregister` (`name`, `email`, `phone`, `address`, `account`, `password`, `confirmpsw`, `time`, `info`) VALUES
('Raghvi Arora', 'aarora@gmail.com', '9815136943', 'shop 96/1 main bazaar , Jalandhar', 'Camp Medicare', 'raghvi', 'raghvi', '9am-2pm', ''),
('Satsang Ghar', '', '997749435', 'Mall Road , Amritsar', 'Radha Swami Kendra', 'beas', 'beas', '7am-1pm', ''),
('Dr. Karan Viyas', 'khospital@gmail.com', '9765677888', 'near Fort , Mumbai', 'Kama Hospital', 'karan', 'karan', '10am-10pm', 'Wear your mask,Bring your adhaar card.'),
('JSS school', 'jssschool@gmail.com', '8925477259', 'Grant road , Meerut', 'JSS Muncipal School', '7894', '7894', '8am-11am', 'Maintain Social Distancing'),
('Dr. Gursheen', 'hospitaljj@gmail.com', '0124-7837398', 'Byculla , Haryana', 'JJ Hospital', 'gursheen', 'gursheen', '7am-7pm', 'Provide the best service.'),
('Dr. Bhim Ghai', 'bhimghai@gmail.com', '0181-227837', 'Ravidass Chowk,GTB nagar , Jalandhar', 'Ghai Hospital', 'ghai12', 'ghai12', '9am-9pm', 'Bring the mask'),
('Dr. Vriksha', 'vrikshahosp@gmail.com', '7619226577', 'soor basti , Uttar Pradesh', 'Vriksha Hospital', 'vriksha', 'vriksha', '10am-10pm', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
