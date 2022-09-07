-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2015 at 09:52 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nps`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `nps_id` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `date` date NOT NULL,
  `nos` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `applications`
--

REPLACE INTO `applications` (`nps_id`, `date`, `nos`) VALUES
('EG-AMPM-AMPM1', '2015-01-03', 13),
('EG-AMPM-AMPM2', '2015-01-03', 5),
('EG-AMPM-AMPM3', '2015-01-03', 4),
('EG-AMPM-ANVL1', '2015-01-03', 1),
('EG-AMPM-ANVL2', '2015-01-03', 5),
('EG-AMPM-ANVL3', '2015-01-03', 4),
('EG-AMPM-KRTKN', '2015-01-03', 3),
('EG-RCPM-MNDPT1', '2015-01-03', 0),
('EG-RCPM-RCPM1', '2015-01-03', 11),
('EG-RCPM-RCPM2', '2015-01-03', 0),
('EG-RCPM-RCPM3', '2015-01-03', 8),
('EG-RJY-KDYM1', '2015-01-03', 0),
('EG-RJY-KRKD1', '2015-01-03', 2),
('EG-RJY-MNDP1', '2015-01-03', 7),
('EG-RJY-RJY1', '2015-01-03', 6),
('EG-RJY-RJY2', '2015-01-03', 9),
('EG-RJY-RJY3', '2015-01-03', 15),
('EG-RJY-STNGM1', '2015-01-03', 9),
('EG-RJY-STNGM2', '2015-01-03', 15),
('EG-RNGPT-GNDP1', '2015-01-03', 2),
('EG-RNGPT-RNGPT1', '2015-01-03', 15),
('EG-RNGPT-RNGPT2', '2015-01-03', 4),
('EG-RPLM-ATRPM1', '2015-01-03', 7),
('EG-RPLM-KTPT1', '2015-01-03', 15),
('EG-RPLM-KTPT2', '2015-01-03', 4),
('EG-RPLM-KTPT3', '2015-01-03', 9),
('EG-UPGM-UPGM1', '2015-01-03', 10),
('EG-UPGM-UPGM2', '2015-01-03', 4),
('EG-UPGM-UPGM3', '2015-01-03', 11),
('EG-UPGM-UPGM4', '2015-01-03', 7),
('GTR-AMVT-AMVT1', '2015-01-03', 4),
('KRI-GNVM-BPLPD1', '2015-01-03', 3),
('KRI-GNVM-GNVM1', '2015-01-03', 14),
('KRI-GNVM-GNVM2', '2015-01-03', 7),
('KRI-GNVM-GNVM3', '2015-01-03', 5),
('KRI-GTSL-GTSL1', '2015-01-03', 10),
('KRI-GTSL-GTSL2', '2015-01-03', 1),
('KRI-GTSL-MANDAL1', '2015-01-03', 14),
('KRI-MCPTM-PDNA1', '2015-01-03', 8),
('KRI-MLVM-GMPGDM1', '2015-01-03', 1),
('KRI-MLVM-GMPGDM2', '2015-01-03', 0),
('KRI-MLVM-MLVM1', '2015-01-03', 5),
('KRI-VUYR-PMR1', '2015-01-03', 4),
('KRI-VUYR-PMR2', '2015-01-03', 11),
('KRI-VUYR-VUYR1', '2015-01-03', 2),
('KRI-VUYR-VUYR2', '2015-01-03', 1),
('VSP-PNDR-PNDR1', '2015-01-03', 0),
('VSP-PNDR-PNDR2', '2015-01-03', 0),
('WG-BMDL-BMDL1', '2015-01-03', 8),
('WG-BMDL-BMDL2', '2015-01-03', 8),
('WG-BMDL-DWTML1', '2015-01-03', 7),
('WG-BMDL-DWTML2', '2015-01-03', 13),
('WG-BMDL-DWTML3', '2015-01-03', 3),
('WG-BMDL-NDMR1', '2015-01-03', 1),
('WG-BMDL-NDMR2', '2015-01-03', 7),
('WG-BMDL-UNGT1', '2015-01-03', 10),
('WG-BMDL-UNGT2', '2015-01-03', 0),
('WG-TNK-NDVL1', '2015-01-03', 15),
('WG-TNK-PDPR1', '2015-01-03', 8),
('WG-TNK-PNGD1', '2015-01-03', 10),
('WG-TNK-PNGD2', '2015-01-03', 9),
('WG-TNK-PNGD3', '2015-01-03', 14),
('WG-TNK-PRVL11', '2015-01-03', 9),
('WG-TNK-TNK1', '2015-01-03', 9),
('WG-TNK-UDJVRM1', '2015-01-03', 5),
('WG-TNK-UDJVRM2', '2015-01-03', 9),
('WG-TPG-ATL1', '2015-01-03', 12),
('WG-TPG-ATL2', '2015-01-03', 2),
('WG-TPG-IRGVRM1', '2015-01-03', 11),
('WG-TPG-IRGVRM2', '2015-01-03', 15),
('WG-TPG-IRGVRM3', '2015-01-03', 10),
('WG-TPG-PNMTR1', '2015-01-03', 15),
('WG-TPG-PNMTR2', '2015-01-03', 4),
('EG-AMPM-AMPM2', '2015-01-04', 10),
('EG-AMPM-AMPM2', '2015-01-02', 10);

-- --------------------------------------------------------

--
-- Table structure for table `areaco`
--

CREATE TABLE IF NOT EXISTS `areaco` (
  `nps_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `bc_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mandal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nps_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_vill` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_po` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_block` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_dist` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_doj` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `areaco`
--

REPLACE INTO `areaco` (`nps_id`, `bc_id`, `mandal`, `nps_name`, `contact_no`, `emp_vill`, `emp_po`, `emp_block`, `emp_dist`, `emp_id`, `emp_doj`) VALUES
('EG-AMPM-AMPM1', 'EG-AMPM', 'I Polavaram', 'K Venkata Lakshmi', '9705012841', 'I Polavaram', 'I Polavaram', 'Amalapuram', 'East Godavari', 'SIHS/00765/2014', '2014-12-15'),
('EG-AMPM-AMPM2', 'EG-AMPM', 'Mummidivaram', 'J Padmaja', '9701482854', 'Mummidivaram', 'Mummidivaram', 'Amalapuram', 'East Godavari', '', '2014-12-15'),
('EG-AMPM-AMPM3', 'EG-AMPM', 'Mummidivaram', 'I Arjun', 'NULL', 'Gogulalanka', 'Mummidivaram', 'Amalapuram', 'East Godavari', 'SIHS/00762/2014', '2014-12-15'),
('EG-AMPM-ANVL1', 'EG-AMPM', 'Ainavilli', 'P Jagadeesh', '8977365686', '', '', '', '', '', '2014-12-15'),
('EG-AMPM-ANVL2', 'EG-AMPM', 'Ainavilli', 'P Janardhan', '9177785870', '', '', '', '', '', '2014-12-15'),
('EG-AMPM-ANVL3', 'EG-AMPM', 'Ainavilli', 'M Venkata Ramana', 'NULL', '', '', '', '', '', '0000-00-00'),
('EG-AMPM-KRTKN', 'EG-AMPM', 'Katrenikona', 'G Narasimha Murthy', 'NULL', '', '', '', '', '', '2014-12-15'),
('EG-RCPM-MNDPT1', 'EG-RCPM', 'Mandapeta', 'G Surya Kiran', '8106213404', 'Arthamuru', 'Arthamuru', 'Ramachandapuram', 'East Godavari', 'SIHS/00773/2014', '2014-12-15'),
('EG-RCPM-RCPM1', 'EG-RCPM', 'Ramacndrapuram', 'P Bhima Raju', '8096396007', 'Venkatayapale', '', '', '', '', '0000-00-00'),
('EG-RCPM-RCPM2', 'EG-RCPM', 'Ramacndrapuram', 'T Chinna Babu', '9676340994', 'Draksharamam', 'Draksharamam', 'Ramachandapuram', 'East Godavari', 'SIHS/00774/2014', '2014-12-15'),
('EG-RCPM-RCPM3', 'EG-RCPM', 'Ramacndrapuram', 'V Ravi Teja', '9154613523', 'Ramachandrapuram', 'Ramachandrapuram', 'Ramachandapuram', 'East Godavari', 'SIHS/00777/2014', '2014-12-15'),
('EG-RJY-KDYM1', 'EG-RJY', 'kadiyam', 'S Beby', '8121374388', 'Gubbalavari palem', 'kadiyam', 'Rajahmundry', 'East Godavari', 'SIHS/00761/2014', '2014-12-15'),
('EG-RJY-KRKD1', 'EG-RJY', 'Korukonda', 'M Satya Rani', '9949171080', 'Narasapuram', 'Korukonda', 'Rajahmundry', 'East Godavari', 'SIHS/00767/2014', '2014-12-15'),
('EG-RJY-MNDP1', 'EG-RJY', 'Mandapeta', 'P Parvathi Devi', '9705264966', 'Kesavaram', 'Mandapeta', 'Rajahmundry', 'East Godavari', 'SIHS/00780/2014', '2014-12-15'),
('EG-RJY-RJY1', 'EG-RJY', 'Rajahmundry', 'K Mery Victoria', '9347873470', 'Suvishesapuram', 'Rajahmundry', 'Rajahmundry', 'East Godavari', 'SIHS/00758/2014', '2014-12-15'),
('EG-RJY-RJY2', 'EG-RJY', 'Rajahmundry', 'M Venkata Lakshmi', '9010116635', 'AC Garden', 'Rajahmundry', 'Rajahmundry', 'East Godavari', 'SIHS/00786/2014', '2014-12-15'),
('EG-RJY-RJY3', 'EG-RJY', 'Rajahmundry', 'V Rajeswari', '8019194459', 'Nagayanapuram', 'Rajahmundry', 'Rajahmundry', 'East Godavari', 'SIHS/00759/2014', '2014-12-15'),
('EG-RJY-STNGM1', 'EG-RJY', 'Seetanagaram', 'P Siva Ram', '8121237125', 'Raghudevapuram', 'Seetanagaram', 'Rajahmundry', 'East Godavari', 'SIHS/00788/2014', '2014-12-15'),
('EG-RJY-STNGM2', 'EG-RJY', 'Seetanagaram', 'GVR Raman', '8008026127', 'Raghudevapuram', 'Seetanagaram', 'Rajahmundry', 'East Godavari', 'SIHS/00784/2014', '2014-12-15'),
('EG-RNGPT-GNDP1', 'EG-RNGPT', 'Gandepalli', 'Boddu Siva', 'NULL', 'Gandepalli', 'Gandepalli', 'Rangampeta', 'East Godavari', 'SIHS/00771/2014', '2014-12-15'),
('EG-RNGPT-RNGPT1', 'EG-RNGPT', 'Rangampeta', 'V Srinu', 'NULL', 'Marripudi', 'Rangampeta', 'Rangampeta', 'East Godavari', 'SIHS/00782/2014', '2014-12-15'),
('EG-RNGPT-RNGPT2', 'EG-RNGPT', 'Rangampeta', 'M Lova Malleswary', '9949539057', 'Vadisileru', 'Rangampeta', 'Rajahmundry', 'East Godavari', 'SIHS/00760/2014', '2014-12-15'),
('EG-RPLM-ATRPM1', 'EG-RPLM', 'Atreyapuram', 'C Kutumba Rao', '9912676330', 'Velicheru', 'Atreyapuram', 'Ravulapalem', 'East Godavari', 'SIHS/00764/2014', '2014-12-15'),
('EG-RPLM-KTPT1', 'EG-RPLM', 'Kottapeta', 'J Satyanarayana', '9347343501', 'Ganti ', 'Kottapeta', 'Ravulapalem', 'East Godavari', 'SIHS/00766/2014', '2014-12-15'),
('EG-RPLM-KTPT2', 'EG-RPLM', 'Kottapeta', 'A Sriram Kumar', '9440778519', 'Kottapeta', 'Kottapeta', 'Ravulapalem', 'East Godavari', 'SIHS/00785/2014', '2014-12-15'),
('EG-RPLM-KTPT3', 'EG-RPLM', 'Kottapeta', 'A Sudhakar', '9493955418', 'Kottapeta', 'Kottapeta', 'Ravulapalem', 'East Godavari', 'SIHS/00778/2014', '2014-12-15'),
('EG-UPGM-UPGM1', 'EG-UPGM', 'Uppalaguptam ', 'U Rama Lakshmi', 'NULL', 'Uppalaguptam ', 'Uppalaguptam', 'Uppalaguptam', 'East Godavari', 'SIHS/00779/2014', '2014-12-15'),
('EG-UPGM-UPGM2', 'EG-UPGM', 'Uppalaguptam ', 'K  Venkataswarlu', 'NULL', 'Challapalli', 'Uppalaguptam', 'Uppalaguptam', 'East Godavari', 'SIHS/00787/2014', '2014-12-15'),
('EG-UPGM-UPGM3', 'EG-UPGM', 'Uppalaguptam ', 'A Durga Narayana', 'NULL', 'S Yanam', 'Uppalaguptam', 'Uppalaguptam', 'East Godavari', 'SIHS/00783/2014', '2014-12-15'),
('EG-UPGM-UPGM4', 'EG-UPGM', 'Allavaram', 'Y Sudhakar', 'NULL', 'Allavaram', 'Allavaram', 'Uppalaguptam', 'East Godavari', 'SIHS/00781/2014', '2014-12-15'),
('GTR-AMVT-AMVT1', 'GTR-AMVT', 'AMARAVATHI', 'K SUMANTH', '9000222360', 'AMARAVATHI', 'AMARAVATHI', 'GUNTUR-1', 'GUNTUR', 'SIHS/00719/2014', '2014-05-12'),
('KRI-GNVM-BPLPD1', 'KRI-GNVM', 'Bapulapadu', 'MJyothikumar', '8374169678', 'bapulapadu', 'Gannavaram', 'Gannavaram', 'Krishna', '', '2014-12-15'),
('KRI-GNVM-GNVM1', 'KRI-GNVM', 'Gannavaram', 'SSubbarao', '8142228850', 'Surampalli', 'Ganna varam', 'Gannavaram', 'Krishna', '', '2014-08-12'),
('KRI-GNVM-GNVM2', 'KRI-GNVM', 'Gannavaram', 'Padmata Naresh', '9347928713', 'Gollanapalli', 'Gannavaram', 'Gannavaram', 'Krishna', '', '2014-12-15'),
('KRI-GNVM-GNVM3', 'KRI-GNVM', 'Gannavaram', 'Govada Lakshmiphani', '7036939969', 'Gannavaram', 'Gannavaram', 'Gannavaram', 'Krishna', '', '2014-12-16'),
('KRI-GTSL-GTSL1', 'KRI-GTSL', 'Ghantasala', 'Udayalakshmi', '8465818774', 'Gantasala', 'Gantasala', 'Gantasala', 'Krishna', '', '2014-12-20'),
('KRI-GTSL-GTSL2', 'KRI-GTSL', 'Ghantasala', 'Chittiah', '9490283958', 'Gantasala', 'Gantasala', 'Gantasala', 'Krishna', '', '2014-12-20'),
('KRI-GTSL-MANDAL1', 'KRI-GTSL', '', 'Dimmeta Ramaraju', 'NULL', 'Bapulapadu', 'Gannavaram', 'GS', 'Krishna', '', '2014-12-17'),
('KRI-MCPTM-PDNA1', 'KRI-MCPTM', 'Pedana', 'Kondapalli Rajyalaksimi', '7396698113', 'Padana', 'Machilipatnam', 'Machilipatnam', 'Krishna', '', '2014-12-23'),
('KRI-MLVM-GMPGDM1', 'KRI-MLVM', 'Gampalagudem', 'Suresh', '9640099985', 'pedakomera', 'ammireddygudem', 'Mylavaram', 'Krishna', '', '2014-09-12'),
('KRI-MLVM-GMPGDM2', 'KRI-MLVM', 'Gampalagudem', 'Kumari', '8096761037', 'pedakomera', 'ammireddygudem', 'Mylavaram', 'Krishna', '', '2014-09-12'),
('KRI-MLVM-MLVM1', 'KRI-MLVM', 'Mylavaram', 'Salika Bruhaspathi', '9948325442', 'Mylavaram', 'mylavaram', 'Mylavaram', 'Krishna', '', '2014-12-17'),
('KRI-VUYR-PMR1', 'KRI-VUYR', 'Pamarru', 'MBhavaniSankar reddy', '9848107651', 'pamarru', 'pamarru', 'vuyyuru', 'Krishna', '', '2014-12-13'),
('KRI-VUYR-PMR2', 'KRI-VUYR', 'Pamarru', 'chMuraliSudhaker', '9848523639', 'pamarru', 'pamarru', 'vuyyuru', 'Krishna', '', '2014-12-13'),
('KRI-VUYR-VUYR1', 'KRI-VUYR', 'Vuyyuru', 'TRGChakradhar', '9346231303', 'Vuyyuru', 'Vuyyuru', 'vuyyuru', 'Krishna', '', '2014-04-12'),
('KRI-VUYR-VUYR2', 'KRI-VUYR', 'Vuyyuru', 'JKrishna', '8099494849', 'vuyyuru', 'Vuyyuru', 'vuyyuru', 'Krishna', '', '2014-12-17'),
('VSP-PNDR-PNDR1', 'VSP-PNDR', 'Pendurthi', ' B Ravi', '9912863148', 'Velam Peta', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', '', '0000-00-00'),
('VSP-PNDR-PNDR2', 'VSP-PNDR', 'Pendurthi', ' Trinadha Rao', '9000018647', 'Pendurthi', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', '', '0000-00-00'),
('WG-BMDL-BMDL1', 'WG-BMDL', 'BHIMADOLE', 'DURGA PRASAD', '7842391099', 'AMBARUPET', 'BHIMADOLE', 'BHIMADOLE', 'WEST GODAVARI', 'SIHS/00725/2014', '2014-12-23'),
('WG-BMDL-BMDL2', 'WG-BMDL', 'BHIMADOLE', 'D RAJAKUMARI', '8186911503', 'AMBARUPET', 'BHIMADOLE', 'BHIMADOLE', 'WEST GODAVARI', 'SIHS/00729/2014', '2014-12-23'),
('WG-BMDL-DWTML1', 'WG-BMDL', 'D TIRUMALA', 'N NAGAMOHINI', '8374303726', 'CH POTHEPALLI', 'LAKKAVARAM', 'BHIMADOLE', 'WEST GODAVARI', 'SIHS/00727/2014', '2014-12-23'),
('WG-BMDL-DWTML2', 'WG-BMDL', 'D TIRUMALA', 'J INDIRA KUMARI', '9346593932', 'KOMMARA', 'D TIRUMALA', 'BHIMADOLE', 'WEST GODAVARI', 'SIHS/00732/2014', '2014-12-23'),
('WG-BMDL-DWTML3', 'WG-BMDL', 'D TIRUMALA', 'K RAMESH', '9703182016', 'TAKKELLAPADU', 'GUNNAMPALLI', 'BHIMADOLE', 'WEST GODAVARI', 'SIHS/00726/2014', '2014-12-23'),
('WG-BMDL-NDMR1', 'WG-BMDL', 'NIDAMARRU', 'M SURESH', '9160409757', 'NIDAMARRU', 'NIDAMARRU', 'BHIMADOLE', 'WEST GODAVARI', 'SIHS/00725/2014', '2014-12-23'),
('WG-BMDL-NDMR2', 'WG-BMDL', 'NIDAMARRU', 'A CHITTIBABU', '9491252185', 'NINDRAKOLANU', 'NIDAMARRU', 'BHIMADOLE', 'WEST GODAVARI', 'SIHS/007321/2014', '2014-12-23'),
('WG-BMDL-UNGT1', 'WG-BMDL', 'UNGUTURU', 'BUJJI', '9490911105', 'UNGUTURU', 'UNGUTURU', 'BHIMADOLE', 'WEST GODAVARI', '', '2014-12-23'),
('WG-BMDL-UNGT2', 'WG-BMDL', 'UNGUTURU', 'VENKATALAKSHMI', '9160488921', 'UNGUTURU', 'UNGUTURU', 'BHIMADOLU', 'WEST GODAVARI', '', '2014-12-23'),
('WG-TNK-NDVL1', 'WG-TNK', 'Nidadavolu', 'Ch Raja Rao', '8106362008', 'Munipalli', 'Munipalli', 'Tanuku', 'WEST GODAVARI', 'SIHS/00738/2014', '2014-12-15'),
('WG-TNK-PDPR1', 'WG-TNK', 'Paidaparu', 'N Kalyan', '9848327700', 'Paidaparu', 'Paidaparu', 'Tanuku', 'WEST GODAVARI', '', '0000-00-00'),
('WG-TNK-PNGD1', 'WG-TNK', 'Pendugonda', 'G Lakshmi Narayana ', '9581336766', 'Penugonda', 'Penugonda', 'Tanuku', 'WEST GODAVARI', 'SIHS/00737/2014', '2014-12-15'),
('WG-TNK-PNGD2', 'WG-TNK', 'Pendugonda', 'G Durga Prasad', '9951258257', 'Penugonda', 'Penugonda', 'Tanuku', 'WEST GODAVARI', 'SIHS/00736/2014', '2014-12-15'),
('WG-TNK-PNGD3', 'WG-TNK', 'Pendugonda', 'I Amarnathan', '9951488611', 'Penugonda', 'Penugonda', 'Tanuku', 'WEST GODAVARI', 'SIHS/00734/2014', '2014-12-15'),
('WG-TNK-PRVL11', 'WG-TNK', 'Peravali', 'B Vijaya Babu', '9573935613', 'Peravali', 'Peravali', 'Tanuku', 'WEST GODAVARI', 'SIHS/00739/2014', '2014-12-15'),
('WG-TNK-TNK1', 'WG-TNK', 'Tanuku', 'V Sundra Rao', '7670992583', 'Velipuru', 'Velpuru', 'Tanuku', 'WEST GODAVARI', 'SIHS/00740/2014', '2014-12-15'),
('WG-TNK-UDJVRM1', 'WG-TNK', 'Undrajuvaram', 'B P Satish Kumar', '8142464688', 'Undrajavaram', 'Undrajavaram', 'Tanuku', 'WEST GODAVARI', 'SIHS/00735/2014', '2014-12-15'),
('WG-TNK-UDJVRM2', 'WG-TNK', 'Undrajavaram', 'B V Satish', '9491973996', 'Undrajavaram', 'Undrajavaram', 'Tanuku', 'WEST GODAVARI', '', '0000-00-00'),
('WG-TPG-ATL1', 'WG-TPG', 'attili', 'D Satyanarayana ', '9000160361', '', '', 'Tadepalli gudem', 'WEST GODAVARI', '', '2014-12-21'),
('WG-TPG-ATL2', 'WG-TPG', 'attili', 'T  Babu Rao', '9989869119', '', '', 'Tadepalli gudem', 'WEST GODAVARI', '', '2014-12-21'),
('WG-TPG-IRGVRM1', 'WG-TPG', 'iRAGAVARAM', 'CH Muneswara rao', '9701375035', 'IRAGAVARAM', '534217', 'Tadepalli gudem', 'WEST GODAVARI', 'SIHS/00746/2014', '2014-12-19'),
('WG-TPG-IRGVRM2', 'WG-TPG', 'IRAGAVARAM', 'P VENKATA REDDY', '9701375033', 'IRAGAVARAM', '534320', 'Tadepalli gudem', 'WEST GODAVARI', 'SIHS/00744/2014', '2014-12-19'),
('WG-TPG-IRGVRM3', 'WG-TPG', 'IRAGAVARAM', 'K  Bheemudu', '9701375034', 'IRAGAVARAM', '534320', 'Tadepalli gudem', 'WEST GODAVARI', 'SIHS/00749/2014', '2014-12-19'),
('WG-TPG-PNMTR1', 'WG-TPG', 'PENUMANTRA', 'G Bala krishna', '9701375032', 'IRAGAVARAM', '534222', 'Tadepalli gudem', 'WEST GODAVARI', 'SIHS/00744/2014', '2014-12-18'),
('WG-TPG-PNMTR2', 'WG-TPG', 'PENUMANTRA', 'P V V Prabhavathi', '9701375037', 'IRAGAVARAM', '534217', 'Tadepalli gudem', 'WEST GODAVARI', 'SIHA/00745/20014', '2014-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `areaco2`
--

CREATE TABLE IF NOT EXISTS `areaco2` (
  `nps_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bc_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mandal` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nps_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_no` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_vill` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `emp_po` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `emp_block` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `emp_dist` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `emp_id` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `emp_doj` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `areaco2`
--

REPLACE INTO `areaco2` (`nps_id`, `bc_id`, `mandal`, `nps_name`, `contact_no`, `emp_vill`, `emp_po`, `emp_block`, `emp_dist`, `emp_id`, `emp_doj`) VALUES
('EG-RJY-MNDP1', 'EG-RJY', 'Mandapeta', 'P Parvathi Devi', '9705264966', 'Kesavaram', 'Mandapeta', 'Rajahmundry', 'East Godavari', 'SIHS/00780/2014', '15.12.2014'),
('EG-RJY-KRKD1', 'EG-RJY', 'Korukonda', 'M Satya Rani', '9949171080', 'Narasapuram', 'Korukonda', 'Rajahmundry', 'East Godavari', 'SIHS/00767/2014', '15.12.2014'),
('EG-RJY-RJY1', 'EG-RJY', 'Rajahmundry', 'K Mery Victoria', '9347873470', 'Suvishesapuram', 'Rajahmundry', 'Rajahmundry', 'East Godavari', 'SIHS/00758/2014', '15.12.2014'),
('EG-RJY-RJY2', 'EG-RJY', 'Rajahmundry', 'M Venkata Lakshmi', '9010116635', 'AC Garden', 'Rajahmundry', 'Rajahmundry', 'East Godavari', 'SIHS/00786/2014', '15.12.2014'),
('EG-RJY-RJY3', 'EG-RJY', 'Rajahmundry', 'V Rajeswari', '8019194459', 'Nagayanapuram', 'Rajahmundry', 'Rajahmundry', 'East Godavari', 'SIHS/00759/2014', '15.12.2014'),
('EG-RJY-KDYM1', 'EG-RJY', 'kadiyam', 'S Beby', '8121374388', 'Gubbalavari palem', 'kadiyam', 'Rajahmundry', 'East Godavari', 'SIHS/00761/2014', '15.12.2014'),
('EG-RJY-STNGM1', 'EG-RJY', 'Seetanagaram', 'P Siva Ram', '8121237125', 'Raghudevapuram', 'Seetanagaram', 'Rajahmundry', 'East Godavari', 'SIHS/00788/2014', '15.12.2014'),
('EG-RJY-STNGM2', 'EG-RJY', 'Seetanagaram', 'GVR Raman', '8008026127', 'Raghudevapuram', 'Seetanagaram', 'Rajahmundry', 'East Godavari', 'SIHS/00784/2014', '15.12.2014'),
('EG-RJY-RNGPT2', 'EG-RJY', 'Rangampeta', 'M Lova Malleswary', '9949539057', 'Vadisileru', 'Rangampeta', 'Rajahmundry', 'East Godavari', 'SIHS/00760/2014', '15.12.2014'),
('EG-RCPM-MNDPT1', 'EG-RCPM', 'Mandapeta', 'G Surya Kiran', '8106213404', 'Arthamuru', 'Arthamuru', 'Ramachandapuram', 'East Godavari', 'SIHS/00773/2014', '15.12.2014'),
('EG-RCPM-RCPM1', 'EG-RCPM', 'Ramacndrapuram', 'P Bhima Raju', '8096396007', 'Venkatayapale,', 'Venkatayapale,', 'Ramachandapuram', 'East Godavari', 'SIHS/00775/2014', '15.12.2014'),
('EG-RCPM-RCPM2', 'EG-RCPM', 'Ramacndrapuram', 'T Chinna Babu', '9676340994', 'Draksharamam', 'Draksharamam', 'Ramachandapuram', 'East Godavari', 'SIHS/00774/2014', '15.12.2014'),
('EG-RCPM-RCPM3', 'EG-RCPM', 'Ramacndrapuram', 'V Ravi Teja', '9154613523', 'Ramachandrapuram', 'Ramachandrapuram', 'Ramachandapuram', 'East Godavari', 'SIHS/00777/2014', '15.12.2014'),
('EG-RPLM-ATRPM1', 'EG-RPLM', 'Atreyapuram', 'C Kutumba Rao', '9912676330', 'Velicheru', 'Atreyapuram', 'Ravulapalem', 'East Godavari', 'SIHS/00764/2014', '15.12.2014'),
('EG-RPLM-KTPT1', 'EG-RPLM', 'Kottapeta', 'J Satyanarayana', '9347343501', 'Ganti ', 'Kottapeta', 'Ravulapalem', 'East Godavari', 'SIHS/00766/2014', '15.12.2014'),
('EG-RPLM-KTPT2', 'EG-RPLM', 'Kottapeta', 'A Sriram Kumar', '9440778519', 'Kottapeta', 'Kottapeta', 'Ravulapalem', 'East Godavari', 'SIHS/00785/2014', '15.12.2014'),
('EG-RPLM-KTPT3', 'EG-RPLM', 'Kottapeta', 'A Sudhakar', '9493955418', 'Kottapeta', 'Kottapeta', 'Ravulapalem', 'East Godavari', 'SIHS/00778/2014', '15.12.2014'),
('EG-UPGM-UPGM1', 'EG-UPGM', 'Uppalaguptam ', 'U Rama Lakshmi', NULL, 'Uppalaguptam ', 'Uppalaguptam', 'Uppalaguptam', 'East Godavari', 'SIHS/00779/2014', '15.12.2014'),
('EG-UPGM-UPGM2', 'EG-UPGM', 'Uppalaguptam ', 'K  Venkataswarlu', NULL, 'Challapalli', 'Uppalaguptam', 'Uppalaguptam', 'East Godavari', 'SIHS/00787/2014', '15.12.2014'),
('EG-UPGM-UPGM3', 'EG-UPGM', 'Uppalaguptam ', 'A Durga Narayana', NULL, 'S Yanam', 'Uppalaguptam', 'Uppalaguptam', 'East Godavari', 'SIHS/00783/2014', '15.12.2014'),
('EG-UPGM-UPGM4', 'EG-UPGM', 'Allavaram', 'Y Sudhakar', NULL, 'Allavaram', 'Allavaram', 'Uppalaguptam', 'East Godavari', 'SIHS/00781/2014', '15.12.2014'),
('EG-AMPM-AMPM1', 'EG-AMPM', 'I Polavaram', 'K Venkata Lakshmi', '9705012841', 'I Polavaram', 'I Polavaram', 'Amalapuram', 'East Godavari', 'SIHS/00765/2014', '15.12.2014'),
('EG-AMPM-AMPM2', 'EG-AMPM', 'Mummidivaram', 'J Padmaja', '9701482854', 'Mummidivaram', 'Mummidivaram', 'Amalapuram', 'East Godavari', '', '15.12.2014'),
('EG-AMPM-AMPM3', 'EG-AMPM', 'Mummidivaram', 'I Arjun', NULL, 'Gogulalanka', 'Mummidivaram', 'Amalapuram', 'East Godavari', 'SIHS/00762/2014', '15.12.2014'),
('EG-AMPM-ANVL2', 'EG_AMPM', 'Ainavilli', 'P Janardhan', '9177785870', '', '', '', '', '', '15.12.2014'),
('EG-AMPM-ANVL1', 'EG-AMPM', 'Ainavilli', 'P Jagadeesh', '8977365686', '', '', '', '', '', '15.12.2014'),
('EG-AMPM-KRTKN', 'EG-AMPM', 'Katrenikona', 'G Narasimha Murthy', NULL, '', '', '', '', '', '15.12.2014'),
('MVR', '', 'Ainavilli', 'M Venkata Ramana', NULL, '', '', '', '', '', ''),
('EG-RGPT-GNDP1', 'EG-RGPT', 'Gandepalli', 'Boddu Siva', NULL, 'Gandepalli', 'Gandepalli', 'Rangampeta', 'East Godavari', 'SIHS/00771/2014', '15.12.2014'),
('EG-RGPT-RGPT1', 'EG-RGPT', 'Rangampeta', 'V Srinu', NULL, 'Marripudi', 'Rangampeta', 'Rangampeta', 'East Godavari', 'SIHS/00782/2014', '15.12.2014'),
('KRI-VUYR-MANDAL1', 'KRI-VUYR', '', 'T.R.G.Chakradhar', '9346231303', 'Vuyyuru', 'Vuyyuru', 'vuyyuru', 'Krishna', '', '12-04-2014'),
('KRI-VUYR-MANDAL2', 'KRI-VUYR', '', 'M.BhavaniSankar reddy', '9848107651', 'pamarru', 'pamarru', 'vuyyuru', 'Krishna', '', '13/12/2014'),
('KRI-VUYR-MANDAL3', 'KRI-VUYR', '', 'ch.MuraliSudhaker', '9848523639', 'pamarru', 'pamarru', 'vuyyuru', 'Krishna', '', '13/12/2014'),
('KRI-VUYR-MANDAL4', 'KRI-VUYR', '', 'J.Krishna', '8099494849', 'vuyyuru', 'Vuyyuru', 'vuyyuru', 'Krishna', '', '17/12/14'),
('KRI-MLVM-MANDAL1', 'KRI-MLVM', '', 'Suresh', '9640099985', 'pedakomera', 'ammireddygudem', 'Mylavaram', 'Krishna', '', '12-09-2014'),
('KRI-MLVM-MANDAL2', 'KRI-MLVM', '', 'Kumari', '8096761037', 'pedakomera', 'ammireddygudem', 'Mylavaram', 'Krishna', '', '12-09-2014'),
('KRI-MLVM-MANDAL3', 'KRI-MLVM', '', 'Salika Bruhaspathi', '9948325442', 'Mylavaram', 'mylavaram', 'Mylavaram', 'Krishna', '', '17/12/14'),
('KRI-GNVM-MANDAL1', 'KRI-GNVM', '', 'S.Subbarao', '8142228850', 'Surampalli', 'Ganna varam', 'Gannavaram', 'Krishna', '', '12-08-2014'),
('KRI-GNVM-MANDAL2', 'KRI-GNVM', '', 'M.Jyothikumar', '8374169678', 'bapulapadu', 'Gannavaram', 'Gannavaram', 'Krishna', '', '15/12/2014'),
('KRI-GNVM-MANDAL3', 'KRI-GNVM', '', 'Padmata Naresh', '9347928713', 'Gollanapalli', 'Gannavaram', 'Gannavaram', 'Krishna', '', '15/12/14'),
('KRI-GNVM-MANDAL4', 'KRI-GNVM', '', 'Govada Lakshmiphani', '7036939969', 'Gannavaram', 'Gannavaram', 'Gannavaram', 'Krishna', '', '16/12/2014'),
('KRI-GTSL-MANDAL1', 'KRI-GTSL', '', 'Dimmeta Ramaraju', NULL, 'Bapulapadu', 'Gannavaram', 'GS', 'Krishna', '', '17/12/2014'),
('KRI-GTSL-MANDAL2', 'KRI-GTSL', '', 'Udayalakshmi', '8465818774', 'Gantasala', 'Gantasala', 'Gantasala', 'Krishna', '', '20/12/2014'),
('KRI-GTSL-MANDAL3', 'KRI-GTSL', '', 'Chittiah', '9490283958', 'Gantasala', 'Gantasala', 'Gantasala', 'Krishna', '', '20/12/2014'),
('KRI-MCPTM-MANDAL1', 'KRI-MCPTM', '', 'Kondapalli Rajyalaksimi', '7396698113', 'Padana', 'Machilipatnam', 'Machilipatnam', 'Krishna', '', '23/12/2014'),
('VSP-PNDR-PNDR1', 'VSP-PNDR', 'Pendurthi', 'Mr. B Ravi', '9912863148', 'Velam Peta', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', '', ''),
('VSP-PNDR-PNDR2', 'VSP-PNDR', 'Pendurthi', 'Mr. Trinadha Rao', '9000018647', 'Pendurthi', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', '', ''),
('GTR-1-AMVT', 'GTR-1', 'AMARAVATHI', 'K SUMANTH', '9000222360', 'AMARAVATHI', 'AMARAVATHI', 'GUNTUR-1', 'GUNTUR', 'SIHS/00719/2014', '12-05-2014'),
('WG-BMDL-DWTML1', 'WG-BMDL', 'D TIRUMALA', 'N NAGAMOHINI', '8374303726', 'CH \nPOTHEPALLI', 'LAKKAVARAM\n', 'BHIMADOLE\n', 'WEST \nGODAVARI', '00727/2014', '23 12 2014'),
('WG-BMDL-DWTML2', 'WG-BMDL', 'D TIRUMALA', 'J INDIRA KUMARI', '9346593932', 'KOMMARA', 'D TIRUMALA', 'BHIMADOLE\n', 'WEST \nGODAVARI', '00732/2014', '23 12 2014'),
('WG-BMDL-DWTML3', 'WG-BMDL', 'D TIRUMALA', 'K RAMESH', '9703182016', 'TAKKELLA\nPADU', 'GUNNAM\nPALLI', 'BHIMADOLE\n', 'WEST \nGODAVARI', '00726/2014', '23 12 2014'),
('WG-BMDL-NDMR1', 'WG-BMDL', 'NIDAMARRU', 'M SURESH', '9160409757', 'NIDAMARRU', 'NIDAMARRU', 'BHIMADOLE\n', 'WEST \nGODAVARI', '00725/2014', '23 12 2014'),
('WG-BMDL-NDMR2', 'WG-BMDL', 'NIDAMARRU', 'A CHITTIBABU', '9491252185', 'NINDRA\nKOLANU', 'NIDAMARRU', 'BHIMADOLE\n', 'WEST \nGODAVARI', '007321/2014', '23 12 2014'),
('WG-BMDL-BMDL1', 'WG-BMDL', 'BHIMADOLE', 'DURGA PRASAD', '7842391099', 'AMBARUPET', 'BHIMADOLE', 'BHIMADOLE\n', 'WEST \nGODAVARI', '00725/2014', '23 12 2014'),
('WG-BMDL-BMDL2', 'WG-BMDL', 'BHIMADOLE', 'D RAJAKUMARI', '8186911503', 'AMBARUPET', 'BHIMADOLE', 'BHIMADOLE\n', 'WEST \nGODAVARI', '00729/2014', '23 12 2014'),
('WG-BMDL-UNGT1', 'WG-BMDL', 'UNGUTURU', 'BUJJI', '9490911105', 'UNGUTURU', 'UNGUTURU', 'BHIMADOLE\n', 'WEST \nGODAVARI', '', '23 12 2014'),
('WG-BMDL-UNGT2', 'WG-BMDL', 'UNGUTURU', 'VENKATALAKSHMI', '9160488921', 'UNGUTURU', 'UNGUTURU', 'BHIMADOLU', 'WEST \nGODAVARI', '', '23 12 2014'),
('WG-TNK-PNGD1', 'WG-TNK', 'Pendugonda', 'G Lakshmi Narayana ', '9581336766', 'Penugonda', 'Penugonda', 'Tanuku', 'W G Dist', 'SIHS/00737/2014', '15/12/2014'),
('WG-TNK-PNGD2', 'WG-TNK', 'Pendugonda', 'G Durga Prasad', '9951258257', 'Penugonda', 'Penugonda', 'Tanuku', 'W G Dist', 'SIHS/00736/2014', '15/12/2014'),
('WG-TNK-PNGD3', 'WG-TNK', 'Pendugonda', 'I Amarnathan', '9951488611', 'Penugonda', 'Penugonda', 'Tanuku', 'W G Dist', 'SIHS/00734/2014', '15/12/2014'),
('WG-TNK-PRVL1', 'WG-TNK', 'Peravali', 'B Vijaya Babu', '9573935613', 'Peravali', 'Peravali', 'Tanuku', 'W G Dist', 'SIHS/00739/2014', '15/12/2014'),
('WG-TNK-UDJVRM1', 'WG-TNK', 'Undrajuvaram', 'B P Satish Kumar', '8142464688', 'Undrajavaram', 'Undrajavaram', 'Tanuku', 'W G Dist', 'SIHS/00735/2014', '15/12/2014'),
('WG-TNK-TNK1', 'WG-TNK', 'Tanuku', 'V Sundra Rao', '7670992583', 'Velipuru', 'Velpuru', 'Tanuku', 'W G Dist', 'SIHS/00740/2014', '15/12/2014'),
('WG-TNK-NDVL1', 'WG-TNK', 'Nidadavolu', 'Ch Raja Rao', '8106362008', 'Munipalli', 'Munipalli', 'Tanuku', 'W G Dist', 'SIHS/00738/2014', '15/12/2014'),
('WG-TNK-UDJVRM2', 'WG-TNK', 'Undrajavaram', 'B V Satish', '9491973996', 'Undrajavaram', 'Undrajavaram', 'Tanuku', 'W G Dist', '', ''),
('WG-TNK-PDPR1', 'WG-TNK', 'Paidaparu', 'N Kalyan', '9848327700', 'Paidaparu', 'Paidaparu', 'Tanuku', 'W G Dist', '', ''),
('WG-TPG-PNMTR1', 'WG-TPG', 'PENUMANTRA', 'G Bala krishna', '9701375032', 'IRAGAVARAM', '534222', 'Tadepalli gudem', 'W G DIST', 'SIHS/00744/2014', '18-12-2014'),
('WG-TPG-PNMTR2', 'WG-TPG', 'PENUMANTRA', 'P V V Prabhavathi', '9701375037', 'IRAGAVARAM', '534217', 'Tadepalli gudem', 'W G DIST', 'SIHA/00745/20014', '20-12-2014'),
('WG-TPG-IRGVRM1', 'WG-TPG', 'iRAGAVARAM', 'CH Muneswara rao', '9701375035', 'IRAGAVARAM', '534217', 'Tadepalli gudem', 'W G DIST', 'SIHS/00746/2014', '19-12-2014'),
('WG-TPG-IRGVRM2', 'WG-TPG', 'IRAGAVARAM', 'P VENKATA REDDY', '9701375033', 'IRAGAVARAM', '534320', 'Tadepalli gudem', 'W G DIST', 'SIHS/00744/2014', '19-12-2014'),
('WG-TPG-IRGVRM3', 'WG-TPG', 'IRAGAVARAM', 'K  Bheemudu', '9701375034', 'IRAGAVARAM', '534320', 'Tadepalli gudem', 'W G DIST', 'SIHS/00749/2014', '19-12-2014'),
('WG-TPG-ATL1', 'WG-TPG', 'attili', 'D Satyanarayana ', '9000160361', '', '', 'Tadepalli gudem', 'W G DIST', '', '21-12-2014'),
('WG-TPG-ATL2', 'WG-TPG', 'attili', 'T  Babu Rao', '9989869119', '', '', 'Tadepalli gudem', 'W G DIST', '', '21-12-2014');

-- --------------------------------------------------------

--
-- Table structure for table `benf`
--

CREATE TABLE IF NOT EXISTS `benf` (
`benf_id` int(11) NOT NULL,
  `benf_date` date DEFAULT NULL,
  `project_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nps_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `benf_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `benf_fath_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `benf_contact_no` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `benf_vill` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `benf_mandal` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `benf_dist` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `benf_pin` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `benf_remarks` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=496 ;

--
-- Dumping data for table `benf`
--

REPLACE INTO `benf` (`benf_id`, `benf_date`, `project_id`, `nps_id`, `benf_name`, `benf_fath_name`, `benf_contact_no`, `benf_vill`, `benf_mandal`, `benf_dist`, `benf_pin`, `benf_remarks`) VALUES
(479, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'P.Seethamma', 'Veeraswamy', '9848055035', 'Serinarasannapalem', 'Bapulapadu', 'Krishna', '521105', 'B.O.I/29-12-2014'),
(480, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'Ch.Suseela', 'Satyanarayana', '9948245661', 'Kanumolu', 'Bapulapadu', 'Krishna', '521106', 'B.O.I/29-12-2014'),
(481, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'M.Rajaratnam', 'Daniyelu', '7730842566', 'Serinarasannapalem', 'Bapulapadu', 'Krishna', '521105', 'B.O.I/29-12-2014'),
(482, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'M.Padmavathi', 'Sambasivarao', '9949489176', 'Serinarasannapalem', 'Bapulapadu', 'Krishna', '521105', 'B.O.I/29-12-2014'),
(483, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'M.Kantarao', 'Daniyelu', '9494756140', 'Serinarasannapalem', 'Bapulapadu', 'Krishna', '521105', 'B.O.I/29-12-2014'),
(484, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'P.Venkateswaramma', 'Sambasivarao', '9848055035', 'Serinarasannapalem', 'Bapulapadu', 'Krishna', '521105', 'B.O.I/29-12-2014'),
(485, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'P.Sambasivarao', 'Venkateswarulu', '9848055035', 'Serinarasannapalem', 'Bapulapadu', 'Krishna', '521105', 'B.O.I/29-12-2014'),
(486, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'M.Sambasivarao', 'Subbarao', '9949489176', 'Serinarasannapalem', 'Bapulapadu', 'Krishna', '521105', 'B.O.I/29-12-2014'),
(487, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'P.Seetharavamma', 'Veeraraju', '9848055035', 'Serinarasannapalem', 'Bapulapadu', 'Krishna', '521105', 'B.O.I/29-12-2014'),
(488, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'M.Loordumary', 'Yashaiah', '9848055035', 'Serinarasannapalem', 'Bapulapadu', 'Krishna', '521105', 'B.O.I/29-12-2014'),
(489, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'M.Yeshaiah', 'Subbarao', '9848055035', 'Serinarasannapalem', 'Bapulapadu', 'Krishna', '521105', 'B.O.I/29-12-2014'),
(490, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'P.Veeraswamy', 'Venkateswarulu', '9848055035', 'Serinarasannapalem', 'Bapulapadu', 'Krishna', '521105', 'B.O.I/29-12-2014'),
(491, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-BPL', 'P.Veeraraju', 'Venkateswarulu', '9848055035', 'Serinarasannapalem', 'Bapulapadu', 'Krishna', '521105', 'B.O.I/29-12-2014'),
(492, '2014-12-29', 'SWALAMBANA', 'KRI-GNVM-GNVM3', 'G.Lakshmitulasi', 'Chantibabu', '8686205700', 'Gannavaram', 'Gannavaram', 'Krishna', '521101', 'B.O.I/30-12-2014'),
(493, '2014-12-29', 'SWALAMBANA', 'KRI-VYR-PMRU', 'T.Gangadhararao', 'Krishna', '9912255558', 'Pamarru', 'Pamarru', 'Krishna', '521157', 'I.O.B./29-12-2014'),
(494, '2014-12-29', 'SWALAMBANA', 'KRI-VYR-PMRU', 'V.Saritha', 'Venu', '9912255558', 'Pamarru', 'Pamarru', 'Krishna', '521157', 'I.O.B./29-12-2014'),
(495, '2014-12-29', 'SWALAMBANA', 'KRI-VYR-PMRU', 'T.Kumari', 'Krishna', '9912255558', 'Pamarru', 'Pamarru', 'Krishna', '521157', 'I.O.B./29-12-2014');

-- --------------------------------------------------------

--
-- Table structure for table `blockco`
--

CREATE TABLE IF NOT EXISTS `blockco` (
  `bc_id` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `dc_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `bc_name` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `contact_no` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_vill` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `emp_po` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `emp_mandal` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `emp_dist` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `emp_id` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `emp_doj` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `blockco`
--

REPLACE INTO `blockco` (`bc_id`, `dc_id`, `block`, `bc_name`, `contact_no`, `emp_vill`, `emp_po`, `emp_mandal`, `emp_dist`, `emp_id`, `emp_doj`) VALUES
('EG-ADTL', 'EG', 'Addatigala', 'DNSV Prasad Kamuju', '9493817154', 'Rampachodavaram', 'Rampachodavaram', 'Rampachodavaram', 'East godavari', 'SIHS/00682/2014', '2014-12-15'),
('EG-AMPM', 'EG', 'Amalapuram', 'M Arjuna Rao', '9676463715', 'Potukuru ', 'Ainavilli', 'Amalapuram', 'East godavari', 'SIHS/00706/2014', '2014-12-15'),
('EG-KKD', 'EG', 'Kakinada', 'KVV Ramana', '7893901280', 'Pitapuram', 'Pitapuram', 'Pitapuram', 'East godavari', 'SIHS/00789/2014', '2014-12-15'),
('EG-RCPM', 'EG', 'Ramachandrapuram', 'T Rambabu', '9908478091', 'Venkatayapalem', 'Draksharamam', 'Ramachandrapruam', 'East godavari', 'SIHS/00684/2014', '2014-12-15'),
('EG-RNGPT', 'EG', 'Rangampeta', 'S Ramesh', '9399923030', 'Rajahmnundry', 'Rajahmundry', 'Rajahmundry', 'East godavari', 'SIHS/00686/2014', '2014-12-15'),
('EG-RJY', 'EG', 'Rajahmundry', 'A P Venkateswara Rao', '8121811555', 'Rajahmnundry', 'Rajahmundry', 'Rajahmundry', 'East godavari', 'SIHS/00685/2014', '2014-12-10'),
('EG-RMPCVM', 'EG', 'Ramapchodavaram', 'A Sivaji', '9441849636', 'Rampachodavaram', 'Rampachodavaram', 'Rampachodavaram', 'East godavari', 'SIHS/00707/2014', '2014-12-15'),
('EG-RPLM', 'EG', 'Ravulapalem', 'Ch Chinnary', '9848396153', 'Bobbarlanka', 'Atreyapuram', 'Ravulapalem', 'East godavari', 'SIHS/00683/2014', '2014-12-15'),
('EG-TUNI', 'EG', 'Tuni', 'Babji', '9849958764', 'Tuni', 'Tuni', 'Tuni', 'East godavari', 'SIHS/00688/2014', '2014-12-15'),
('EG-UPGM', 'EG', 'Uppalaguptam', 'P Siva Rama Krishna', '9704712294', 'Antavaram', 'Uppalaguptam', 'Uppalaguptam', 'East godavari', 'SIHS/00687/2014', '2014-12-15'),
('GTR-GTR/U', 'GTR', 'GUNTUR URBAN', 'MASTAN SHARIF', '9290004201', 'AMARAVATHI', 'AMARAVATHI', 'AMARAVATHI', 'GUNTUR', 'SIHS/00717/2014', '2014-05-12'),
('GTR-GTR/R', 'GTR', 'GUNTUR RURAL', 'SK BANDAGI SAHEB', '7799191300', 'KVP COLONY', 'GUNTUR', 'GUNTUR', 'GUNTUR', 'SIHS/00721/2014', '2014-05-12'),
('GTR-BPTL', 'GTR', 'BAPATLA', 'AMARA RAGHAVAIAH', '9440681626', 'PITTU VARI PALEM', 'KHAJI PLEM', 'KHAJI PALEM', 'GUNTUR', 'SIHS/00718/2014', '2014-05-12'),
('GTR-AMVT', 'GTR', 'AMARAVATHI', 'SK SALEEM', '8125502166', 'CHUTTUGUNTA', 'GUNTUR', 'GUNTUR', 'GUNTUR', 'SIHS/00720/2014', '2014-05-12'),
('KRI-AVGD', 'KRI', 'Avanigadda', '', NULL, '', '', '', 'Krishna', '', '0000-00-00'),
('KRI-GNVM', 'KRI', 'Gannavaram', 'Gandivenkatalakshmanarao', '9666652829', 'Gannavaram', 'Gannavaram', '', 'Krishna', '', '2014-04-12'),
('KRI-GTSL', 'KRI', 'Ghantasala', 'Veera Raghavaiah', '9014213042', 'Varregudem', 'Machilipatnam', 'Ghantasala', 'Krishna', '', '2014-05-12'),
('KRI-KKLR', 'KRI', 'Kaikalutu', 'YRajeshkumat', '9032096313', 'Kaikaluru', 'Kaikaluru', '', 'Krishna', '', '2014-11-12'),
('KRI-MCPTM', 'KRI', 'Machilipatnam', 'BRKSarma', '8978447744', 'Machilipatnam', 'Machilipatnam', 'Machilipatnam', 'Krishna', '', '2014-12-25'),
('KRI-MLVM', 'KRI', 'Mylavaram', 'Krishnaiah', '9912811888', 'A-Konduru', 'G-Konduru', '', 'Krishna', '', '2014-03-12'),
('KRI-NDGM', 'KRI', 'Nandigam', '', NULL, '', '', '', 'Krishna', '', '0000-00-00'),
('KRI-NZD', 'KRI', 'Nuzivedu', '', NULL, '', '', '', 'Krishna', '', '0000-00-00'),
('KRI-VJWD/U', 'KRI', 'Vijayawada Urban', 'GVenkataRajesh', '8885542999', 'Vijayawada', 'Vijayawada', '', 'Krishna', '', '2014-11-27'),
('KRI-VUYR', 'KRI', 'Vuyyuru', 'Areef', '9848373999', 'Vuyyuru', 'Vuyyuru', '', 'Krishna', '', '2014-11-26'),
('PKS-BLK1', 'PKS', 'Block-1', 'Narendranath Namburi', '9866424467', 'Bestapalem', 'Podili', 'Podili', 'Prakasam', '', '0000-00-00'),
('PKS-BLK10', 'PKS', 'Block-10', 'Venkateswarlu Nandikanuma', '9010202880', 'Markapuram', 'Markapur', 'Markapur', 'Prakasam', '', '0000-00-00'),
('PKS-BLK2', 'PKS', 'Block-2', 'Hariprasad Pidimarry', '9848292270', 'Cumbum', 'Cumbum', 'Cumbum', 'Prakasam', '', '0000-00-00'),
('PKS-BLK3', 'PKS', 'Block-3', 'Jagan Mohan Raju Challa', '9666741422', 'Chimakurthy', 'Chimakurthy', 'Chimakurthy', 'Prakasam', '', '0000-00-00'),
('PKS-BLK4', 'PKS', 'Block-4', 'Srinath Rachagarla', '9704663702', 'Mannetikota', 'Mannetikota', 'Ulavapadu', 'Prakasam', '', '0000-00-00'),
('PKS-BLK5', 'PKS', 'Block-5', 'Venkata rajesh kumar Chappidi', '9154561257', 'Mulaguntapadu', 'Singarayakonda', 'Singarayakond', 'Prakasam', '', '0000-00-00'),
('PKS-BLK6', 'PKS', 'Block-6', 'Anthony Gurijala', '8096715473', 'Regalagadda', 'Marripudi', 'Marripudi', 'Prakasam', '', '0000-00-00'),
('PKS-BLK7', 'PKS', 'Block-7', 'Naga Raja Dasari', '9704998143', 'Singarayakonda', 'Singarayakonda', 'Singarayakonda', 'Prakasam', '', '0000-00-00'),
('PKS-BLK8', 'PKS', 'Block-8', 'Mahendra K', '9885240662', 'Kondamanjuluru', 'Jpanguluru', 'Jpanguluru', 'Prakasam', '', '0000-00-00'),
('PKS-BLK9', 'PKS', 'Block-9', 'Radha Krishna G', '9032379780', 'Ongole', 'Ongole', 'Ongole', 'Prakasam', '', '0000-00-00'),
('SKL-AMDVS', 'SKL', 'Amdalavalasa', 'PAILA  SATHISH ', '9848607200', 'BADDUMASINGI ', 'Palakonda', 'Srikakulam', 'Srikakulam', '', '0000-00-00'),
('SKL-PLKD', 'SKL', 'Palakonda', 'LAVETIGANAPATHI RAO', '9573578363', 'Purlipeta', 'Purlipeta', 'Regediamadalavalasa', 'Srikakulam', '', '0000-00-00'),
('SKL-REGD', 'SKL', 'Regedi', 'LAVETICHINNAMNAIDU', '9640447600', 'Purlipeta', 'Purlipeta', 'Regediamadalavalasa', 'Srikakulam', '', '0000-00-00'),
('VSP-ANKP', 'VSP', 'Anakapalli', 'S V Appala Raju', '9154227833', 'V Juttada', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', '', '0000-00-00'),
('VSP-CHDVM', 'VSP', 'Chodavaram', 'Telu Venkata Rao', '9966117866', 'V Juttada', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', '', '0000-00-00'),
('VSP-KKTPD', 'VSP', 'K Kotapadu', 'Golla Radha Krishna', '8341543334', 'Brudhavanam Garden', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', '', '0000-00-00'),
('VSP-NSPTM', 'VSP', 'Narsipatnam', 'Chikkala S V N P Kumar', '9848394677', 'Sarada Nagar', 'Narsipatnam', 'Narsipatnam', 'Visakhapatnam', '', '0000-00-00'),
('VSP-PNDR', 'VSP', 'Pendurthi', 'Killi Eswara Rao', '9704470228', 'Pulagalipalem', 'Juthadda', 'Pendurthi', 'Visakhapatnam', '', '0000-00-00'),
('VSP-YLMCL', 'VSP', 'Yelamanchili', 'R Simhachalam ', '9985865156', 'Naravanipalem', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', '', '0000-00-00'),
('VZM-CHPL', 'VZM', 'Chipurupalli', 'Potnuru Gowrunaidu', '7893736153', 'Nagallavalasa', 'Nagallavalasa', 'Gurla', 'Vizianagaram', '', '0000-00-00'),
('VZM-KTVS', 'VZM', 'Kothavalasa', 'Pediredla Lova Raju', '9494774251', 'Sundarayyapeta', 'Kothavalasa', 'Kothavalasa', 'Vizianagaram', '', '0000-00-00'),
('VZM-NLL', 'VZM', 'Nellimarla', 'V Chinnam Naidu', '8500265524', 'Yeanaguvalasa', 'Yeanaguvalasa', 'Cheepurapalli', 'Vizianagaram', '', '0000-00-00'),
('WG-BMDL', 'WG', 'BHIMADOLE', 'G ARAVIND', '9533778123', 'CH POTHEPALLI', 'LAKKAVARAM', 'DWARAKATIRUMALA', 'WEST GODAVARI', 'SIHS/00708/2014', '2014-12-12'),
('WG-TNK', 'WG', 'TANUKU', 'B GNANA PRADEEP', '9989476777', 'TANUKU', 'TANUKU', 'TANUKU', 'WEST GODAVARI', 'SIHS/00681/2014', '2014-12-13'),
('WG-TPG', 'WG', 'Tadepalli gudem', 'SAILENDRA KUMAR T', '9951187379', 'ELURU', 'ELURU', 'ELURU', 'WEST GODAVARI', 'SIHS/00680/2014', '2014-12-14'),
('WG-JRDM', 'WG', 'JNAGAREDDY GUDEM', 'PRASADS V', '9951907893', 'JNAGAREDDY GUDEM', 'JNAGAREDDY GUDEM', 'JNAGAREDDY GUDEM', 'WEST GODAVARI', 'SIHS/00709/2014', '2014-12-15'),
('WG-ELR/U', 'WG', 'ELURU URBAN', 'K GOVINDA RAO', '9059376608', 'ELURU', 'ELURU', 'ELURU', 'WEST GODAVARI', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `distco`
--

CREATE TABLE IF NOT EXISTS `distco` (
  `dc_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sc_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dc_name` varchar(200) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci DEFAULT NULL,
  `contact_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_vill` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_po` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_mandal` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_dist` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_doj` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `distco`
--

REPLACE INTO `distco` (`dc_id`, `sc_id`, `district`, `dc_name`, `contact_no`, `emp_vill`, `emp_po`, `emp_mandal`, `emp_dist`, `emp_id`, `emp_doj`) VALUES
('EG', 'AP', 'East Godavari', 'A  P Venkateswara Rao', '8121811555', 'Rajahmundry', 'Rajahmundry', 'Rajahmundry', 'East Godavari', 'SIHS/00685/2014', '2014-12-20'),
('GTR', 'AP', 'GUNTUR', 'B  SASI RATAN', '8008663394', 'ARUNDAL PET', 'GUNTUR', 'GUNTUR', 'GUNTUR', 'SIHS/00716/2014', '0000-00-00'),
('KRI', 'AP', 'Krishna', 'Ravve kancharla', '9866783659', 'Vijayawada', 'Vijayawada', 'Vijayawada', 'Krishna', '', '0000-00-00'),
('PKS', 'AP', 'Prakasam', 'G Kirankumar', '9885497348', 'Guntur', 'Guntur', 'Guntur(U)', 'Guntur', 'SIHS/00715/2014', '0000-00-00'),
('SKL', 'AP', 'Srikakulam', '', NULL, '', '', '', '', '', '0000-00-00'),
('VSP', 'AP', 'Visakhapatnam', 'K Sankara Satya Rao', '8341441343', 'Pulagalipalem', 'Juttdda', 'Pendurthi', 'Visakhapatnam', '', '0000-00-00'),
('VZM', 'AP', 'Vizianagaram', 'Shaik Â Subhan', '8187814375', 'Sambayyapalem', 'Kumapalli', 'L Kota', 'Vizianagaram', '', '0000-00-00'),
('WG', 'AP', 'West Godavari', 'D.N.V.S.S.A.RAVI', '8688421234', 'KAIKALUR', 'KAIKALUR', 'KAIKALUR', 'Krishna', 'SIHS/00705/2014', '2014-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `employee_s_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_designation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_division` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_contact_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_vill` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_po` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ememployee_mandal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_dist` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_doj` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

REPLACE INTO `employee` (`id`, `employee_s_id`, `employee_designation`, `employee_division`, `employee_name`, `employee_contact_no`, `employee_vill`, `employee_po`, `ememployee_mandal`, `employee_dist`, `employee_state`, `employee_id`, `employee_doj`) VALUES
('8977365686', '', 'NPS', 'Ainavilli', 'P Jagadeesh', '8977365686', '', '', '', '', 'AP', '', '15-12-2014'),
('9177785870', '', 'NPS', 'Ainavilli', 'P Janardhan', '9177785870', '', '', '', '', 'AP', '', '15-12-2014'),
('EG', 'AP', 'District Coordinator', 'East Godavari', 'A  P Venkateswara Rao', '8121811555', 'Rajahmundry', 'Rajahmundry', 'Rajahmundry', 'East Godavari', 'AP', 'SIHS/00685/2014', '20-12-2014'),
('EG-ADTL', 'EG', 'Block Coordinator', 'Addatigala', 'DNSV Prasad Kamuju', '9493817154', 'Rampachodavaram', 'Rampachodavaram', 'Rampachodavaram', 'East godavari', 'AP', 'SIHS/00682/2014', '15-12-2014'),
('EG-AMPM', 'EG', 'Block Coordinator', 'Amalapuram', 'M Arjuna Rao', '9676463715', 'Potukuru ', 'Ainavilli', 'Amalapuram', 'East godavari', 'AP', 'SIHS/00706/2014', '15-12-2014'),
('EG-AMPM-AMPM1', 'EG-AMPM', 'NPS', 'I Polavaram', 'K Venkata Lakshmi', '9705012841', 'I Polavaram', 'I Polavaram', 'Amalapuram', 'East Godavari', 'AP', 'SIHS/00765/2014', '15-12-2014'),
('EG-AMPM-AMPM2', 'EG-AMPM', 'NPS', 'Mummidivaram', 'J Padmaja', '9701482854', 'Mummidivaram', 'Mummidivaram', 'Amalapuram', 'East Godavari', 'AP', '', '15-12-2014'),
('EG-AMPM-AMPM3', 'EG-AMPM', 'NPS', 'Mummidivaram', 'I Arjun', 'NULL', 'Gogulalanka', 'Mummidivaram', 'Amalapuram', 'East Godavari', 'AP', 'SIHS/00762/2014', '15-12-2014'),
('EG-KKD', 'EG', 'Block Coordinator', 'Kakinada', 'KVV Ramana', '7893901280', 'Pitapuram', 'Pitapuram', 'Pitapuram', 'East godavari', 'AP', 'SIHS/00789/2014', '15-12-2014'),
('EG-RCPM', 'EG', 'Block Coordinator', 'Ramachandrapuram', 'T Rambabu', '9908478091', 'Venkatayapalem', 'Draksharamam', 'Ramachandrapruam', 'East godavari', 'AP', 'SIHS/00684/2014', '15-12-2014'),
('EG-RCPM-MNDPT', 'EG-RCPM', 'NPS', 'Mandapeta', 'G Surya Kiran', '8106213404', 'Arthamuru', 'Arthamuru', 'Ramachandapuram', 'East Godavari', 'AP', 'SIHS/00773/2014', '15-12-2014'),
('EG-RCPM-RCPM1', 'EG-RCPM', 'NPS', 'Ramacndrapuram', 'P Bhima Raju', '8096396007', 'Venkatayapale', '', '', '', 'AP', '', ''),
('EG-RCPM-RCPM2', 'EG-RCPM', 'NPS', 'Ramacndrapuram', 'T Chinna Babu', '9676340994', 'Draksharamam', 'Draksharamam', 'Ramachandapuram', 'East Godavari', 'AP', 'SIHS/00774/2014', '15-12-2014'),
('EG-RCPM-RCPM3', 'EG-RCPM', 'NPS', 'Ramacndrapuram', 'V Ravi Teja', '9154613523', 'Ramachandrapuram', 'Ramachandrapuram', 'Ramachandapuram', 'East Godavari', 'AP', 'SIHS/00777/2014', '15-12-2014'),
('EG-RGPT', 'EG', 'Block Coordinator', 'Rangampeta', 'S Ramesh', '9399923030', 'Rajahmnundry', 'Rajahmundry', 'Rajahmundry', 'East godavari', 'AP', 'SIHS/00686/2014', '15-12-2014'),
('EG-RGPT-GNDP', 'EG-RGPT', 'NPS', 'Gandepalli', 'Boddu Siva', 'NULL', 'Gandepalli', 'Gandepalli', 'Rangampeta', 'East Godavari', 'AP', 'SIHS/00771/2014', '15-12-2014'),
('EG-RGPT-RGPT', 'EG-RGPT', 'NPS', 'Rangampeta', 'V Srinu', 'NULL', 'Marripudi', 'Rangampeta', 'Rangampeta', 'East Godavari', 'AP', 'SIHS/00782/2014', '15-12-2014'),
('EG-RJY', 'EG', 'Block Coordinator', 'Rajahmundry', 'A P Venkateswara Rao', '8121811555', 'Rajahmnundry', 'Rajahmundry', 'Rajahmundry', 'East godavari', 'AP', 'SIHS/00685/2014', '10-12-2014'),
('EG-RJY-KDYM', 'EG-RJY', 'NPS', 'kadiyam', 'S Beby', '8121374388', 'Gubbalavari palem', 'kadiyam', 'Rajahmundry', 'East Godavari', 'AP', 'SIHS/00761/2014', '15-12-2014'),
('EG-RJY-KRKD', 'EG-RJY', 'NPS', 'Korukonda', 'M Satya Rani', '9949171080', 'Narasapuram', 'Korukonda', 'Rajahmundry', 'East Godavari', 'AP', 'SIHS/00767/2014', '15-12-2014'),
('EG-RJY-MNDP', 'EG-RJY', 'NPS', 'Mandapeta', 'P Parvathi Devi', '9705264966', 'Kesavaram', 'Mandapeta', 'Rajahmundry', 'East Godavari', 'AP', 'SIHS/00780/2014', '15-12-2014'),
('EG-RJY-RJY1', 'EG-RJY', 'NPS', 'Rajahmundry', 'K Mery Victoria', '9347873470', 'Suvishesapuram', 'Rajahmundry', 'Rajahmundry', 'East Godavari', 'AP', 'SIHS/00758/2014', '15-12-2014'),
('EG-RJY-RJY2', 'EG-RJY', 'NPS', 'Rajahmundry', 'M Venkata Lakshmi', '9010116635', 'AC Garden', 'Rajahmundry', 'Rajahmundry', 'East Godavari', 'AP', 'SIHS/00786/2014', '15-12-2014'),
('EG-RJY-RJY3', 'EG-RJY', 'NPS', 'Rajahmundry', 'V Rajeswari', '8019194459', 'Nagayanapuram', 'Rajahmundry', 'Rajahmundry', 'East Godavari', 'AP', 'SIHS/00759/2014', '15-12-2014'),
('EG-RJY-RNGPT', 'EG-RJY', 'NPS', 'Rangampeta', 'M Lova Malleswary', '9949539057', 'Vadisileru', 'Rangampeta', 'Rajahmundry', 'East Godavari', 'AP', 'SIHS/00760/2014', '15-12-2014'),
('EG-RJY-STNGM1', 'EG-RJY', 'NPS', 'Seetanagaram', 'P Siva Ram', '8121237125', 'Raghudevapuram', 'Seetanagaram', 'Rajahmundry', 'East Godavari', 'AP', 'SIHS/00788/2014', '15-12-2014'),
('EG-RJY-STNGM2', 'EG-RJY', 'NPS', 'Seetanagaram', 'GVR Raman', '8008026127', 'Raghudevapuram', 'Seetanagaram', 'Rajahmundry', 'East Godavari', 'AP', 'SIHS/00784/2014', '15-12-2014'),
('EG-RMPCVM', 'EG', 'Block Coordinator', 'Ramapchodavaram', 'A Sivaji', '9441849636', 'Rampachodavaram', 'Rampachodavaram', 'Rampachodavaram', 'East godavari', 'AP', 'SIHS/00707/2014', '15-12-2014'),
('EG-RPLM', 'EG', 'Block Coordinator', 'Ravulapalem', 'Ch Chinnary', '9848396153', 'Bobbarlanka', 'Atreyapuram', 'Ravulapalem', 'East godavari', 'AP', 'SIHS/00683/2014', '15-12-2014'),
('EG-RPLM-ATRPM', 'EG-RPLM', 'NPS', 'Atreyapuram', 'C Kutumba Rao', '9912676330', 'Velicheru', 'Atreyapuram', 'Ravulapalem', 'East Godavari', 'AP', 'SIHS/00764/2014', '15-12-2014'),
('EG-RPLM-KTPT1', 'EG-RPLM', 'NPS', 'Kottapeta', 'J Satyanarayana', '9347343501', 'Ganti ', 'Kottapeta', 'Ravulapalem', 'East Godavari', 'AP', 'SIHS/00766/2014', '15-12-2014'),
('EG-RPLM-KTPT2', 'EG-RPLM', 'NPS', 'Kottapeta', 'A Sriram Kumar', '9440778519', 'Kottapeta', 'Kottapeta', 'Ravulapalem', 'East Godavari', 'AP', 'SIHS/00785/2014', '15-12-2014'),
('EG-RPLM-KTPT3', 'EG-RPLM', 'NPS', 'Kottapeta', 'A Sudhakar', '9493955418', 'Kottapeta', 'Kottapeta', 'Ravulapalem', 'East Godavari', 'AP', 'SIHS/00778/2014', '15-12-2014'),
('EG-TUNI', 'EG', 'Block Coordinator', 'Tuni', 'Babji', '9849958764', 'Tuni', 'Tuni', 'Tuni', 'East godavari', 'AP', 'SIHS/00688/2014', '15-12-2014'),
('EG-UPGM', 'EG', 'Block Coordinator', 'Uppalaguptam', 'P Siva Rama Krishna', '9704712294', 'Antavaram', 'Uppalaguptam', 'Uppalaguptam', 'East godavari', 'AP', 'SIHS/00687/2014', '15-12-2014'),
('EG-UPGM-UPGM1', 'EG-UPGM', 'NPS', 'Uppalaguptam ', 'U Rama Lakshmi', 'NULL', 'Uppalaguptam ', 'Uppalaguptam', 'Uppalaguptam', 'East Godavari', 'AP', 'SIHS/00779/2014', '15-12-2014'),
('EG-UPGM-UPGM2', 'EG-UPGM', 'NPS', 'Uppalaguptam ', 'K  Venkataswarlu', 'NULL', 'Challapalli', 'Uppalaguptam', 'Uppalaguptam', 'East Godavari', 'AP', 'SIHS/00787/2014', '15-12-2014'),
('EG-UPGM-UPGM3', 'EG-UPGM', 'NPS', 'Uppalaguptam ', 'A Durga Narayana', 'NULL', 'S Yanam', 'Uppalaguptam', 'Uppalaguptam', 'East Godavari', 'AP', 'SIHS/00783/2014', '15-12-2014'),
('EG-UPGM-UPGM4', 'EG-UPGM', 'NPS', 'Allavaram', 'Y Sudhakar', 'NULL', 'Allavaram', 'Allavaram', 'Uppalaguptam', 'East Godavari', 'AP', 'SIHS/00781/2014', '15-12-2014'),
('GNM', '', 'NPS', 'Katrenikona', 'G Narasimha Murthy', 'NULL', '', '', '', '', 'AP', '', '15-12-2014'),
('GTR', 'AP', 'District Coordinator', 'GUNTUR', 'B  SASI RATAN', '8008663394', 'ARUNDAL PET', 'GUNTUR', 'GUNTUR', 'GUNTUR', 'AP', 'SIHS/00716/2014', ''),
('GTR-1', 'GTR', 'Block Coordinator', 'GUNTUR-1', 'MASTAN SHARIF', '9290004201', 'AMARAVATHI', 'AMARAVATHI', 'AMARAVATHI', 'GUNTUR', 'AP', 'SIHS/00717/2014', '12-05-2014'),
('GTR-1-AMVT', 'GTR-1', 'NPS', 'AMARAVATHI', 'K SUMANTH', '9000222360', 'AMARAVATHI', 'AMARAVATHI', 'GUNTUR-1', 'GUNTUR', 'AP', 'SIHS/00719/2014', '12-05-2014'),
('GTR-2', 'GTR', 'Block Coordinator', 'GUNTUR-2', 'SK BANDAGI SAHEB', '7799191300', 'KVP COLONY', 'GUNTUR', 'GUNTUR', 'GUNTUR', 'AP', 'SIHS/00721/2014', '12-05-2014'),
('GTR-3', 'GTR', 'Block Coordinator', 'GUNTUR-3', 'AMARA RAGHAVAIAH', '9440681626', 'PITTU VARI PALEM', 'KHAJI PLEM', 'KHAJI PALEM', 'GUNTUR', 'AP', 'SIHS/00718/2014', '12-05-2014'),
('GTR-4', 'GTR', 'Block Coordinator', 'GUNTUR-4', 'SK SALEEM', '8125502166', 'CHUTTUGUNTA', 'GUNTUR', 'GUNTUR', 'GUNTUR', 'AP', 'SIHS/00720/2014', '12-05-2014'),
('KRI', 'AP', 'District Coordinator', 'Krishna', 'Ravve kancharla', '9866783659', 'Vijayawada', 'Vijayawada', 'Vijayawada', 'Krishna', 'AP', '', ''),
('KRI-AVGD', 'KRI', 'Block Coordinator', 'Avanigadda', '', 'NULL', '', '', '', 'Krishna', 'AP', '', ''),
('KRI-GNVM', 'KRI', 'Block Coordinator', 'Gannavaram', 'Gandivenkatalakshmanarao', '9666652829', 'Gannavaram', 'Gannavaram', '', 'Krishna', 'AP', '', '12-04-2014'),
('KRI-GNVM-MANDAL1', 'KRI-GNVM', 'NPS', '', 'SSubbarao', '8142228850', 'Surampalli', 'Ganna varam', 'Gannavaram', 'Krishna', 'AP', '', '12-08-2014'),
('KRI-GNVM-MANDAL2', 'KRI-GNVM', 'NPS', '', 'MJyothikumar', '8374169678', 'bapulapadu', 'Gannavaram', 'Gannavaram', 'Krishna', 'AP', '', '15-12-2014'),
('KRI-GNVM-MANDAL3', 'KRI-GNVM', 'NPS', '', 'Padmata Naresh', '9347928713', 'Gollanapalli', 'Gannavaram', 'Gannavaram', 'Krishna', 'AP', '', '15-12-2014'),
('KRI-GNVM-MANDAL4', 'KRI-GNVM', 'NPS', '', 'Govada Lakshmiphani', '7036939969', 'Gannavaram', 'Gannavaram', 'Gannavaram', 'Krishna', 'AP', '', '16-12-2014'),
('KRI-GTSL', 'KRI', 'Block Coordinator', 'Ghantasala', 'Veera Raghavaiah', '9014213042', 'Varregudem', 'Machilipatnam', 'Ghantasala', 'Krishna', 'AP', '', '12-05-2014'),
('KRI-GTSL-MANDAL1', 'KRI-GTSL', 'NPS', '', 'Dimmeta Ramaraju', 'NULL', 'Bapulapadu', 'Gannavaram', 'GS', 'Krishna', 'AP', '', '17-12-2014'),
('KRI-GTSL-MANDAL2', 'KRI-GTSL', 'NPS', '', 'Udayalakshmi', '8465818774', 'Gantasala', 'Gantasala', 'Gantasala', 'Krishna', 'AP', '', '20-12-2014'),
('KRI-GTSL-MANDAL3', 'KRI-GTSL', 'NPS', '', 'Chittiah', '9490283958', 'Gantasala', 'Gantasala', 'Gantasala', 'Krishna', 'AP', '', '20-12-2014'),
('KRI-KKLR', 'KRI', 'Block Coordinator', 'Kaikalutu', 'YRajeshkumat', '9032096313', 'Kaikaluru', 'Kaikaluru', '', 'Krishna', 'AP', '', '12-11-2014'),
('KRI-MCPTM', 'KRI', 'Block Coordinator', 'Machilipatnam', 'BRKSarma', '8978447744', 'Machilipatnam', 'Machilipatnam', 'Machilipatnam', 'Krishna', 'AP', '', '25-12-2014'),
('KRI-MCPTM-MANDAL1', 'KRI-MCPTM', 'NPS', '', 'Kondapalli Rajyalaksimi', '7396698113', 'Padana', 'Machilipatnam', 'Machilipatnam', 'Krishna', 'AP', '', '23-12-2014'),
('KRI-MLVM', 'KRI', 'Block Coordinator', 'Mylavaram', 'Krishnaiah', '9912811888', 'A-Konduru', 'G-Konduru', '', 'Krishna', 'AP', '', '12-03-2014'),
('KRI-MLVM-MANDAL1', 'KRI-MLVM', 'NPS', '', 'Suresh', '9640099985', 'pedakomera', 'ammireddygudem', 'Mylavaram', 'Krishna', 'AP', '', '12-09-2014'),
('KRI-MLVM-MANDAL2', 'KRI-MLVM', 'NPS', '', 'Kumari', '8096761037', 'pedakomera', 'ammireddygudem', 'Mylavaram', 'Krishna', 'AP', '', '12-09-2014'),
('KRI-MLVM-MANDAL3', 'KRI-MLVM', 'NPS', '', 'Salika Bruhaspathi', '9948325442', 'Mylavaram', 'mylavaram', 'Mylavaram', 'Krishna', 'AP', '', '17-12-2014'),
('KRI-NDGM', 'KRI', 'Block Coordinator', 'Nandigam', '', 'NULL', '', '', '', 'Krishna', 'AP', '', ''),
('KRI-NZD', 'KRI', 'Block Coordinator', 'Nuzivedu', '', 'NULL', '', '', '', 'Krishna', 'AP', '', ''),
('KRI-VJWD', 'KRI', 'Block Coordinator', 'Vijayawada', 'GVenkataRajesh', '8885542999', 'Vijayawada', 'Vijayawada', '', 'Krishna', 'AP', '', '27-11-2014'),
('KRI-VUYR', 'KRI', 'Block Coordinator', 'Vuyyuru', 'Areef', '9848373999', 'Vuyyuru', 'Vuyyuru', '', 'Krishna', 'AP', '', '26-11-2014'),
('KRI-VUYR-MANDAL1', 'KRI-VUYR', 'NPS', '', 'TRGChakradhar', '9346231303', 'Vuyyuru', 'Vuyyuru', 'vuyyuru', 'Krishna', 'AP', '', '12-04-2014'),
('KRI-VUYR-MANDAL2', 'KRI-VUYR', 'NPS', '', 'MBhavaniSankar reddy', '9848107651', 'pamarru', 'pamarru', 'vuyyuru', 'Krishna', 'AP', '', '13-12-2014'),
('KRI-VUYR-MANDAL3', 'KRI-VUYR', 'NPS', '', 'chMuraliSudhaker', '9848523639', 'pamarru', 'pamarru', 'vuyyuru', 'Krishna', 'AP', '', '13-12-2014'),
('KRI-VUYR-MANDAL4', 'KRI-VUYR', 'NPS', '', 'JKrishna', '8099494849', 'vuyyuru', 'Vuyyuru', 'vuyyuru', 'Krishna', 'AP', '', '17-12-2014'),
('MVR', '', 'NPS', 'Ainavilli', 'M Venkata Ramana', 'NULL', '', '', '', '', 'AP', '', ''),
('PKS', 'AP', 'District Coordinator', 'Prakasam', 'G Kirankumar', '9885497348', 'Guntur', 'Guntur', 'Guntur(U)', 'Guntur', 'AP', 'SIHS/00715/2014', ''),
('PKS-BLK1', 'PKS', 'Block Coordinator', 'Block-1', 'Narendranath Namburi', '9866424467', 'Bestapalem', 'Podili', 'Podili', 'Prakasam', 'AP', '', ''),
('PKS-BLK10', 'PKS', 'Block Coordinator', 'Block-10', 'Venkateswarlu Nandikanuma', '9010202880', 'Markapuram', 'Markapur', 'Markapur', 'Prakasam', 'AP', '', ''),
('PKS-BLK2', 'PKS', 'Block Coordinator', 'Block-2', 'Hariprasad Pidimarry', '9848292270', 'Cumbum', 'Cumbum', 'Cumbum', 'Prakasam', 'AP', '', ''),
('PKS-BLK3', 'PKS', 'Block Coordinator', 'Block-3', 'Jagan Mohan Raju Challa', '9666741422', 'Chimakurthy', 'Chimakurthy', 'Chimakurthy', 'Prakasam', 'AP', '', ''),
('PKS-BLK4', 'PKS', 'Block Coordinator', 'Block-4', 'Srinath Rachagarla', '9704663702', 'Mannetikota', 'Mannetikota', 'Ulavapadu', 'Prakasam', 'AP', '', ''),
('PKS-BLK5', 'PKS', 'Block Coordinator', 'Block-5', 'Venkata rajesh kumar Chappidi', '9154561257', 'Mulaguntapadu', 'Singarayakonda', 'Singarayakond', 'Prakasam', 'AP', '', ''),
('PKS-BLK6', 'PKS', 'Block Coordinator', 'Block-6', 'Anthony Gurijala', '8096715473', 'Regalagadda', 'Marripudi', 'Marripudi', 'Prakasam', 'AP', '', ''),
('PKS-BLK7', 'PKS', 'Block Coordinator', 'Block-7', 'Naga Raja Dasari', '9704998143', 'Singarayakonda', 'Singarayakonda', 'Singarayakonda', 'Prakasam', 'AP', '', ''),
('PKS-BLK8', 'PKS', 'Block Coordinator', 'Block-8', 'Mahendra K', '9885240662', 'Kondamanjuluru', 'Jpanguluru', 'Jpanguluru', 'Prakasam', 'AP', '', ''),
('PKS-BLK9', 'PKS', 'Block Coordinator', 'Block-9', 'Radha Krishna G', '9032379780', 'Ongole', 'Ongole', 'Ongole', 'Prakasam', 'AP', '', ''),
('SKL-AMDVS', 'SKL', 'Block Coordinator', 'Amdalavalasa', 'PAILA  SATHISH ', '9848607200', 'BADDUMASINGI ', 'Palakonda', 'Srikakulam', 'Srikakulam', 'AP', '', ''),
('SKL-PLKD', 'SKL', 'Block Coordinator', 'Palakonda', 'LAVETIGANAPATHI RAO', '9573578363', 'Purlipeta', 'Purlipeta', 'Regediamadalavalasa', 'Srikakulam', 'AP', '', ''),
('SKL-REGD', 'SKL', 'Block Coordinator', 'Regedi', 'LAVETICHINNAMNAIDU', '9640447600', 'Purlipeta', 'Purlipeta', 'Regediamadalavalasa', 'Srikakulam', 'AP', '', ''),
('VSP', 'AP', 'District Coordinator', 'Visakhapatnam', 'K Sankara Satya Rao', '8341441343', 'Pulagalipalem', 'Juttdda', 'Pendurthi', 'Visakhapatnam', 'AP', '', ''),
('VSP-ANKP', 'VSP', 'Block Coordinator', 'Anakapalli', 'S V Appala Raju', '9154227833', 'V Juttada', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', 'AP', '', ''),
('VSP-CHDVM', 'VSP', 'Block Coordinator', 'Chodavaram', 'Telu Venkata Rao', '9966117866', 'V Juttada', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', 'AP', '', ''),
('VSP-KKTPD', 'VSP', 'Block Coordinator', 'K Kotapadu', 'Golla Radha Krishna', '8341543334', 'Brudhavanam Garden', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', 'AP', '', ''),
('VSP-NSPTM', 'VSP', 'Block Coordinator', 'Narsipatnam', 'Chikkala S V N P Kumar', '9848394677', 'Sarada Nagar', 'Narsipatnam', 'Narsipatnam', 'Visakhapatnam', 'AP', '', ''),
('VSP-PNDR', 'VSP', 'Block Coordinator', 'Pendurthi', 'Killi Eswara Rao', '9704470228', 'Pulagalipalem', 'Juthadda', 'Pendurthi', 'Visakhapatnam', 'AP', '', ''),
('VSP-PNDR-PNDR1', 'VSP-PNDR', 'NPS', 'Pendurthi', ' B Ravi', '9912863148', 'Velam Peta', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', 'AP', '', ''),
('VSP-PNDR-PNDR2', 'VSP-PNDR', 'NPS', 'Pendurthi', ' Trinadha Rao', '9000018647', 'Pendurthi', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', 'AP', '', ''),
('VSP-YLMCL', 'VSP', 'Block Coordinator', 'Yelamanchili', 'R Simhachalam ', '9985865156', 'Naravanipalem', 'Pendurthi', 'Pendurthi', 'Visakhapatnam', 'AP', '', ''),
('VZM', 'AP', 'District Coordinator', 'Vizianagaram', 'Shaik  Subhan', '8187814375', 'Sambayyapalem', 'Kumapalli', 'L Kota', 'Vizianagaram', 'AP', '', ''),
('VZM-CHPL', 'VZM', 'Block Coordinator', 'Chipurupalli', 'Potnuru Gowrunaidu', '7893736153', 'Nagallavalasa', 'Nagallavalasa', 'Gurla', 'Vizianagaram', 'AP', '', ''),
('VZM-KTVS', 'VZM', 'Block Coordinator', 'Kothavalasa', 'Pediredla Lova Raju', '9494774251', 'Sundarayyapeta', 'Kothavalasa', 'Kothavalasa', 'Vizianagaram', 'AP', '', ''),
('VZM-NLL', 'VZM', 'Block Coordinator', 'Nellimarla', 'V Chinnam Naidu', '8500265524', 'Yeanaguvalasa', 'Yeanaguvalasa', 'Cheepurapalli', 'Vizianagaram', 'AP', '', ''),
('WG', 'AP', 'District Coordinator', 'West Godavari', 'Ravi Devaki', '8688421234', 'Eluru', 'Eluru', 'Eluru', 'West Godavari', 'AP', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `project_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

REPLACE INTO `projects` (`project_id`, `project_title`) VALUES
('1', 'SWALAMBANA');

-- --------------------------------------------------------

--
-- Table structure for table `stateco`
--

CREATE TABLE IF NOT EXISTS `stateco` (
  `sc_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `state_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `Contact_no` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stateco`
--

REPLACE INTO `stateco` (`sc_id`, `state_name`, `name`, `Contact_no`) VALUES
('AP', 'Andhra Pradesh', 'Srinivas Singavarapu', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nos` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `test`
--

REPLACE INTO `test` (`name`, `nos`) VALUES
('a', 2),
('aa', 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v1`
--
CREATE TABLE IF NOT EXISTS `v1` (
`nps_id` varchar(20)
,`date` date
,`nos` int(10)
);
-- --------------------------------------------------------

--
-- Structure for view `v1`
--
DROP TABLE IF EXISTS `v1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v1` AS select `applications`.`nps_id` AS `nps_id`,`applications`.`date` AS `date`,`applications`.`nos` AS `nos` from `applications`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
 ADD PRIMARY KEY (`nps_id`,`date`);

--
-- Indexes for table `areaco`
--
ALTER TABLE `areaco`
 ADD PRIMARY KEY (`nps_id`);

--
-- Indexes for table `areaco2`
--
ALTER TABLE `areaco2`
 ADD PRIMARY KEY (`nps_id`), ADD UNIQUE KEY `nps_id` (`nps_id`);

--
-- Indexes for table `benf`
--
ALTER TABLE `benf`
 ADD PRIMARY KEY (`benf_id`);

--
-- Indexes for table `blockco`
--
ALTER TABLE `blockco`
 ADD PRIMARY KEY (`bc_id`), ADD UNIQUE KEY `bc_id` (`bc_id`), ADD UNIQUE KEY `contact_no_4` (`contact_no`), ADD UNIQUE KEY `contact_no_5` (`contact_no`), ADD UNIQUE KEY `contact_no_6` (`contact_no`), ADD UNIQUE KEY `dc_id_2` (`dc_id`,`contact_no`), ADD KEY `contact_no_2` (`contact_no`), ADD KEY `contact_no_3` (`contact_no`), ADD KEY `dc_id` (`dc_id`);

--
-- Indexes for table `distco`
--
ALTER TABLE `distco`
 ADD PRIMARY KEY (`dc_id`), ADD UNIQUE KEY `dc_id` (`dc_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `stateco`
--
ALTER TABLE `stateco`
 ADD PRIMARY KEY (`sc_id`), ADD UNIQUE KEY `sc_id` (`sc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benf`
--
ALTER TABLE `benf`
MODIFY `benf_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=496;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
