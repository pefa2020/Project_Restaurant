-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2022 at 11:31 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `streetAddress` varchar(60) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `reference` varchar(60) NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `firstName`, `lastName`, `emailAddress`, `streetAddress`, `city`, `state`, `zipCode`, `reference`, `dateAdded`) VALUES
(1, 'Johny', 'Depp', 'jdepp@gmail.com', '34 Famous St', 'Los Angeles', 'CA', '90001', 'Friend Referral', '2022-11-21 20:44:15'),
(2, 'Brad', 'Pitt', 'bradp@gmail.com', '34 Orange St', 'Kansas', 'OH', '13324', 'Google Search', '2022-11-28 20:11:46'),
(3, 'Peter', 'Griffin', 'pgriffin@gmail.com', '19 Blue St', 'Newark', 'NJ', '07105', 'Advertisement', '2022-11-28 20:32:36'),
(4, 'Felix', 'Felicis', 'felix@gmail.com', '75 Doe St', 'Montclair', 'NJ', '07042', 'Yellow Pages', '2022-11-28 23:41:31'),
(5, 'Jane', 'Doe', 'jdoe@gmail.com', '12 Market St', 'Newark', 'NJ', '07105', 'Family Referral', '2022-11-28 23:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dishID` int(11) NOT NULL,
  `menuCategoryID` int(11) NOT NULL,
  `dishCode` varchar(10) NOT NULL,
  `dishName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dishID`, `menuCategoryID`, `dishCode`, `dishName`, `description`, `price`, `dateAdded`) VALUES
(1, 1, 'lomo_sa', 'Lomo Saltado', 'A stir fry that typically combines marinated strips of sirloin (or other beef steak) with onions, tomatoes, french fries, and other ingredients; and is typically served with rice.', '29.50', '2022-11-18 15:48:58'),
(2, 1, 'aji_ga', 'Aji de Gallina', 'Poached chicken slathered in a spicy and creamy nut-based sauce is served over white rice and boiled potatoes.', '20.50', '2022-11-18 15:53:51'),
(3, 1, 'cau_cau', 'Cau cau', 'Cau cau is typically seasoned with aji amarillo, cumin, red onions, turmeric and garlic.', '25.50', '2022-11-18 15:56:20'),
(4, 2, 'cev_iche', 'Ceviche', 'Sea bass (corvina) marinated for just minutes in lime juice, onion, salt and, of course, hot chiles (aji).', '30.00', '2022-11-21 20:13:33'),
(5, 2, 'cau_sa', 'Causa', 'Meaty mashed yellow Peruvian potatoes blended with lime, oil and spicy aji amarillo sauce. Shredded tuna, salmon, or chicken are mixed with mayo, followed by layers of avocado, hardboiled eggs, and olives.', '15.50', '2022-11-21 20:15:52'),
(6, 2, 'roc_rell', 'Rocoto Relleno', 'Red aji rocoto chilies are stuffed with a cooked mix of ground beef, onions, garlic, olives, raisins, herbs, and spices, then topped with queso fresco and baked in an egg-and-milk sauce.', '20.50', '2022-11-21 20:17:30'),
(7, 3, 'anti_cucho', 'Anticucho', 'Typically cut into one-to-two-inch cubes, the crimson heart (alpaca or beef) is marinated in vinegar, cumin, ají, and garlic and grilled over charcoal to a medium rare with slightly singed edges.', '28.50', '2022-11-21 20:19:14'),
(8, 3, 'arr_pato', 'Arroz con Pato', 'Rice is cooked in cilantro paste, herbs, and dark beer, giving a deep, earthy flavor to the vegetal grain. A roasted thigh and leg or—if lucky—crisp-seared duck confit is added on top of a mound of the green rice', '29.99', '2022-11-21 20:21:01'),
(9, 3, 'poll_brasa', 'Pollo a la Brasa', 'A whole chicken is marinated in a powerful combination of garlic, herbs, and spices before roasting on a spit, giving the bronzed, crispy skin an addictively exotic and earthy taste.', '27.50', '2022-11-21 20:23:01'),
(10, 4, 'sec_carne', 'Seco de Carne', 'This tasty stew combines a thick beef broth, generous cuts of meat, and a few traditional Andean ingredients that create a unique flavor.', '24.50', '2022-11-21 20:25:23'),
(11, 4, 'tir_pesca', 'Tiradito de Pescado', 'Tiradito consists of thinly sliced raw fish. Since Peru borders the Pacific Ocean, there is plenty of fresh fish for use in this dish. To make tiradito, chefs create a special sauce using yellow chilis, garlic, and cilantro.', '18.00', '2022-11-21 20:26:50'),
(12, 4, 'arr_marisc', 'Arroz con Mariscos', 'To make this dish, Peruvian chefs first whip up a batch of spiced rice. They then add peas, carrots, and red bell pepper to the mix. Finally, the chef adds shellfish such as clams, shrimp, octopus, mussels, scallops, and squid to the rice.', '25.50', '2022-11-21 20:28:24'),
(13, 5, 'pach_amanc', 'Pachamanca', 'In a pachamanca, chefs mix meats, vegetables, and herbs together. Then, they dig a hole in the ground and fill it with hot stones.', '23.00', '2022-11-21 20:29:43'),
(14, 5, 'jal_ea', 'Jalea', 'The fish will be accompanied by a salty pile of deep-fried yuca. The salsa is made out of red onion, cilantro, and lime juice that pairs perfectly with salty fish.', '20.99', '2022-11-21 20:31:29'),
(15, 5, 'ado_bo', 'Adobo', 'The Peruvian adobo is made of pork, anatto seeds, smoky chili pepper, and fermented corn. The result is a delicious stew that you won’t be able to get anywhere else!', '24.50', '2022-11-21 20:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `menucategories`
--

CREATE TABLE `menucategories` (
  `menuCategoryID` int(11) NOT NULL,
  `menuCategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menucategories`
--

INSERT INTO `menucategories` (`menuCategoryID`, `menuCategoryName`) VALUES
(1, 'aLaCarteMenu'),
(2, 'staticMenu'),
(3, 'deJourMenu'),
(4, 'cycleMenu'),
(5, 'fixedMenu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dishID`),
  ADD UNIQUE KEY `dishCode` (`dishCode`);

--
-- Indexes for table `menucategories`
--
ALTER TABLE `menucategories`
  ADD PRIMARY KEY (`menuCategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dishID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menucategories`
--
ALTER TABLE `menucategories`
  MODIFY `menuCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
