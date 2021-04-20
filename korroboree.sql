-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 08:53 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `korroboree`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(252) NOT NULL,
  `activity` varchar(999) DEFAULT NULL,
  `topic_id` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(252) NOT NULL,
  `username` varchar(999) DEFAULT NULL,
  `password` varchar(999) DEFAULT NULL,
  `user_type` varchar(999) DEFAULT NULL,
  `project` int(252) DEFAULT NULL,
  `episodes` int(252) DEFAULT NULL,
  `topics` int(252) DEFAULT NULL,
  `user_data` int(252) DEFAULT NULL,
  `file` int(252) DEFAULT NULL,
  `tracker` int(252) DEFAULT NULL,
  `error` int(252) DEFAULT NULL,
  `access` int(252) DEFAULT NULL,
  `dates` int(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `user_type`, `project`, `episodes`, `topics`, `user_data`, `file`, `tracker`, `error`, `access`, `dates`) VALUES
(1, 'admin@korroboree.com', 'passw123', 'kr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ad@5d', 'password', '5d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0gr792pdkslqg2rartmqciclpavdared', '::1', 1618469256, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436393235363b),
('1upjfids63vf6bkq4h0r8uj41b9g090j', '::1', 1618463114, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436333131343b),
('990icr6hsfljpobjuho73418m7d03svh', '::1', 1618464828, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436343832383b),
('9ncvagfemlnjvi16o9ug815n0fs9cr5d', '::1', 1618462635, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436323633353b),
('a946mjjbvk75v2jlskqnjfq6dkn24h02', '::1', 1618464438, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436343433383b),
('bv6tle232f7uf1njovd34vp8e5b8ejtg', '::1', 1618469323, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436393235363b),
('d3edmogadtbfh0qj3336lh26fvtmullm', '::1', 1618466684, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436363638343b),
('h30rluc5b254oia2fk83gvnboj0rqdqb', '::1', 1618467054, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436373035343b),
('k989fge6erbn6ntcggfcg2v2n8vuc9v5', '::1', 1618462004, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436323030343b),
('mdr6krpijsq52mtb1hp3sabolo74rq26', '::1', 1618468174, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436383137343b),
('mr0nfh6encoou3lgjv9copt3og5tf4q4', '::1', 1618463772, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436333737323b),
('nfah38e24p9224iah5b0up0qa3i3t94h', '::1', 1618465940, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436353934303b),
('otov56ga1u5itpv4j4kcrllv3m810f6i', '::1', 1618467618, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436373631383b),
('p3plrbluuqh0le5hbn45illm0bosb4qb', '::1', 1618463463, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383436333436333b);

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id` int(252) NOT NULL,
  `episode_number` varchar(999) DEFAULT NULL,
  `title` varchar(999) DEFAULT NULL,
  `month` varchar(999) DEFAULT NULL,
  `story_board` varchar(999) DEFAULT NULL,
  `dates` int(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`id`, `episode_number`, `title`, `month`, `story_board`, `dates`) VALUES
(8, '1', 'zero', 'March/29', 'journal_errors.xlsx', NULL),
(10, '3', 'new', 'March/29', '107901663_1699868590177113_967164866152851721_o.jpg', NULL),
(11, '4', 'journal 6', 'March/30', 'bitnami.css', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `moonshot_conversations`
--

CREATE TABLE `moonshot_conversations` (
  `id` int(11) NOT NULL,
  `topic_number` int(11) NOT NULL,
  `title_1` text NOT NULL,
  `title_2` text NOT NULL,
  `title_3` text NOT NULL,
  `title_4` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moonshot_conversations`
--

INSERT INTO `moonshot_conversations` (`id`, `topic_number`, `title_1`, `title_2`, `title_3`, `title_4`, `created_date`) VALUES
(1, 2, 'To multiply the productivity (10x) of every child, by supporting parents with scientific information, and tools and resources they can use. Parents will also be able to use these to enhance their own productivity.', 'To share the process and mindset of what successful people do.', 'To share the tools and resources so we can create some of the magic sauce for ourselves, and we use them to parent purposefully.', 'Through this process you will be able to implement success habits and mindsets so you may leave your own best life, and parent your children so they can live theirs.', '2021-03-18 05:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `tabl_video_journal_segment_1`
--

CREATE TABLE `tabl_video_journal_segment_1` (
  `id` int(11) NOT NULL,
  `segment_id` varchar(11) NOT NULL,
  `question_name` varchar(150) DEFAULT NULL,
  `anser_name1` varchar(150) DEFAULT NULL,
  `question_name_2` varchar(150) DEFAULT NULL,
  `anser_name` varchar(150) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabl_video_journal_segment_1`
--

INSERT INTO `tabl_video_journal_segment_1` (`id`, `segment_id`, `question_name`, `anser_name1`, `question_name_2`, `anser_name`, `created_date`) VALUES
(1, '1', 'Our brain attracts (or acts as velcro for) what kind of news?', 'Good News', 'Your child has secured an A+ in Painting while an F in Math. What is our brain most likely to tell us to do?', 'Tell us to praise the kid for getting A+ in Painting ', '2021-04-15 06:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `tabl_video_journal_segment_2`
--

CREATE TABLE `tabl_video_journal_segment_2` (
  `id` int(11) NOT NULL,
  `segment_id` int(20) NOT NULL,
  `question_name` varchar(255) NOT NULL,
  `anser_name1` varchar(255) NOT NULL,
  `question_name_2` varchar(150) NOT NULL,
  `anser_name` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabl_video_journal_segment_2`
--

INSERT INTO `tabl_video_journal_segment_2` (`id`, `segment_id`, `question_name`, `anser_name1`, `question_name_2`, `anser_name`, `created_date`) VALUES
(1, 2, '0', '0', 'Imagine that your child is melancholic all the time. What would you do to change his/her general nature?', 'on', '2021-04-12 05:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(252) NOT NULL,
  `episode` varchar(999) DEFAULT NULL,
  `title` varchar(999) DEFAULT NULL,
  `topic_number` varchar(999) DEFAULT NULL,
  `month` varchar(999) DEFAULT NULL,
  `dates` int(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `episode`, `title`, `topic_number`, `month`, `dates`) VALUES
(2, '1', 'Moonshot Conversations Episode 1: Foundation Session', '1', 'March/25', NULL),
(3, '2', 'Some of our ‘Whys’ at Moonshot Conversations are:', '2', NULL, NULL),
(4, '3', 'What is ‘My’ powerful why of attending this Moonshot conversation?', '3', NULL, NULL),
(5, '4', 'List some of the ways you can assist your children towards finding their purpose or finding their ‘Why’.\r\n', '4', NULL, NULL),
(6, '5', 'What is ‘My’ powerful why of attending this Moonshot conversation?What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', '5', NULL, NULL),
(7, '6', 'What is something you have been seeing, thinking or doing ‘just because’ as part of a status quo way of seeing, thinking or doing that you can change with a contrarian mindset?', '6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topics_6`
--

CREATE TABLE `topics_6` (
  `id` int(11) NOT NULL,
  `topic_number` int(11) NOT NULL,
  `topics_1` text NOT NULL,
  `topics_2` text NOT NULL,
  `topics_3` text NOT NULL,
  `topics_4` text NOT NULL,
  `topics_5` text NOT NULL,
  `topics_6` text NOT NULL,
  `cretae_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_6`
--

INSERT INTO `topics_6` (`id`, `topic_number`, `topics_1`, `topics_2`, `topics_3`, `topics_4`, `topics_5`, `topics_6`, `cretae_date`) VALUES
(1, 6, 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', '2021-03-19 04:27:29'),
(2, 6, 'redirect', 'redirect', 'redirect', 'redirect', 'redirect', 'redirect', '2021-03-19 04:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `topics_data_list`
--

CREATE TABLE `topics_data_list` (
  `id` int(11) NOT NULL,
  `topic_number` int(11) NOT NULL,
  `topic_name` text NOT NULL,
  `topic_info` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_data_list`
--

INSERT INTO `topics_data_list` (`id`, `topic_number`, `topic_name`, `topic_info`, `create_date`) VALUES
(1, 3, ' To know more about my child', '', '2021-03-19 03:56:08'),
(2, 3, 'other', 'cdacdacd', '2021-03-26 04:29:48'),
(3, 0, 'other', 'scdacd', '2021-03-29 05:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `topics_data_list_1`
--

CREATE TABLE `topics_data_list_1` (
  `id` int(11) NOT NULL,
  `topic_number` int(11) NOT NULL,
  `topics_name` text NOT NULL,
  `topic_type` varchar(255) NOT NULL,
  `topics_name_1` text NOT NULL,
  `topics_name_2` text NOT NULL,
  `topics_name_3` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_data_list_1`
--

INSERT INTO `topics_data_list_1` (`id`, `topic_number`, `topics_name`, `topic_type`, `topics_name_1`, `topics_name_2`, `topics_name_3`, `create_date`) VALUES
(1, 4, 'topic_5_insert', '', 'List some of the ways you can assist your children towards finding their purpose or finding their ‘Why’.', 'List some of the ways you can assist your children towards finding their purpose or finding their ‘Why’.', 'List some of the ways you can assist your children towards finding their purpose or finding their ‘Why’.', '2021-03-19 03:56:46'),
(2, 4, 'dcacadvda', '', 'dvdsv', 'dvsv', 'dvda', '2021-03-24 05:08:25'),
(3, 4, 'testing', '', 'testing', 'testing', 'testing', '2021-03-26 04:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `topics_data_list_2`
--

CREATE TABLE `topics_data_list_2` (
  `id` int(11) NOT NULL,
  `topic_number` int(11) NOT NULL,
  `topics_name_1` text DEFAULT NULL,
  `topics_name_2` text DEFAULT NULL,
  `topics_name_3` text DEFAULT NULL,
  `topics_name_4` text DEFAULT NULL,
  `topics_name_5` text DEFAULT NULL,
  `topics_name_6` text DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_data_list_2`
--

INSERT INTO `topics_data_list_2` (`id`, `topic_number`, `topics_name_1`, `topics_name_2`, `topics_name_3`, `topics_name_4`, `topics_name_5`, `topics_name_6`, `created_date`) VALUES
(1, 5, 'required', 'required', 'required', 'required', 'requiredqwr3wt43', '', '2021-03-19 04:20:09'),
(2, 5, 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', '', '2021-03-19 04:20:30'),
(22, 0, 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', NULL, '2021-03-30 06:15:40'),
(23, 0, 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', NULL, '2021-03-30 06:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `topic_7`
--

CREATE TABLE `topic_7` (
  `id` int(11) NOT NULL,
  `kite1` text NOT NULL,
  `kite2` text DEFAULT NULL,
  `kite3` text DEFAULT NULL,
  `kite4` text DEFAULT NULL,
  `kite5` text DEFAULT NULL,
  `dates` varchar(333) DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topic_7`
--

INSERT INTO `topic_7` (`id`, `kite1`, `kite2`, `kite3`, `kite4`, `kite5`, `dates`) VALUES
(1, '', '67', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topic_info`
--

CREATE TABLE `topic_info` (
  `id` int(252) NOT NULL,
  `title` varchar(999) DEFAULT NULL,
  `about` varchar(999) DEFAULT NULL,
  `status` varchar(999) DEFAULT NULL,
  `dates` int(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `topic_number` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `topic_number`, `link`, `video`, `created_date`) VALUES
(1, 1, 'https://www.youtube.com/embed/6HI-N1rYGz4', 'Simon_Sinek.mp4', '2021-03-19 02:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `video_episode`
--

CREATE TABLE `video_episode` (
  `id` int(11) NOT NULL,
  `episode` varchar(333) DEFAULT NULL,
  `story_board` varchar(333) DEFAULT NULL,
  `episode_number` varchar(333) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video_episode_1`
--

CREATE TABLE `video_episode_1` (
  `id` int(11) NOT NULL,
  `episode` varchar(150) NOT NULL,
  `story_board` varchar(255) NOT NULL,
  `episode_number` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moonshot_conversations`
--
ALTER TABLE `moonshot_conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabl_video_journal_segment_1`
--
ALTER TABLE `tabl_video_journal_segment_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabl_video_journal_segment_2`
--
ALTER TABLE `tabl_video_journal_segment_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_6`
--
ALTER TABLE `topics_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_data_list`
--
ALTER TABLE `topics_data_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_data_list_1`
--
ALTER TABLE `topics_data_list_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_data_list_2`
--
ALTER TABLE `topics_data_list_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_7`
--
ALTER TABLE `topic_7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_info`
--
ALTER TABLE `topic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_episode_1`
--
ALTER TABLE `video_episode_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `moonshot_conversations`
--
ALTER TABLE `moonshot_conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabl_video_journal_segment_1`
--
ALTER TABLE `tabl_video_journal_segment_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabl_video_journal_segment_2`
--
ALTER TABLE `tabl_video_journal_segment_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `topics_6`
--
ALTER TABLE `topics_6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topics_data_list`
--
ALTER TABLE `topics_data_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topics_data_list_1`
--
ALTER TABLE `topics_data_list_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topics_data_list_2`
--
ALTER TABLE `topics_data_list_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `topic_info`
--
ALTER TABLE `topic_info`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_episode_1`
--
ALTER TABLE `video_episode_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
