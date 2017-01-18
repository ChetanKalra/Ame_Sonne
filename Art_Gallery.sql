-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2017 at 08:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Art_Gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `Booked_Products`
--

CREATE TABLE `Booked_Products` (
  `ID` int(11) NOT NULL,
  `Cust_id` int(11) NOT NULL,
  `Order_id` int(11) NOT NULL,
  `Order_Quantity` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `Shipping_address` varchar(255) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Order_Date` varchar(15) NOT NULL,
  `Order_No` int(55) NOT NULL,
  `Status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Booked_Products`
--

INSERT INTO `Booked_Products` (`ID`, `Cust_id`, `Order_id`, `Order_Quantity`, `Total`, `Shipping_address`, `Contact`, `Order_Date`, `Order_No`, `Status`) VALUES
(5, 15, 2, 1, 40, 'Hoechst House, 10th Floor, 193 Backbay Reclamation, Nariman Point, Mumbai 400021', 8108666222, '2016/10/12', 299222, 'Pending'),
(6, 15, 27, 1, 39, 'Central Library Building, 1st Floor , Near Y.M.C.A., Plot no. sector 4, Belapur, C.B.D., Navi Mumbai – 400 614', 8108777555, '2016/10/12', 272655, 'Pending'),
(7, 15, 25, 1, 25, 'Thomas Nolan Kaszas 5322 Otter Ln Middleberge FL 32068', 9867571111, '2016/10/12', 107363, 'Pending'),
(8, 1, 29, 1, 49, 'Central Library Building, 1st Floor , Near Y.M.C.A., Plot no. sector 4, Belapur, C.B.D., Navi Mumbai – 400 614', 8286730972, '2016/10/13', 33366, 'Pending'),
(11, 13, 2, 1, 40, 'Central Library Building, 1st Floor , Near Y.M.C.A., Plot no. sector 4, Belapur, C.B.D., Navi Mumbai – 400 614', 8286730972, '2016/10/13', 25337, 'Delivered'),
(12, 13, 1, 1, 49, 'Central Library Building, 1st Floor , Near Y.M.C.A., Plot no. sector 4, Belapur, C.B.D., Navi Mumbai – 400 614', 7777666644, '2016/10/13', 225039, 'Pending'),
(22, 53, 5, 3, 297, 'Hoechst House, 10th Floor, 193 Backbay Reclamation, Nariman Point, Mumbai 400021', 8286730972, '2016/10/15', 198627, 'Pending'),
(23, 1, 2, 1, 40, '301, Sun Nivas Bldg, Sec-12, Plot-12, Vashi, Navi Mumbai, 400703', 8287636366, '2016/10/17', 280870, 'Pending'),
(24, 1, 26, 1, 89, '795, Folsom Ave, Suite 600, San Francisco, CA 94107', 9891001188, '2016/10/17', 131295, 'Pending'),
(27, 54, 38, 3, 297, '301, Sun Nivas Bldg, Sec-12, Plot-12, Vashi, Navi Mumbai, 400703', 9324085884, '2016/11/04', 269431, 'Pending'),
(28, 54, 12, 1, 39, 'Thomas Nolan Kaszas 5322 Otter Ln Middleberge FL 32068', 8286730972, '2016/11/04', 210035, 'Pending'),
(29, 54, 60, 1, 23, '301, Sun Nivas Bldg, Sec-12, Plot-12, Vashi, Navi Mumbai, 400703', 8108444180, '2016/11/04', 179407, 'Pending'),
(30, 54, 1, 1, 49, 'Hoechst House, 10th Floor, 193 Backbay Reclamation, Nariman Point, Mumbai 400021', 8286730972, '2016/11/05', 216514, 'Delivered'),
(31, 1, 5, 1, 99, 'Vashi', 8286730972, '2017/01/01', 162543, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_id` int(11) NOT NULL,
  `Price` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Category` int(5) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_id`, `Price`, `Quantity`, `Category`, `img_path`, `Name`) VALUES
(1, 49, 237, 1, 'IMAGES/Abstract/Abstract1.jpg', 'Abstract1'),
(2, 40, 187, 1, 'IMAGES/Abstract/Abstract2.jpg', 'Abstract2'),
(3, 69, 2495, 1, 'IMAGES/Abstract/Abstract3.jpg', 'Abstract3'),
(4, 49, 220, 1, 'IMAGES/Abstract/Abstract4.jpg', 'Abstract4'),
(5, 99, 239, 1, 'IMAGES/Abstract/Abstract5.jpg', 'Abstract5'),
(6, 49, 248, 1, 'IMAGES/Abstract/Abstract6.jpg', 'Abstract6'),
(7, 49, 247, 2, 'IMAGES/BlackWhite/BW1.jpg', 'BW1'),
(8, 89, 996, 2, 'IMAGES/BlackWhite/BW2.jpg', 'BW2'),
(9, 79, 999, 2, 'IMAGES/BlackWhite/BW3.jpg', 'BW3'),
(10, 39, 1000, 2, 'IMAGES/BlackWhite/BW4.jpg', 'BW4'),
(11, 49, 750, 2, 'IMAGES/BlackWhite/BW5.jpg', 'BW5'),
(12, 39, 79, 2, 'IMAGES/BlackWhite/BW6.jpg', 'BW6'),
(13, 39, 1000, 2, 'IMAGES/BlackWhite/BW7.jpg', 'BW7'),
(14, 45, 95, 2, 'IMAGES/BlackWhite/BW8.jpg', 'BW8'),
(15, 29, 698, 3, 'IMAGES/Nature/N1.jpg', 'N1'),
(16, 39, 198, 3, 'IMAGES/Nature/N2.jpg', 'N2'),
(17, 49, 999, 3, 'IMAGES/Nature/N3.jpg', 'N3'),
(18, 29, 35, 3, 'IMAGES/Nature/N4.jpg', 'N4'),
(19, 19, 2000, 3, 'IMAGES/Nature/N5.jpg', 'N5'),
(20, 29, 2100, 3, 'IMAGES/Nature/N6.jpg', 'N6'),
(21, 49, 300, 3, 'IMAGES/Nature/N7.jpg', 'N7'),
(22, 39, 1200, 3, 'IMAGES/Nature/N8.jpg', 'N8'),
(23, 29, 73, 4, 'IMAGES/Photography/P1.jpg', 'P1'),
(24, 39, 40, 4, 'IMAGES/Photography/P2.jpg', 'P2'),
(25, 25, 6, 4, 'IMAGES/Photography/P3.jpg', 'P3'),
(26, 89, 83, 4, 'IMAGES/Photography/P4.jpg', 'P4'),
(27, 39, 38, 4, 'IMAGES/Photography/P5.jpg', 'P5'),
(28, 29, 25, 4, 'IMAGES/Photography/P6.jpg', 'P6'),
(29, 49, 27, 4, 'IMAGES/Photography/P7.jpg', 'P7'),
(30, 39, 250, 4, 'IMAGES/Photography/P8.jpg', 'P8'),
(31, 29, 100, 4, 'IMAGES/Photography/P9.jpg', 'P9'),
(32, 10, 20, 4, 'IMAGES/Photography/P10.jpg', 'P10'),
(33, 29, 0, 5, 'IMAGES/Sketches/Sketch1.jpg', 'Sketch1'),
(34, 49, 8, 5, 'IMAGES/Sketches/Sketch2.jpg', 'Sketch2'),
(35, 59, 89, 5, 'IMAGES/Sketches/Sketch3.jpg', 'Sketch3'),
(36, 49, 40, 5, 'IMAGES/Sketches/Sketch4.jpg', 'Sketch4'),
(37, 99, 49, 5, 'IMAGES/Sketches/Sketch5.jpg', 'Sketch5'),
(38, 99, 16, 5, 'IMAGES/Sketches/Sketch6.jpg', 'Sketch6'),
(39, 29, 18, 5, 'IMAGES/Sketches/Sketch7.jpg', 'Sketch7'),
(40, 79, 98, 5, 'IMAGES/Sketches/Sketch8.jpg', 'Sketch8'),
(41, 89, 200, 5, 'IMAGES/Sketches/Sketch9.jpg', 'Sketch9'),
(60, 23, 30, 5, 'IMAGES/uploads/Sketch1.jpg', 'Painting1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Age` int(4) NOT NULL,
  `Dob` varchar(55) DEFAULT NULL,
  `Password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Age`, `Dob`, `Password`, `Type`) VALUES
(1, 'Chetan Kalra', 'chetankalra11@gmail.com', 20, '14/05/1996', 'Abcdefgh1', 2),
(13, 'Kira', 'lightyagami@gmail.com', 20, '1997/01/10', 'Efghijkl1', 2),
(15, 'PCE', 'pce@gmail.com', 21, '11/01/2001', 'Hello1Hello1', 2),
(16, 'PCE', 'pce1@gmail.com', 21, '11/01/2001', 'Hello1Hello1', 2),
(18, 'Peter Parker', 'peterparker@gmail.com', 26, '01/12/1990', 'Secretcode1', 1),
(19, 'Aryan Desai', 'aryad@gmail.com', 30, '27/04/1986', 'Abcdefgh1', 1),
(22, 'Riya', 'riyadas967@gmail.com', 20, '01/12/1996', 'Riya123456', 1),
(23, 'Pooja', 'pooja@gmail.com', 20, '11/01/2001', 'Hello1Hello1', 1),
(25, 'Jatin', 'jatinrajanmr@gmail.com', 19, '05/12/1996', 'Chetan1234', 1),
(30, 'Shivani', 'shivanithakare3@gmail.com', 19, '28/04/1997', 'Secretcode2', 1),
(31, 'Vijeta', 'vijeta109@gmail.com', 20, '19/09/1996', 'Secretcode3', 1),
(38, 'Arman Singh', 'sarman@gmail.com', 29, '1987/01/10', 'Secretcode1', 1),
(53, 'Aman Ahuja', 'amahuja@gmail.com', 26, '1990/04/08', 'Secretcode1', 1),
(54, 'Peter Fernandez', 'peterferna@gmail.com', 28, '1987/11/11', 'Secretcode1', 2),
(55, 'ABC', 'abc@gmail.com', 25, '1990/11/11', 'Secretcode1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Booked_Products`
--
ALTER TABLE `Booked_Products`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Order_No` (`Order_No`),
  ADD KEY `Booked_fk` (`Cust_id`),
  ADD KEY `Booked_products_fk` (`Order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Booked_Products`
--
ALTER TABLE `Booked_Products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Booked_Products`
--
ALTER TABLE `Booked_Products`
  ADD CONSTRAINT `Booked_fk` FOREIGN KEY (`Cust_id`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `Booked_products_fk` FOREIGN KEY (`Order_id`) REFERENCES `products` (`Product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
