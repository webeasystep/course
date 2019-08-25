-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2015 at 05:24 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

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
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `post_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `comment_desc` varchar(500) NOT NULL,
  `comment_author` varchar(500) NOT NULL,
  `commentTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`post_id`, `comment_id`, `comment_desc`, `comment_author`, `commentTime`) VALUES
(2, 3, 'yuppy', 'qt', '2015-08-22 12:36:50'),
(2, 4, 'nice :-)', 'qt', '2015-08-22 12:36:59'),
(2, 5, 'nice op you are great !!', 'qt', '2015-08-22 12:37:21'),
(6, 7, 'nice :P', 'qt', '2015-08-22 12:41:19'),
(6, 8, 'cuteee :P', 'qt', '2015-08-22 12:55:13'),
(6, 9, 'Very good line The college has well-established Central Learning resource centers like Central library, Central Computer Centre, Entrepreneurship Development Cell, Continuing Education Centre and Physical Education Section. The college also has a very active Training & Placement section. ', 'qt', '2015-08-22 13:05:11'),
(6, 10, 'My comment', 'qt', '2015-08-22 13:14:45'),
(6, 11, '          Really appriciable _/\\_', 'rtkasodariya', '2015-08-22 13:17:38'),
(0, 12, 'dklvn', 'qt', '2015-08-22 13:34:42'),
(6, 13, '          test comment', 'rtkasodariya', '2015-08-23 08:10:05'),
(6, 14, '          opps', 'rtkasodariya', '2015-08-23 16:30:09'),
(6, 15, '          I am witness', 'qt', '2015-08-30 13:36:24'),
(7, 16, '    Thanks', 'qt', '2015-09-02 08:00:32'),
(7, 17, '          Nice Explanation :-)', 'rtkasodariya', '2015-09-02 08:01:13'),
(2, 18, '          Very well... Good start..', 'rtkasodariya', '2015-09-02 08:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `time`) VALUES
(1, ' rtkasodariya', 'kasodariyarajan@gmail.com', 'dfvd', '2015-09-06 20:03:55'),
(2, ' spy_007', 'yashgolechha@ymail.com', 'popat', '2015-09-06 20:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_desc` varchar(10000) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_tag` varchar(40) NOT NULL,
  `post_author` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_desc`, `post_time`, `post_tag`, `post_author`) VALUES
(2, 'op', 'op', '2015-08-12 09:51:46', 'dp', 'sai'),
(5, 'Hello', '<p>Recently I made one&nbsp;one blog expcode.wordpress.com. <img alt="enlightened" src="http://localhost/Blog/ckeditor/plugins/smiley/images/lightbulb.png" style="height:23px; width:23px" title="enlightened" /></p>\r\n\r\n<p>Follow and contribute . <img alt="blush" src="http://localhost/Blog/ckeditor/plugins/smiley/images/embarrassed_smile.png" style="height:23px; width:23px" title="blush" /></p>\r\n\r\n<p>Thanks</p>\r\n', '2015-08-21 14:24:13', 'blog', 'expcode'),
(6, 'ACM NIT Surat', '<p>Sardar Vallabhbhai National Institute Of Technology, Surat is one of the 17 Regional Engineering Colleges that were established as joint venture of the Government of India and the Government of Gujarat. It was established in June 1961 with facilities to run Bachelor&#39;s Degree Programmes in Civil, Electrical and Mechanical Engineering disciplines. It is now changed to National Institute of Technology along with other RECs.&nbsp;<br />\r\n<br />\r\nThe college has now been given the status of Deemed University.&nbsp;<br />\r\n<br />\r\nThe college has well-established Central Learning resource centers like Central library, Central Computer Centre, Entrepreneurship Development Cell, Continuing Education Centre and Physical Education Section. The college also has a very active Training &amp; Placement section.&nbsp;<br />\r\n<br />\r\nThe college has a campus of its own, spread over 100 hectares of land on the Surat-Dumas Highway. The college is progressing with the construction of the buildings of the academic sector. The college is having in all seven hostels, six for boys &amp; one for girls students, accommodating 990 students. The total of 191 units of staff quarters for different categories have been built on the campus. The college has a Canteen, a Students Store, a Dispensary, a Guest House, a Post Office, a branch of the State Bank of India and play ground for some of the major games, viz. Football, Basketball, Volleyball and Cricket.</p>\r\n', '2015-08-22 09:55:25', 'acm', 'qt'),
(7, 'GIVEN', '<p><strong>Problem Statement :&nbsp;</strong><br />\r\nGiven an array of stock prices for each day. We need to find out maximum profit that can be earned by one transaction (Buy and sell only one time).<br />\r\n<strong>Example :&nbsp;</strong><br />\r\nTake an example Stock Prices :&nbsp;<strong>100 &ndash; &nbsp;80 &ndash; 120 &ndash; 130 &ndash; 70 &nbsp;&ndash; 60 &nbsp;&ndash; &nbsp;100 &nbsp;&ndash; &nbsp;125.</strong><br />\r\nSo Buy stock at Rs.&nbsp;<strong>60</strong>&nbsp;and sell it at&nbsp;<strong>125</strong>. Maximum profit is&nbsp;<strong>65</strong>.</p>\r\n\r\n<p><strong>1. Naive Approach :&nbsp;</strong><br />\r\nNaive approach tooks time complexity O(n<sup>2</sup>). In this method buy stock at&nbsp;<strong>i</strong>&nbsp;th day and then check for all&nbsp;<strong>i</strong>&nbsp;to&nbsp;<strong>n</strong>&nbsp;day for maximum stock value.</p>\r\n\r\n<p><strong>Algorithm :</strong></p>\r\n\r\n<p>Function : FindMaximumProfit( StockPrices , N )</p>\r\n\r\n<ol>\r\n	<li>max_profit = -&prop;</li>\r\n	<li>for i = 1 to N</li>\r\n	<li>&nbsp; &nbsp; &nbsp;for j=i to N</li>\r\n	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;max_profit = max( max_profit , a[ j ] &nbsp;&ndash; a[ i ] )</li>\r\n</ol>\r\n\r\n<p><strong>2. Dynamic programming Approach.</strong></p>\r\n\r\n<p style="text-align: center;"><a href="https://expcode.files.wordpress.com/2015/08/stock-buy-and-sell1.png"><img alt="Stock - Buy and Sell" src="https://expcode.files.wordpress.com/2015/08/stock-buy-and-sell1.png?w=620" /></a><br />\r\nThink about each selling possibility. We must sell between day&nbsp;<strong>1</strong>&nbsp;to day&nbsp;<strong>N</strong>. So if we are selling stock at&nbsp;<strong>i</strong>th day we must have bought it when it has lowest prize between days&nbsp;<strong>1</strong>&nbsp;to&nbsp;<strong>i</strong>&nbsp;. Let&rsquo;s think about 3rd day. So assume we are Selling our stock on 3rd day. So we must have bought it between day 1 to day 3 whenever price was lowest. Here lowest is 80 from day 1 to 3. So if we sell Stock on day 3 we can get maximim profit 40.</p>\r\n\r\n<p>This can be stated as below.<br />\r\nMaximim profit if we sell stock on ith day.<br />\r\nMax_profit = StockPrice on&nbsp;<strong>i</strong><sup>th</sup>&nbsp;day(selling price) &ndash; &nbsp;minimum price between day 1 to day i (buying price)</p>\r\n\r\n<p><strong>Algorithm :&nbsp;</strong></p>\r\n\r\n<ol>\r\n	<li>min_buying_price =&nbsp;&prop;</li>\r\n	<li>max_profit &nbsp;= &ndash;&nbsp;&prop;</li>\r\n	<li>for i= 1 to N</li>\r\n	<li>&nbsp; &nbsp; &nbsp;min_buying_price = min( min_buying_price , a[ i ] )</li>\r\n	<li>&nbsp; &nbsp; &nbsp;benifit_if_sell_today &nbsp;= &nbsp;a[ i ] &ndash; min_buying_price</li>\r\n	<li>&nbsp; &nbsp; &nbsp;max_benifit = max(benifit_if_sell_today , max_benifit &nbsp;)</li>\r\n</ol>\r\n\r\n<p><strong>Implementation :&nbsp;</strong></p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n\r\n			<p>2</p>\r\n\r\n			<p>3</p>\r\n\r\n			<p>4</p>\r\n\r\n			<p>5</p>\r\n\r\n			<p>6</p>\r\n\r\n			<p>7</p>\r\n\r\n			<p>8</p>\r\n\r\n			<p>9</p>\r\n\r\n			<p>10</p>\r\n\r\n			<p>11</p>\r\n\r\n			<p>12</p>\r\n\r\n			<p>13</p>\r\n\r\n			<p>14</p>\r\n			</td>\r\n			<td>\r\n			<p><code>int</code> <code>findMaximumProfit(</code><code>int</code> <code>a[] , </code><code>int</code> <code>n) {</code></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>int</code> <code>MIN=INT_MAX;</code></p>\r\n\r\n			<p><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>int</code> <code>benifit , max_benifit=INT_MIN;</code></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>for</code><code>(</code><code>int</code> <code>i=0;i</code></p>\r\n\r\n			<p><code><code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code>MIN = min(MIN , a[i]);</code></code></p>\r\n\r\n			<p><code><code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code>benifit=a[i] - MIN;</code></code></p>\r\n\r\n			<p><code><code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code>max_benifit=max(benifit , max_benifit);</code></code></p>\r\n\r\n			<p><code>&nbsp;</code></p>\r\n\r\n			<p><code><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>}</code></code></p>\r\n\r\n			<p><code>&nbsp;</code></p>\r\n\r\n			<p><code><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>return</code> <code>max_benifit;</code></code></p>\r\n\r\n			<p><code><code>}</code></code></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2015-09-06 15:08:35', 'DP', 'qt'),
(16, 'qt1', '<p>qt2</p>\r\n', '2015-09-06 13:44:27', 'qt3', 'qt');

-- --------------------------------------------------------

--
-- Table structure for table `posts_buffer`
--

CREATE TABLE IF NOT EXISTS `posts_buffer` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_desc` varchar(5000) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_tag` varchar(20) NOT NULL,
  `post_author` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_type` varchar(50) NOT NULL DEFAULT 'normal'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `first_name`, `password`, `email`, `created_at`, `user_type`) VALUES
(1, 'qt', 'Rajan Kasodariya', 'qt', 'qt@gmail.com', '2015-08-19 12:57:02', 'normal'),
(2, 'rtkasodariya', 'Rajan', '123', '123@gmail.com', '2015-08-12 18:00:05', 'normal'),
(5, 'expcode', 'Expert Code', 'rajan', 'expcode@gmail.com', '2015-08-21 14:01:26', 'normal'),
(6, 'admin', 'admin', 'admin', 'admin@admin.com', '2015-08-22 13:34:00', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users_buffer`
--

CREATE TABLE IF NOT EXISTS `users_buffer` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type` varchar(20) NOT NULL DEFAULT 'nornal'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE IF NOT EXISTS `user_post` (
  `post_author` varchar(40) NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_likes` int(11) NOT NULL DEFAULT '0',
  `post_dislikes` int(11) NOT NULL,
  `post_comments` int(11) NOT NULL DEFAULT '0',
  `post_views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='User and Post relation Table';

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`post_author`, `post_id`, `post_likes`, `post_dislikes`, `post_comments`, `post_views`) VALUES
('qt', 1, 4, 0, 0, 20),
('sai', 2, 0, 0, 0, 7),
('expcode', 5, 0, 0, 0, 48),
('qt', 6, 0, 0, 0, 127),
('qt', 7, 0, 0, 0, 10),
('qt', 16, 0, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `comment_id` (`comment_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_title` (`post_title`);

--
-- Indexes for table `posts_buffer`
--
ALTER TABLE `posts_buffer`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `users_buffer`
--
ALTER TABLE `users_buffer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`,`email`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `posts_buffer`
--
ALTER TABLE `posts_buffer`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users_buffer`
--
ALTER TABLE `users_buffer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
