-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 11:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aluminitrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `name` varchar(75) NOT NULL,
  `alumni_id` varchar(255) NOT NULL,
  `rno` varchar(20) NOT NULL,
  `password` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `stat1` varchar(15) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `college` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `stat2` varchar(20) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `verified` int(5) NOT NULL,
  `pass_rec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`name`, `alumni_id`, `rno`, `password`, `mobile`, `address`, `dob`, `email`, `stat1`, `sex`, `college`, `year`, `stat2`, `des`, `Course`, `verified`, `pass_rec`) VALUES
('PRIYANSHU GOEL', '', '027', 'e4cd965813bcdd73e3e9f07727b034dc', '9219892506', 'Vishal book depot,Ghanta Ghar,Railway Road,Meerut', '2020-01-02', 'princegoel1999pg@gmail.com', 'Married', 'Male', 'Ann Institute of Engineering', '2018', 'Startup', 'SXJWCIQWNCJN ENJWNEJFVNJVNFJDNVJSFNVJKFNKJFNJVN JNJSFNJJDFJBFFDBJDJJSJSJCSNCSJSCSCSCJNSCJSCJNSCSCSSCSCBSCNBSC', '', 0, 'NULL'),
('Priyank Agrawal', '6365214', '0928CS191044', '25d55ad283aa400af464c76d713c07ad', '7047898094', 'jkjkk', '2003-03-30', 'agrawalpriyank68@gmail.com', 'Married', 'Male', 'IPS COLLEGE OF TECHNOLOGY AND MANAGEMENT', '2017', 'Studies', 'hnhnhnhnh', 'Btech', 1, '0'),
('Somya Saxena', '5214', '1001298', '7f1fbb2d9ee5f9139950c873fd9320fe', '7047898094', 'jkjkk', '2022-04-08', 'somya@gmail.com', 'Married', 'Male', 'IPS COLLEGE OF TECHNOLOGY AND MANAGEMENT', '2016', 'Studies', 'I am a web developer', 'M.Tech', 0, '0'),
('PRINCE GOEL', '', '1402712', 'e4cd965813bcdd73e3e9f07727b034dc', '6398216904', 'GALI NO 7, SHIV SHAKTI NAGAR, MEERUT', '8952-06-05', 'goelpriyanshu99@gmail.com', 'Unmarried', 'Male', 'Govt College of Arts & Commerce, Panjim', '2015', 'Startup', 'wfqejrh2erijhgufvwefbvwurbyubtrvfuwbeewbfhebyfvyfbvbdwbdchedbc hd cnd chkwfbvwhbchvwdbhcgwfvgbfcwnc san jqhbhebvhvbvvvvv', '', 1, 'NULL'),
('rishabh tyagi', '', '16441761', 'e4cd965813bcdd73e3e9f07727b034dc', '4567859066', 'thrsyd', '2004-01-17', 'princegoel1999pg@gmail.com', 'Married', 'Male', 'Govt College of Arts & Commerce, Panjim', '2017', 'Startup', 'ghjkl', '', 0, '0'),
('pranshat singh', '', '17261417', 'e4cd965813bcdd73e3e9f07727b034dc', '2345678978', 'farsgthyujbk', '2006-01-02', 'princegoel1999pg@gmail.com', 'Married', 'Male', 'Govt College of Arts & Commerce, Panjim', '2015', 'Studies', 'gvkhbj.knm/', '', 0, '0'),
('Aastha garg', '', '18027002', 'e4cd965813bcdd73e3e9f07727b034dc', '6778945028', 'HNO34. bansal colony,arya nagar bareilllyar', '2013-05-15', 'ava@gmail.coom', 'Unmarried', 'Female', 'Govt Engineering College, Goa', '2011', 'Job', 'uhfalgijkl', '', 0, '0'),
('RAHUL', '', '1802713074115', 'e4cd965813bcdd73e3e9f07727b034dc', '0639816904', 'DELHI', '4556-03-12', 'goelpriyanshu99@gmail.com', 'Unmarried', 'Male', 'Goa college of Management', '2015', 'Studies', 'fdwhvufhuwfvhuwfvhfuwvhfuvhwufvhjvnjenwjkevnjkfnvjfvjvnjkfvbhjfvbhfvbhfvbhfvbhjfvbhjvbwhjvbfhvbwhfvbhfvbhwbhwfvbhfvbwhbhvwbjwhvbwv', '', 1, '0'),
('PRIYANSHU GOEL', '', '18027130754', 'e4cd965813bcdd73e3e9f07727b034dc', '0638216904', 'GALI NO 7, SHIV SHAKTI NAGAR, MEERUT', '2001-01-01', 'chiraggoel2001@gmail.com', 'Married', 'Male', 'Goa college of Management', '2004', 'Studies', 'sdbhdbjdcjdbcncbcbsdjhcbc fbqhbfhbhqefbhbjhqqcns dcn nd cq chd bdchbdc  ebehrbhwbefvhbhedbsvhdvhjdvbjhvb', '', 2147483647, '0'),
('adarsh gupta', '', '18271108', '8181796dcd3eab93f6db7419b37fb7a5', '4567890098', 'farsgthyu', '2019-09-06', 'fin@gmail.com', 'Married', 'Male', 'Govt College of Arts & Commerce, Panjim', '2018', 'Studies', '3rthrtykgv', '', 0, '0'),
('nikhil gupta', '', '18271209', '95cb3384b299aff883328196a4134758', '4567867890', 'gabh', '2019-06-13', 'fit5yn@gmail.com', 'Unmarried', 'Male', 'Govt College of Arts & Commerce, Panjim', '2017', 'Startup', '3467890', '', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `chattb`
--

CREATE TABLE `chattb` (
  `chatid` int(20) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `chatbody` text NOT NULL,
  `chatdate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chattb`
--

INSERT INTO `chattb` (`chatid`, `userid`, `chatbody`, `chatdate`) VALUES
(8, 'asdf', 'dffdfffv', '19-01-2020 23:40'),
(9, 'asdf', 'gvvgvvggvvvgv', '19-01-2020 23:40'),
(10, 'chirag', 'hi', '20-01-2020 00:44'),
(11, 'asdf', 'gggyhbb', '20-01-2020 09:21'),
(12, 'goel995', 'jdjd\r\n', '20-01-2020 12:18'),
(13, 'goel995', 'harsh', '20-01-2020 12:19'),
(14, 'goel995', 'ddddd', '20-01-2020 14:37'),
(15, 'somyaa', 'm mcn c\r\n', '27-02-2022 00:48'),
(16, 'somyaa', 'hjhjhjhjhjhjhj\r\n', '27-02-2022 00:49'),
(17, 'somyaa', 'bn', '27-02-2022 00:52'),
(18, 'somyaa', 'hbhjbhj', '04-03-2022 14:01'),
(19, '6365214', 'bjhjhj', '05-03-2022 15:28'),
(20, '6365214', ' vbhvhv\r\n', '05-03-2022 15:29');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `cid` int(11) NOT NULL,
  `coll_name` varchar(250) NOT NULL,
  `coll_id` varchar(255) NOT NULL,
  `coll_Email` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`cid`, `coll_name`, `coll_id`, `coll_Email`, `City`, `pass`) VALUES
(6, 'IPS COLLEGE OF TECHNOLOGY AND MANAGEMENT', 'IPSCTM@0928', 'ipsctm@gmail.com', 'Gwalior', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `colortb`
--

CREATE TABLE `colortb` (
  `colorid` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `colorbg` varchar(20) NOT NULL,
  `colortxt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colortb`
--

INSERT INTO `colortb` (`colorid`, `username`, `colorbg`, `colortxt`) VALUES
(1, 'goel995', 'orange', 'red'),
(2, 'asdf', 'red', 'peach'),
(3, 'ashish', 'skyblue', 'white');

-- --------------------------------------------------------

--
-- Table structure for table `col_alumni`
--

CREATE TABLE `col_alumni` (
  `rno` varchar(50) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(255) NOT NULL,
  `year` varchar(10) NOT NULL,
  `col_name` varchar(75) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `col_alumni`
--

INSERT INTO `col_alumni` (`rno`, `name`, `email`, `year`, `col_name`, `course`) VALUES
('0928456', 'Raj Kundra', 'mohitagrawal76660@gmail.com', '2015', '6365214', 'B.Tech'),
('0928CS191044', 'Priyank Agrawal', 'mohitagrawal76660@gmail.com', '2017', 'IPS COLLEGE OF TECHNOLOGY AND MANAGEMENT', 'Btech'),
('0928CS191045', 'Priyanka Agrawal', 'onlinecourse495@gmail.com', '2017', 'IPS COLLEGE OF TECHNOLOGY AND MANAGEMENT', 'Btech'),
('0928CS191046', 'Mayank Jha', 'mayankjha796@gmail.com', '2017', 'IPS COLLEGE OF TECHNOLOGY AND MANAGEMENT', 'Btech'),
('856473', 'Ankita Das', 'mohitagrawal76660@gmail.com', '2009', 'Agnel Institute of Technology and Design', ''),
('874214511', 'Rohit kashyap', 'mohitagrawal76660@gmail.com', '2014', 'Goa college of Management', ''),
('874596', 'Anusha Kansal', 'mohitagrawal76660@gmail.com', '2013', 'Agnel Institute of Technology and Design', ''),
('95175348', 'Devika Maurya', 'mohitagrawal76660@gmail.com', '2013', 'Agnel Institute of Technology and Design', ''),
('95486721', 'Neha Rai', 'mohitagrawal76660@gmail.com', '2013', 'Agnel Institute of Technology and Design', ''),
('9981127', 'Garvit gupta', 'mohitagrawal76660@gmail.com', '2017', 'Goa Medical College', '');

-- --------------------------------------------------------

--
-- Table structure for table `col_event`
--

CREATE TABLE `col_event` (
  `id` varchar(50) NOT NULL,
  `on_d` varchar(10) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `detail` varchar(150) NOT NULL,
  `college` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `col_event`
--

INSERT INTO `col_event` (`id`, `on_d`, `sub`, `detail`, `college`) VALUES
('001', '2020-01-22', 'Hello', 'For all alumni', 'Goa college of Management'),
('21', '2020-01-30', 'dvdfdderg', 'grgrg', 'Goa college of Management'),
('6235', '2022-03-11', 'Farewell College', 'Venue: IPS college', 'IPS COLLEGE OF TECHNOLOGY AND MANAGEMENT'),
('6238', '2022-03-18', 'Alumini Meet', 'Venue: IPS college', 'IPS COLLEGE OF TECHNOLOGY AND MANAGEMENT');

-- --------------------------------------------------------

--
-- Table structure for table `dir`
--

CREATE TABLE `dir` (
  `id` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dir`
--

INSERT INTO `dir` (`id`, `password`) VALUES
('director', '123654');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_date` varchar(20) NOT NULL,
  `id` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `detail` varchar(250) NOT NULL,
  `add_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_date`, `id`, `subject`, `detail`, `add_time`) VALUES
('2022-04-02', '6235', 'Fresher  party', 'To talk with juniorsok', '2022-03-02 13:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `updated by` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company`, `location`, `title`, `description`, `salary`, `updated by`, `link`) VALUES
(1, 'TCS', 'Banglore', 'web developer', 'full time employee', '5lac', '6365214', 'jjjbjfjjf');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `subject`, `detail`, `time`) VALUES
('003', 'Fresher', 'kkokokokkkokokok', '2022-03-04 20:58:27'),
('2525', 'Registration', 'Registration for fresh semester will be starting from 20th January', '2020-01-20 08:58:33'),
('30214', 'meeting', 'presentation', '2020-01-18 13:48:38'),
('6523', 'Time Pass', 'webinar h', '2022-03-02 11:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `otp_expire`
--

CREATE TABLE `otp_expire` (
  `user_email` varchar(255) NOT NULL,
  `otp` int(11) NOT NULL,
  `expire` int(11) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_expire`
--

INSERT INTO `otp_expire` (`user_email`, `otp`, `expire`, `dt`) VALUES
('agrawalpriyank68@gmail.com', 682203, 0, '2022-03-09 11:50:19'),
('agrawalpriyank68@gmail.com', 478358, 0, '2022-03-09 11:50:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `chattb`
--
ALTER TABLE `chattb`
  ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `colortb`
--
ALTER TABLE `colortb`
  ADD PRIMARY KEY (`colorid`);

--
-- Indexes for table `col_alumni`
--
ALTER TABLE `col_alumni`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `col_event`
--
ALTER TABLE `col_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dir`
--
ALTER TABLE `dir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chattb`
--
ALTER TABLE `chattb`
  MODIFY `chatid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `colortb`
--
ALTER TABLE `colortb`
  MODIFY `colorid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
