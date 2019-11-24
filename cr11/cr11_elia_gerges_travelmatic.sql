-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 02:20 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_elia_gerges_travelmatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `concerts`
--

CREATE TABLE `concerts` (
  `con_id` int(11) NOT NULL,
  `conDate` datetime NOT NULL,
  `conPrice` varchar(10) NOT NULL,
  `conWeb` varchar(40) NOT NULL,
  `conName` varchar(25) NOT NULL,
  `locCon_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concerts`
--

INSERT INTO `concerts` (`con_id`, `conDate`, `conPrice`, `conWeb`, `conName`, `locCon_id`) VALUES
(1, '2019-08-22 19:00:00', '99.00 EUR', 'https://www.rammstein.de/de/', 'Rammstein', 1),
(2, '2018-11-15 20:00:00', '58.00 EUR', 'http://kriskristofferson.com/', 'Kris Kristofferson', 2),
(3, '2019-12-09 19:30:00', '47.00 EUR', 'www.lennykravitz.com/', 'Lenny Kravitz', 3),
(4, '2019-11-17 18:30:00', '199.00 EUR', 'https://www.volbeat.dk/de/', 'Volbeat', 4);

-- --------------------------------------------------------

--
-- Table structure for table `locationcon`
--

CREATE TABLE `locationcon` (
  `locCon_id` int(11) NOT NULL,
  `cityCon` varchar(20) NOT NULL,
  `zipcodeCon` int(11) NOT NULL,
  `addressCon` varchar(30) NOT NULL,
  `imageCon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locationcon`
--

INSERT INTO `locationcon` (`locCon_id`, `cityCon`, `zipcodeCon`, `addressCon`, `imageCon`) VALUES
(1, 'Vienna', 1020, 'Meierstrasse 7', 'http://www.laut.de/Rammstein/rammstein-199796.jpg'),
(2, 'Vienna', 1150, 'Wiener Stadthalle, Halle F, Ro', 'https://lh4.googleusercontent.com/8B3Uvcit7tz1MnSCpV4OawMJpWrluMqWGd5dqDDivsab_w30GnSYrM0xd3O9wGF6deAMKvzI9D0ptptq8bGVm_o7Vk2Gt7ClukscE6bMw1mUYRcl1BcZ6tZQOqN5FNBcwMz4p9Ga'),
(3, 'Vienna', 1150, 'Wiener Stadthalle - Halle D, R', 'https://lh5.googleusercontent.com/74lQjmcgVjXOrimysU0h8OmxzHRcvwf01IzGsl1LwjKQtFVC5NKfuXDM2e6o1CsUFMhiSVhMGt1gRs6JD0C6Cd896ZA7NWOrXf0qzFs_CsVUXGyPEC97G06YV5GzdEu5bXyoFB-z'),
(4, 'Vienna', 1150, 'Wiener Stadthalle, Roland Rain', 'http://www.laut.de/Volbeat/volbeat-169227.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `locationrest`
--

CREATE TABLE `locationrest` (
  `locRest_id` int(11) NOT NULL,
  `cityRest` varchar(20) NOT NULL,
  `zipcodeRest` int(11) NOT NULL,
  `addressRest` varchar(30) NOT NULL,
  `imageRest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locationrest`
--

INSERT INTO `locationrest` (`locRest_id`, `cityRest`, `zipcodeRest`, `addressRest`, `imageRest`) VALUES
(1, 'Vienna', 1060, 'Naschmarkt 510', 'https://www.google.at/maps/uv?hl=de&pb=!1s0x476d07848ca3a24d%3A0x728c097f93af50af!2m22!2m2!1i80!2i80!3m1!2i20!16m16!1b1!2m2!1m1!1e1!2m2!1m1!1e3!2m2!1m1!1e5!2m2!1m1!1e4!2m2!1m1!1e6!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMDYuEutG98q'),
(2, 'Vienna', 1050, 'Kettenbrückengasse 19', 'https://lh3.googleusercontent.com/wKFfCPloM-NbwSNPqmsR8TanW0l-yJVssaW-Z5JrWslCfk9lczUbFbWU567HIQAUDFBkW__54fo3H1GVVmRL0OPH6sJFM2zG4AUpKQYsZ6gIuV2XrSfZSA4KFKtDeWVI4YMmR-um'),
(3, 'Vienna', 1050, ' Schönbrunner Straße 21', 'https://lh5.googleusercontent.com/KSjp-79rS7p6COzjpgPk3-vP4fpNwhk6i91qoZAdYIKd4nHJx8nGdyHg7my01ahEImfk64MgTdPlW-dDoJ_SryXbKpd5794QfJLi3JBfLRS4_BTtj-hLoD4csemw4q4FtmgrPhk-'),
(4, 'Vienna', 1210, 'Seyringer Str. 6-8', 'https://www.google.at/maps/uv?hl=de&pb=!1s0x476d0404b4e3aed1%3A0xb4cac0362c0cb96f!2m22!2m2!1i80!2i80!3m1!2i20!16m16!1b1!2m2!1m1!1e1!2m2!1m1!1e3!2m2!1m1!1e5!2m2!1m1!1e4!2m2!1m1!1e6!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipOS5T1ULOiYk');

-- --------------------------------------------------------

--
-- Table structure for table `locationtodo`
--

CREATE TABLE `locationtodo` (
  `locToDo_id` int(11) NOT NULL,
  `cityToDo` varchar(20) NOT NULL,
  `zipcodeToDo` int(11) NOT NULL,
  `addressToDo` varchar(30) NOT NULL,
  `imageToDo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locationtodo`
--

INSERT INTO `locationtodo` (`locToDo_id`, `cityToDo`, `zipcodeToDo`, `addressToDo`, `imageToDo`) VALUES
(1, 'Vienna', 1040, 'Kreuzherrengasse 1', 'https://lh3.googleusercontent.com/Fej_3RXzGDHbGLb_v7n3-2FX6eFFXOBJot1vQdJgRvVJWnQzS5NhbwtkncAi9xCFa_t_btQKAoqYSDr-EE5rB6vthwOTPG9l_bFN0ljh-0tCb4EdW_EzTyhB7sk7MCTZD7ikJxVS'),
(2, 'Vienna', 1130, 'Maxingstraße 13b', 'https://lh3.googleusercontent.com/hUognsXhKete6qQFjpdvVsKZ3nePIuS9AE05SZx_d9slg-Tc_khqUwFMVOMbQzZP3ITqqrRyJsDi43kQBuYKi954Ibhul07-Sqxg0Koc323AgGWJ-jszZUkO3MaYSiA3K9IKQ1_P'),
(3, 'Vienna', 1010, 'Burgring 7', 'https://www.wien.info/media/images/naturhistorisches-museum-hauerelefant-skelett.jpg/image_gallery'),
(4, 'Vienna', 1010, 'Stephansplatz 3', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Wien_-_Stephansdom_%281%29.JPG/220px-Wien_-_Stephansdom_%281%29.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `res_id` int(11) NOT NULL,
  `resName` varchar(25) NOT NULL,
  `resTel` varchar(25) NOT NULL,
  `resType` varchar(15) NOT NULL,
  `resDescription` varchar(255) NOT NULL,
  `resWeb` varchar(35) NOT NULL,
  `locRest_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`res_id`, `resName`, `resTel`, `resType`, `resDescription`, `resWeb`, `locRest_id`) VALUES
(1, 'Neni am Naschmarkt', '+4315852020', 'Oriental', 'Nirgends ist der Ferne Osten so nah wie im NENI ', 'https://neni.at/restaurants/naschma', 1),
(2, 'Lemon Leaf Thai Restauran', '+43(1)5812308', 'Thai', 'Very good Thai Restaurant', 'www.lemonleaf.at', 2),
(3, 'Sixta', '+43 15852856', 'Wiener Küche', 'Kreative Küche und einem traditionellen, “wienerischen” Angebot', 'http://www.sixta-restaurant.at/', 3),
(4, 'Hiro', '01 2562096', 'Japanese', 'All you can eat but a la carte!', 'https://www.hirowien.at/reservation', 4),
(11, 'aef', '561', '', 'qwfe', 'qwef', 2);

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `todo_id` int(11) NOT NULL,
  `todoName` varchar(25) NOT NULL,
  `todoType` varchar(30) NOT NULL,
  `todoDescription` varchar(255) NOT NULL,
  `todoWeb` varchar(35) NOT NULL,
  `locToDo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`todo_id`, `todoName`, `todoType`, `todoDescription`, `todoWeb`, `locToDo_id`) VALUES
(1, 'Karlskirche', 'must see', 'St. Charles Church', 'http://www.karlskirche.at/', 1),
(3, 'Naturhistorisches Museum ', 'museum', 'Das Naturhistorische Museum in Wien zählt mit rund 30 Millionen Sammlungsobjekten', 'https://www.nhm-wien.ac.at/', 3),
(4, 'Stephansdom', 'Church', 'Stephansdom ', 'http://www.stephansdom.at/', 4),
(6, 'Tiergarten Schoenbrunn', 'Zoo', 'A zoo with many animals', 'https://www.zoovienna.at/', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `con_id` int(11) DEFAULT NULL,
  `todo_id` int(11) DEFAULT NULL,
  `status` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `userName`, `userEmail`, `userPass`, `res_id`, `con_id`, `todo_id`, `status`) VALUES
(4, 'Elia', 'elia@gmx.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', NULL, NULL, NULL, 'user'),
(5, 'Elia Gerges', 'elia.gerges@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', NULL, NULL, NULL, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`con_id`),
  ADD KEY `locCon_id` (`locCon_id`);

--
-- Indexes for table `locationcon`
--
ALTER TABLE `locationcon`
  ADD PRIMARY KEY (`locCon_id`);

--
-- Indexes for table `locationrest`
--
ALTER TABLE `locationrest`
  ADD PRIMARY KEY (`locRest_id`);

--
-- Indexes for table `locationtodo`
--
ALTER TABLE `locationtodo`
  ADD PRIMARY KEY (`locToDo_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `locRest_id` (`locRest_id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`todo_id`),
  ADD KEY `locToDo_id` (`locToDo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `res_id` (`res_id`),
  ADD KEY `con_id` (`con_id`),
  ADD KEY `todo_id` (`todo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `locationcon`
--
ALTER TABLE `locationcon`
  MODIFY `locCon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locationrest`
--
ALTER TABLE `locationrest`
  MODIFY `locRest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locationtodo`
--
ALTER TABLE `locationtodo`
  MODIFY `locToDo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `concerts`
--
ALTER TABLE `concerts`
  ADD CONSTRAINT `concerts_ibfk_1` FOREIGN KEY (`locCon_id`) REFERENCES `locationcon` (`locCon_id`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`locRest_id`) REFERENCES `locationrest` (`locRest_id`);

--
-- Constraints for table `todo`
--
ALTER TABLE `todo`
  ADD CONSTRAINT `todo_ibfk_1` FOREIGN KEY (`locToDo_id`) REFERENCES `locationtodo` (`locToDo_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`res_id`) REFERENCES `restaurants` (`res_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`con_id`) REFERENCES `concerts` (`con_id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`todo_id`) REFERENCES `todo` (`todo_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
