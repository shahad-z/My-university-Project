-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 06:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitsaudi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'west', 'westren area'),
(2, 'south', 'southern area'),
(3, 'mid', 'middle areas'),
(4, 'North', 'Northen area');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `categoryID` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `logo`, `description`, `categoryID`, `location`, `rating`) VALUES
(1, 'sunnah', 'sunnah.jpg', 'Pilgrims arriving in the \r\nMadinah for their journey do not miss the opportunity to visit Quba Mosque. They are keen to follow the tradition of the Prophet (peace be upon him) on a specially designed path between the two mosques, known as the \'Path of the Sunnah,\' with a length of three kilometers.\r\nVisitors can pray at the mosque around the clock and then proceed to Al-Masjid an-Nabawi through the modern pathway, which includes water misters to alleviate the heat and many commercial stores for shopping.\"', 1, ' Madinah', 2),
(2, 'souq Ozaz', 'souq-okaz.jpg', 'Souq-Okaz in the city of Taif is considered a prominent tourist attraction due to its long-standing history. It has served as a cultural, social, and economic hub, offering a unique opportunity to explore a blend of art, heritage, and culture through events that attract people from all over the world each year. Its inaugural launch took place in 1428 AH/2006 AD.\r\n\r\nDon\'t miss out on the performances of traditional songs and dances, attending theatrical plays and cultural-literary seminars, or enjoying poetry evenings. Take time to admire the murals and artworks scattered throughout the market.', 1, 'taif', 3),
(3, 'Al-hada Street', 'taif.jpg', 'The road is distinguished by its breathtaking nature and beautiful weather. If you take the winding Al-Hada Road you will experience an exciting adventure among the high mountains with their many terrains, and how it all blends in with the blue sky. You can stop to watch the monkeys that live in the mountains. As you continue to ascend the road, you will notice the temperature dropping. It can be as high as 45C degrees at first, and drop as low as 20C by the summit.\r\nDuring the nighttime, you can watch the car headlights painting a mesmerizing one-of-a-kind scene.', 1, 'Taif', 3),
(4, 'Mumshaa Al Dabab', 'dabab.jpg', 'Spend some special time with the clouds and visit one of the absolutely most breathtaking destinations. When visiting Abha, you should not miss out on the chance of an overwhelming stroll around the walkway. You can discover the peaks of the mountains in the region throughout your walk through Al-Dabab Walkway, which is 7 km long and 14 m wide. ', 2, 'Abha', 2),
(5, 'Art Street ', 'art.jpg', 'In an astonishing experience, Art Street takes you on a trip full of colors and creativity to another dimension in the arts space, to taste the works of artists and creators of the region. Immerse yourself in an exceptional journey out of the ordinary and prepare to discover one of the most beautiful art streets in the world.', 2, 'Abha', 3),
(6, 'High City', 'city.jpg', ' \r\nHigh City has an ideal strategic location at the heart of Abha since it is surrounded by many elegant hotels and captivating parks as well as it is easily reachable via King Abdulaziz Road from all parts of the city. The view from the high altitude of this place is splendid. This venue opens its doors for visitors at the early hours of night, from four pm till two am', 2, 'Abha', 5),
(7, 'Boulevard World', 'Boulevard.jpg', 'Boulevard World is a premier entertainment zone suitable for families and individuals who are into travelling, exploring and playing. With The Sphere, AREA15, the worlds largest man-made lake and wonders happening for the first time. A place that suits all ages and nationalities.', 3, 'Riyadh', 5),
(8, 'Al Bujairi', 'bjiri.jpg', 'You will find many international and local restaurants and shops in Albujairi Terrace. On an area of ​​15,000 m2, Albujairi has intricate details inspired by the authenticity of Najd and its history full of amazing architecture, and has amazing views on the historical At-Turaif district, which is included in the UNESCO World Heritage List. You can enjoy scenic natural views in a group picnic, or even alone in the designated bike lanes in the terrace. Or you can walk in the paths that trace the Kingdom’s history and its stories when Diriyah was the capital of the first Saudi state.', 3, 'Riyadh', 5),
(9, 'Winter Wonder Land', 'winter.jpg', 'Riyadh hosts Winter Wonderland, the biggest theme park in its third season, combining rides & adventures in a unique experience for all ages. More than 80 different experiences including thrill, family, kids rides, and different characters & musical shows', 3, 'Riyadh', 5),
(11, 'Alula', 'Alula.jpg', 'From enjoying AlUla’s stunning landscape from the air to gazing up at galaxies of stars, the annual AlUla Skies Festival is a celebration of all things sky. During the day, hot-air balloon and helicopter offer spectacular flights over AlUla\'s breathtaking scenery. And come nightfall, you can return to earth for the likes of stargazing, symphonies and drone shows that will add to some unforgettable memories', 4, 'alula', 4),
(12, 'Boulevard City', 'Boulevard.jpg', 'Boulevard Riyadh City is one of the biggest zones in the season (Riyadh season). Triple in size this year, each of the sub-areas features its own set of activities, restaurants, events, and outlets that are catered to all visitors.', 3, 'Riyadh', 2);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `body` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `item_id`, `name`, `body`, `rating`, `date`) VALUES
(1, 1, 'lama', 'i like it', 5, '2023-10-24'),
(517, 1, 'nada', 'such a good vibes', 2, '2023-10-30'),
(522, 3, 'shahad', 'such a good vibes', 5, '2023-10-30'),
(527, 7, 'sara', 'not bad', 3, '2023-10-30'),
(534, 9, 'shahad', 'it was fun', 3, '2023-10-31'),
(535, 11, 'sara', 'a relaxing place', 5, '2023-10-31'),
(536, 11, 'khaled', 'good', 3, '2023-10-31'),
(537, 12, 'haifa', 'i enjoyed visiting it ', 3, '2023-10-31'),
(538, 12, 'mohammed', 'fun', 5, '2023-10-31'),
(539, 2, 'anoud', 'so fun', 4, '2023-10-31'),
(540, 1, 'ahmed', '👌🏼', 2, '2023-10-31'),
(542, 2, 'noura', 'i enjoyed', 3, '2023-10-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=543;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
