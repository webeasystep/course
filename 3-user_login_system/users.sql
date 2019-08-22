CREATE TABLE `user_account` (
  `account_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_login` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `account_password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `user_name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `user_email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci

insert  into `user_account`(`account_id`,`account_login`,`account_password`,`user_name`,`user_email`,`last_login`) values (1,'user','ee11cbb19052e40b07aac0ca060c23ee ','soumitra','contact@roytuts.com','2015-06-13 07:36:07');
