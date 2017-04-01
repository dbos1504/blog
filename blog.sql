-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2017 at 05:48 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blog_image` varchar(1034) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blog_text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categories` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `blog_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_name`, `blog_image`, `blog_text`, `categories`, `login_id`, `blog_post`) VALUES
(1, 'News', 'public/images/sl0.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices quam sed tortor facilisis iaculis. Vivamus imperdiet risus eu tortor condimentum, feugiat rhoncus purus viverra. Nulla gravida eget nibh et sagittis. In hac habitasse platea dictumst. Nulla ornare diam ut leo lobortis condimentum. Duis sodales leo sed ullamcorper dignissim. Mauris at egestas nisi. Nunc quam sem, dignissim sed posuere a, condimentum id libero. Praesent vitae tincidunt dui. Maecenas felis velit, fermentum vitae sodales nec, cursus ut tortor. In est risus, ornare non purus quis, ultrices dignissim est. Suspendisse lobortis ante nec sem hendrerit fringilla. Sed id viverra arcu. Duis imperdiet eleifend auctor. Donec ac ante interdum, interdum eros quis, sodales libero.', 1, 1, '2017-03-25'),
(2, 'New movies', 'public/images/sl1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices quam sed tortor facilisis iaculis. Vivamus imperdiet risus eu tortor condimentum, feugiat rhoncus purus viverra. Nulla gravida eget nibh et sagittis. In hac habitasse platea dictumst. Nulla ornare diam ut leo lobortis condimentum. Duis sodales leo sed ullamcorper dignissim. Mauris at egestas nisi. Nunc quam sem, dignissim sed posuere a, condimentum id libero. Praesent vitae tincidunt dui. Maecenas felis velit, fermentum vitae sodales nec, cursus ut tortor. In est risus, ornare non purus quis, ultrices dignissim est. Suspendisse lobortis ante nec sem hendrerit fringilla. Sed id viverra arcu. Duis imperdiet eleifend auctor. Donec ac ante interdum, interdum eros quis, sodales libero.', 2, 2, '2017-03-24'),
(3, 'Sport post', 'public/images/sl2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices quam sed tortor facilisis iaculis. Vivamus imperdiet risus eu tortor condimentum, feugiat rhoncus purus viverra. Nulla gravida eget nibh et sagittis. In hac habitasse platea dictumst. Nulla ornare diam ut leo lobortis condimentum. Duis sodales leo sed ullamcorper dignissim. Mauris at egestas nisi. Nunc quam sem, dignissim sed posuere a, condimentum id libero. Praesent vitae tincidunt dui. Maecenas felis velit, fermentum vitae sodales nec, cursus ut tortor. In est risus, ornare non purus quis, ultrices dignissim est. Suspendisse lobortis ante nec sem hendrerit fringilla. Sed id viverra arcu. Duis imperdiet eleifend auctor. Donec ac ante interdum, interdum eros quis, sodales libero.', 3, 3, '2017-03-25'),
(4, 'Fashion post', 'public/images/sl3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices quam sed tortor facilisis iaculis. Vivamus imperdiet risus eu tortor condimentum, feugiat rhoncus purus viverra. Nulla gravida eget nibh et sagittis. In hac habitasse platea dictumst. Nulla ornare diam ut leo lobortis condimentum. Duis sodales leo sed ullamcorper dignissim. Mauris at egestas nisi. Nunc quam sem, dignissim sed posuere a, condimentum id libero. Praesent vitae tincidunt dui. Maecenas felis velit, fermentum vitae sodales nec, cursus ut tortor. In est risus, ornare non purus quis, ultrices dignissim est. Suspendisse lobortis ante nec sem hendrerit fringilla. Sed id viverra arcu. Duis imperdiet eleifend auctor. Donec ac ante interdum, interdum eros quis, sodales libero.', 4, 4, '2017-03-25'),
(5, 'Recepie ', 'public/images/sl4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices quam sed tortor facilisis iaculis. Vivamus imperdiet risus eu tortor condimentum, feugiat rhoncus purus viverra. Nulla gravida eget nibh et sagittis. In hac habitasse platea dictumst. Nulla ornare diam ut leo lobortis condimentum. Duis sodales leo sed ullamcorper dignissim. Mauris at egestas nisi. Nunc quam sem, dignissim sed posuere a, condimentum id libero. Praesent vitae tincidunt dui. Maecenas felis velit, fermentum vitae sodales nec, cursus ut tortor. In est risus, ornare non purus quis, ultrices dignissim est. Suspendisse lobortis ante nec sem hendrerit fringilla. Sed id viverra arcu. Duis imperdiet eleifend auctor. Donec ac ante interdum, interdum eros quis, sodales libero.', 5, 2, '2017-03-27'),
(46, 'Letest transfers and picks', 'public/images/pozadina.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices quam sed tortor facilisis iaculis. Vivamus imperdiet risus eu tortor condimentum, feugiat rhoncus purus viverra. Nulla gravida eget nibh et sagittis. In hac habitasse platea dictumst. Nulla ornare diam ut leo lobortis condimentum. Duis sodales leo sed ullamcorper dignissim. Mauris at egestas nisi. Nunc quam sem, dignissim sed posuere a, condimentum id libero. Praesent vitae tincidunt dui. Maecenas felis velit, fermentum vitae sodales nec, cursus ut tortor. In est risus, ornare non purus quis, ultrices dignissim est. Suspendisse lobortis ante nec sem hendrerit fringilla. Sed id viverra arcu. Duis imperdiet eleifend auctor. Donec ac ante interdum, interdum eros quis, sodales libero.', 3, 3, '2017-03-28'),
(47, 'Chesse cake recepie', 'public/images/sl2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices quam sed tortor facilisis iaculis. Vivamus imperdiet risus eu tortor condimentum, feugiat rhoncus purus viverra. Nulla gravida eget nibh et sagittis. In hac habitasse platea', 5, 5, '2017-03-29'),
(61, 'Power Ranger movie', 'public/images/PR_Logo_(Disney_Era).jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at congue dui. Mauris fringilla mollis ipsum quis aliquet. Sed lobortis, arcu a vulputate consequat, tortor arcu pretium enim, ut rutrum justo arcu nec ipsum. Pellentesque feugiat blandit turpis eu consectetur. In at lacus egestas, venenatis orci sed, fringilla tortor. Praesent scelerisque diam non congue blandit. Praesent a libero pharetra, porttitor turpis at, porttitor risus. Sed elementum semper tristique. Nam rhoncus sit amet neque accumsan sollicitudin. Duis ac nisl in dui fermentum scelerisque. Nullam sit amet viverra est. Suspendisse congue congue orci nec imperdiet.', 2, 2, '2017-03-29'),
(62, 'Superman movie', 'public/images/Superman1.jpg', 'Look! Up in the sky! Itâ€™s a bird! Itâ€™s a plane! Itâ€™sâ€¦Well, you know how it ends, donâ€™t you? Itâ€™s a sentence so iconic, there are probably kids shouting it in Swahili as you read this.', 2, 3, '2017-03-29'),
(63, 'Matrix Movie', 'public/images/Xmatrix.png', '1. The film started as a comic book.\r\n\r\nFilmmakers Lana (then known as Larry) and Andy Wachowski originally conceived the storyline for The Matrix as a comic. They had both previously written comic books for Marvel.\r\n\r\n2. The unnamed city you see in The Matrix is Sydney, Australia.\r\n\r\nThe production shot the entire filmâ€”both interior sets and exteriorsâ€”in Australia for tax purposes, significantly lowering the filmâ€™s budget. However, all the street names are taken from locations in Chicago, where the Wachowskis grew up.', 2, 8, '2017-03-30'),
(64, 'Manchester Junited won', 'public/images/sp-mancester-junajted.jpg', '\r\nvest\r\n0\r\nManÄester slavi â€“ IbrahimoviÄ‡ potpisuje novi ugovor\r\n\r\npre 23 sata | mozzartsport.com\r\n\r\nâ€žNikada ne ostavljam posao nedovrÅ¡enimâ€œ, poruÄio Å¡vedski napadaÄ\r\nTweet\r\nVeliÄina slova A A A\r\n\r\nFudbaler ManÄester junajteda Zlatan IbrahimoviÄ‡ potvrdio je da pregovara s klubom o novom ugovoru i istakao da nikada ne ostavlja posao nedovrÅ¡enim\r\nâ€žVideÄ‡emo Å¡ta Ä‡e se desiti, pregovaramo. Imam opciju da ostanem joÅ¡ godinu dana, videÄ‡emo, ima joÅ¡ vremena. Ja odradim Å¡ta treba i odem. Kada odem nema Å¾albi, tako ja to radim. Nikad ne ostavljam posao nedovrÅ¡enimâ€œ, rekao je IbrahimoviÄ‡ za engleske medije.', 3, 3, '2017-03-30'),
(65, 'New Armani Line', 'public/images/armani.jpg', 'The son of a shipping manager, Armani grew up in a small town outside of Milan. It was a difficult time in Italian history. Giorgio and his two siblingsâ€”older brother Sergio and younger sister Rosannaâ€”experienced the hardships of World War II firsthand. Some of his friends were killed during Allied bombings. "We were poor and life was tough," he explained to Harper\'s Bazaar. "The cinema in Milan was a refugeâ€”a palace of dreamsâ€”and the movie stars seemed so glamorous. I fell in love with the idealized beauty of Hollywood stars."', 4, 2, '2017-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_desc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_desc`) VALUES
(1, 'News', 'Latest news on the web'),
(2, 'Movies', 'Blog about movies and critics'),
(3, 'Sport', 'Lates news about sport and transfers'),
(4, 'Fashion', 'Look combination of clothes'),
(5, 'Recepies', 'New and fresh recepies');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment_name` varchar(55) NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_name`, `comment`, `blog_id`, `login_id`) VALUES
(22, 'Marko Boskovic', 'Read comment', 4, 3),
(23, 'Elena', 'Comment on news', 1, 4),
(24, 'Elena', 'comment sport', 3, 4),
(25, 'Jelena', 'test', 1, 2),
(26, 'Marko Boskovic', 'test', 2, 3),
(28, 'Admin', 'test', 3, 3),
(29, 'Marko', 'Fashion comment', 5, 3),
(30, 'Admin', 'Transfer comment', 46, 3),
(31, 'Elena', 'Super barsa !!', 46, 4),
(32, 'Marko', 'Best movie ever !!!', 62, 1),
(33, 'Vlada', 'Exellent movie.', 63, 8),
(34, 'Jelena', 'I love Armani', 65, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_name`, `contact_email`, `contact_message`) VALUES
(1, 'Marko', 'dbos1504@gmail.com', '[test poruka]'),
(2, 'Elena', 'elena@gmail.com', '[test poruka]');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password2` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `log_type` int(11) NOT NULL DEFAULT '0',
  `email` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `password2`, `log_type`, `email`) VALUES
(1, 'Marko', 'Marko', '', 0, 'mare@gmail.com'),
(2, 'Jelena', 'Jelena', '', 0, 'jeca@gmail.com'),
(3, 'MarkoBoskovic', 'MarkoBoskovic', '', 3, ''),
(4, 'Elena', 'Elena', '', 0, ''),
(5, 'Milos', 'Milos', 'Milos', 0, 'milos@gmail.com'),
(8, 'Vlada', 'Vlada', 'Vlada', 0, 'vlada@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `id` int(11) NOT NULL,
  `nav_name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nav_path` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `nav_name`, `nav_path`) VALUES
(1, 'Home', 'index.php'),
(2, 'Blog', '?page=blog'),
(3, 'Gallery', '?page=gallery'),
(4, 'Contact', '?page=contact');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
