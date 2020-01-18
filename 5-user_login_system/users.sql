CREATE TABLE `users` (
                         `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                         `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
                         `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
                         `activated` tinyint(1)  NOT NULL,
                         `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

insert into `users`(id,username,password,activated) values (1,'user','e10adc3949ba59abbe56e057f20f883e',1);
