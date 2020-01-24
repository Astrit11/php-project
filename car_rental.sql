-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 07:37 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carID` int(11) NOT NULL,
  `carName` varchar(25) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `doors` varchar(10) NOT NULL,
  `seats` varchar(10) NOT NULL,
  `large_bag` varchar(12) DEFAULT NULL,
  `small_bag` varchar(12) DEFAULT NULL,
  `aircondition` varchar(16) DEFAULT NULL,
  `transmission` varchar(17) DEFAULT NULL,
  `model` varchar(15) NOT NULL,
  `carPrice` int(11) DEFAULT NULL,
  `carLocation` varchar(15) NOT NULL,
  `carAvailability` tinyint(1) NOT NULL,
  `userID` int(11) NOT NULL,
  `rentFrom` varchar(15) DEFAULT NULL,
  `rentUntil` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carID`, `carName`, `image`, `doors`, `seats`, `large_bag`, `small_bag`, `aircondition`, `transmission`, `model`, `carPrice`, `carLocation`, `carAvailability`, `userID`, `rentFrom`, `rentUntil`) VALUES
(48, 'Peugeot 308 Station Wagon', 'https://cdn2.rcstatic.com/images/car_images/new_images/peugeot/308_estate_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Estate', 111, 'Skopje Airport', 1, 3, NULL, NULL),
(49, 'BMW 1-series', 'https://cdn2.rcstatic.com/images/car_images/new_images/bmw/1_series_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Intermediate', 121, 'Skopje Airport', 1, 1, '12/27/2018', '12/31/2018'),
(50, 'Volkswagen Golf', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/golf_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Automatic gearbox', 'Compact', 131, 'Skopje Airport', 1, 2, '12/27/2018', '12/31/2018'),
(51, 'Volkswagen Polo', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/polo_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Economy', 120, 'Skopje Airport', 1, 3, NULL, NULL),
(52, 'Opel Astra', 'https://cdn2.rcstatic.com/images/car_images/new_images/opel/astra_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Compact', 141, 'Skopje Airport', 1, 1, '12/27/2018', '12/31/2018'),
(53, 'Skoda Octavia', 'https://cdn2.rcstatic.com/images/car_images/new_images/skoda/octavia_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Automatic gearbox', 'Intermediate', 148, 'Skopje Airport', 1, 2, '12/28/2018', '12/31/2018'),
(54, 'Renault Trafic', 'https://cdn2.rcstatic.com/images/car_images/new_images/renault/trafic_lrg.jpg', '4 Doors', '9 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'People Carrier', 160, 'Skopje Airport', 1, 3, NULL, NULL),
(55, 'Suzuki Vitara', 'https://cdn2.rcstatic.com/images/car_images/new_images/suzuki/vitara_lrg.jpg', '4 Doors', '5 Seats', '3 Large bags', '-', 'Air Conditioning', 'Manual gearbox', 'SUV', 152, 'Skopje Airport', 1, 1, NULL, NULL),
(56, 'Opel Astra', 'https://cdn2.rcstatic.com/images/car_images/new_images/opel/astra_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Compact', 139, 'Skopje Airport', 1, 2, NULL, NULL),
(57, 'Chevrolet Spark', 'https://cdn2.rcstatic.com/images/car_images/new_images/chevrolet/spark_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Mini', 154, 'Skopje Airport', 1, 3, NULL, NULL),
(58, 'VW Polo', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/polo_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Economy', 157, 'Skopje Airport', 1, 1, NULL, NULL),
(59, 'Seat MII', 'https://cdn2.rcstatic.com/images/car_images/new_images/seat/mii_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '-', 'Air Conditioning', 'Manual gearbox', 'Mini', 156, 'Skopje Airport', 1, 2, NULL, NULL),
(60, 'Renault Trafic', 'https://cdn2.rcstatic.com/images/car_images/new_images/renault/trafic_lrg.jpg', '4 Doors', '9 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'People Carrier', 180, 'Skopje Airport', 1, 3, NULL, NULL),
(61, 'Chevrolet Spark', 'https://cdn2.rcstatic.com/images/car_images/new_images/chevrolet/spark_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Mini', 171, 'Skopje Airport', 1, 1, NULL, NULL),
(62, 'Suzuki Vitara', 'https://cdn2.rcstatic.com/images/car_images/new_images/suzuki/vitara_lrg.jpg', '4 Doors', '5 Seats', '3 Large bags', '-', 'Air Conditioning', 'Manual gearbox', 'SUV', 171, 'Skopje Airport', 1, 2, NULL, NULL),
(63, 'Opel Astra', 'https://cdn2.rcstatic.com/images/car_images/new_images/opel/astra_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Automatic gearbox', 'Compact', 174, 'Skopje Airport', 1, 3, '01/01/2019', '01/05/2019'),
(64, 'VW Polo', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/polo_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Economy', 175, 'Skopje Airport', 1, 1, NULL, NULL),
(65, 'Seat MII', 'https://cdn2.rcstatic.com/images/car_images/new_images/seat/mii_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '-', 'Air Conditioning', 'Manual gearbox', 'Mini', 173, 'Skopje Airport', 1, 2, NULL, NULL),
(66, 'Opel Astra Estate', 'https://cdn2.rcstatic.com/images/car_images/new_images/opel/astra_estate_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Estate', 174, 'Skopje Airport', 1, 3, NULL, NULL),
(67, 'Peugeot 308', 'https://cdn2.rcstatic.com/images/car_images/new_images/peugeot/308_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Compact', 207, 'Skopje Airport', 1, 1, NULL, NULL),
(68, 'Opel Astra', 'https://cdn2.rcstatic.com/images/car_images/new_images/opel/astra_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Compact', 214, 'Skopje Airport', 1, 2, NULL, NULL),
(69, 'Skoda Octavia', 'https://cdn2.rcstatic.com/images/car_images/new_images/skoda/octavia_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Intermediate', 203, 'Skopje Airport', 1, 3, NULL, NULL),
(70, 'Chevrolet Cruze', 'https://cdn2.rcstatic.com/images/car_images/new_images/chevrolet/cruze_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Automatic gearbox', 'Intermediate', 203, 'Skopje Airport', 1, 1, '12/27/2018', '12/31/2018'),
(71, 'Opel Astra Estate', 'https://cdn2.rcstatic.com/images/car_images/new_images/opel/astra_estate_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Estate', 203, 'Skopje Airport', 1, 2, NULL, NULL),
(72, 'Peugeot 308', 'https://cdn2.rcstatic.com/images/car_images/new_images/peugeot/308_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Compact', 230, 'Skopje Airport', 1, 3, NULL, NULL),
(73, 'Opel Vivaro', 'https://cdn2.rcstatic.com/images/car_images/new_images/opel/vivaro_lrg.jpg', '2 Doors', '7 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'People Carrier', 236, 'Skopje Airport', 1, 1, NULL, NULL),
(74, 'Volkswagen Passat', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/passat_lrg.jpg', '4 Doors', '5 Seats', '2 Large bags', '1 Small bag', '-', 'Manual gearbox', 'Standard', 239, 'Skopje Airport', 1, 2, NULL, NULL),
(75, 'Opel Vivaro', 'https://cdn2.rcstatic.com/images/car_images/new_images/opel/vivaro_lrg.jpg', '4 Doors', '9 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'People Carrier', 253, 'Skopje Airport', 1, 3, NULL, NULL),
(76, 'Seat Ibiza Estate', 'https://cdn2.rcstatic.com/images/car_images/new_images/seat/ibiza_estate_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Estate', 245, 'Skopje Airport', 1, 1, NULL, NULL),
(77, 'Renault Fluence', 'https://cdn2.rcstatic.com/images/car_images/new_images/renault/fluence_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Intermediate', 261, 'Skopje Airport', 1, 2, NULL, NULL),
(78, 'Seat Ibiza Estate', 'https://cdn2.rcstatic.com/images/car_images/new_images/seat/ibiza_estate_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Estate', 270, 'Skopje Airport', 1, 3, NULL, NULL),
(79, 'Chevrolet Aveo', 'https://cdn2.rcstatic.com/images/car_images/new_images/chevrolet/aveo_5door_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Automatic gearbox', 'Economy', 283, 'Skopje Airport', 1, 1, NULL, NULL),
(80, 'Renault Fluence', 'https://cdn2.rcstatic.com/images/car_images/new_images/renault/fluence_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Intermediate', 289, 'Skopje Airport', 1, 2, NULL, NULL),
(81, 'Volkswagen Passat', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/passat_lrg.jpg', '4 Doors', '5 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Standard', 277, 'Skopje Airport', 1, 3, NULL, NULL),
(82, 'Chevrolet Captiva', 'https://cdn2.rcstatic.com/images/car_images/new_images/chevrolet/captiva_lrg.jpg', '4 Doors', '5 Seats', '3 Large bags', '-', 'Air Conditioning', 'Manual gearbox', 'SUV', 298, 'Skopje Airport', 1, 1, NULL, NULL),
(84, 'Volkswagen Polo', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/polo_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Economy', 220, 'Ohrid Airport', 1, 2, NULL, NULL),
(86, 'Skoda Rapid', 'https://cdn2.rcstatic.com/images/car_images/new_images/skoda/rapid_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Intermediate', 190, 'Ohrid Airport', 1, 1, NULL, NULL),
(88, 'Seat MII', 'https://cdn2.rcstatic.com/images/car_images/new_images/seat/mii_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '-', 'Air Conditioning', 'Manual gearbox', 'Mini', 150, 'Ohrid Airport', 1, 3, NULL, NULL),
(89, 'Fiat Grande Punto', 'https://cdn2.rcstatic.com/images/car_images/new_images/fiat/punto_lrg.jpg', '2 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Economy', 199, 'Ohrid Airport', 1, 1, NULL, NULL),
(90, 'Chevrolet Spark', 'https://cdn2.rcstatic.com/images/car_images/new_images/chevrolet/spark_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Mini', 170, 'Ohrid Airport', 1, 2, NULL, NULL),
(91, 'Seat MII', 'https://cdn2.rcstatic.com/images/car_images/new_images/seat/mii_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '-', 'Air Conditioning', 'Manual gearbox', 'Mini', 198, 'Ohrid Airport', 1, 3, NULL, NULL),
(92, 'VW Polo', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/polo_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Economy', 233, 'Ohrid Airport', 1, 1, NULL, NULL),
(93, 'VW Polo', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/polo_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Economy', 123, 'Ohrid Airport', 1, 2, NULL, NULL),
(94, 'Citroen C3', 'https://cdn2.rcstatic.com/images/car_images/new_images/citroen/c3_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Economy', 311, 'Ohrid Airport', 1, 3, NULL, NULL),
(95, 'Peugeot 308', 'https://cdn2.rcstatic.com/images/car_images/new_images/peugeot/308_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Compact', 321, 'Ohrid Airport', 1, 1, NULL, NULL),
(96, 'Peugeot 308', 'https://cdn2.rcstatic.com/images/car_images/new_images/peugeot/308_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Compact', 231, 'Ohrid Airport', 1, 2, NULL, NULL),
(97, 'Volkswagen Up', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/up_lrg.jpg', '4 Doors', '4 Seats', '1 Large bag', '-', 'Air Conditioning', 'Manual gearbox', 'Mini', 233, 'Ohrid Airport', 1, 3, NULL, NULL),
(98, 'Dacia Sandero', 'https://cdn2.rcstatic.com/images/car_images/new_images/dacia/sandero_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Economy', 287, 'Ohrid Airport', 1, 1, NULL, NULL),
(99, 'Ford Focus', 'https://cdn2.rcstatic.com/images/car_images/new_images/ford/focus_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Compact', 423, 'Ohrid Airport', 1, 2, NULL, NULL),
(100, 'Fiat Tipo', 'https://cdn2.rcstatic.com/images/car_images/new_images/fiat/tipo_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Compact', 243, 'Ohrid Airport', 1, 3, NULL, NULL),
(101, 'Skoda Rapid', 'https://cdn2.rcstatic.com/images/car_images/new_images/skoda/rapid_lrg.jpg', '4 Doors', '5 Seats', '2 Large bags', '3 Small bags', 'Air Conditioning', 'Manual gearbox', 'Economy', 324, 'Ohrid Airport', 1, 1, NULL, NULL),
(102, 'Renault Fluence', 'https://cdn2.rcstatic.com/images/car_images/new_images/renault/fluence_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Intermediate', 123, 'Ohrid Airport', 1, 2, NULL, NULL),
(103, 'Ford Focus', 'https://cdn2.rcstatic.com/images/car_images/new_images/ford/focus_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Automatic gearbox', 'Compact', 432, 'Ohrid Airport', 1, 1, NULL, NULL),
(104, 'Renault Fluence', 'https://cdn2.rcstatic.com/images/car_images/new_images/renault/fluence_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Intermediate', 322, 'Ohrid Airport', 1, 2, NULL, NULL),
(105, 'Opel Corsa', 'https://cdn2.rcstatic.com/images/car_images/new_images/opel/corsa_4_doors_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Automatic gearbox', 'Economy', 232, 'Ohrid Airport', 1, 3, NULL, NULL),
(106, 'Peugeot 301', 'https://cdn2.rcstatic.com/images/car_images/new_images/peugeot/301_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Automatic gearbox', 'Compact', 323, 'Ohrid Airport', 1, 1, NULL, NULL),
(107, 'Fiat Tipo Estate', 'https://cdn2.rcstatic.com/images/car_images/new_images/fiat/tipo_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Automatic gearbox', 'Estate', 110, 'Ohrid Airport', 1, 2, NULL, NULL),
(108, 'Volkswagen Golf', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/golf_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Compact', 140, 'Ohrid Airport', 1, 3, NULL, NULL),
(109, 'Citroen C5', 'https://cdn2.rcstatic.com/images/car_images/new_images/citroen/c5_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Intermediate', 201, 'Ohrid Airport', 1, 1, NULL, NULL),
(110, 'Skoda Octavia', 'https://cdn2.rcstatic.com/images/car_images/new_images/skoda/octavia_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Intermediate', 209, 'Ohrid Airport', 1, 2, NULL, NULL),
(111, 'Dacia Lodgy', 'https://cdn2.rcstatic.com/images/car_images/new_images/dacia/lodgy_lrg.jpg', '4 Doors', '5/7 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'People Carrier', 222, 'Ohrid Airport', 1, 3, NULL, NULL),
(112, 'Suzuki Vitara', 'https://cdn2.rcstatic.com/images/car_images/new_images/suzuki/vitara_lrg.jpg', '4 Doors', '5 Seats', '3 Large bags', '-', 'Air Conditioning', 'Manual gearbox', 'SUV', 238, 'Ohrid Airport', 1, 1, NULL, NULL),
(113, 'Volkswagen Golf', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/golf_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Compact', 282, 'Ohrid Airport', 1, 2, NULL, NULL),
(114, 'Fiat Scudo', 'https://cdn2.rcstatic.com/images/car_images/new_images/fiat/scudo_lrg.jpg', '4 Doors', '9 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'People Carrier', 372, 'Ohrid Airport', 1, 3, NULL, NULL),
(115, 'Renault Megane Estate', 'https://cdn2.rcstatic.com/images/car_images/new_images/renault/megane_estate_lrg.jpg', '4 Doors', '5 Seats', '1 Large bag', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Estate', 90, 'Ohrid Airport', 1, 1, NULL, NULL),
(116, 'Opel Antara', 'https://cdn2.rcstatic.com/images/car_images/new_images/opel/antara_lrg.jpg', '4 Doors', '5 Seats', '3 Large bags', '-', 'Air Conditioning', 'Manual gearbox', 'SUV', 289, 'Ohrid Airport', 1, 2, NULL, NULL),
(117, 'Opel Vivaro', 'https://cdn2.rcstatic.com/images/car_images/new_images/opel/vivaro_lrg.jpg', '4 Doors', '9 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'People Carrier', 109, 'Ohrid Airport', 1, 3, NULL, NULL),
(118, 'Dacia Duster', 'https://cdn2.rcstatic.com/images/car_images/new_images/dacia/duster_lrg.jpg', '4 Doors', '5 Seats', '3 Large bags', '-', 'Air Conditioning', 'Manual gearbox', 'SUV', 362, 'Ohrid Airport', 1, 1, NULL, NULL),
(119, 'Jeep Compass 4X4', 'https://cdn2.rcstatic.com/images/car_images/new_images/jeep/compass_lrg.jpg', '4 Doors', '5 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'SUV', 261, 'Ohrid Airport', 1, 2, NULL, NULL),
(120, 'Volkswagen Passat', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/passat_lrg.jpg', '4 Doors', '5 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Standard', 237, 'Ohrid Airport', 1, 3, NULL, NULL),
(121, 'Chevrolet Epica', 'https://cdn2.rcstatic.com/images/car_images/new_images/chevrolet/epica_lrg.jpg', '4 Doors', '5 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Automatic gearbox', 'Standard', 238, 'Ohrid Airport', 1, 1, NULL, NULL),
(122, 'Volkswagen Passat', 'https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/passat_lrg.jpg', '4 Doors', '5 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'Standard', 143, 'Ohrid Airport', 1, 2, NULL, NULL),
(124, 'Renault Trafic', 'https://cdn2.rcstatic.com/images/car_images/new_images/renault/trafic_lrg.jpg', '4 Doors', '9 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Manual gearbox', 'People Carrier', 123, 'Ohrid Airport', 1, 1, NULL, NULL),
(125, 'Chevrolet Captiva', 'https://cdn2.rcstatic.com/images/car_images/new_images/chevrolet/captiva_lrg.jpg', '4 Doors', '5 Seats', '2 Large bags', '1 Small bag', 'Air Conditioning', 'Automatic gearbox', 'SUV', 432, 'Ohrid Airport', 1, 2, '12/15/2018', '25/12/2085'),
(145, 'Skoda Rapid v2', 'https://cdn2.rcstatic.com/images/car_images/new_images/skoda/rapid_lrg.jpg', '3 Doors', '4 Seats', '1 Large Bag', '1 Small Bag', 'Air Condition', 'Manual', 'Compact', 104, 'Skopje Airport', 0, 2, NULL, NULL),
(146, 'Peugeot 308 Station Wagon', 'https://cdn2.rcstatic.com/images/car_images/new_images/peugeot/308_estate_lrg.jpg', '3 Doors', '4 Seats', '1 Large Bag', '1 Small Bag', 'Air Condition', 'Manual', 'Compact', 120, 'Skopje Airport', 0, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transactionID` int(11) NOT NULL,
  `carID` int(11) NOT NULL,
  `dateFrom` varchar(255) NOT NULL,
  `dateUntil` varchar(255) NOT NULL,
  `timeFrom` varchar(255) NOT NULL,
  `timeUntil` varchar(255) NOT NULL,
  `payment` varchar(700) NOT NULL,
  `pickupLocation` varchar(100) NOT NULL,
  `dropOffLocation` varchar(100) NOT NULL,
  `customerName` varchar(25) NOT NULL,
  `customerLastName` varchar(25) NOT NULL,
  `phoneNumber` varchar(25) NOT NULL,
  `passportNumber` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transactionID`, `carID`, `dateFrom`, `dateUntil`, `timeFrom`, `timeUntil`, `payment`, `pickupLocation`, `dropOffLocation`, `customerName`, `customerLastName`, `phoneNumber`, `passportNumber`) VALUES
(7, 48, '12/18/2020', '12/25/2020', '13:00:00', '16:00:00', '777.00', 'Skopje Airport', 'Ohrid Airport', 'Arber', 'Miftari', '0700002000', 'H0124154'),
(8, 48, '03/12/2020', '03/22/2020', '13:00:00', '13:00:00', '1110.00', 'Ohrid Airport', 'Skopje Airport', 'astrit', 'maliku', '3 897 0230894', 'H0124154'),
(9, 50, '01/01/2020', '01/31/2020', '21:00:00', '16:00:00', '3930.00', 'Skopje Airport', 'Skopje Airport', 'ezan', 'iljazi', '0705545885', 'H012312414'),
(11, 54, '12/26/2020', '12/30/2020', '13:00:00', '09:00:00', '640.00', 'Skopje Airport', 'Ohrid Airport', 'ilir', 'durmishi', '+38970450894', 'H012415434'),
(12, 58, '01/01/2020', '01/29/2020', '16:00:00', '09:00:00', '4396.00', 'Skopje Airport', 'Skopje Airport', 'jasir', 'fetai', '0705545885', 'H0629645134');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Astrit', 'Maliku', 'astritmaliku@yahoo.com', '123456'),
(2, 'Arber', 'Zeneli ', 'az26239@seeu.edu.mk', '654321'),
(3, 'Jasir', 'Fetai', 'jf124@seeu.edu.mk', '123123'),
(31, 'mali', 'fali', '1safas@gmail.com', '12345'),
(33, 'Andi', 'Iljazi', 'andi@gmail.com', '12345'),
(39, 'Ilir', 'Durmishi', 'ilir@yahoo.com', '123'),
(40, 'arber', 'fasf', 'markuarbi@gmail2.com', '1234'),
(41, 'ezan', 'iljazi', 'ezan@icloud.com', '123456'),
(42, 'feto', 'marku', 'feto@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transactionID`),
  ADD KEY `carID` (`carID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`carID`) REFERENCES `cars` (`carID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
