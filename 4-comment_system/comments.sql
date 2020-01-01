
-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comment_date` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `comment_date`, `message`) VALUES
(1, 1, '2019-08-07 18:37:47', 'aaaa');


--
-- Table structure for table `users`
--

CREATE TABLE `users` (
 `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `username` varchar(40) NOT NULL,
 `firstname` varchar(40) NOT NULL,
 `password` varchar(40) NOT NULL,
 `emailid` varchar(40) NOT NULL,
 `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 `usertype` varchar(50) NOT NULL DEFAULT 'normal'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `password`, `emailid`, `createdon`, `usertype`) VALUES
(5, 'fakhr', 'ahmed', 'e10adc3949ba59abbe56e057f20f883e', 'expcode@gmail.com', '2019-09-10 01:10:45', 'normal'),
(6, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', '2019-09-10 01:08:17', 'admin');
