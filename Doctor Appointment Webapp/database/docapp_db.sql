-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 02:10 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docapp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_location`) VALUES
(8, 'spear', 'spearnjoroge@gmail.com', '12345678', 'head.png', '0705599224', 'Kitale'),
(9, 'agness', 'agness@yahoo.com', 'agness123', 'sweet.jpg', '0769521566', 'kibera'),
(10, 'Samuel', 'samuel@gmail.com', 'samuel777', 'goinghigher.jpg', '0777556544', 'pangani'),
(11, 'sophia', 'sophia@microsoft.com', 'reggae', 'funkyelement.jpg', '0733585555', 'Bunyala'),
(12, 'positivevibe', 'positivevibe@gmail.com', 'positivevibe111', 'energy.jpg', '0788231564', 'naivasha');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_gender` text NOT NULL,
  `user_no` varchar(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_dob` date NOT NULL,
  `user_county` text NOT NULL,
  `doc` varchar(200) NOT NULL,
  `specialization` text NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`user_id`, `user_name`, `user_gender`, `user_no`, `user_email`, `user_dob`, `user_county`, `doc`, `specialization`, `payment`) VALUES
(2, 'john cena', 'Male', '0756494652', 'johncena@gmail.com', '2022-06-14', 'uganda', 'Dr.Agnes wanja', 'Cardiologist', 200),
(3, 'Alex kibuntu', 'Male', '0756678665', 'alexkibuntu@gmail.com', '2022-06-25', 'kenya', 'Dr.Dennis Kamau', 'Optician', 400),
(4, 'wangai mathai', 'Female', '0799532135', 'wangari@gmail.com', '2022-07-09', 'tanzania', 'Dr.Dennis Kamau', 'Dermatologist', 500),
(5, 'susan muthoni', 'Female', '0723653516', 'susanmuthoni@yahoo.com', '2022-07-21', 'Ethiopia', 'Dr.Mary Kitone', 'physician', 400),
(6, 'Stephen ochieng', 'Male', '0799039043', 'stevo@yahoo.com', '2022-08-06', 'Southafrica', 'Dr.Moses Kimani', 'Allergist', 300);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`user_id`, `user_name`, `user_email`, `user_message`) VALUES
(1, 'spear njoroge', 'spearnjoroge@gmail.com', '<p>please add more forms&nbsp;</p>\r\n<p>very good service</p>'),
(2, 'john cena', 'johncena@gmail.com', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet lorem non mauris aliquet eleifend. Proin posuere accumsan lorem ut tristique. Nulla auctor condimentum nulla, vitae viverra metus gravida non. Maecenas a elementum lorem, sed hendrerit odio. Nullam et accumsan eros. Integer quis mi placerat, maximus erat et,</p>'),
(3, 'susan muthoni', 'susanmuthoni@yahoo.com', '<p>Integer pellentesque justo dolor, quis dictum erat rutrum quis. Pellentesque eu purus aliquam, lacinia diam sed, rutrum ex. Suspendisse lacinia dictum elit dapibus faucibus. Aliquam massa ipsum, pharetra at tellus eget, accumsan finibus turpis. Nullam nisi tellus, molestie quis ipsum non, dictum finibus magna. Proin vitae mi mi. Donec sed malesuada justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse tempor felis non mauris pretium malesuada.</p>'),
(4, 'wangai mathai', 'wangari@gmail.com', '<p>Curabitur sed sapien vel nulla congue auctor. Nunc consequat sagittis sapien, nec cursus nisl faucibus id. Mauris vitae feugiat leo. Duis a justo eu lacus fringilla mollis. Curabitur finibus dui quis odio porta, in feugiat quam consequat. Duis maximus, nulla quis luctus consectetur, est nisl congue leo, sit amet facilisis ex felis eu sapien. Aliquam erat volutpat. Vivamus rutrum elit ut&nbsp;</p>'),
(5, 'Alex kibuntu', 'alexkibuntu@gmail.com', '<p><strong>Mauris at erat urna. Nulla tempus sem vel metus aliquet, ut convallis odio eleifend. Quisque tincidunt ex mauris, scelerisque hendrerit libero ullamcorper facilisis. Vivamus hendrerit, tellus eget laoreet vestibulum, neque tellus suscipit lorem, vitae blandit odio justo nec nulla. Proin in tellus id libero pulvinar congue. Suspendisse potenti. Nulla ligula diam, euismod eget risus in, maximus porttitor lacus. Nam viverra rutrum rhoncus. Vestibulum sagittis vitae urna eget sodales. Vestibulum faucibus nulla lectus, a placerat enim sagittis eget.</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE `emergency_contact` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `relationship` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `county` varchar(20) NOT NULL,
  `zip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_contact`
--

INSERT INTO `emergency_contact` (`id`, `fname`, `lname`, `phone`, `email`, `address`, `relationship`, `city`, `county`, `zip`) VALUES
(1, 'kitone', 'agness', 705532311, 'bsclmr106822@spu.ac.ke', '45-042893', 'parent', 'nairobi', 'kenya', '92626'),
(2, 'gabriel', 'oscar', 725864932, 'bsclmr13233@spu.ac.ke', '55-398843', 'friend', 'kiambu', 'kenya', '92626'),
(3, 'love', 'programming', 763646655, 'programming@gmail.com', '789-5645', 'parent', 'kiambu', 'uganda', '556213'),
(4, 'Sofia', 'george', 785468743, 'sofiageorge@gmail.com', '98-44556', 'sibling', 'kisumu', 'kenya', '98456'),
(5, 'wajakoya', 'the fifth', 768746533, 'wajakoya@yahoo.com', '694-899493', 'friend', 'nairobi', 'kenya', '989546');

-- --------------------------------------------------------

--
-- Table structure for table `personal_training`
--

CREATE TABLE `personal_training` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `age` decimal(3,0) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `gender` text NOT NULL,
  `job` text NOT NULL,
  `activity` text NOT NULL,
  `travel` text NOT NULL,
  `offwork` varchar(255) NOT NULL,
  `motivation` text NOT NULL,
  `injuries` text NOT NULL,
  `desease1` text NOT NULL,
  `desease2` text NOT NULL,
  `smoke` text NOT NULL,
  `diet` varchar(255) NOT NULL,
  `readyness` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_training`
--

INSERT INTO `personal_training` (`id`, `fname`, `lname`, `age`, `height`, `weight`, `gender`, `job`, `activity`, `travel`, `offwork`, `motivation`, `injuries`, `desease1`, `desease2`, `smoke`, `diet`, `readyness`) VALUES
(1, 'kitone', 'agness', '50', 45, 15, 'Female', 'musician', 'Moderate(light activity eg walking)', 'rarely', '<p>jogging</p>\r\n<p>walking</p>', 'yes', 'scar on the back', 'yes', 'yes', 'yes', 'low-carb', 4),
(2, 'Agness', 'awiti', '45', 12, 9, 'Female', 'hustler', 'Moderate(light activity eg walking)', 'rarely', '<p>racing</p>\r\n<p>marathon</p>', 'yes', 'sore limbs', 'no', 'yes', 'no', 'low-carb', 1),
(3, 'wajakoya', 'the fifth', '55', 120, 75, 'Male', 'plant illegal plants ( lol )', 'high(heavy labor,very active)', 'few times an year', '<p>running</p>\r\n<p>walking&nbsp;</p>', 'yes', 'none', 'no', 'yes', 'no', 'high-protein', 10),
(4, 'marcus', 'garvay', '90', 125, 35, 'Male', 'truck driver', 'Moderate(light activity eg walking)', 'few times a month', '<p>lifting heavy objects</p>\r\n<p>dancing</p>\r\n<p>yoga</p>', 'yes', 'none', 'yes', 'yes', 'yes', 'low-fat', 1),
(5, 'waititu', 'somebody', '48', 100, 100, 'Male', 'committing acts of corruption', 'none(seated only)', 'weekly', '<p>none</p>', 'no', 'muscle pain', 'yes', 'yes', 'yes', 'No special diet', 4);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `date` date NOT NULL,
  `session` text NOT NULL,
  `code` varchar(10) NOT NULL,
  `assessment` text NOT NULL,
  `safty` text NOT NULL,
  `medical_issue` text NOT NULL,
  `desc_medical_issue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id`, `fname`, `mname`, `lname`, `date`, `session`, `code`, `assessment`, `safty`, `medical_issue`, `desc_medical_issue`) VALUES
(1, 'gabriel', 'ayemba', 'wanyama', '2022-06-24', 'therapy', 'x878-8121', '<p>slow healing, xray required on next appointment</p>', 'other', 'yes', '<p>suffering from broken bone</p>\r\n<p>sore wound</p>'),
(2, 'Don', 'carlos', 'somebody', '2022-06-09', 'treatment', 'm4p3-4453', '<p>healing very fast</p>\r\n<p>no complications</p>', 'other', 'yes', '<p>suffering minor cuts and bruises</p>'),
(3, 'wajakoya', 'the', 'fifth', '2022-06-10', 'therapy', 'm423-4454', '<p>very high</p>\r\n<p>halusinating</p>\r\n<p>vomiting</p>', 'suicidal', 'yes', '<p>suffering mild hallucinations&nbsp;</p>'),
(4, 'sylford', 'walker', 'somename', '2022-05-30', 'therapy', 't478-8127', '<p>mentaly unstable</p>\r\n<p>scheduled for another appointment</p>', 'suicidal', 'yes', '<p>poor cordination and movement</p>\r\n<p>talking problems</p>'),
(5, 'martha', 'wangari', 'nyamboka', '2022-05-06', 'therapy', 'l323-4450', '<p>mentaly disturbed</p>\r\n<p>verbal problems</p>\r\n<p>malnutrition problems</p>', 'other', 'yes', '<p>she is suffering from starvation</p>');

-- --------------------------------------------------------

--
-- Table structure for table `psychiatric`
--

CREATE TABLE `psychiatric` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `referal` varchar(50) NOT NULL,
  `accompanied` text NOT NULL,
  `ccomplaint` text NOT NULL,
  `interests` text NOT NULL,
  `guilt` text NOT NULL,
  `appetite` text NOT NULL,
  `mood` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psychiatric`
--

INSERT INTO `psychiatric` (`id`, `fname`, `mname`, `lname`, `referal`, `accompanied`, `ccomplaint`, `interests`, `guilt`, `appetite`, `mood`) VALUES
(1, 'wajakoya', 'carlos', 'the fifth', 'kinyata hospital', 'friends and family', '<p>alchohol addiction</p>', '<p>overdrinking</p>', '<p>overspeding money</p>\r\n<p>starting fights</p>\r\n<p>running into debts</p>', '<p>very low</p>', 6),
(2, 'wajakoya', 'the', 'fifth', 'mathare hospital', 'wajakoya faithful followers', '<p>heavy smoking of kishada</p>', '<p>some interest 1</p>\r\n<p>some interest 2</p>\r\n<p>some interest 3</p>', '<p>overspending</p>\r\n<p>loss of memory</p>', '<p>very high</p>', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `password`, `signUpDate`, `profilePic`) VALUES
(8, 'spear', 'Spear', 'Njoroge', 'Spearnjoroge@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2022-06-24 00:00:00', 'assets/images/profile_pic/head.png'),
(9, 'sophia', 'Sophia', 'George', 'Sofia@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2022-06-24 00:00:00', 'assets/images/profile_pic/head.png'),
(10, 'moses', 'Moses', 'Kamau', 'Mose@yahoo.com', '25d55ad283aa400af464c76d713c07ad', '2022-06-24 00:00:00', 'assets/images/profile_pic/head.png'),
(11, 'Dr.lucy', 'Lucy', 'Njambi', 'Lucy@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2022-06-24 00:00:00', 'assets/images/profile_pic/head.png'),
(12, 'Dr.timothy', 'Timothy', 'Waweru', 'Timothy@yahoo.com', '25d55ad283aa400af464c76d713c07ad', '2022-06-24 00:00:00', 'assets/images/profile_pic/head.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_training`
--
ALTER TABLE `personal_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psychiatric`
--
ALTER TABLE `psychiatric`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_training`
--
ALTER TABLE `personal_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `psychiatric`
--
ALTER TABLE `psychiatric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
