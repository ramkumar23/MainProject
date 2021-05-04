-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 04:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itphp14`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_power`
--

CREATE TABLE `add_power` (
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `des` text NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_power`
--

INSERT INTO `add_power` (`image`, `name`, `phone`, `latitude`, `longitude`, `address`, `des`, `id`) VALUES
('EV-charging-ultra-fast-clean-power.jpg', 'EV Power Station', '8056169615', '13.109279', '80.152358', 'Ramapuram, Ambattur, Chennai, Tamil Nadu 600053', 'ReVolts Electric Vehicle Charging Stations', 1),
('ev-charging-station-headermob800.jpg', 'Viston Greentech Pvt. Ltd', '8521236547', '13.048777', '80.207559', '2nd floor, TeamWork Developers, D1, 174, Arcot Rd, Vadapalani, Chennai, Tamil Nadu 600026', 'Viston Greentech Pvt. Ltd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `milage` varchar(100) NOT NULL,
  `fuel_type` varchar(100) NOT NULL,
  `engile_cc` varchar(100) NOT NULL,
  `torque` varchar(100) NOT NULL,
  `seat_capacity` varchar(100) NOT NULL,
  `transmission_type` varchar(100) NOT NULL,
  `boot_space` varchar(100) NOT NULL,
  `fuel_tank_capacity` varchar(100) NOT NULL,
  `body_type` varchar(100) NOT NULL,
  `service_cost` varchar(100) NOT NULL,
  `power_steering` varchar(100) NOT NULL,
  `power_window` varchar(100) NOT NULL,
  `ac` varchar(100) NOT NULL,
  `driver_airbag` varchar(100) NOT NULL,
  `passenger_airbag` varchar(100) NOT NULL,
  `alloy_wheel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `image`, `name`, `price`, `color`, `description`, `milage`, `fuel_type`, `engile_cc`, `torque`, `seat_capacity`, `transmission_type`, `boot_space`, `fuel_tank_capacity`, `body_type`, `service_cost`, `power_steering`, `power_window`, `ac`, `driver_airbag`, `passenger_airbag`, `alloy_wheel`) VALUES
(1, 'mahindra-kuv100-electric-featured-1.webp', 'Mahindra-KUV100', '850000', 'Red', 'Mahindra e-KUV 100.', '150', 'Rapid', '1450', '450', '6', 'Automatic', '300', '6', 'Hatchback', '5000', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(2, 'Tata-Nexon-EV.jpg', 'Tata Nexon EV', '1200000', 'Blue', 'Tata Nexon EV Range, Electric Motor.', '312', 'Fast', '1490', '450', '5', 'Automatic', '500', '30', 'Hatchback', '3000', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `add_spare`
--

CREATE TABLE `add_spare` (
  `id` int(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_spare`
--

INSERT INTO `add_spare` (`id`, `file`, `name`, `vehicle_type`, `quantity`, `price`, `des`) VALUES
(1, 'charger.jpg', 'EV Rapid Charger', 'All', '500', '2500', 'An electric vehicle charging station, also called EV charging station.'),
(2, 'injector.jpg', 'Injector', 'Skoda', '300', '25000', 'Fuel injectors spray fuel into a car engine using electronic controlled valves, capable of opening and closing many times a second.'),
(3, 'battery.jpg', 'Battery', 'All', '600', '15000', 'An electric-vehicle battery is a battery used to power the electric motors of a battery electric vehicle or hybrid electric vehicle. ');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(40) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `joining_date` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_id`, `name`, `phone`, `address`, `joining_date`, `uname`, `password`) VALUES
(1, '915374', 'Prathiv Rajan', '8056169617', 'chennai', '2020-06-02', 'emp', 'emp');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `enquiry_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `user_id`, `booking_date`, `product_id`, `enquiry_date`) VALUES
(1, 'user', '11/Sep/2020', '1', '2020-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `date`, `subject`, `content`, `user_id`) VALUES
(1, '11/Sep/2020', 'Smooth Drive', 'Most drivers find they prefer the regenerative braking style and enjoy the benefits of a smoother drive. A pleasant side-effect of regenerative braking is that electric cars are very light on their brakes. You may find that your brake pads and discs last many times longer than in a conventional vehicle', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(100) NOT NULL,
  `cus_inc` varchar(100) NOT NULL,
  `car_price` varchar(100) NOT NULL,
  `amt` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `cus_inc`, `car_price`, `amt`, `des`) VALUES
(1, '600000', '2000000', '1500000', 'Car Loan: Own your dream car with ICICI Car loan with attractive interest rates up to 7 years tenure.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `phone`, `email`, `address`, `uname`, `password`) VALUES
(1, 'Prathiv Rajan', '1236547890', 'rajanprathiv@gmail.com', 'chennai', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(100) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `vehicle_year` varchar(100) NOT NULL,
  `problem` text NOT NULL,
  `delivery_date` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `post_date` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `vehicle_name`, `vehicle_type`, `vehicle_year`, `problem`, `delivery_date`, `price`, `post_date`, `user_id`) VALUES
(1, 'Tata Nexon EV', 'Hatchback', '2020-01-01', 'General Service', '2020-09-13', '5000', '11/Sep/2020', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_product`
--

CREATE TABLE `user_product` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `milage` varchar(100) NOT NULL,
  `fuel_type` varchar(100) NOT NULL,
  `engile_cc` varchar(100) NOT NULL,
  `torque` varchar(100) NOT NULL,
  `seat_capacity` varchar(100) NOT NULL,
  `transmission_type` varchar(100) NOT NULL,
  `boot_space` varchar(100) NOT NULL,
  `fuel_tank_capacity` varchar(100) NOT NULL,
  `body_type` varchar(100) NOT NULL,
  `service_cost` varchar(100) NOT NULL,
  `power_steering` varchar(100) NOT NULL,
  `power_window` varchar(100) NOT NULL,
  `ac` varchar(100) NOT NULL,
  `driver_airbag` varchar(100) NOT NULL,
  `passenger_airbag` varchar(100) NOT NULL,
  `alloy_wheel` varchar(100) NOT NULL,
  `usr_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `usr_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_product`
--

INSERT INTO `user_product` (`id`, `image`, `name`, `price`, `color`, `description`, `milage`, `fuel_type`, `engile_cc`, `torque`, `seat_capacity`, `transmission_type`, `boot_space`, `fuel_tank_capacity`, `body_type`, `service_cost`, `power_steering`, `power_window`, `ac`, `driver_airbag`, `passenger_airbag`, `alloy_wheel`, `usr_name`, `user_name`, `usr_phone`) VALUES
(1, 'mahindra-kuv100-electric-featured-1.webp', 'Mahindra-KUV100', '1500000', 'black and white', 'Mahindra-KUV100', '500', 'Rapid', '2000', '650', '8', 'Manual', '500', '60', 'MUV', '3000', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'user', 'Prathiv Rajan', '1236547890');

-- --------------------------------------------------------

--
-- Table structure for table `usr_order`
--

CREATE TABLE `usr_order` (
  `id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `amt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_order`
--

INSERT INTO `usr_order` (`id`, `user_id`, `product_id`, `amt`) VALUES
(1, 'user', '1', '2500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_power`
--
ALTER TABLE `add_power`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_spare`
--
ALTER TABLE `add_spare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_product`
--
ALTER TABLE `user_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usr_order`
--
ALTER TABLE `usr_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_power`
--
ALTER TABLE `add_power`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_spare`
--
ALTER TABLE `add_spare`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_product`
--
ALTER TABLE `user_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usr_order`
--
ALTER TABLE `usr_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
