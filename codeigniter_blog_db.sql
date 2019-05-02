-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 01:42 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `user_id` int(10) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `user_id`, `image_path`) VALUES
(3, 'ARTICLE ON GLOBAL WARMING', 'Global warming or climate change has become a worldwide concern. It is gradually developing into an unprecedented environmental crisis evident in melting glaciers, changing weather patterns, rising sea levels, floods, cyclones and droughts. Global warming\r\n\r\nThere is a crying need to raise awareness about global warming if we have to save the world from disaster. Here we are providing you some useful articles on global warming under various categories according to varying words limits. You can choose any of them as per your need:', '2019-02-10 14:36:35.892372', 1, 'http://localhost/codeigniter2/uploads/Global-Warming-and-Climate-Change-1.jpg'),
(4, 'ARTICLE ON WOMEN EMPOWERMENT', 'Women empowerment implies the ability in women to take decisions with regard to their life and work and giving equal rights to them in all spheres like: personal, social, economic, political, legal and so on.\r\n\r\nWomen empowerment is the much-talked about issue today. Women are increasingly getting empowered to decide the course of their life and professions and realize their fullest potential.', '2019-02-10 02:41:52.000000', 1, 'http://localhost/codeigniter2/uploads/W_MEN_(1).png'),
(5, 'ARTICLE ON POLLUTION', 'Pollution contributes to the harmful environment that results in adverse effect on living beings. It is one of the major concern areas for the whole world. It is a global issue involving the United Nations, governments, voluntary institutions and the media.\r\n \r\nStudents need to be made fully aware of the adverse effects of rising pollution. Also, being the future generation, they can play a vital role in controlling pollution if they are familiar with this threat to the survival of mankind.\r\n', '2019-02-10 02:45:50.000000', 1, 'http://localhost/codeigniter2/uploads/1280-459141-535008457.png'),
(6, 'ARTICLE ON SAVE WATER', 'Earth is the only known planet in this universe where life is possible only because of the availability of water and oxygen. Water is most important necessity of life for all the living beings on the earth. Without water no one can exist even for a day. We also know that there is very less percentage of clean water means drinking water available on the earth. So, we should not waste clean water and save it for future generations.\r\n\r\n\r\n \r\nWe should change our bad habits into positive ones and spread awareness among people about the importance of clean water. We should promote the less use and saving of clean water to maintain the continuity of life on the earth.', '2019-02-10 02:48:19.000000', 1, 'http://localhost/codeigniter2/uploads/maxresdefault.jpg'),
(7, 'ARTICLE ON SWACHH BHARAT ABHIYAN', 'According to a survey in 2011, over 26 million people in India defecated in the open. Around 60 percent of Indians did not have access to safe and private toilets. Such overwhelming majority of those without access to sanitation facilities posed a formidable obstacle in the development of the nation.\r\n\r\n\r\n \r\nIn this backdrop, Prime Minister Narendra Modi started the Swachh Bharat Abhiyan or Clean India Mission to address the challenges of water, sanitation, and hygiene on October 2nd, 2014 at Rajghat in New Delhi. This flagship programme of the Union government aims to realize the dream of a Clean India by October 02, 2019, the 150th birth anniversary of Mahatma Gandhi.', '2019-02-10 02:49:46.000000', 1, 'http://localhost/codeigniter2/uploads/swach-bharat-abhiyan-1-638.jpg'),
(8, 'ARTICLE ON CHILD LABOUR', 'Child labour takes place when children are forced to work at an age when they are expected to work, study and enjoy their phase of innocence. It implies lost or deprived childhood that leads to exploitation of children in various forms: mental, physical, social, sexual and so on.\r\n\r\n\r\n \r\nThe society, voluntary organizations and law-makers have an obligation to put an end to the evil practice of child labour in India. Here we are providing you some useful articles on child labour under various categories according to varying words limits. You can choose any of them as per your need:', '2019-02-10 02:51:13.000000', 1, 'http://localhost/codeigniter2/uploads/child_labour_PTI_3x2.jpg'),
(9, 'ARTICLE ON HEALTH AND FITNESS', 'Health and fitness is the key to a long, active and enjoyable life. It is correctly stated that Health is the actual Wealth that a person can retain. Teachers assign this topic to their students to enhance their knowledge about staying healthy and fit, and create awareness among others as well. It also results in the development of a healthy lifestyle for children.\r\n\r\n\r\n \r\nStudents need to realize the importance of staying healthy and fit. Also, being the future generation, they can play a vital role in creating awareness and maintaining a stable health regime.', '2019-02-10 02:52:50.000000', 1, 'http://localhost/codeigniter2/uploads/6777968_orig.jpg'),
(10, 'ARTICLE ON FARMERS SUICIDES IN INDIA', 'Farmers committing suicide can be a truly embarrassing situation for any society. The issues compelling the farmers to commit suicide are required to be paid attention immediately, as the farmers toil tirelessly to produce grain for us without which we can’t survive. In recent times the statistics have depicted an alarming rate of the incidents of farmers committing suicide in India which has become a matter of grave concern. If we fail to give timely attention to this growing issue, the situation may get even worse and the nation will have to pay very grave socio-economic costs.', '2019-02-10 02:55:03.000000', 1, 'http://localhost/codeigniter2/uploads/farmers-suicides-in-ndia.jpg'),
(11, 'article title 1', 'This is the test article body.', '2019-03-18 23:37:54.000000', 1, 'http://localhost/codeigniter2/uploads/92561d1ba31f9fe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `uname`, `pass`, `created_at`) VALUES
(1, 'pawan', 'pawan', '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
